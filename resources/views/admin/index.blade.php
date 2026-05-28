
<div>
    <form action="{{ route('admin.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

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