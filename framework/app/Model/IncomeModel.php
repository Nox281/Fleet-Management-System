<?php


namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class IncomeModel extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'vehicle_id', 'user_id', 'amount', 'driver_amount', 'income_cat', 'mileage', 'date', 'income_id', 'tax_percent', 'tax_charge_rs',
    ];
    protected $table = "income";

    public function category()
    {
        return $this->hasOne("App\Model\IncCats", "id", "income_cat")->withTrashed();
    }

    public function vehicle()
    {
        return $this->hasOne("App\Model\VehicleModel", "id", "vehicle_id")->withTrashed();
    }
}
