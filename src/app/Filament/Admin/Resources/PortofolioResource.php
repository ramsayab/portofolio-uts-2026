<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PortofolioResource\Pages;
use App\Models\Portofolio;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PortofolioResource extends Resource
{
    protected static ?string $model = Portofolio::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    protected static ?string $navigationLabel = 'Portofolio';

    protected static ?string $navigationGroup = 'Content';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_project')
                    ->required()
                    ->maxLength(255),
                Textarea::make('deskripsi_project')
                    ->required()
                    ->rows(6)
                    ->columnSpanFull(),
                TextInput::make('link_github')
                    ->label('Link GitHub')
                    ->url()
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_project')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('deskripsi_project')
                    ->limit(80)
                    ->wrap(),
                TextColumn::make('link_github')
                    ->label('GitHub')
                    ->url(fn (Portofolio $record): string => $record->link_github, shouldOpenInNewTab: true)
                    ->limit(40),
                TextColumn::make('updated_at')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
            ])
            ->filters([
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPortofolios::route('/'),
            'create' => Pages\CreatePortofolio::route('/create'),
            'edit' => Pages\EditPortofolio::route('/{record}/edit'),
        ];
    }
}
