<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use  HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    //$fillableに指定したカラムのみ、create()やfill()、update()で値が代入されます。
    protected $fillable = [
        'name',
        'email',
        'birthday',
        'iscool'
    ];
}
