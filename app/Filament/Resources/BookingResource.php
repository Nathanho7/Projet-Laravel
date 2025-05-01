<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingResource\Pages;
use App\Models\Booking;
use App\Models\Property;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('property_name')
                    ->label('Nom de la propriété')
                    ->required(),

                DatePicker::make('start_date')
                    ->label('Date de début')
                    ->required(),

                DatePicker::make('end_date')
                    ->label('Date de fin')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('property.name')->label('Propriété'),
                Tables\Columns\TextColumn::make('start_date')->label('Début'),
                Tables\Columns\TextColumn::make('end_date')->label('Fin'),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ]);
    }

    public static function mutateFormDataBeforeCreate(array $data): array
    {
        if (auth()->check()) {
            $data['user_id'] = auth()->id();
        }

        $property = Property::firstOrCreate(
            ['name' => $data['property_name']],
            [
                'description' => 'Créée automatiquement via une réservation.',
                'price_per_night' => 100.00,
            ]
        );

        $data['property_id'] = $property->id;
        unset($data['property_name']);

        return $data;
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageBookings::route('/'),
        ];
    }
}
