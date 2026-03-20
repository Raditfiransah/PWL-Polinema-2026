<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->maxLength(255)
                    ->label('Nama')
                    ->required()
                    ->placeholder('Masukan Nama'),
                TextInput::make('email')
                    ->maxLength(255)
                    ->label('Email')
                    ->required()
                    ->placeholder('Masukan Email')
                    ->unique(ignoreRecord: true),
                TextInput::make('password')
                    ->password()
                    ->confirmed()
                    ->label('Password')
                    ->required()
                    ->placeholder('Masukan Password')
                    ->minLength(6),
            ]);
    }
}
