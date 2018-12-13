<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Werehouse extends Model
{
    protected $primaryKey = 'werehouse_id';
    protected $fillable = [
      'werehouse_name'
    ];
}
