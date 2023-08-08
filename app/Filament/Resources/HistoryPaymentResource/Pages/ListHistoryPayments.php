<?php

namespace App\Filament\Resources\HistoryPaymentResource\Pages;

use App\Filament\Resources\HistoryPaymentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\View\View;

class ListHistoryPayments extends ListRecords
{
    protected static string $resource = HistoryPaymentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getFooter(): ?View
    {
        return view('filament.pages.settings.custom-header');
    }
}
