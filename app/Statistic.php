<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    protected $fillable = ['headers', 'user_agent', 'ip','country','url', 'browser'];
}
