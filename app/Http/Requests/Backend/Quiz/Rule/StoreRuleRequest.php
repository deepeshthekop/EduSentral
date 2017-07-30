<?php

namespace App\Http\Requests\Backend\Quiz\Rule;

use App\Http\Requests\Request;
use Illuminate\Validation\Rule;


class StoreRuleRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->hasRole('executive');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required','max:191',Rule::unique('rules')],
            'content' => 'required',
        ];
    }
}
