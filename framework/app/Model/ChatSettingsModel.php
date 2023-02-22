<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChatSettingsModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'chat_settings';
    protected $guarded = [];
}
