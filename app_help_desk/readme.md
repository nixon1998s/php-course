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
- Os métodos $_GET e $_POST definem o método de envio dos dados, esses dados precisam contem names, esses names nós definimos com o método name="" para que consigam ser recuperados através dos métodos $_GET ou $_POST.
[OBS03] - O método $_GET, é um array associativo de variáveis que são passadas, no caso está sendo passado as variáveis "email" e "senha" que declaramos no método name="". 
[OBS04] - O método $_POST, também é um array associativo de variáveis que são passadas, sua diferença é que o método retira os dados da URL, como exemplo:
        * Método $_GET: http://localhost/php-course/app_help_desk/valida_login.php?email=nixonsilva19%40gmail.com&senha=1

        * Método $_POST: http://localhost/php-course/app_help_desk/valida_login.php