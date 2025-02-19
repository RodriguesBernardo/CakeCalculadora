# Calculadora simples utilizando PHP Cake
***Por Bernardo Rodrigues***

## Comandos:
- composer create-project --prefer-dist cakephp/app calculadora (ou nome desejado!)
- bin/cake server

## Informações
- Alteração na configuração do banco de dados, configurei para que ficasse temporariamente alocado na memoria do computador local, sem necessitar de usuario e senha de um banco de dados normal. caminho: *config/app_local.php*
- Rotas para acessar as páginas em *config/routes.php*

### Arquivos Criadas
- *CalculadoraController.php* - Cria a classe da calculadora com suas funcionalidades
- *templates/Calculadora.php* - Cria a página principal HTML da calculadora
