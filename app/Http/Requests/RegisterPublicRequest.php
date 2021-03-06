<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterPublicRequest extends FormRequest
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
          'email' => 'required|email|unique:users,email',
          'reminderemail' => 'email',
          'firstname' => 'required',
          'lastname' => 'required',
          'password' => 'required',
          'verifypassword' => 'required|same:password',
          'game' => 'required|exists:games,id',
          'team' => 'required|exists:teams,id',
      ];
    }
}
