<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

 class MahasiswaRequest extends Request
{
    /**
    * Determine if the user is authorized to make this request.
    *
    *@return bool
    */
    public function authorize()
    {
    	return true;
    }
    /**
    *
    *@return array
    */
    public function rules()
    {
    	$validasi = [
    		'nama'=>'required',
    		'nim'=>'required | integer',
    		'alamat'=>'required'
    		];
    		if(this->is('mahasiswa/tambah')){
    			$validasi['password'] = 'required';
    		}
    		return $validasi;
    }
}
