<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use App\Helpers\UtilHelper;

class AdminRequest extends FormRequest
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
                'name' => 'required|string|max:150',
                'mobile' => 'required|numeric|digits:10|gt:0|regex:/(05)[0-9]{8}/',
                'email' => 'nullable|string|email|max:50',
                'password' => 'required|string|min:6|max:12|confirmed',
                'role' => 'required|exists:roles,id',
                'image' => 'nullable|file|image|mimes:jpeg,png,gif,jpg,svg|max:500',
                'alias' => 'nullable|string|max:150',
              ];
            }
            case 'DELETE':
            case 'PUT':
            {
              return [
                'name' => 'required|string|max:150',
                'mobile' => 'required|numeric|digits:10|gt:0|regex:/(05)[0-9]{8}/',
                'email' => 'nullable|string|email|max:50',
                'password' => 'nullable|string|min:6|max:12|confirmed',
                'role' => 'required|exists:roles,id',
                'image' => 'nullable|file|image|mimes:jpeg,png,gif,jpg,svg|max:500',
                'alias' => 'nullable|string|max:150',
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
          'name' => __('words.name'),
          'email' => __('words.email'),
          'password' => __('words.password'),
          'mobile' => __('words.mobile'),
          'image' => __('words.image'),
          'alias' => __('project.alias'),
          'role' => __('admin.dashboard.roles'),
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
