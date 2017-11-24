<html>
    <head>
        <title>Informações</title>        
    </head>
    <body>
        <H1>Informações</H1>
        
        <P>Olá! <b>{{$usuario}}</b></P>
        <br>
        
        <H1>Produtos</H1>
        <ul>
            @foreach($produtos as $produto)
            <li>{{$produto}}</li>
            @endforeach
        </ul>     
        <br>
    </body>
</html>


