<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use App\Helpers\UtilHelper;

class ItemFilterRequest extends FormRequest
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
                // 'country_id' => 'nullable|integer|exists:countries,id',
                'search_language' => 'nullable|exists:languages,locale',
                'search_type_alias' => 'nullable',
                'name' => 'nullable|string|max:150',
                'date_from' => 'nullable|string|max:10|date',
                'date_to' => 'nullable|string|max:10|date',
              ];
            }
            case 'DELETE':
            case 'PUT':
            {
              return [];
            }
            case 'PATCH':
            default:break;
        }


    }

    protected function prepareForValidation()
    {

        // $title = UtilHelper::formatNormal($this->name);
        // $this->merge([ 'title' => $title ]);

        if ($this->date_from){
            $date_from = UtilHelper::validateDate($this->date_from);
            $this->merge([ 'date_from' => ($date_from == false) ? 'x' : UtilHelper::DateToDb($date_from) ]);
        }

        if ($this->date_to){
            $date_to = UtilHelper::validateDate($this->date_to);
            $this->merge([ 'date_to' => ($date_to == false) ? 'x' : UtilHelper::DateToDb($date_to) ]);
        }

    }

    public function attributes()
    {
        return [
          'country_id' => __('words.country'),
          'name' => __('words.name'),
          'date_from' => __('words.from'),
          'date_to' => __('words.to'),
        ];
    }


}
