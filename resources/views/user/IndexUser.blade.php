<table>
    <tr>
        <td>id</td>
        <td>Nombre</td>
        <td>Contraseña</td>
        @foreach ($Cliente as $cliente)
        </tr>
        <td>{{$cliente->id}}</td>
        <td>{{$cliente->Nombre}}</td>
        <td>{{$cliente->Contraseña}}</td>
        <tr>
        @endforeach
    </tr>
</table>
