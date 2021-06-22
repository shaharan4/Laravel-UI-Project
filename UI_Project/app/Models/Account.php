<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Account as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Account extends Model
{
    use HasFactory;
}
