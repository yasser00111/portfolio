<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CertificationResource\Pages;
use App\Models\Certification;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CertificationResource extends Resource
{
    protected static ?string $model = Certification::class;
    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $navigationGroup = 'Portfolio';
    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')->required()->maxLength(200),
            Forms\Components\TextInput::make('issuer')->required()->maxLength(150),
            Forms\Components\TextInput::make('credential_id')->maxLength(100),
            Forms\Components\TextInput::make('credential_url')->url()->maxLength(255),
            Forms\Components\DatePicker::make('issued_date')->required(),
            Forms\Components\DatePicker::make('expiry_date'),
            Forms\Components\FileUpload::make('image')->image()->directory('certifications'),
            Forms\Components\TextInput::make('sort_order')->numeric()->default(0),
            Forms\Components\Toggle::make('is_active')->default(true),
        ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('issuer'),
                Tables\Columns\TextColumn::make('issued_date')->date()->sortable(),
                Tables\Columns\TextColumn::make('expiry_date')->date(),
                Tables\Columns\IconColumn::make('is_active')->boolean(),
            ])
            ->defaultSort('issued_date', 'desc')
            ->actions([Tables\Actions\EditAction::make(), Tables\Actions\DeleteAction::make()])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()])]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListCertifications::route('/'),
            'create' => Pages\CreateCertification::route('/create'),
            'edit'   => Pages\EditCertification::route('/{record}/edit'),
        ];
    }
}
