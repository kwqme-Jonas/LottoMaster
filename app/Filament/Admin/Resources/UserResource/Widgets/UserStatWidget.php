<?php

namespace App\Filament\Admin\Resources\UserResource\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;


class UserStatWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            stat::make('Total Users', User::count()),
            stat::make('Total Admins', User::where('role', User::ROLE_ADMIN)->count()),
            stat::make('Total Lotomasters', User::where('role', User::ROLE_LOTOMASTER)->count()),
            stat::make('Total Stakers', User::where('role', User::ROLE_USER)->count()),
        ];
    }
}
