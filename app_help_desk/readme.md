# Anotações
## Aula 349. - Formulários (desvendando os métodos GET e POST)
[OBS01] - O método action="" é responsável por referenciar para onde os dados inseridos no formulário irão após o cliente clicar no botão submit.
[OBS02] - Para incluir os dados informados pelo usuário final é necessário declarar o método name="" nas tags html que o usuário irá preencher, pois esse método é quem recebe os dados informados.
Exemplo:
    <form action="http://localhost/php-course/app_help_desk/valida_login.php ou somente valida_login.php" method="post">
        <input name="email" type="email" placeholder="Digite o e-mail">
        <input name="senha" type="password" placeholder="Digite a senha">
        <button type="submit">
    </form>
- Os métodos $_GET e $_POST definem o método de envio dos dados, esses dados precisam conter names, esses names nós definimos com o método name="" para que consigam ser recuperados através dos métodos $_GET ou $_POST.
[OBS03] - O método $_GET, é um array associativo de variáveis que são passadas, no caso está sendo passado as variáveis "email" e "senha" que declaramos no método name="". 
[OBS04] - O método $_POST, também é um array associativo de variáveis que são passadas, sua diferença é que o método retira os dados da URL, como exemplo:
        * Método $_GET: http://localhost/php-course/app_help_desk/valida_login.php?email=nixonsilva19%40gmail.com&senha=1

        * Método $_POST: http://localhost/php-course/app_help_desk/valida_login.

## Aula 350. - Autenticando usuários
[OBS01] - A função header("location:") faz com que o usuário seja redirecionado para alguma outra página. 
No curso nós somos redicionados para a página index.php caso inserimos algum valor erro ao logar com o usuário.
Exemplo:
    header('location:index.php?login=erro');
[OBS02] - Estamos redirecionando para a página index.php e enviando 1 parâmetro chamado login que recebe o erro.
[OBS03] - A função isset() verifica se um indice de um determinado array está setado, a função retorna true quando o indice está setado e false quando o indice não está setado dentro do array.
Exemplo:
    isset($_GET['login']);

## Aula 351. - Protegendo páginas restritas com SESSION
- Qual a função de uma sessão em PHP?
Sessões são uma forma simples de armazenar dados para usuários individuais usando um ID de sessão único.
[OBS01] - session_start() cria uma sessão.

## Aula 352. - Incorporando scripts com include, include_once, require e require_once
- Os includes conseguem incluir códigos de um arquivo para outro, são como construtores.
Exemplo:
    include('menu.php');
    include 'menu.php';

include - gera um Warning mas executa o resto do código.
requere - gera um Fatal Error e não executa o resto do código.
include_once - é executado apenas uma vez e gera um Warning mas executa o resto do código.
requere_once - é executado apenas uma vez e gera um Fatal Error e não executa o resto do código.

## Aula 353 - Encerrando a sessão (Logoff)
- É possível encerrar uma sessão de 2 modos, sendo por unset($_SESSION['x']) ou session_destroy(), a diferença é que a função unset encerra somente u(ma sessão específica, por isso é necessário passar o nome do array e o índice que deve ser encerrado. Já a função session_destroy() encerra toda a sessão.

## Aula 356 - Registrando chamados
- Para criar um arquivo de escrita você pode utilizar a função fopen('nome_do_arquivo.extensão','tipografia'), a função espera que informa o nome do arquivo, extensão e a tipografia. Para saber mais sobre tipografia acesse o site: https://www.php.net/manual/pt_BR/function.fopen.php
[OBS01] - Para escrever o arquivo você deverá utilizar a função fwrite($variaval_que_recebe_o_arquivo, $texto), a função espera que passe a varível que recebe o arquivo e também o texto.
[OBS02] - Para fechar o arquivo você deve utilizar a função fclose($variaval_que_recebe_o_arquivo), a função espera que informe qual arquivo irá ser fechado.
[OBS03] - PHP_EOL é uma constante para utilizar para gerar uma quebra de linha nos arquivos de escrita.

## Aula 357 - Consultando chamados
[OBS01] - São feof () função verifica ter atingido o fim do arquivo (EOF). Se ocorrer um erro, ou o ponteiro do arquivo para o final do arquivo (EOF) retorna TRUE, caso contrário, retorna FALSE.
[OBS02] - A função fgets () retorna uma linha de um arquivo aberto, quando ela chega ao fim de um determinado período ou ler o arquivo (EOF) (o que ocorrer primeiro), Parar para retornar para uma nova linha. Se falhar a função retorna FALSE.