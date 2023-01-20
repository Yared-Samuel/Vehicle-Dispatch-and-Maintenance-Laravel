<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestStoreRequest extends FormRequest
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
            'request_date'=>['required'],
            'request_by'=>['required'],
            'vcl_id'=>['required'],
            'mtn_type'=>['required'],
            'description'=>['required'],
            // 'status'=>['nullable'],
            'start_date'=>['nullable'],
            'end_date'=>['nullable'],
            'kilometer'=>['nullable'],
        ];
    }
}
