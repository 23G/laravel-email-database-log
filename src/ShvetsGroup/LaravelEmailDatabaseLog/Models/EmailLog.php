<?php

namespace ShvetsGroup\LaravelEmailDatabaseLog\Models;

use Illuminate\Database\Eloquent\Model;

class EmailLog extends Model
{
    protected $dates = ['date'];
    protected $guarded = ['id'];
    public $timestamps = false;
}