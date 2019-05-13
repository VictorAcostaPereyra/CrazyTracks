<?php

namespace Curso;

use Illuminate\Database\Eloquent\Model;

class Audio extends Model
{
    protected $fillable = ['name','type','extension','user_id'];
    protected $table = 'audios';
}
