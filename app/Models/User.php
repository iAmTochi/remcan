<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Boolean;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    protected $guarded = [];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    /**
     * @return Attribute
     */
    public function name(): Attribute
    {
        return Attribute::get(fn() => Str::title("$this->surname $this->first_name"));
    }

    /**
     * @return Attribute
     */
    public function fullName(): Attribute
    {
        return Attribute::get(fn() => Str::title("$this->last_name $this->first_name $this->other_name"));
    }

    /**
     * @return Attribute
     */
    public function age(): Attribute
    {
        return Attribute::get(fn() => is_null($this->dob) ? '' : Carbon::parse($this->dob)->age);
    }

    public function category(): BelongsTo
    {
        return  $this->belongsTo(Category::class);
    }

//    public function isMale():bool
//    {
//        return $this->gender == 'M';
//    }
//
//    public function isFemale():bool
//    { 
//        return $this->gender == 'F';
//    }
}
