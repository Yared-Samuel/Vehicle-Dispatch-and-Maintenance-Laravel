<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CostStoreRequest extends FormRequest
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
            'spare_cost_desc'=>['required'],
            'spare_cost'=>['required'],
            'spare_qty'=>['required'],
            'mech_cost_desc'=>['required'],
            'mech_cost'=>['required'],
            'other_cost_desc'=>['required'],
            'other_cost'=>['required'],
            'ref_no'=>['required'],
            'requester_id'=>['required'],
            
        ];
    }
}
