@foreach($componentes as $componente)
<table>
    <tr>
        <td>
        <th>Id: {{$componente->id}}</th>
        </td>
        <th>Nome:{{$componente->nome}}</th>
    </tr>
</table>

@endforeach