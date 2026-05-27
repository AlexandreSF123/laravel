
<div>
<form action="{{ route('professor.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
        <hr>

        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <hr>

        <label for="telefone">Telefone</label>
        <input type="tel" name="telefone" id="telefone">
        
  

        <button type="submit">Salvar</button>
    </form>
    <table border="1">
        <tr>
            <td>Nome do Aluno</td>
            <td>Email</td>
            <td>Telefone</td>
            <td colspan="2">Ações</td>
        </tr>
        @isset($professores)
                @foreach($professores as $professor)
                    <tr>
                        <td>
                            <h3>{{ $professor->nome }}</h3>
                        </td>
                        <td>
                            <h3>{{ $professor->email}}</h3>
                        </td>

                        <td>
                            <h3>{{ $professor->telefone }}</h3>
                        </td>
                        <td>
                        <form action="{{ route('professor.remove', ['id' => $professor->id]) }}" method="GET">
                                <button type="submit">Remover</button>
                            </form>
                        </td>
                        <td>
                            <button>Atualizar</button>
                        </td>
                    </tr>
                @endforeach
        @endisset
    </table>
</div>

