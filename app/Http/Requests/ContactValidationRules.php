<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

// @link https://github.com/anhskohbo/no-captcha
// @link https://dev.to/secmohammed/laravel-form-request-tips-tricks-2p12

class ContactValidationRules extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //return Auth::guest();
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
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'content' => 'required|string|max:1000',
            'g-recaptcha-response' => 'required|captcha'
        ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.required' => 'L\':attribute est obligatoire',
            'subject.required'  => 'Un sujet est requis',
            'content.required'  => 'Le contenu ne doit pas être vide',
            'g-recaptcha-response.required' => "Veuillez indiquer que vous n'êtes pas un robot.",
            'g-recaptcha-response.captcha' => "Erreur CAPTCHA! réessayez plus tard.",
            // 'g-recaptcha-response.required' => 'Please verify that you are not a robot.',
            // 'g-recaptcha-response.captcha' => 'Captcha error! try again later or contact site admin.',
        ];
    }

    /*protected function failedValidation(Validator $validator)
    {
        return \Redirect::to($this->getRedirectUrl() . "#contact")->with([
            'errors' => $this->errorBag
        ]);
    }*/
}
