<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGasolinePriceRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id' => 'required',
            'rfc' => 'required|unique:gasoline_prices,rfc,'.$this->route('gas_datum')->id
        ];
    }
}
