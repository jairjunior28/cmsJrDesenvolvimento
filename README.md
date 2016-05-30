Jr Desenvolvimento CMS
=======================

Jr Desenvolvimento CMS foi desenvolvido e é mantido por  [Jair Júnior](https://github.com/jairjunior28), trata se de um sistema CMS escrito em PHP utilizando se do framework [Laravel 5.1](http://laravel.com) e [Sentry](https://cartalyst.com/manual/sentry). Ele utiliza também muitos pacotes de terceiros tais como [Laravel Core](https://github.com/GrahamCampbell/Laravel-Core) e [Laravel Credentials](https://github.com/BootstrapCMS/Credentials). Sinta se livre a verificar. [releases](https://github.com/BootstrapCMS/CMS/releases), [license](LICENSE), [screenshots](SCREENSHOTS.md), and [contribution guidelines](CONTRIBUTING.md).

![JR Desenvolvimento CMS]()

<p align="center">
<a href="https://travis-ci.org/BootstrapCMS/CMS"><img src="https://img.shields.io/travis/BootstrapCMS/CMS/master.svg?style=flat-square" alt="Build Status"></img></a>
<a href="https://scrutinizer-ci.com/g/BootstrapCMS/CMS/code-structure"><img src="https://img.shields.io/scrutinizer/coverage/g/BootstrapCMS/CMS.svg?style=flat-square" alt="Coverage Status"></img></a>
<a href="https://scrutinizer-ci.com/g/BootstrapCMS/CMS"><img src="https://img.shields.io/scrutinizer/g/BootstrapCMS/CMS.svg?style=flat-square" alt="Quality Score"></img></a>
<a href="LICENSE"><img src="https://img.shields.io/badge/license-AGPL%203.0-brightgreen.svg?style=flat-square" alt="Software License"></img></a>
<a href="https://github.com/BootstrapCMS/CMS/releases"><img src="https://img.shields.io/github/release/BootstrapCMS/CMS.svg?style=flat-square" alt="Latest Version"></img></a>
</p>


## Instalação

[PHP](https://php.net) 5.5+ ou superior [HHVM](http://hhvm.com) 3.6+, um servidor de banco de dados, e [Composer](https://getcomposer.org) são necessários.

1. Existem três maneiras de obter o código:
  * Usando GitHub: basta baixar o zip na direita do readme.
  * Usando Git: `git clone https://github.com/jairjunior28/cmsJrDesenvolvimento/`
  * Usando Composer: `composer create-project jairjunior28/cmsJrDesenvolvimento --prefer-dist -s dev`
2. Em linha de comando na pasta do projeto, rodar o comando `composer install --no-dev -o` e após `npm install`.
3. Ajustar o arquivo de acordo com a configuração do banco de dados `config/database.php`.
4. Executar o comando `php artisan app:install` após  `gulp --production` para configurar a aplicação.
5. Agora é necessário ajustar as configurações referentes a e-mail `config/mail.php`.
  * Pode ser desativado, caso for o caso em  `config/credentials.php`
  * Emailé necessário para outras funções como redefinições de senha e do formulário de contato
  * Você deve definir o e-mail de contato no `config/contact.php`
  * Eu recomendo [filas] (#-criação de filas) envio de emails para maior desempenho (ver abaixo)
6. Finalmente, configurar uma [Apache VirtualHost] (http://httpd.apache.org/docs/current/vhosts/examples.html) para apontar para a pasta "pública".
  * Para desenvolvimento, você pode simplemente rodar o comando  `php artisan serve`


## Configurando filas

JR Desenvolvimento CMS usa o sistema de fila de Laravel para descarregar tarefas como enviar e-mails para que seus usuários não têm que esperar para essas atividades para concluir antes de sua carga de páginas. Por padrão, estamos usando o "sync" driver de fila.
1. Verifique a documentação do Laravel's [documentação](http://laravel.com/docs/master/queues#configuration).
2. Digite os detalhes do servidor de filas em `config/queue.php`.


## Configurando Caching

JR Desenvolvimento CMS fornece funcionalidade de armazenamento em cache, e quando ativado, requer um servidor de cache.
Note que o cache não irá funcionar com Laravel `file` ou` database` controladores de cache.


2. Digite os detalhes do servidor de cache em `config/cache.php`.
3. Definir o controlador de matriz irá efetivamente desativar caching se você não quer que a sobrecarga.


## Configurando Temas

JR Desenvolvimento CMS também vem com 18 temas, 16 de [Bootswatch](http://bootswatch.com).

1. Você pode definir o seu tema em `config/theme.php`.
2. Você também pode definir o seu estilo barra de navegação no `config/theme.php`.
3. Depois de fazer alterações no tema, você vai ter que rodar o comando `php artisan app:update`.


##  Configurar o Google Analytics

JR Desenvolvimento CMS nativamente possui suporte a [Google Analytics](http://www.google.com/analytics).

1. Configuração uma propriedade da web sobre [Google Analytics](http://www.google.com/analytics).
2. Digite seu ID de rastreamento em `config/analytics.php`.
3. Ative o Google Analytics em `config/analytics.php`.


## Configurando CloudFlare Analytics

JR Desenvolvimento CMS  can read [CloudFlare](https://www.cloudflare.com/) analytic data through a package.

1. Follow the install instructions for my [Laravel CloudFlare](https://github.com/BootstrapCMS/CloudFlare) package.
2. Bootstrap CMS will auto-detect the package, only allow admin access, and add links to the navigation bar.


## License

GNU AFFERO GENERAL PUBLIC LICENSE

Bootstrap CMS Is A PHP CMS Powered By Laravel 5 And Sentry

Copyright (C) 2013-2015 Graham Campbell

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU Affero General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU Affero General Public License for more details.

You should have received a copy of the GNU Affero General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
