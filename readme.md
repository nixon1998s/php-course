# -Aula 301. Saída de dados com echo() e print()
## Diferença entre echo e print
- echo e print servem para mostrarem algo na tela,a diferença é que o print é uma função.

# -Aula 302. Comentários
- // comentário de uma única linha
- # comentário de uma únia linha no estilo Shell
- /* cometário de de multiplas linhas */
- [OBS]: Os comentários do PHP não aparecem ao clicar para inspecionar a página HTML, é possível vizualizar somente em seu código fonte.

# -Aula 303. até 304. Variáveis
## Tipos de variáveis:
### String - Armazenam textos.
### Int - Armazenam números inteiros.
### Float - Armazenam números fracionados.
### Boolean - Armazenam o estado das variáveis (verdadeiro ou falso).
### Array - Armazenam outras variáveis.
-[OBS01]: Apesar do PHP ter tipos de variáveis não é necessário declarar o tipo (string, float, ...) ao criar uma variável no código.
-[OBS02]: Para declarar uma variável deve-se utilizar o caracter $ (exemplo: $nome).
-[OBS03]: O valor true é 1 e o valor false é vazio (nada é retornado).

# -Aula 307 - Concateção.
- Para fazer uma concatenação no PHP deve-se utilizar o '.', (exemplo .$nome).
-[OBS01]: É possível também fazer a concateção utilizando aspas duplas, por exemplo ("Olá $nome, como vai?").

# -Aula 308 - Variáveis constantes
- Antes de criar uma variável constante em PHP é necessário chamar a função define(), a função irá definir a variável para constante e espera que passe 2 valores, sendo o primeiro valor o nome da variável e em segundo o seu valor, exemplo(define('nome','Nixon')).
-[OBS01]: Para declarar uma variável constante se adota a pratica de escrever o nome das variáveis em maiúsculos, exemplo(define('COR', 'Azul')).[OBS02]: Ao chamar a variável criada não é necessário utilizar o $, (exemplo: echo COR;)