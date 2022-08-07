<div style="font-family: monospace; font-size: 18px;">
    Olá {{ucwords($name)}}, seu cadastro no sistema de gestão de veículos foi realizado com sucesso!<br/>
    <a href="{{ route('user.validate', $token) }}" target="_blank">Acesse aqui</a> para realizar a ativação da sua conta.<br/>
    <strong style="font-size: 20px;">Dados para acesso:</strong><br/>
    <span><strong>Usuário: </strong> {{$user}}</span>
    <span><strong>Senha: </strong> Senha definida no momento do cadastro.</span>
</div>

