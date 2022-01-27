# -Aula 301. Saída de dados com echo() e print()
## Diferença entre echo e print
- echo e print servem para mostrarem algo na tela,a diferença é que o print é uma função.

# -Aula 302. Comentários
- // comentário de uma única linha
- # comentário de uma únia linha no estilo Shell
- /* cometário de de multiplas linhas */
- [OBS]: Os comentários do PHP não aparecem ao clicar para inspecionar a página HTML, é possível vizualizar somente em seu código fonte.

# -Aula 303. até 306. Variáveis
## Tipos de variáveis:
### String - Armazenam textos.
### Int - Armazenam números inteiros.
### Float - Armazenam números fracionados.
### Boolean - Armazenam o estado das variáveis (verdadeiro ou falso).
### Array - Armazenam outras variáveis.
-[OBS01]: Apesar do PHP ter tipos de variáveis não é necessário declarar o tipo (string, float, ...) ao criar uma variável no código.
-[OBS02]: Para declarar uma variável deve-se utilizar o caracter $ (exemplo: $nome).
-[OBS03]: O valor true é 1 e o valor false é vazio (nada é retornado).

# -Aula 307. - Concateção.
- Para fazer uma concatenação no PHP deve-se utilizar o '.', (exemplo .$nome).
-[OBS01]: É possível também fazer a concateção utilizando aspas duplas, por exemplo ("Olá $nome, como vai?").

# -Aula 308. e 309. - Variáveis constantes
- Antes de criar uma variável constante em PHP é necessário chamar a função define(), a função irá definir a variável para constante e espera que passe 2 valores, sendo o primeiro valor o nome da variável e em segundo o seu valor, exemplo(define('nome','Nixon')).
-[OBS01]: Para declarar uma variável constante se adota a pratica de escrever o nome das variáveis em maiúsculos, exemplo(define('COR', 'Azul')).
-[OBS02]: Ao chamar a variável criada não é necessário utilizar o $, (exemplo: echo COR;)

# -Aula 310. - Operadores de comparação (condicionais)
## Tipo de operadores:
-Igual (==) -> Verifica se os valores comparados são iguais.
-Idêntico (===) -> Verifica se os valores comparados são iguais e do mesmo tipo.
-Diferente (!=) -> Verifica se os valores comparados são diferentes.
-Diferente (<>) -> Verifica se os valores comparados são diferentes.
-Não identico (!==) -> Verifica se os valores comparados são diferentes e de tipos diferentes.
-Menor (<) -> Verifica se o valor da esquerda é menor que o valor da direita.
-Maior (>) -> Verifica se o valor da esquerda é maior que o valor da direita.
-Menor igual (<=) -> Verifica se o valor da esquerda é menor ou igual ao valor da direita.
-Maior igual (>=) -> Verifica se o valor da esquerda é maior ou igual ao valor da direita.

# -Aula 312. até 315. - Operadores lógicos
## Tipo de operadores:
-Operador E (AND ou &&) -> Verdadeiro se todas as expressões forem verdadeiras.
-Operador OU (OR ou ||) -> Verdadeira se pelo menos uma das expressões forem verdadeiras.
-Operador XOR (XOR) -> Verdadeiro apenas se uma das expressões for verdadeira, mas não ambas, ou seja, uma expressões deve ser verdadeira e a outra deve ser falsa.
-Operador Negação (!) -> Inverte o resultado da expressão.

# -Aula 316. e 317. - Operador ternário
-O operador ternário pode ser usado quando o retorno é apenas uma única instrução.
-Para criar um operador ternário é necessário colocar a condição e a lógica caso o resultado seja verdadeiro ou falso.

Exemplo:
<condicao> ? 'verdadeiro' : 'false' 
-[OBS01] - O "?" serve para seperar a condição da lógica.
-[OBS02] - O ":" serve para seperar as posibilidades (verdadeiro ou falso).

# -Aula 318. e 319. - Switch
-O Switch serve para fazer comparação de identicos.
-[OBS01] - Default é a mesma coisa que o else.
-[OBS02] - True possui o valor 1, deve-se lembrar disse ao declarar o valor 1 para comparação no switch.

# -Aula 320. até 322. - Casting de tipos (Conversão do tipo de uma variável para outro tipo)
## Conversões:
-Int -> Pode ser convertido para Float e String.
-Float -> Pode ser convertido para Int e String.
-String -> Pode ser convertido para Int, Float e Boolean.
-Boolean -> Pode ser convertido para Int e String.
[OBS01] - A função gettype(variável) espera uma variável dentro para a função conseguir verificar o seu tipo.

# -Aula 323. - Operações aritméticas na atribuição de valores
[OBS01] - forma convencional é:
    $x = 10;
    $x = $x + 5;

        - forma enxuta:
    $x = 10;
    $x += 5;

# -Aula 324. - Operadores de incremento/decremento
## Operadores:
-Pré-incremento (++$a) - Adiciona uma unidade antes de retornar $a.
-Pós-incremento ($a++) - Retonar $a e depois adiciona uma unidade.
-Pré-decremento (--$a) - Subtrai uma unidade antes de retornar $a.
-Pós-decremento ($a--) - Retorna $a e depois subtrai uma unidade.

