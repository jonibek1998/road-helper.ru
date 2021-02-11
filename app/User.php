<?php

namespace App;

use Illuminate\Support\Facades\Storage;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email',
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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function add($fields)
    {
        $user = new static;
        $user->fill($fields);
        $user->save();

        return $user;
    }

    public function edit($fields)
    {       
        $this->fill($fields);
        $this->save();
    }

    public function generatePassword($password)
    {
        if($password != null){
            $this->password = bcrypt($password);
            $this->save();
        }
    }

    public function removeAvatar()
    {
        if($this->avatar != null){
            Storage::delete('uploads/'.$this->avatar);
        }
    }

    public function uploadAvatar($avatar)
    {
        if($avatar == null) {return;}

        $this->removeAvatar();
        $filename = str_random(10).'.'.$avatar->extension();
        $avatar->storeAs('uploads', $filename);
        $this->avatar = $filename;
        $this->save();
    }

    public function getAvatar()
    {
        if($this->avatar != null){
            return '/uploads/'.$this->avatar;
        }
    }

    public function remove()
    {
        $this->removeAvatar();
        $this->delete();
    }
}
