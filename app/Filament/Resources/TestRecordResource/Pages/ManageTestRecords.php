<?php

namespace App\Filament\Resources\TestRecordResource\Pages;

use App\Filament\Resources\TestRecordResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageTestRecords extends ManageRecords
{
    protected static string $resource = TestRecordResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
