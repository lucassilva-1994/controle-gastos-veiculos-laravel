<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UsersController extends Controller {
    public function index() {
        return view("users.index");
    }

    public function new() {
        return view("users.new");
    }
    public function auth(Request $request){
        $request->validate(
                ["user"=>"required","password" =>"required"],
                ["user.required" => "Usuário obrigatório.","password.required" => "Senha obrigatória."]);
        $credentials = ["user" => $request->user,"password"=> $request->password];
        if(Auth::attempt($credentials)){
            $user = User::where(["user"=>$request->user])->first();
            //Criando sessão após a autenticação.
            session()->put(["user" => $user->user, "id_user" =>$user->id]);
            return to_route("user.index")->with("success","Usuário autenticado com sucesso.");
        }
        return to_route("user.index")->with("error", "Falha na autenticação.");
    }
    //Cadastrando novo usuário
    public function create(UserRequest $request) {
        $user = $request->all();
        $user["password"] = bcrypt($request->cpassword);
        $user["token"] = $request->_token;
        $createuser = User::create($user);
        if ($createuser) {
            $mail = ["name" => $request->name,"user" => $request->user,"token" => $request->_token];
            //Enviando e-mail para ativação da conta
            Mail::send("mail.activeuser",$mail, function($email) use ($request){
                $email->from(env("MAIL_USERNAME"), env("MAIL_FROM_NAME"));
                $email->to($request->email);
                $email->subject("Gestão de veículos - Cadastro");
            });
            return to_route("user.index")->with("success", "Conta criada com sucesso, link de ativação foi enviado no seu e-mail.");
        }
    }
    //Validando ou ativando o usuário.
    public function validateUser($token){
        $user = User::where(["token" => $token,"status"=>"INATIVE"])->first();
        //Mudando status de inativo (Valor padrão) para ativo.
        if($user){
            $user->token = ""; $user->status = "ACTIVE"; $user->save();
           return to_route("user.index")->with("success","Conta ativada com sucesso.");
        }
        return to_route("user.index")->with("error", "Link para ativação indisponível.");
    }
}
