@foreach($professores as $professor)
<table>
    <tr>
        <td>
        <th>Nome: {{$professor->nome}}</th>
        </td>
        <th>CPF:{{$professor->cpf}}</th>
    </tr>
</table>

@endforeach