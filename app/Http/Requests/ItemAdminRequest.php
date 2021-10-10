<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use App\Helpers\UtilHelper;

class ItemAdminRequest extends FormRequest
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
                'title' => 'required|string|max:100',
                'description' => 'required|string|max:10000',
                'client_id' => 'required|integer|exists:clients,id',
                'country_id' => 'required|integer|exists:countries,id',
                'images' => 'array', // present|
                'images.*' => 'nullable|file|image|mimes:jpeg,png,gif,jpg,svg|max:500',
                'video' => 'nullable|file|mimes:mp4|max:20000',
                'item_period_id' => 'nullable|integer|exists:item_periods,id',
                'alias' => 'nullable|string|max:150',
              ];
            }
            case 'DELETE':
            case 'PUT':
            {
              return [
                'input_language' => 'nullable|string|exists:languages,locale',
                'title' => 'required|string|max:100',
                'description' => 'required|string|max:10000',
                'client_id' => 'required|integer|exists:clients,id',
                'country_id' => 'required|integer|exists:countries,id',
                'images' => 'array', // present|
                'images.*' => 'nullable|file|image|mimes:jpeg,png,gif,jpg,svg|max:500',
                'video' => 'nullable|file|mimes:mp4|max:20000',
                'item_period_id' => 'nullable|integer|exists:item_periods,id',
                'alias' => 'nullable|string|max:150',
              ];
            }
            case 'PATCH':
            default:break;
        }


    }

    protected function prepareForValidation()
    {

      // $title = UtilHelper::formatNormal($this->title);
      $this->merge([ 'title' => 'title' ]);
      $this->merge([ 'alias' => 'alias' ]);
      // $this->merge([ 'alias' => UtilHelper::validateAlias(UtilHelper::convertToLower($title)) ]);

    }

    public function attributes()
    {
        return [
          'client_id' => __('words.user'),
          // 'item_type_id' => __('words.type'),
          // 'title' => __('words.title'),
          'country_id' => __('project.country'),
          'item_period_id' => __('project.period'),
          // 'links' => __('project.link'),
          'description' => __('words.description'),
          'images' => __('words.images'),
          'images.*' => __('words.images'),
          'video' => __('project.video'),
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
