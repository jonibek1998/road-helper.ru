<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{

    protected $fillable = ['title', 'price'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public static function add($fields)
    {
        $price = new static;
        $price->fill($fields);
        $price->save();

        return $price;
    }

    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }

    public function setService($id)
    {
        if($id == null) {return;}

        $this->service_id = $id;
        $this->save();
    }

    public function getServiceTitle()
    {
        if($this->service_id != null){
             return $this->service->title;
        }
        return "No Services";
    }
}
