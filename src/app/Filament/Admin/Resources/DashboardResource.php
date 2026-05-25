<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\DashboardResource\Pages;
use App\Models\Dashboard;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class DashboardResource extends Resource
{
    protected static ?string $model = Dashboard::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Dashboard';

    protected static ?string $navigationGroup = 'Content';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make('key')
                    ->default('home'),
                TextInput::make('meta_title')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                Textarea::make('meta_description')
                    ->required()
                    ->rows(3)
                    ->columnSpanFull(),
                TextInput::make('sapaan')
                    ->required()
                    ->maxLength(255),
                Textarea::make('skill_singkat')
                    ->label('Hero Title')
                    ->required()
                    ->rows(3)
                    ->columnSpanFull(),
                TextInput::make('hero_scroll_text')
                    ->required()
                    ->maxLength(255),
                TextInput::make('about_label')
                    ->required()
                    ->maxLength(255),
                TextInput::make('about_me')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                Textarea::make('deskripsi_about_me')
                    ->required()
                    ->rows(5)
                    ->columnSpanFull(),
                Textarea::make('about_paragraph_two')
                    ->required()
                    ->rows(4)
                    ->columnSpanFull(),
                TextInput::make('nama_tech_stack')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                TextInput::make('tech_stack_intro')
                    ->label('Tech Stack Section Label')
                    ->required()
                    ->maxLength(255),
                Repeater::make('tech_stack_groups')
                    ->label('Tech Stack Groups')
                    ->columnSpanFull()
                    ->defaultItems(1)
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->maxLength(255),
                        Repeater::make('skills')
                            ->label('Skills')
                            ->defaultItems(1)
                            ->columnSpanFull()
                            ->schema([
                                TextInput::make('name')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('icon')
                                    ->required()
                                    ->url()
                                    ->maxLength(255),
                                TextInput::make('alt')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('icon_class')
                                    ->maxLength(255),
                            ])
                            ->columns(2),
                    ])
                    ->columns(1),
                Textarea::make('tech_stack_cta_text')
                    ->required()
                    ->rows(3)
                    ->columnSpanFull(),
                TextInput::make('tech_stack_cta_button_label')
                    ->required()
                    ->maxLength(255),
                TextInput::make('tech_stack_cta_button_url')
                    ->required()
                    ->maxLength(255),
                TextInput::make('img_src_link')
                    ->label('Profile Image Path')
                    ->required()
                    ->maxLength(255),
                TextInput::make('profile_image_alt')
                    ->required()
                    ->maxLength(255),
                TextInput::make('contact_title')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                Textarea::make('contact_description')
                    ->required()
                    ->rows(3)
                    ->columnSpanFull(),
                TextInput::make('contact_direct_label')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                TextInput::make('contact_whatsapp_label')
                    ->required()
                    ->maxLength(255),
                TextInput::make('contact_whatsapp_url')
                    ->required()
                    ->url()
                    ->maxLength(255),
                TextInput::make('contact_email_label')
                    ->required()
                    ->maxLength(255),
                TextInput::make('contact_email_url')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('sapaan')
                    ->searchable()
                    ->wrap(),
                TextColumn::make('about_me')
                    ->limit(60)
                    ->wrap(),
                TextColumn::make('nama_tech_stack')
                    ->limit(60)
                    ->wrap(),
                TextColumn::make('updated_at')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
            ])
            ->filters([
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([]);
    }

    public static function getRelations(): array
    {
        return [
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDashboards::route('/'),
            'edit' => Pages\EditDashboard::route('/{record}/edit'),
        ];
    }
}
