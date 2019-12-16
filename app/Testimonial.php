<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    //
    protected $table = 'testimonials';
    protected $fillable = ['name','email','image','address','testimonial'];
}
