<div style="font-family: monospace; font-size: 18px;">
    Olá {{ucwords($name)}}, recebemos sua solicitação para alterar senha!<br/>
    <a href="{{route('user.newpassword', $token) }}" target="_blank">Acesse aqui</a> 
    para configurar uma nova senha.<br/>
    <strong style="font-size: 20px;">Dados para acesso:</strong><br/>
    <span><strong>Usuário: </strong> {{$user}}</span>
    <span><strong>Senha: </strong> Nova senha</span>
</div>

