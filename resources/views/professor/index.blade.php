
<div>
<form action="{{ route('professor.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome"value="{{ old('nome') }}">
        <hr>

        <label for="email">Email</label>
        <input type="email" name="email" id="email"value="{{ old('nome') }}">
        <hr>

        <label for="telefone">Telefone</label>
        <input type="tel" name="telefone" id="telefone">
        
  

        <button type="submit">Salvar</button>
        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
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
                        <form action="{{ route('professor.atualizar', ['id' => $professor->id]) }}" method="GET">
                                <button type="submit">Atualizar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
        @endisset
    </table>
</div>

