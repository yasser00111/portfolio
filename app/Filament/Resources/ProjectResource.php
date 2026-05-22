<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;
    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $navigationGroup = 'Portfolio';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make('Project Info')->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn ($state, Forms\Set $set) => $set('slug', Str::slug($state))),

                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),

                Forms\Components\Textarea::make('description')
                    ->required()
                    ->rows(3),

                Forms\Components\RichEditor::make('long_description')
                    ->columnSpanFull(),
            ])->columns(2),

            Forms\Components\Section::make('Classification')->schema([
                Forms\Components\Select::make('category')
                    ->options([
                        'web-app'        => 'Web App',
                        'dashboard'      => 'Dashboard',
                        'monitoring'     => 'Monitoring System',
                        'backend-api'    => 'Backend API',
                        'infrastructure' => 'Infrastructure',
                    ])
                    ->required(),

                Forms\Components\Select::make('status')
                    ->options([
                        'completed'   => 'Completed',
                        'in-progress' => 'In Progress',
                        'maintenance' => 'Maintenance',
                    ])
                    ->default('completed')
                    ->required(),

                Forms\Components\TextInput::make('sort_order')
                    ->numeric()
                    ->default(0),

                Forms\Components\Toggle::make('featured')->default(false),
                Forms\Components\Toggle::make('is_active')->default(true),
            ])->columns(3),

            Forms\Components\Section::make('Links & Media')->schema([
                Forms\Components\TextInput::make('live_url')->url()->maxLength(255),
                Forms\Components\TextInput::make('github_url')->url()->maxLength(255),
                Forms\Components\FileUpload::make('thumbnail')
                    ->image()
                    ->directory('projects')
                    ->columnSpanFull(),
            ])->columns(2),

            Forms\Components\Section::make('Technologies')->schema([
                Forms\Components\TagsInput::make('tech_stack')
                    ->columnSpanFull(),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail')->circular(),
                Tables\Columns\TextColumn::make('title')->searchable()->sortable(),
                Tables\Columns\BadgeColumn::make('category')
                    ->colors([
                        'primary' => 'web-app',
                        'success' => 'dashboard',
                        'warning' => 'monitoring',
                        'danger'  => 'backend-api',
                    ]),
                Tables\Columns\BadgeColumn::make('status')
                    ->colors([
                        'success' => 'completed',
                        'warning' => 'in-progress',
                        'danger'  => 'maintenance',
                    ]),
                Tables\Columns\IconColumn::make('featured')->boolean(),
                Tables\Columns\IconColumn::make('is_active')->boolean(),
                Tables\Columns\TextColumn::make('sort_order')->sortable(),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable()->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('sort_order')
            ->filters([
                Tables\Filters\SelectFilter::make('category')
                    ->options([
                        'web-app'        => 'Web App',
                        'dashboard'      => 'Dashboard',
                        'monitoring'     => 'Monitoring',
                        'backend-api'    => 'Backend API',
                        'infrastructure' => 'Infrastructure',
                    ]),
                Tables\Filters\TernaryFilter::make('featured'),
                Tables\Filters\TernaryFilter::make('is_active'),
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

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit'   => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
