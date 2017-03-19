<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Message extends Model{

    protected $table = 'messages';

    public $timestamps = true;

    protected $fillable = ['name','messages','color'];

    protected function getDateFormat()
    {
        return time();
    }

    protected function asDateTime($value)
    {
       return $value;
    }
}