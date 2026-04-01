@foreach($alunos as $aluno)
<table>
    <tr>
        <td>
        <th>Id: {{$aluno->id}}</th>
        </td>
        <th>Nome:{{$aluno->nome}}</th>
    </tr>
</table>

@endforeach