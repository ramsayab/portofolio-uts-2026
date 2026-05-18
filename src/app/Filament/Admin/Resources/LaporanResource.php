<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\LaporanResource\Pages;
use App\Models\Laporan;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class LaporanResource extends Resource
{
    protected static ?string $model = Laporan::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationLabel = 'Laporan';

    protected static ?string $navigationGroup = 'Content';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('judul')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                Textarea::make('deskripsi_singkat')
                    ->rows(5)
                    ->columnSpanFull(),
                Textarea::make('analisis_masalah')
                    ->rows(10)
                    ->columnSpanFull(),
                Textarea::make('kebutuhan_sistem')
                    ->rows(10)
                    ->columnSpanFull(),
                Textarea::make('arsitektur_tech_stack')
                    ->rows(10)
                    ->columnSpanFull(),
                TextInput::make('diagram_erd')
                    ->label('Path Diagram ERD')
                    ->helperText('Contoh: assets/erd.png')
                    ->maxLength(255),
                TextInput::make('diagram_flowchart')
                    ->label('Path Diagram Flowchart')
                    ->helperText('Contoh: assets/flowchart.png')
                    ->maxLength(255),
                TextInput::make('diagram_usecase')
                    ->label('Path Diagram Use Case')
                    ->helperText('Contoh: assets/usecase.png')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul')
                    ->searchable()
                    ->sortable()
                    ->wrap(),
                TextColumn::make('deskripsi_singkat')
                    ->limit(80)
                    ->wrap(),
                TextColumn::make('diagram_erd')
                    ->label('ERD')
                    ->limit(30),
                TextColumn::make('diagram_flowchart')
                    ->label('Flowchart')
                    ->limit(30),
                TextColumn::make('diagram_usecase')
                    ->label('Use Case')
                    ->limit(30),
                TextColumn::make('updated_at')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
            ])
            ->filters([
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLaporans::route('/'),
            'create' => Pages\CreateLaporan::route('/create'),
            'edit' => Pages\EditLaporan::route('/{record}/edit'),
        ];
    }
}
