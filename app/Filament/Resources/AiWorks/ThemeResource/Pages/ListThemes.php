<?php

namespace App\Filament\Resources\AiWorks\ThemeResource\Pages;

use App\Filament\Resources\AiWorks\ThemeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListThemes extends ListRecords
{
    protected static string $resource = ThemeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}