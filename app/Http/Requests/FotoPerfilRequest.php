<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class FotoPerfilRequest extends Request
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
            'photo' => 'required|mimes:jpg,jpeg,png,bmp', //validação backend (OBS: para o mime funcionar, habilitar o extension=php_fileinfo.dll no php.ini)
        ];
    }
}
