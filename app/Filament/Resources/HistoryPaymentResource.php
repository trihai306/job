<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HistoryPaymentResource\Pages;
use App\Filament\Resources\HistoryPaymentResource\RelationManagers;
use App\Models\HistoryPayment;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HistoryPaymentResource extends Resource
{
    protected static ?string $model = HistoryPayment::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->noSearchResultsMessage('Not data')
                    ->options($options = function () {
                        return User::all()->pluck('name', 'id');
                    })
                    ->placeholder('Select a user'),
                Forms\Components\TextInput::make('money')
                    ->required()
                    ->numeric(),
                Forms\Components\Select::make('type')
                    ->noSearchResultsMessage('Not data')
                    ->options($options = function () {
                        return [
                            '0' => 'withdraw',
                            '1' => 'deposit',
                        ];
                    })
                    ->placeholder('Select a type'),
                Forms\Components\Select::make('status')
                    ->noSearchResultsMessage('Not data')
                    ->options($options = function () {
                        return [
                            '0' => 'accept',
                            '1' => 'pending',
                        ];
                    })
                    ->placeholder('Select a status'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('money')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('type')
                    ->searchable()
                    ->sortable()
                    ->formatStateUsing(function (HistoryPayment $history) {
                        return $history->type == 1 ? 'withdraw' : 'deposit';
                    }),
                Tables\Columns\TextColumn::make('status')
                    ->searchable()
                    ->sortable()
                    ->formatStateUsing(function (HistoryPayment $history) {
                        return $history->status == 0 ? 'accept' : 'pending';
                    }),
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
                    Tables\Actions\Action::make('Approve')
                        ->action(function (HistoryPayment $history) {
                            $user = $history->user;
                            $money = $history->money;
                            if ($history->type == 1) {
                                $user->update(
                                    [
                                        'money' => $user->money - $money,
                                        'freezing_money' => $user->freezing_money + $money
                                    ]
                                );
                            } else {
                                $user->update(
                                    [
                                        'money' => $user->money + $money,
                                        'freezing_money' => $user->freezing_money - $money
                                    ]
                                );
                            }
                            $history->update(['status' => 0]);
                        })
                        ->disabled(function (HistoryPayment $history) {
                            return $history->status == 0;
                        })
                        ->requiresConfirmation()
                        ->modalHeading('Approve withdraw')
                        ->modalSubheading('Are you sure you want to approve this withdraw?')
                        ->modalButton('Yes, Approve')
                        ->icon('heroicon-o-rectangle-stack')
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHistoryPayments::route('/'),
            'create' => Pages\CreateHistoryPayment::route('/create'),
            'edit' => Pages\EditHistoryPayment::route('/{record}/edit'),
        ];
    }
}
