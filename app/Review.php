<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['name', 'text'];

    public static function add($fields)
    {
        $rev = new static;
        $rev->fill($fields);
        $rev->save();

        return $rev;
    }

    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
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
        $avatarName = str_random(10).'.'.$avatar->extension();
        $avatar->storeAs('uploads', $avatarName);
        $this->avatar = $avatarName;
        $this->save();
    }

    public function getAvatar()
    {
        if($this->avatar != null){
            return '/uploads/'.$this->avatar;
        }
    }

    public function allow()
    {
        $this->status = 1;
        $this->save();
    }

    public function disallow()
    {
        $this->status = 0;
        $this->save();
    }

    public function toggleStatus()
    {
        if($this->status == 0){
            return $this->allow();
        }
        return $this->disallow();
    }

    public function remove()
    {
        $this->removeAvatar();
        $this->delete();
    }

    public function getDate()
    {
        // return Carbon\Carbon::parse($this->created_at)->format('d M-Y');
        return $this->created_at->format('d M-Y');
    }
}
