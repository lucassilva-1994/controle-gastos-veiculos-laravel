@extends("users.layout")

@section("title", "Novo usuário")
@section("content")

<div class="row justify-content-md-center">
    <div class="col-sm-12 col-md-12 col-lg-4 bg-light border border-secondary rounded" style="margin-top: 20px; border-radius: 2;">
        <div class="mt-5">
            <h2 class="text-center mb-3">Novo usuário</h2>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{route('user.create')}}" method="POST">
                @csrf
                <div class="mt-2 input-group">
                    <label for="name" class="input-group-text"><i class="bi bi-file-earmark-person"></i></label>
                    <input type="text" name="name" placeholder="Informe seu nome"
                           value="{{old('name')}}" id="name"
                           class="form-control" autocomplete="off" autofocus=""/>
                </div>
                <div class="input-group mt-2">
                    <label for="user" class="input-group-text"><i class="bi bi-person-fill"></i></label>
                    <input type="text" name="user" placeholder="Informe usuário para acesso."
                           value="{{old('user')}}" id="user"
                           class="form-control" autocomplete="off"/>
                </div>
                <div class="mt-2 input-group">
                    <label for="email" class="input-group-text"><i class="bi bi-envelope"></i></label>
                    <input type="text" name="email" placeholder="Informe seu email"
                           value="{{old('email')}}" id="email"
                           class="form-control" autocomplete="off"/>
                </div>
                <div class="mt-2 input-group">
                    <label for="cpassword" class="input-group-text"><i class="bi bi-key-fill"></i></label>
                    <input type="password" name="cpassword" placeholder="Sua senha para acesso"
                           value="{{old('cpassword')}}" id="cpassword"
                           class="form-control"/>
                </div>
                <div class=" mt-2 input-group">
                    <label for="ccpassword" class="input-group-text"><i class="bi bi-key-fill"></i></label>
                    <input type="password" name="ccpassword" placeholder="Confirme sua senha"
                           value="{{old('ccpassword')}}" id="ccpassword"
                           class="form-control"/>
                </div>
                <div class="form-check mt-2">
                    <input class="form-check-input" type="checkbox" id="checkbox" onclick="showHiddenPasswords()">
                    <label class="form-check-label" for="checkbox">
                        Conferir senhas
                    </label>
                </div>
                <div class="btn-group btn-group-toggle d-flex mb-3 mt-3" role="group" aria-label="Large button group">
                    <input type="submit" value="Salvar" class="btn btn-success"/>
                    <a onclick="history.back();" class="btn btn-outline-danger">Voltar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection




