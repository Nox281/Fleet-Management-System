<?php


namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;
use Illuminate\Foundation\Http\FormRequest;

class FuelRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'vehicle_id' => 'required',
            'start_meter' => 'required',
            'cost_per_unit' => 'required|numeric',
            'date' => 'required|date|date_format:Y-m-d',
            'qty' => 'required|numeric',
            'vendor_name' => 'required_if:fuel_from,Vendor',
            'image' => 'nullable|mimes:jpg,jpeg,png',
        ];
    }
}
