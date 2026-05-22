<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExperienceResource\Pages;
use App\Models\Experience;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ExperienceResource extends Resource
{
    protected static ?string $model = Experience::class;
    protected static ?string $navigationIcon = 'heroicon-o-clock';
    protected static ?string $navigationGroup = 'Portfolio';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make()->schema([
                Forms\Components\TextInput::make('title')->required()->maxLength(200),
                Forms\Components\TextInput::make('company')->required()->maxLength(200),
                Forms\Components\TextInput::make('location')->maxLength(200),
                Forms\Components\Select::make('type')
                    ->options(['full-time' => 'Full Time', 'part-time' => 'Part Time', 'freelance' => 'Freelance', 'contract' => 'Contract'])
                    ->required(),
                Forms\Components\DatePicker::make('start_date')->required(),
                Forms\Components\DatePicker::make('end_date'),
                Forms\Components\Toggle::make('is_current')->default(false)->reactive(),
                Forms\Components\Toggle::make('is_active')->default(true),
                Forms\Components\Textarea::make('description')->required()->rows(4)->columnSpanFull(),
                Forms\Components\TagsInput::make('responsibilities')->columnSpanFull(),
                Forms\Components\TagsInput::make('tech_used')->columnSpanFull(),
                Forms\Components\TextInput::make('sort_order')->numeric()->default(0),
            ])->columns(2),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('company')->searchable(),
                Tables\Columns\BadgeColumn::make('type')
                    ->colors(['primary' => 'full-time', 'success' => 'freelance', 'warning' => 'contract']),
                Tables\Columns\TextColumn::make('start_date')->date()->sortable(),
                Tables\Columns\IconColumn::make('is_current')->boolean()->label('Current'),
                Tables\Columns\IconColumn::make('is_active')->boolean(),
            ])
            ->defaultSort('start_date', 'desc')
            ->actions([Tables\Actions\EditAction::make(), Tables\Actions\DeleteAction::make()])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()])]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListExperiences::route('/'),
            'create' => Pages\CreateExperience::route('/create'),
            'edit'   => Pages\EditExperience::route('/{record}/edit'),
        ];
    }
}
