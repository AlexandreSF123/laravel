<div>
    <form action="{{ route('admin.save') }}" method="post">
        @csrf

        <input type="hidden" name="id" value="{{ $admin->id }}">

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="{{ $admin->nome }}">

        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="{{ old('email') }}">

        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone" value="{{ old('telefone') }}">

        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf" value="{{ old('cpf') }}">
        
        <label for="usuario">Usuário</label>
        <input type="text" name="usuario" id="usuario" value="{{ old('usuario') }}">

        <label for="senha">Senha</label>
        <input type="text" name="senha" id="senha" value="{{ old('senha') }}">

        <label for="status">Status</label>
        <input type="text" name="status" id="status" value="{{ old('status') }}">

        <button type="submit">Salvar</button>
        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
    </form>
</div>
