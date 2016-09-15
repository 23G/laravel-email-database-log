<?php

namespace DylanLamers\LaravelEmailDatabaseLog\Models;

class EmailLog extends BaseModel
{
    protected $table = 'email_log';
    protected $dates = ['date'];
}