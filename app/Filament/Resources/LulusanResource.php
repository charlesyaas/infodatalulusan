<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Lulusan;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Forms\Component\Select;
use Filament\Forms\Components\Section;
use Filament\Resources\Resource;
use Filament\Forms\Components\Placeholder;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\LulusanResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\LulusanResource\RelationManagers;

class LulusanResource extends Resource
{
    protected static ?string $model = Lulusan::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationLabel = 'Data Lulusan';
    protected static ?string $modelLabel = 'Data Lulusan';
    protected static ?string $slug = 'data-lulusan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Data Siswa')
            ->description('Silahkan Isikan Data Lulusan Dengan Benar')
            ->schema([
                Forms\Components\Select::make('jenjang')
                ->label('Jenjang')
                ->options([
                    'SD' => 'SD',
                    'SMP' => 'SMP',
                    'SMA' => 'SMA',
                    'SMA' => 'SMA',
                    'SMK' => 'SMK',
                    'PAKETA' => 'PAKETA',
                    'PAKETB' => 'PAKETB',
                    'PAKETC' => 'PAKETC',
                ]),
            Forms\Components\TextInput::make('tahun_lulus')
                ->label('Tahun Lulus')

                ->required()
                ->numeric()
                ->maxLength(255),
            Forms\Components\TextInput::make('nama')
                ->label('Nama Lengkap')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('tempat_lahir')
                ->label('Tempat Lahir')
                ->required()
                ->maxLength(255),
            Forms\Components\DatePicker::make('tanggal_lahir')
                ->label('Tanggal Lahir')
                ->native(false)
                ->format('d/m/Y')
                ->required(),
            Forms\Components\TextInput::make('orang_tua')
                ->label('Nama Orang Tua')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('no_peserta_un')
                ->label('Nomor Persera UN')
                ->required()
                ->maxLength(255),
            ])->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('jenjang')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tahun_lulus')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tempat_lahir')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_lahir')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('orang_tua')
                    ->searchable(),
                Tables\Columns\TextColumn::make('no_peserta_un')
                    ->searchable(),
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
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),

            ]);

            // ->headerActions([
            //     Tables\Actions\CreateAction::make(),
            // ]);
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
            'index' => Pages\ListLulusans::route('/'),
            'create' => Pages\CreateLulusan::route('/create'),
            'edit' => Pages\EditLulusan::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
        {
            return static::getModel()::count();
        }
}
