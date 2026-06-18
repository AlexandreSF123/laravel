
<div>
    <form action="{{ route('admin.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="{{ old('nome') }}">
        <hr>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="{{ old('email') }}">
        <hr>

        <label for="telefone">Telefone</label>
        <input type="tel" name="telefone" id="telefone" value="{{ old('telefone') }}">
    <hr>
        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf" value="{{ old('cpf') }}">
<hr>
        <label for="usuario">Usuário</label>
        <input type="text" name="usuario" id="usuario" value="{{ old('usuario') }}">
<hr>
        <label for="senha">Senha</label>
        <input type="text" name="senha" id="senha" value="{{ old('senha') }}">
<hr>
        <label for="status">Status</label>
        <input type="radio" name="status" id="status" value="offline">Offline
            <input type="radio" name="status" id="status">Online
        </label>
        <hr>

        <button type="submit">Salvar</button>
    </form>
    <table border="1">
        <tr>
            <td>Nome do Administrador</td>
            <td colspan="2">Ações</td>
        </tr>
        @isset($admins)
                @foreach($admins as $admin)
                    <tr>
                        <td>
                            <h3>{{ $admin->nome }}</h3>
                        </td>
                        <td>
                            <h3>{{ $admin->email }}</h3>
                        </td>
                        <td>
                            <h3>{{ $admin->telefone }}</h3>
                        </td>
                        <td>
                            <h3>{{ $admin->cpf }}</h3>
                        </td>
                        <td>
                            <h3>{{ $admin->usuario }}</h3>
                        </td>
                        <td>
                            <h3>{{ $admin->senha }}</h3>
                        </td>
                        <td>
                            <h3>{{ $admin->status }}</h3>
                        </td>
                        <td>
                        <form action="{{ route('admin.remove', ['id' => $admin->id]) }}" method="GET">
                                <button type="submit">Remover</button>
                            </form>
                        </td>
                        <td>
                        <form action="{{ route('admin.atualizar', ['id' => $admin->id]) }}" method="GET">
                                <button type="submit">Atualizar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
        @endisset
    
</div>