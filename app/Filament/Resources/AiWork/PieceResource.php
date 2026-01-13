<?php

namespace App\Filament\Resources\AiWork;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use App\Filament\Resources\AiWork\PieceResource\RelationManagers\ThemesRelationManager;
use App\Filament\Resources\AiWork\PieceResource\Pages\ListPieces;
use App\Filament\Resources\AiWork\PieceResource\Pages\CreatePiece;
use App\Filament\Resources\AiWork\PieceResource\Pages\EditPiece;
use App\Filament\Clusters\AiWork;
use App\Filament\Resources\AiWork\PieceResource\Pages;
use App\Filament\Resources\AiWork\PieceResource\RelationManagers;
use App\Models\AiWork\Piece;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Str;
use Closure;

class PieceResource extends Resource
{
    protected static ?string $cluster = AiWork::class;

    protected static ?string $model = Piece::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('id')
                    ->default(fn(): string => strtolower(Str::ulid()))
                    ->readOnly()
                    ->required(),
                Grid::make()
                    ->columns(3)
                    ->schema([
                        TextInput::make('name')
                            ->afterStateUpdated(function (Get $get, Set $set, ?string $state) {
                                if (! $get('slug_changed') && filled($state)) {
                                    $set('slug', Str::slug($state));
                                }
                            })
                            ->live(onBlur: true)
                            ->required(),
                            TextInput::make('slug')
                            ->afterStateUpdated(function (Set $set) {
                                $set('is_slug_changed_manually', true);
                            })
                            ->unique(ignoreRecord: true)
                            ->required(),
                        Hidden::make('slug_changed')
                            ->default(false)
                            ->dehydrated(false),
                        DateTimePicker::make('date')
                            ->default(now())
                            ->required(),
                    ]),
                FileUpload::make('image')
                    ->disk('project_images')
                    ->directory(fn(Get $get) => 'aiwork/' . $get('id') . '/image')
                    ->image()
                    ->required(),
                FileUpload::make('thumbnail')
                    ->disk('project_images')
                    ->directory(fn(Get $get) => 'aiwork/' . $get('id') . '/thumbnail')
                    ->image()
                    ->imageEditor(),
                MarkdownEditor::make('description')
                    ->disableToolbarButtons(['attachFiles'])
                    ->maxLength(65535)
                    ->columnSpanFull(),
                FileUpload::make('video')
                    ->disk('project_assets')
                    ->directory(fn(Get $get) => 'aiwork/' . $get('id') . '/video'),
                Section::make('Process')->schema([
                    Repeater::make('process')
                        ->schema([
                            TextInput::make('caption'),
                            MarkdownEditor::make('description')
                                ->disableToolbarButtons(['attachFiles'])
                                ->maxLength(5535)
                                ->columnSpanFull(),
                            FileUpload::make('images')
                                ->disk('project_images')
                                ->directory(fn(Get $get) => 'aiwork/' . $get('id') . '/process')
                                ->image()
                                ->multiple()
                                ->reorderable()
                                ->required()
                        ])
                        ->defaultItems(0),
                ]),
                Textarea::make('metadata')
                    ->maxLength(65535)
                    ->json()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('date')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('slug')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                ImageColumn::make('image')
                    ->disk('project_images')
                    ->toggleable(),
                ImageColumn::make('thumbnail')
                    ->disk('project_images')
                    ->toggleable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('date', 'desc');
    }

    public static function getRelations(): array
    {
        return [
            ThemesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPieces::route('/'),
            'create' => CreatePiece::route('/create'),
            'edit' => EditPiece::route('/{record}/edit'),
        ];
    }
}
