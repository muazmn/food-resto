<?php

namespace App\Enums;

enum TableStatus: string
{
    case Pending = 'pending';
    case Available = 'available';
    case unavailable = 'unavailable';
}
