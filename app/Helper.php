<?php

namespace App;

use App\Models\User;

class Helper
{
    public static function isAdmin()
    {
        return auth()->user()->role === User::ADMIN_ROLE;
    }

    public static function isCompany()
    {
        return auth()->user()->role === User::COMPANY_ROLE;
    }

    public static function isManager()
    {
        return auth()->user()->role === User::MANAGER_ROLE;
    }

    public static function isInspector()
    {
        return auth()->user()->role === User::INSPECTOR_ROLE;
    }
}
