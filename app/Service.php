<?php

namespace App;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Service extends Model
{
    use Sluggable;

    protected $fillable = ['title', 'price'];

    public function prices()
    {
        return $this->hasMany(Price::class);
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public static function add($fields)
    {
        $service = new static;
        $service->fill($fields);
        $service->save();

        return $service;
    }

    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }

    public function remove()
    {
        $this->removeIcon();
        $this->removeImage();
        $this->delete();
    }

    public function removeImage()
    {
        if($this->image != null){
            Storage::delete('uploads/'.$this->image);
        }
    }

    public function uploadImage($image)
    {
        if($image == null) {return;}

        $this->removeImage();
        $imageName = str_random(10).'.'.$image->extension();
        $image->storeAs('uploads', $imageName);
        $this->image = $imageName;
        $this->save();
    }

    public function getImage()
    {
        if($this->image == null){
            return;
        }

        return '/uploads/'.$this->image;
    }

    public function removeIcon()
    {
        if($this->icon != null){
            Storage::delete('uploads/'.$this->icon);
        }
    }

    public function uploadIcon($icon)
    {
        if($icon == null) {return;}

        $this->removeIcon();
        $iconName = str_random(10).'.'.$icon->extension();
        $icon->storeAs('uploads', $iconName);
        $this->icon = $iconName;
        $this->save();
    }

    public function getIcon()
    {
        if($this->icon == null){
            return;
        }

        return '/uploads/'.$this->icon;
    }

    public function getId($slug)
    {       
        if($this->slug == $slug){
            return $this->id;
        }
    }
}
