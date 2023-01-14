<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MaintenanceStoreRequest extends FormRequest
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
            'start_date'=>['nullable'],
            'end_date'=>['nullable'],
            'kilometer'=>['nullable'],
            'mech_work_desc'=>['nullable'],
            'mech_cost'=>['nullable'],
            'spare_desc'=>['nullable'],
            'sparepart_id'=>['nullable'],
            'request_id'=>['required'],
        ];
    }
}
