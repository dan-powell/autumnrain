<?php

namespace App\Filament\Resources\AiWork;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use App\Filament\Resources\AiWork\ThemeResource\RelationManagers\PiecesRelationManager;
use App\Filament\Resources\AiWork\ThemeResource\Pages\ListThemes;
use App\Filament\Resources\AiWork\ThemeResource\Pages\CreateTheme;
use App\Filament\Resources\AiWork\ThemeResource\Pages\EditTheme;
use App\Filament\Clusters\AiWork;
use App\Filament\Resources\AiWork\ThemeResource\Pages;
use App\Filament\Resources\AiWork\ThemeResource\RelationManagers;
use App\Models\AiWork\Theme;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use OpenSpout\Reader\XLSX\Manager\WorkbookRelationshipsManager;

class ThemeResource extends Resource
{
    protected static ?string $cluster = AiWork::class;

    protected static ?string $model = Theme::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                MarkdownEditor::make('description')
                    ->disableToolbarButtons(['attachFiles'])
                    ->maxLength(65535)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
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
            ->defaultSort('created_at', 'DESC');
    }

    public static function getRelations(): array
    {
        return [
            PiecesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListThemes::route('/'),
            'create' => CreateTheme::route('/create'),
            'edit' => EditTheme::route('/{record}/edit'),
        ];
    }
}
