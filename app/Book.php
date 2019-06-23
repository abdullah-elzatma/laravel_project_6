<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $table ='book';
    public $primaryKey='id';
    public $fillable=['image','name','ISPN'];
    public $dates=['created_at','updated_at'];
}
