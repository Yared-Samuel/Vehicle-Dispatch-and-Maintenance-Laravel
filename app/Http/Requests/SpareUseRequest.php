<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SpareUseRequest extends FormRequest
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
            'use_date'=>['required'],
            'GIN_ref'=>['required'],
            'item_id'=>['required'],
            'status'=>['nullable'],
            'use_qty'=>['required'],
            'spareinv_id'=>['nullable'],
            'vcl_id'=>['required'],
            'mileage'=>['nullable'],
            'driver_id'=>['nullable'],
            'desc'=>['nullable'],
            
        ];
    }
}
