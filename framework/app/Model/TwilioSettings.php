<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TwilioSettings extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'name', 'value',
    ];
    protected $table = "twilio_settings";

}
