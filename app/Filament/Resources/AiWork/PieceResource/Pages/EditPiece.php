<?php

namespace App\Filament\Resources\AiWork\PieceResource\Pages;

use App\Filament\Resources\AiWork\PieceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPiece extends EditRecord
{
    protected static string $resource = PieceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
