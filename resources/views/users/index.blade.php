@extends("users.layout")
@section("title","Index")
@section("content")
<div class="row justify-content-md-center">
    <div class="col-sm-12 col-md-12 col-lg-4 bg-light bg-gradient border border-secondary rounded" style="margin-top: 30px;">
        <div class="mt-5">
            <h2 class="text-center mb-3">Entrar</h2>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif
            <form action="" method="POST">
                @csrf
                <div class="input-group mt-2">
                    <label for="user" class="input-group-text"><i class="bi bi-person-fill"></i></label>
                    <input type="text" name="user" placeholder="Digite seu usuário"
                           value="{{old('user')}}" id="user"
                           class="form-control" autocomplete="off"/>
                </div>
                <div class="mt-2 input-group ">
                    <label for="password" class="input-group-text"><i class="bi bi-key-fill"></i></label>
                    <input type="password" name="password" placeholder="Digite sua senha"
                           value="{{old('password')}}" id="password"
                           class="form-control"/>
                </div>
                <div class="form-check mt-2">
                    <input class="form-check-input" type="checkbox" id="checkbox" onclick="showHiddenPassword()">
                    <label class="form-check-label" for="checkbox">
                        Mostrar senha
                    </label>
                </div>
                <div class="mb-3 mt-2 d-grid">
                    <button type="submit" class="btn btn-success"><i class="bi bi-check-lg"></i> Autenticar</button>
                </div>
                <div class="btn-group btn-group-toggle d-flex mb-3" role="group" aria-label="Large button group">
                    <a href="" class="btn btn-outline-primary">Cadastre-se aqui</a>
                    <a href="" class="btn btn-outline-danger">Redefinir senha</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection