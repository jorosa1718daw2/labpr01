<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArmariRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;  // anyone can make this request right now
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'nom_armari' => 'required',
            'nom_producte' => 'required',
            'stock_inicial' => 'required',
            'stock_actual' =>'required',
            'proveedor' => 'required',
        ];
    }

}

