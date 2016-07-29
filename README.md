# LaraBlog Express

## Instalação

1. Via Laravel Installer
   1. Baixar o Laravel Installer via Composer.
   1. No fedora 23 abrir arquivo `.bashrc` e adicionar as seguintes linhas no final do arquivo
  ```
    COMPOSER_PATH=~/.composer/vendor/bin
    PATH=$COMPOSER_PATH:$PATH
    export PATH
  ```
   1. Rodar o comando `laravel new nome-do-diretorio`.

2. Via Composer `create-project`
  1. Rodar o comando `composer create-project laravel/laravel nome-do-diretorio --prefer-dist`.
  2. Ou escolhendo um versão especifica do Laravel `composer create-project --prefer-dist laravel/laravel nome-do-projeto 5.1.*
`

3. Via download
  1. Baixar a útima versão do Laravel e extrair o conteúdo em uma pasta de sua escolha, e no terminal rodar o seguinte comando `composer install`.
  
[Referência](https://ask.fedoraproject.org/en/question/53827/howto-install-laravel-and-apache-on-fedora/)
