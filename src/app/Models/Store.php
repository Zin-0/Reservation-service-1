<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'overview',
    ];

    public function getArea(){
        return optional($this->area)->area;
    }

    public function getGenre(){
        return optional($this->genre)->genre;
    }

    public function area(){
        return $this->belongsTo('App\Models\Area');
    }

    public function genre(){
        return $this->belongsTo('App\Models\Genre');
    }
}
