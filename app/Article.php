<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Article extends Model{

    protected $table = 'articles';

    public $timestamps = true;

    protected $fillable = ['content','name'];

    protected function getDateFormat()
    {
        return time();
    }

    protected function asDateTime($value)
    {
        return $value;
    }
}