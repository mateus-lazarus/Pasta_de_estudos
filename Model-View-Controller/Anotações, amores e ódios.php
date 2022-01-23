SWITCH

Para uma comparação mais elegante e semântica.

<?php

    switch ($elemento_a_ser_comparado) {
        case ($comparação):
            ($ação_a_ser_tomada);
            break;
        
        default:
            ($ação_caso_não_ocorra_nenhum_caso_acima);
    }

?>



........................................................................... 



FRONT CONTROLLER (ou INDEX) - MVC

Seguindo o padrão Model-View-Controller, o "index" atua como o primeiro controlador para a chegada de requisições, permitindo trabalhar com urls amigáveis
    e responder a erros de pesquisa na URL (404 ou retornar à landing page). 

Para gerenciá-lo precisamos das informações que vem com a variável global $_SERVER

Exemplo : 
    <?php
        switch ($_SERVER['PATH_INFO']) {
            case '/listar-cursos':
                $controlador = new ListarCursos();
                $controlador->processaRequisicao();
                break;

            case '/novo-curso':
                $controlador = new FormularioInsercao();
                $controlador->processaRequisicao();
                break;

            default:
                echo 'Erro 404.';
                break;
        }
    ?>



........................................................................... 



$_SERVER

A variável carrega informações importantes do tipo de conexão e requisição realizado no server.

Exemplo de uma requisição : 
    <?php
    [
        ["DOCUMENT_ROOT"]=>
        "C:\Users\Pichau\Desktop\Aulas Alura\PHP\Estudos_em_Php\Model-View-Controller\public",
        ["REMOTE_ADDR"]=>
        "::1",
        ["REMOTE_PORT"]=>
        "50253",
        ["SERVER_SOFTWARE"]=>
        "PHP 8.1.0 Development Server",
        ["SERVER_PROTOCOL"]=>
         "HTTP/1.1",
        ["SERVER_NAME"]=>
         "localhost",
        ["SERVER_PORT"]=>
         "8000",
        ["REQUEST_URI"]=>
         "/novo-cassa",
        ["REQUEST_METHOD"]=>
         "GET",
        ["SCRIPT_NAME"]=>
         "/index.php",
        ["SCRIPT_FILENAME"]=>
         "C:\Users\Pichau\Desktop\Aulas Alura\PHP\Estudos_em_Php\Model-View-Controller\public\index.php",
        ["PATH_INFO"]=>
         "/novo-cassa",
        ["PHP_SELF"]=>
         "/index.php/novo-cassa",
        ["HTTP_HOST"]=>
         "localhost:8000",
        ["HTTP_CONNECTION"]=>
         "keep-alive",
        ["HTTP_SEC_CH_UA"]=>
         "\" Not;A Brand\";v=\"99\", \"Google Chrome\";v=\"97\", \"Chromium\";v=\"97\"",
        ["HTTP_SEC_CH_UA_MOBILE"]=>
         "?0",
        ["HTTP_SEC_CH_UA_PLATFORM"]=>
         "\"Windows\"",
        ["HTTP_DNT"]=>
         "1",
        ["HTTP_UPGRADE_INSECURE_REQUESTS"]=>
         "1",
        ["HTTP_USER_AGENT"]=>
         "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36",
        ["HTTP_ACCEPT"]=>
         "text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        ["HTTP_SEC_FETCH_SITE"]=>
         "none",
        ["HTTP_SEC_FETCH_MODE"]=>
         "navigate",
        ["HTTP_SEC_FETCH_USER"]=>
         "?1",
        ["HTTP_SEC_FETCH_DEST"]=>
         "document",
        ["HTTP_ACCEPT_ENCODING"]=>
         "gzip, deflate, br",
        ["HTTP_ACCEPT_LANGUAGE"]=>
         "en-US,en;q=0.9,pt-BR;q=0.8,pt;q=0.7",
        ["REQUEST_TIME_FLOAT"]=>
        1642850665.161214,
        ["REQUEST_TIME"]=>
        1642850665
    ];
    ?>



........................................................................... 



$_REQUEST e $_POST










<form action method>






https://www.php.net/manual/pt_BR/book.filter.php

filter_input() // filtra valores de uma requisição feita                  : https://www.w3schools.com/php/php_filter.asp
filter_var()   // filtra quaisquer variáveis dentor do código








header(), redirecionamento pelo cabeçalho

https://developer.mozilla.org/pt-BR/docs/Web/HTTP/Redirections

ao redirecionar usando um LOCATION, a Web já sabe que não precisa ler o código do corpo enviado, então caso queira dar uma mensagem de confirmação após enviar
 um formulário, é necessário que se faça isso no lado do cliente com Javascript










 
$rotas = [
    "/listar-cursos" => ListarCursos::class,
    "/novo-curso" => FormularioInsercao::class,
    "/salvar-curso" => Persistencia::class
];


$classeControladora = $rotas[$caminho];
$controlador = new $classeControladora();








HTTP_RESPONSE_CODE 
https://www.php.net/manual/en/function.http-response-code.php














Erro único do Windows por problema no Doctrine ao lidar com uma classe
 é necessário que se gere os proxies manualmente pela linha de comando


php vendor\bin\doctrine orm:generate-proxies







VARIÁVEIS SUPERGLOBAIS : https://www.php.net/manual/pt_BR/language.variables.superglobals.php










SHORT ECHO

<?php echo $variavel; ?>
<?= $variavel; ?>












FUNÇÃO EXTRACT

Para extrair dados de um array












OUTPUT BUFFER ( OB_START )

Ao invés de já mostrar toda informação buscado por REQUIRE em html, ele a guarda e permite alterações dentro antes de mostrar.

Podemos ativar a buffer de saída do buffer com o ob_start()
O método ob_get_contents() devolve conteúdo do buffer
O método ob_clean() limpa o buffer
O método ob_get_clean devolve conteúdo e limpa o buffer















