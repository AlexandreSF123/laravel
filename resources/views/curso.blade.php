@foreach($cursos as $curso)
<table>
    <tr>
        <td>
        <th>Id: {{$curso->id}}</th>
        </td>
        <th>Nome:{{$curso->nome}}</th>
    </tr>
</table>

@endforeach