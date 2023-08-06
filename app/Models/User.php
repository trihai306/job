<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'avatar',
        'money',
        'level_id',
        'status',
        'bank_name',
        'bank_account',
        'freezing_money',
        'bank_id',
        'email_verified_at',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the user's level.
     */
    public function level()
    {
        return $this->belongsTo(Level::class, 'level_id');
    }

    // handel create user
    protected static function boot()
    {
        static::created(function ($model) {
            # get config money reward
            $config = Config::find(1);
            $model->money = $config->money_reward;
            $model->save();
        });
        parent::boot();
    }
}
