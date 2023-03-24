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
            'cost_desc'=>['nullable'],
            'cost_cash'=>['nullable'],
            'qty'=>['nullable'],
            'total_cost'=>['nullable'],
            'ref_no'=>['required'],
            'garage_name'=>['nullable'],
            'driver_id'=>['required'],
            'requester_id'=>['required'],
            'created_by'=>['required'],
        ];
    }
}
