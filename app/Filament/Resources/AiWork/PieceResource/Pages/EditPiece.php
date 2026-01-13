<?php

namespace App\Filament\Resources\AiWork\PieceResource\Pages;

use Filament\Actions\DeleteAction;
use App\Filament\Resources\AiWork\PieceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPiece extends EditRecord
{
    protected static string $resource = PieceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
