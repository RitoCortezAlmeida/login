<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <style>
       .header-b{
            background-color:lightcyan
        }
        .nav-b{
            background-color:lightskyblue
        }
        .contenet-b{
            background-color:mistyrose
        }
        .footer-b{
            background-color:lightyellow
        }
    </style>
</head>
<body class="header-b"> 
    <div><h1>Formulario</h1></div>
<nav class="nav-b">
    <ul>
    <li></li>
    <li></li>
    </ul>
</nav>
<div class="contenet-b">
 <form action="{{route('iniciosesion')}}" method="POST">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="correo" class="form-label">Correo Electrónico:</label>
        <input type="text" class="form-control" name="correo" id="correo">
    </div>
    <div class="mb-3">
        <label for="contra" class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="contra" id="contra">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
 </div>

</body>
<footer class="footer-b">Rito Cortez Almeida 5F</footer>
</html>