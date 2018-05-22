<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MailRequest extends Model
{
    protected $table = 'mail_requests';
    protected $fillable = ['name', 'email', 'description'];
}
