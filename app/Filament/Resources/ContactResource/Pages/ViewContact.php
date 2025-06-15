<?php

namespace App\Filament\Resources\ContactResource\Pages;

use Filament\Resources\Pages\ViewRecord;
use App\Filament\Resources\ContactResource;
use Filament\Actions;

class ViewContact extends ViewRecord
{
    protected static string $resource = ContactResource::class;

        protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('Kembali')
                ->url(static::getResource()::getUrl()) // redirect ke index
                ->icon('heroicon-o-arrow-left'),
        ];
    }
}
