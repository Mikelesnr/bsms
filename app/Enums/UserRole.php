<?php

namespace App\Enums;

enum UserRole: string
{
    case Admin = 'admin';
    case Owner = 'owner';
    case Management = 'management';
    case Staff = 'staff';
}