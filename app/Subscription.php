<?php

namespace App;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable = ['name', 'tel'];

    public static function add($fields)
    {
        $sub = new static;
        $sub->fill($fields);
        $sub->save();

        return $sub;
    }

    public function addText($text)
    {
        if($text != null){
            $this->text = $text;
            $this->save();
        }
    }

    public function removeAvatar()
    {
        if($this->photo != null){
            Storage::delete('uploads/'.$this->photo);
        }
    }

    public function uploadAvatar($photo)
    {
        if($photo == null) {return;}

        $this->removeAvatar();
        $photoName = str_random(10).'.'.$photo->extension();
        $photo->storeAs('uploads', $photoName);
        $this->photo = $photoName;
        $this->save();
    }

    public function getphoto()
    {
        if($this->photo != null){
            return '/uploads/'.$this->photo;
        }
    }public function remove()
    {
        $this->removeAvatar();
        $this->delete();
    }


}