# -Aula 326. - Introdução a funções
[OBS01] - Toda função deve começar com um verbo e ter letra maiúsculos nos substantivos.
[OBS02] - As funções podem ou não ter entrada de dados (variáveis), exemplo:
    function exibirBoasVindas() {
        echo "Bem-vindo ao curso de PHP.";
    }

    function calcularAreaTerreno($largura, $comprimento) {
        $area = $largura*$comprimneto;
        return $area;
    }
[OBS03] - Existem 2 tipos de funções, as funções VOID e as funções que retornam algo.
-As funções VOID não retornam nenhum valor quando é chamada a função para ser executada, exemplo:
    function exibirBoasVindas() {
        echo "Bem-vindo ao curso de PHP.";
    }

    exibirBoasVindas();

-As funções com retorno sempre terão "return" ao final da lógica, exemplo:
    function calcularAreaTerreno($largura, $comprimento) {
        $area = $largura*$comprimento;
        return $area;
    }

    echo calcularAreaTerreno(30,50);
[OBS04] - O retorno dessa função será a variável $area;
[OBS05] - Como a função espera que passemos 2 entradas de dados, ao chamar a função nós inserimos 2 valores esperados (30 para largura,50 para comprimento).

# -Aula 329. - Funções nativas para manipular strings
- strtolower($texto) -> Transforma todos os caracteres da string em minúsculo.
- strtoupper($texto) -> Transforma todos os caracteres da string em maiúsculo.
- ucfirst($texto) -> Transforma o primeiro caracter da string em maiúsculo.
- strlen($texto) -> Conta a quantidade de caracteres de uma string.
- str_replace(<procura por>, <substitui por>, $texto) -> Substitui uma cadeia de caracteres por outra dentro de uma string.
- substr($texto, <posicao inicial>, <qtde caracteres>) -> Retorna parte de uma string.

# -Aula 330. - Funções nativas para tarefas matemáticas
- ceil($numero) -> Arredonda o valor para cima.
- floor($numero) -> Arredonda o valor para baixo.
- round($numero)-> Arredonda o valor com base nas casas decimas.
- rand() -> Gera um inteiro aleatório.
- sqrt() -> Retorna a raiz quadrada.

# -Aula 331. - Funções nativas para manipular datas
-Para saber mais sobre as formatações, entre no site: https://www.php.net/manual/en/function.date
- date(formato) ->Recupera a data atual, exemplo date('d/m/y H:i') irá mostrar 23/01/2022 17:35.
- date_default_timezone_get(timezone) -> Recupera o timezone default da aplicação (configura o GTM).
- date_default_timezone_set(timezone) -> Atualiza o timezone default da aplicação.
- strtotime(data) -> Transforma datas textuais em segundos.

# -Aula 332. - Array básico e Multidimensionais
-Possui 2 tipos de array no PHP, os arrays sequênciais e os numéricos, exemplo:
-Numéricos:
    $lista_frutas = ['banana', 'Maça', 'Uva'];
A variavel banana terá seu indice com o valor 0, maça com o valor 1 e uva com o valor 2.

-Sequênciais:
    $lista_frutas = ['a' => 'banana', 'b' => 'Maça', '3' => 'Uva'];
No Array sequêncial você define qual vai ser o valor do indice, sendo o 'a' para banana, 'b' para maça e '3' para uva.

-[OBS01]: Existem 2 funções para verificar os dados inseridos no array, sendo elas o var_dump($lista_frutas) e o print_r($lista frutas). O var_dump mostra o tipo da variável que foi inserida no array e quantidade de variáveis dentro desse array. Já o print_r mostra somente as variáveis inseridas dentro desse array.

# -Aula 333. - Array de pesquisa
-Existem 2 funções para fazer pesquisas dentro de arrays, sendo a in_array('Maçã', $lista_frutas) que retorna true ou false dependendo a variável que quer pesquisar dentro do array e array_search('Maça', $lista_frutas) que informa o índice da variável que estamos pesquisando.
[OBS01] - Na função array_serach() a valor false é informado como Null, ao contrário da função in_array() que retorna vazio quando o valor é false.

# -Aula 337. - Funções nativas para manipular arrays
- is_array(array) -> Verifica se o parâmetro é um array.
- in_array(array) -> verifica se um elemento existe no array ou não.
- array_keys(array) -> Retorna todas as chaves de um array.
- sort(array) -> Ordena um array e reajusta seus índices.
- asort(array) -> Ordena um array preservando os índices.
- count(array) -> Conta a quantidade de elementos de um array.
- array_merge(array) -> Funde um ou mais arrays.
- explode(array) -> Divide uma string baseada em um delimitador.
- implode(array) -> Junta elementos de um array em uma string.

# -Aula 339. - Loops
## Comando While(enquanto)
-[OBS01] - O comando break interrompe toda a estrutura de repetição e o continue apenas pula uma interação e vai para interação seguinte, descartando o que estiver a seguir da instrução continue.

## Do While
-A condição é validada somente no final da executação, ou seja, sempre irá executar o comando antes de verificar se a condição é valida ou não, segue exemplo:

 $x = 10;
 
 do {
     echo 'Entrou no While';
 } while($x <10>);

## For
-Sintaxe:
 for(variavel; condição; incremento) {

 }


### Foreach
-O comando Foreach é especializado para arrays e objetos, em arrays não é necessário passar a condição e incremento pois a função já possui a inteligencia para verificar o momento de sair do loop.
