<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}} | Contacto</title>
</head>
<body>
    <h1>mi pagina de Contacto</h1>
    <form action="/contacto" method="POST" autocomplete="off">
        @method('PUT')
        @csrf
        <div>
            <label for="">Nombre</label>
            <input type="text" name="name" placeholder="Name">
        </div>

        <div>
            <label for="">Correo electronico</label>
            <input type="email" name="email" placeholder="Correo electronico">
        </div>

        <div>
            <label for="">Telefono</label>
            <input type="text" name="phone" placeholder="Telefono" maxlength="9">
        </div>

        <div>
            <label for="">Consulta</label>
            <textarea name="consulta" placeholder="Consulta"></textarea>
        </div>
        <div>
            <button>Enviar</button>
        </div>
    </form>
</body>
</html>
