<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, LogsActivity;

    /**
     * For Logging activity via spatie
     */
    // protected $table = "users";
    // //Log the changed attributes for all events
    //protected static $logAttributes = ['name', 'email'];
    // //Changing password and updated_at will not trigger an activity being logged
    // protected static $ignoreChangedAttributes = ['password', 'updated_at'];

    // //Logging only the changed attributes
    // protected static $logOnlyDirty = true;

    // //The created, updated and the deleted event will be logged automatically
    // protected static $recordEvents = ['create', 'updated', 'deleted'];
    // //Customizing the log name
    protected static $logName = 'user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class); 
    }

    public function getRedirectRoute()
    {
        
        return match ((int)$this->role_id) {
            1 => 'account/admin-dashboard',
            2 => 'account/global-user-dashboard',
            3 => 'account/broker-dashboard',
            4 => 'account/shipper-dashboard',
            5 => 'account/carrier-dashboard',         
            
        };
    }

    public function getDescriptionForEvent(string $eventName): string
    {
        return "User is {$eventName}";
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logFillable()
        ->useLogName('user');
    }

   
}