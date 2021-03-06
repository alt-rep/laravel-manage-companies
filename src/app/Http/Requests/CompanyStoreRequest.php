<?php
declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyStoreRequest extends FormRequest
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
            'name'    => 'required|max:50',
            'email'   => 'nullable|max:50|email',
            'logo'    => 'nullable|max:1024|mimes:jpg,png|dimensions:min_width=100,min_height=100',
            'website' => 'nullable|max:50|url',
        ];
    }
}
