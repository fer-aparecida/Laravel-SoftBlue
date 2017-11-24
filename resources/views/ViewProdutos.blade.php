<html>
    <head>
        <title>Produtos</title>        
    </head>
    <body>
        <H1>Produtos</H1>
        <ul>
            @foreach($produtos as $produto)
            <li>{{$produto}}</li>
            @endforeach
        </ul>            
    </body>
</html>

