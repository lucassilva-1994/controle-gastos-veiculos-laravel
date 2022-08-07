<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            "name" => "required|min:3| max:100|",
            "user" => "required| min:6 | max:30| unique:users",
            "email" => "required| max:100| unique:users| email:rfc,dns",
            "cpassword" => "required | min:8 | max:30",
            "ccpassword" => "required | min:8 | max:30|same:cpassword"
        ];
    }

    public function messages() {
        return[
            "name.required" => "O nome é obrigatório.",
            "name.min" => "O nome precisa ter pelo menos :min caracteres.",
            "name.max" => "O nome pode ter no máximo :max caracteres.",
            "user.required" => "O usuário é obrigatório.",
            "user.min" => "O usuário precisa ter pelo menos :min caracteres.",
            "user.max" => "O usuário pode ter no máximo :max caracteres.",
            "user.unique" => "Usuário já cadastrado.",
            "email.required" => "O e-mail é obrigatório.",
            "email.email" => "Informe um e-mail válido.",
            "email.max" => "O e-mail pode ter no máximo :max caracteres.",
            "email.unique" => "E-mail já cadastrado",
            "cpassword.required" => "A senha é obrigatória.",
            "cpassword.min" => "A senha deve conter no mínimo :min caracteres.",
            "cpassword.max" => "A senha pode ter no máximo :max caracteres.",
            "ccpassword.required" => "A confirmação de senha é obrigatória.",
            "ccpassword.min" => "A confirmação de senha deve conter no :min caracteres.",
            "ccpassword.max" => "A confirmação de senha pod ter no máximo :max caracteres.",
            "ccpassword.same" => "As senhas não conferem."
        ];
    }

}
