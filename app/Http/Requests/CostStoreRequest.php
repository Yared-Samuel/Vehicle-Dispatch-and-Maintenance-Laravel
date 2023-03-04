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
            'cost_date'=>['required'],
            'spare_cost_desc'=>['nullable'],
            'spare_cost'=>['nullable'],
            'spare_qty'=>['nullable'],
            'mech_cost_desc'=>['nullable'],
            'mech_cost'=>['nullable'],
            'other_cost_desc'=>['nullable'],
            'other_cost'=>['nullable'],
            'ref_no'=>['required'],
            'garage_name'=>['nullable'],
            'driver_id'=>['required'],
            'requester_id'=>['required'],
        ];
    }
}
