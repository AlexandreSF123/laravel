<div>
    <form action="{{ route('componente.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
        <label for="nome">Hora de Inicio</label>
        <input type="text" name="nome" id="nome">
        <label for="nome">Horario de Finalização</label>
        <input type="text" name="nome" id="nome">

        <button type="submit">Salvar</button>
    </form>
    <table border="1">
        <tr>
            <td>Nome do Componente</td>
            <td colspan="2">Ações</td>
        </tr>
        @isset($componentes)
                @foreach($componentes as $componente)
                    <tr>
                        <td>
                            <h3>{{ $componente->nome }}</h3>
                        </td>
                        <td>
                        <form action="{{ route('componente.remove', ['id' => $componente->id]) }}" method="GET">
                                <button type="submit">Remover</button>
                            </form>
                        </td>
                        <td>
                        <form action="{{ route('componente.atualizar', ['id' => $componente->id]) }}" method="GET">
                                <button type="submit">Atualizar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
        @endisset
    
</div>
