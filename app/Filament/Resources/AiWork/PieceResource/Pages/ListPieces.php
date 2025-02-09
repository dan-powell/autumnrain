<?php

namespace App\Filament\Resources\AiWork\PieceResource\Pages;

use App\Filament\Resources\AiWork\PieceResource;
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
