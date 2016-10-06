<?php

namespace App\Domain\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'instagram_users';
    protected $primaryKey = 'id';

    public $timestamps = true;
    public $incrementing = true;

    /**
     * The attributes that are mass assignable.
     *
     * The fillable property specifies which attributes should be mass-assignable.
     * This can be set at the class or instance level.
     * The inverse of fillable is guarded, and serves as a "black-list" instead of a "white-list":
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'surname', 'email', 'password', 'activated'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'activated' => 'boolean'
    ];

}
