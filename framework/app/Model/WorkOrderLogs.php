<?php


namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class WorkOrderLogs extends Model
{

    protected $table = 'work_order_logs';
    protected $fillable = ['user_id', 'vehicle_id', 'vendor_id', 'mechanic_id', 'required_by', 'status', 'description', 'meter', 'note', 'price', 'type', 'created_on', 'parts_price'];

    public function vehicle()
    {
        return $this->belongsTo("App\Model\VehicleModel", "vehicle_id", "id")->withTrashed();
    }

    public function vendor()
    {
        return $this->belongsTo("App\Model\Vendor", "vendor_id", "id")->withTrashed();
    }

    public function mechanic()
    {
        return $this->belongsTo("App\Model\Mechanic", "mechanic_id", "id")->withTrashed();
    }
}