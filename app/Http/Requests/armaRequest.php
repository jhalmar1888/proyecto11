<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class armaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
        ];
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 9b41873977db90818e39464b925820aa0fddcfcd
