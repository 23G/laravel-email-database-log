<?php

namespace ShvetsGroup\LaravelEmailDatabaseLog\Models;

class EmailLog extends BaseModel
{
    protected $table = 'email_log';
    protected $dates = ['date'];
}