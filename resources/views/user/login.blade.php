<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Investment</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css')}}">
</head>
<body>
    <div class="background"></div>
    <section id="conteudo-view" class="login">
        <h1>Investment</h1>
        <h3>O nosso gerenciador de Investimento</h3>
        {!! Form::open(['route'=>'user.login', 'method'=>'POST']) !!}
        <p>Acesse o sistema</p>
        <label>
            {!! Form::text('username',null,['class'=>'input','placeholder'=>'Usuário']) !!}
        </label>
        <label>
            {!! Form::password('password',['class'=>'input','placeholder'=>'Senha']) !!}
        </label>
        {!! Form::submit('Entrar') !!}
        {!! Form::close() !!}
    </section>
</body>
</html>