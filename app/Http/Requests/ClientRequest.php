<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use App\Helpers\UtilHelper;

class ClientRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {

        switch($this->method())
        {
            case 'GET':
            case 'POST':
            {
              return [
                'input_language' => 'nullable|string|exists:languages,locale',
                'name' => 'required|string|max:150',
                'mobile' => 'required|numeric|digits:10|gt:0|regex:/(05)[0-9]{8}/',
                'email' => 'nullable|string|email|max:50',
                 'identity_no' => 'nullable|string|max:10|unique:clients,identity_no',
                'password' => 'required|string|min:8|max:12|confirmed',
                'description' => 'nullable|string|max:4000',
                'image' => 'nullable|file|image|mimes:jpeg,png,gif,jpg,svg|max:500',
                'commerce_record' => 'nullable|file|image|mimes:jpeg,png,gif,jpg,svg|max:500',
                'alias' => 'nullable|string|max:150',
                'facebook' => 'nullable|string|max:1000',
                'tweeter' => 'nullable|string|max:1000',
                'youtube' => 'nullable|string|max:1000',
                'snapchat' => 'nullable|string|max:1000',
                'instagram' => 'nullable|string|max:1000',
              ];
            }
            case 'DELETE':
            case 'PUT':
            {
              return [
                'input_language' => 'nullable|string|exists:languages,locale',
                'name' => 'required|string|max:150',
                'mobile' => 'required|numeric|digits:10|gt:0|regex:/(05)[0-9]{8}/',
                'email' => 'nullable|string|email|max:50',
                // 'identity_no' => 'required|string|max:10|unique:clients,identity_no,'.$this->id,
                'password' => 'nullable|string|min:8|max:12|confirmed',
                'description' => 'nullable|string|max:4000',
                'image' => 'nullable|file|image|mimes:jpeg,png,gif,jpg,svg|max:500',
                'commerce_record' => 'nullable|file|image|mimes:jpeg,png,gif,jpg,svg|max:500',
                'alias' => 'nullable|string|max:150',
                'facebook' => 'nullable|string|max:1000',
                'tweeter' => 'nullable|string|max:1000',
                'youtube' => 'nullable|string|max:1000',
                'snapchat' => 'nullable|string|max:1000',
                'instagram' => 'nullable|string|max:1000',
              ];
            }
            case 'PATCH':
            default:break;
        }


    }

    protected function prepareForValidation()
    {

      $title = UtilHelper::formatNormal($this->name);
      $this->merge([ 'title' => $title ]);
      $this->merge([ 'alias' => UtilHelper::validateAlias(UtilHelper::convertToLower($title)) ]);

    }

    public function attributes()
    {
        return [
          'language' => __('words.language'),
          // 'user_type_id' => __('words.type'),
          'name' => __('words.name'),
          'email' => __('words.email'),
          'password' => __('words.password'),
          'mobile' => __('words.mobile'),
          'identity_no' => __('words.identity_no'),
          'commerce_record' => __('project.commerce_record'),
          'image' => __('words.image'),
          'alias' => __('project.alias'),
        ];
    }

    public function messages()
    {
        return [
            'mobile.regex' => __('messages.mobile_must_begain_05'),
        ];
    }

    // protected function failedValidation(Validator $validator)
    // {
    //     if ($this->expectsJson()) {
    //       $errors = (new ValidationException($validator))->errors();
    //
    //       throw new HttpResponseException(
    //         $this->responseFaild(['errors' => $errors],422)
    //       );
    //     }
    // }

}
