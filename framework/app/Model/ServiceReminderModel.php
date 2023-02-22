<?php


namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceReminderModel extends Model
{

    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = "service_reminder";
    protected $fillable = ['vehicle_id', 'service_id', 'last_date', 'last_meter', 'user_id'];

    public function services()
    {
        return $this->hasOne("App\Model\ServiceItemsModel", "id", "service_id")->withTrashed();
    }

    public function vehicle()
    {
        return $this->belongsTo("App\Model\VehicleModel", "vehicle_id", "id")->withTrashed();
    }
}
