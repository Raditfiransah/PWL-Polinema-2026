<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DateTimePicker;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Group;  

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Post Detail')
                    ->schema([
                        Group::make([
                            TextInput::make('title')
                                ->rules('required')
                                ->minLength(5) // Validasi minimal 5 karakter
                                ->validationMessages([
                                    'min' => 'Judul terlalu pendek, minimal 5 karakter.',
                                ]),

                            TextInput::make('slug')
                                ->rules('required')
                                ->minLength(3) // Validasi minimal 3 karakter
                                ->unique(ignoreRecord: true) // Unik & otomatis abaikan ID saat edit
                                ->validationMessages([
                                    'unique' => 'Slug sudah digunakan, silakan cari nama lain.',
                                    'min' => 'Slug minimal berisi 3 karakter.',
                                ]),

                            Select::make('category_id')
                                ->label('Category')
                                ->relationship("category", "name")
                                ->preload()
                                ->searchable()
                                ->rules('required'), // Category wajib dipilih

                            ColorPicker::make('color'),
                        ])->columns(2),

                        MarkdownEditor::make('content')->rules('required'),
                    ])->columnSpan(2),

                Group::make([
                    Section::make('Image Upload')
                        ->schema([
                            FileUpload::make('image')
                                ->directory('posts')
                                ->disk('public')
                                ->rules('required'), // Image wajib diupload
                        ]),

                    Section::make('Metadata')
                        ->schema([
                            TagsInput::make('tags'),
                            Checkbox::make('published'),
                            DateTimePicker::make('published_at'),
                        ])
                ])->columnSpan(1)
            ])->columns(3);
    }
}