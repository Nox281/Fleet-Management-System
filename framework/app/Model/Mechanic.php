<?php


namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mechanic extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'email', 'name', 'contact_number', 'category', 'user_id',
    ];
    protected $table = "mechanics";

}
