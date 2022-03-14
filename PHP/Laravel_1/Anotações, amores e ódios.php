PHP ARTISAN SERVE

Para montar um server, o PHP ARTISAN é a dependência responsável. 
No CMD : 
    php artisan serve

resposta : 
    Starting Laravel development server: http://127.0.0.1:8000
    ...




























ROUTE LARAVEL       :       https://laravel.com/docs/8.x/routing

O Laravel já possui um arquivo de rotas para o nosso site, ele se encontra em ROUTES\WEB.PHP na pasta de instalação das dependências

É possível definir o link e montar rotas.

    <?php
        Route::get('/', function () {
            return view('welcome');
        });
    ?>


























LARAVEL É UM SOFTWARE MVC

Dentro do Laravel já existe a pasta de CONTROLLERS em APP/HTTP/CONTROLLERS

ROTAS : routes\web.php
(possui diversas formas de rotas)

MODEL : app\Models

VIEW : resources\views

CONTROLLER : app\Http\Controllers



























Instanciar Rotas com Controllers

Para criar uma nova rota, é necessário que seja chamada a CLASSE::class e o nome da função desejada (algo do Laravel 8)

    <?php

        Route::get('/series', [SeriesController::class, 'listarSeries']);

    ?>















FUNÇÃO VIEW() - Laravel

A função View aceita variáveis dentro dele

    <?php
        return view(
            view: 'series.index',
            data: [
                'series' => $series
            ]);
    ?>


Também é possível trocar o array pela função do php COMPACT : https://www.php.net/manual/en/function.compact.php



















DRY COM HTML - BLADE LARAVEL                : https://laravel.com/docs/8.x/blade

O blade do Laravel é um tipo de arquivo que recebe parâmetros de conteúdo e os exibe no corpo do html


      LAYOUT BLADE       ------------------------------------       SITE BLADE
      @yield('cabecalho')                                           @section('cabecalho') ... @endsection
      @yield('conteudo')                                            @section('conteudo') ... @endsection


Também é possível utilizar funções do PHP por meio do Blade de forma mais legível


      PHP            ------------------------------------           .BLADE.PHP
      @foreach($series as $serie) :                                 <?php foreach($series as $serie) : ?>
      {{ $serie->nome }}                                               <?= $serie->nome; ?>
      @endforeach                                                   <?php endforeach; ?>


































Para criar tabelas no Laravel : https://laravel.com/docs/5.0/schema, https://laravel.com/docs/8.x/migrations

CMD :
    php artisan make:migration nome_migration


Já no arquivo vazio criado :
    Schema::create()



























Ordenar as séries buscadas no banco pelo seu nome em ordem alfabética
$series = Serie::query()->orderBy('nome')->get()

Entidade::query()       //  Busca todas entidades do tipo cadastradas
    ->orderBy           //  Organiza em ordem alfabética
    ->get()             //  















ACTIVE RECORD   :   http://www.laravelinterviewquestions.com/trick/active-record-implementation-in-laravel-mjg/#:~:text=Active%20Record%20Implementation%20is%20an,Active%20Records%20by%20Eloquent%20ORM.

O Laravel utiliza de um padrão conhecido como ACTIVE RECORD, visa melhorar a produtividade aglutinando CONVERSA COM BANCO DE DADOS e 
    REGRAS DE NEGÓCIO na mesma classe


























@csrf       :       

Dentro do formulário para averiguar que é uma informação vindo de um formulário já definido dentro da aplicação


<form>
    @csrf
</form>





















PARE REDIRECIONAR - LARAVEL     :       https://laravel.com/docs/8.x/redirects#creating-redirects

Use a função REDIRECT() para redirecionar como resposta da requisição.























ADICIONAR INFORMAÇÕES NA SESSÃO     :       https://laravel.com/docs/8.x/session#flash-data

Assim permitindo diversas funcionalidades, tais como a Flash Message.

    $request->session()->put('nomeVariavel', 'valorVariavel')
    $request->session()->remove('nomeVariavel')


E o Laravel já possuí a noção de FlashMessages dentro dele

    $request->session()->flash('nomeVariavel', 'valorVariavel')

 e dura somente uma troca de página.





















DELETAR ENTIDADES - Laravel

CLASSE_ENTIDADE::destroy($id)

É literalmente somente isso.



























Caixa de Confirmação para submit. 

    <form 
        onsubmit="return confirm('Confirme remover a série {{ $serie->nome }} ?')"
    >



















NOMEAR ROTAS - LARAVEL      :       https://laravel.com/docs/8.x/routing#named-routes

É possível que se nomeie rotas no Laravel para facilitar a identificação e evitar typos.

    <?php
        Route::get('/series/create', [SeriesController::class, 'create'])
            ->name('criar_serie');
    ?>


Para acessar no HTML se usa a função do Laravel ROUTE()
    <html>
        <a href="{{ route('criar_serie') }}">Adicionar Série</a>
    </html>


E pode-se usar tal parâmetro para REDIRECIONAR

    <?php
        function destroy(Request $request)
            {
                return redirect()->route('listar_series');
            }
    ?>























VALIDAÇÃO DE REQUEST - LARAVEL          :       https://laravel.com/docs/8.x/validation#quick-writing-the-validation-logic

Lê se a informação está de acordo, e caso contrário retorna para a última página acessada.
É uma forma de criar validações dentro de um CONTROLLER.


    <?php
        $validator = Validator::make($request->all(), [
                    'NOME/ID DO INPUT' => 'required|min:3|max:255'
                ]);

        if ($validator->fails()) {
            return redirect('/series/create') // redirecionamento para a MESMA PÁGINA 
                ->withErrors($validator)
                ->withInput();
        }
    ?>




Também há um código disponibilizado pela própria documentação para exibir o erro ocorrido na página

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif




A outra maneira é criar um request específico

FORM REQUEST - LARAVEL

É possível criar requests no Laravel para aplicar regras de validação, e uma aplicação são formulários.

No CMD : 
    php artisan make:request Nome_do_request


Será criado um novo arquivo em Http/Requests e lá haverá as condições :
    1. O usuário precisa estar logado para acessar?
    2. Regras de validação


    <?php

        class SeriesFormRequest extends FormRequest
        {
            /**
             * Determine if the user is authorized to make this request.
             *
             * @return bool
             */
            public function authorize()
            {
                return true;
            }

            /**
             * Get the validation rules that apply to the request.
             *
             * @return array
             */
            public function rules()
            {
                return [
                    'nomeSerie' => 'required|min:3|max:255'
                ];
            }
        }

    ?>


    Agora no recebimento do Request

    <?php

        // Não mais apenas Request, agora é o SeriesFormRequest
        // function store(Request $request)
        function store(SeriesFormRequest $request)
        {
                

            $nomeSerie = $request->get('nomeSerie');            // Pesquisa dentre todas as variáveis do Requsest a que possue tal nome


            $serie = Serie::create([
                'nome' => $nomeSerie
            ]);

            $request->session()->flash('mensagem', "Serie ( {$serie->nome} : {$serie->id} ) criada com sucesso.");
            
            return redirect()->route('listar_series');
        }

    ?>




















































































































































































































































































































































































































































































































































































































































































































































































































































































































































































