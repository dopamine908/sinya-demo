<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductRequest extends FormRequest
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
            'title' => 'string',
            'brand' => Rule::in(['Acer', 'Apple', 'Asus', 'Dell']),
            'price_interval' => Rule::in(
                [
                    'discount_price_level_1',
                    'discount_price_level_2',
                    'discount_price_level_3',
                    'discount_price_level_4'
                ]
            ),

        ];
    }
}
