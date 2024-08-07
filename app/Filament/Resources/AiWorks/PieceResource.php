<?php

namespace App\Filament\Resources\AiWorks;

use App\Filament\Clusters\AiWorks;
use App\Filament\Resources\AiWorks\PieceResource\Pages;
use App\Filament\Resources\AiWorks\PieceResource\RelationManagers;
use App\Models\AiWorks\Piece;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Str;
use Closure;
use Filament\Forms\Get;
use Filament\Forms\Set;

class PieceResource extends Resource
{
    protected static ?string $cluster = AiWorks::class;

    protected static ?string $model = Piece::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('id')
                    ->default(fn(): string => strtolower(Str::ulid()))
                    ->readOnly()
                    ->required(),
                Forms\Components\Grid::make()
                    ->columns(3)
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->afterStateUpdated(function (Get $get, Set $set, ?string $state) {
                                if (! $get('slug_changed') && filled($state)) {
                                    $set('slug', Str::slug($state));
                                }
                            })
                            ->live(onBlur: true)
                            ->required(),
                            Forms\Components\TextInput::make('slug')
                            ->afterStateUpdated(function (Set $set) {
                                $set('is_slug_changed_manually', true);
                            })
                            ->unique(ignoreRecord: true)
                            ->required(),
                        Forms\Components\Hidden::make('slug_changed')
                            ->default(false)
                            ->dehydrated(false),
                        Forms\Components\Select::make('theme_id')
                            ->label('Theme')
                            ->relationship('theme')
                            ->searchable()
                            ->preload()
                            ->getOptionLabelFromRecordUsing(fn (Model $record) => "{$record->name}"),
                    ]),
                Forms\Components\FileUpload::make('image')
                    ->disk('project_images')
                    ->directory(fn(Get $get) => 'aiworks/' . $get('id') . '/image')
                    ->image()
                    ->required(),
                Forms\Components\FileUpload::make('thumbnail')
                    ->disk('project_images')
                    ->directory(fn(Get $get) => 'aiworks/' . $get('id') . '/thumbnail')
                    ->image()
                    ->imageEditor(),
                Forms\Components\MarkdownEditor::make('description')
                    ->disableToolbarButtons(['attachFiles'])
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('video')
                    ->disk('project_assets')
                    ->directory(fn(Get $get) => 'aiworks/' . $get('id') . '/video'),
                Forms\Components\Section::make('Process')->schema([
                    Forms\Components\Repeater::make('process')
                        ->schema([
                            Forms\Components\TextInput::make('caption'),
                            Forms\Components\MarkdownEditor::make('description')
                                ->disableToolbarButtons(['attachFiles'])
                                ->maxLength(5535)
                                ->columnSpanFull(),
                            Forms\Components\FileUpload::make('images')
                                ->disk('project_images')
                                ->directory(fn(Get $get) => 'aiworks/' . $get('id') . '/process')
                                ->image()
                                ->multiple()
                                ->reorderable()
                                ->required()
                        ])
                        ->defaultItems(0),
                ]),
                Forms\Components\Textarea::make('metadata')
                    ->maxLength(65535)
                    ->json()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('theme.name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\ImageColumn::make('image')
                    ->disk('project_images')
                    ->toggleable(),
                Tables\Columns\ImageColumn::make('thumbnail')
                    ->disk('project_images')
                    ->toggleable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPieces::route('/'),
            'create' => Pages\CreatePiece::route('/create'),
            'edit' => Pages\EditPiece::route('/{record}/edit'),
        ];
    }
}
