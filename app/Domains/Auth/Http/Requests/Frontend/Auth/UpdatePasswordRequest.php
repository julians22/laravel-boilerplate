<?php

namespace App\Domains\Auth\Http\Requests\Frontend\Auth;

use App\Domains\Auth\Rules\UnusedPassword;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

/**
 * Class UpdatePasswordRequest.
 */
class UpdatePasswordRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'current_password' => ['required', 'max:100'],
            'password' =>
                [
                    'max:100',
                    new UnusedPassword($this->user()),
                    Password::min(8)
                        ->mixedCase()
                        ->letters()
                        ->numbers()
                        ->symbols()
                        ->uncompromised(5),
                ]
        ];
    }
}
