<x-layout title="Novo usuário">
    <form method="post">
        @csrf
        <div class="form-group">
            <label for="name" class="form-control">Nome</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email" class="form-control">E-mail</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="password" class="form-control">Senha</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>


        <button class="btn btn-primary mt-3">
            Registrar
        </button>
    </form>
</x-layout>