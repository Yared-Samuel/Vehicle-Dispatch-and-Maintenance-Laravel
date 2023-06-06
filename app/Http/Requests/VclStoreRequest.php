<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VclStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'plate_id'=>['required'],
            'plate_code'=>['required'],
            'plate_city'=>['required'],
            'chassis_number'=>['nullable'],
            'motor_number'=>['nullable'],
            'vcl_model'=>['nullable'],
            'fuel_type'=>['required'],
            'category_name'=>['required'],
            'purchase_date'=>['nullable'],
            'manufacture_date'=>['nullable'],
            'image'=> ['nullable', 'image'],
        ];
    }
}
