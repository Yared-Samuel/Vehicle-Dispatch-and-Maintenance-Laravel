<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SpareinvRequest extends FormRequest
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
            'date_in'=>['required'],
            'serial'=>['required'],
            'spare_name'=>['nullable'],
            'spare_type'=>['required'],
            'qty_in'=>['required'],
            'unit'=>['required'],
            'price_in'=>['required'],
            
            
        ];
    }
}
