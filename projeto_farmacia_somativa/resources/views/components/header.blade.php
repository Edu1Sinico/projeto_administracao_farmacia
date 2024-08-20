<header class="p-3" style="position: fixed; width: 100%; z-index: 100; top: 0; background-color: lightgray;">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <div class="nav col-1 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <span>Sistema Farmacêutico</span>
            </div>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/" class="nav-link px-2 text-secondary">Home</a></li>
                <li><a href="/list" class="nav-link px-2 text-white">Produtos</a></li>
                @auth
                    @if (Auth::user()->isFuncionario())
                        <li><a href="/listar-vendas" class="nav-link px-2 text-white">Vendas</a></li>
                    @endif
                @endauth
            </ul>


            @auth
                <div class="text-end" style="display: flex; align-items: center; justify-content: space-evenly; width: 30%">
                    <div class="title">Bem-vindo, <span>{{ Auth::user()->name }}</span>!</div>

                    <form action="{{ route('usuario.logout') }}" method="POST">
                        @csrf
                        <input type="submit" value="Sair" class="btn btn-danger">
                    </form>
                @else
                    <a href="\login">
                        <button type="button" class="btn btn-outline-light me-2">Login</button></a>
                    <a href="\registro">
                        <button type="button" class="btn btn-warning">Registrar-se</button></a>
                </div>
            @endauth
        </div>
    </div>
</header>
