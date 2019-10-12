@extends("master")

@section("title","home")

 @section("content")
 <div class="container mt-5">
     <div class="row">
        <div class="col-10 mx-auto mb-5">
            <h1 class=" "style="line-height:1">About</h1> <br>
            <p>
                Olá sou Lucas Martines, criei essa aplicação para estudar o framework laravel.
            </p>
            <p>
            Nessa aplicação ssr (server side rendering) foram utilizados os recursos html, css e bootstrap no front end.     
            </p>
            <p>
            O bootstrap é um framework front end feito para facilitar a vida dos programadores e artistas, pois é muito fácil customizar temas nele, inclusive nesse projeto foi utilizado um dos temas do bootwatch, um site de temas wordpress.
            </p>
            <p>
                Dentre os recursos laravel, foi utilizado também, mecanismos de filtragem de requisições, para evitar requisições irregulares, migrations, e o eloquent, um recurso que permite a criação de modelos do banco de dados, fornecendo uma série de recursos, como por exemplo o relacionamento entre tabelas, que permite mais facilidade quando é necessário esses relacionamentos.
            </p>
            <p>
                Para a persistência de dados foi utilizado o Sqlite um banco de dados leve e portátil.
            </p>
            <p>Nessa aplicação a rota de criação de um ticket é a rota</p>
            <a href="/contact">/contact</a>
            <p>A rota de listagem de tickets é a rota</p>
            <a href="/tickets">/tickets</a>
            <p>
                É possível adicionar comentários para os tickets, devido o relacionamento um pra muitos entre tickets e comentários.
            </p>
            <p>
                Se quiser saber mais conheça o meu portfólio:
            </p>
            <a href="https://lucasmartines.github.io/"> https://lucasmartines.github.io/ </a>
        </div>
     </div>
 </div>   
 @endsection()