<?php

namespace App\Filament\Tenant\Resources\RoleResource\Pages;

use App\Filament\Tenant\Resources\RoleResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateRole extends CreateRecord
{
    protected static string $resource = RoleResource::class;
}
