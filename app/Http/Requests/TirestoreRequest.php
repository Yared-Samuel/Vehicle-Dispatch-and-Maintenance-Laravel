<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TirestoreRequest extends FormRequest
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
            'serial_num'=>['required'],
            'category_id'=>['required'],         
            'status'=>['required'],
            'tire_type'=>['required'],
            'tire_price'=>['required'],
            'start'=>['nullable'],
            'vcl_id'=>['nullable'],
            'driver_id'=>['nullable'],
            
        ];
    }
}
