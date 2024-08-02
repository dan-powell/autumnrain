<?php

namespace App\Filament\Resources\AiWorks\PieceResource\Pages;

use App\Filament\Resources\AiWorks\PieceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPieces extends ListRecords
{
    protected static string $resource = PieceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
