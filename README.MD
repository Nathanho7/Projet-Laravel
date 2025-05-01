### Test technique - Projet Laravel

## **1.2 Installation du projet Laravel**


#### 1. Créez un nouveau projet Laravel :

```sh
C:\Users\gusta>composer create-project laravel/laravel laravel-test
Creating a "laravel/laravel" project at "./laravel-test"
Installing laravel/laravel (v12.0.7)
  - Installing laravel/laravel (v12.0.7): Extracting archive
Created project in C:\Users\gusta\laravel-test
> @php -r "file_exists('.env') || copy('.env.example', '.env');"
Loading composer repositories with package information
Updating dependencies
Lock file operations: 110 installs, 0 updates, 0 removals
  - Locking brick/math (0.12.3)
  - Locking carbonphp/carbon-doctrine-types (3.2.0)
  - Locking dflydev/dot-access-data (v3.0.3)
  - Locking doctrine/inflector (2.0.10)
  - Locking doctrine/lexer (3.0.1)
  - Locking dragonmantank/cron-expression (v3.4.0)
  - Locking egulias/email-validator (4.0.4)
  - Locking fakerphp/faker (v1.24.1)
  - Locking filp/whoops (2.18.0)
  - Locking fruitcake/php-cors (v1.3.0)
  - Locking graham-campbell/result-type (v1.1.3)
  - Locking guzzlehttp/guzzle (7.9.3)
  - Locking guzzlehttp/promises (2.2.0)
  - Locking guzzlehttp/psr7 (2.7.1)
  - Locking guzzlehttp/uri-template (v1.0.4)
  - Locking hamcrest/hamcrest-php (v2.1.1)
  - Locking laravel/framework (v12.11.1)
  - Locking laravel/pail (v1.2.2)
  - Locking laravel/pint (v1.22.0)
  - Locking laravel/prompts (v0.3.5)
  - Locking laravel/sail (v1.42.0)
  - Locking laravel/serializable-closure (v2.0.4)
  - Locking laravel/tinker (v2.10.1)
  - Locking league/commonmark (2.6.2)
  - Locking league/config (v1.2.0)
  - Locking league/flysystem (3.29.1)
  - Locking league/flysystem-local (3.29.0)
  - Locking league/mime-type-detection (1.16.0)
  - Locking league/uri (7.5.1)
  - Locking league/uri-interfaces (7.5.0)
  - Locking mockery/mockery (1.6.12)
  - Locking monolog/monolog (3.9.0)
  - Locking myclabs/deep-copy (1.13.1)
  - Locking nesbot/carbon (3.9.0)
  - Locking nette/schema (v1.3.2)
  - Locking nette/utils (v4.0.6)
  - Locking nikic/php-parser (v5.4.0)
  - Locking nunomaduro/collision (v8.8.0)
  - Locking nunomaduro/termwind (v2.3.0)
  - Locking phar-io/manifest (2.0.4)
  - Locking phar-io/version (3.2.1)
  - Locking phpoption/phpoption (1.9.3)
  - Locking phpunit/php-code-coverage (11.0.9)
  - Locking phpunit/php-file-iterator (5.1.0)
  - Locking phpunit/php-invoker (5.0.1)
  - Locking phpunit/php-text-template (4.0.1)
  - Locking phpunit/php-timer (7.0.1)
  - Locking phpunit/phpunit (11.5.18)
  - Locking psr/clock (1.0.0)
  - Locking psr/container (2.0.2)
  - Locking psr/event-dispatcher (1.0.0)
  - Locking psr/http-client (1.0.3)
  - Locking psr/http-factory (1.1.0)
  - Locking psr/http-message (2.0)
  - Locking psr/log (3.0.2)
  - Locking psr/simple-cache (3.0.0)
  - Locking psy/psysh (v0.12.8)
  - Locking ralouphie/getallheaders (3.0.3)
  - Locking ramsey/collection (2.1.1)
  - Locking ramsey/uuid (4.7.6)
  - Locking sebastian/cli-parser (3.0.2)
  - Locking sebastian/code-unit (3.0.3)
  - Locking sebastian/code-unit-reverse-lookup (4.0.1)
  - Locking sebastian/comparator (6.3.1)
  - Locking sebastian/complexity (4.0.1)
  - Locking sebastian/diff (6.0.2)
  - Locking sebastian/environment (7.2.0)
  - Locking sebastian/exporter (6.3.0)
  - Locking sebastian/global-state (7.0.2)
  - Locking sebastian/lines-of-code (3.0.1)
  - Locking sebastian/object-enumerator (6.0.1)
  - Locking sebastian/object-reflector (4.0.1)
  - Locking sebastian/recursion-context (6.0.2)
  - Locking sebastian/type (5.1.2)
  - Locking sebastian/version (5.0.2)
  - Locking staabm/side-effects-detector (1.0.5)
  - Locking symfony/clock (v7.2.0)
  - Locking symfony/console (v7.2.5)
  - Locking symfony/css-selector (v7.2.0)
  - Locking symfony/deprecation-contracts (v3.5.1)
  - Locking symfony/error-handler (v7.2.5)
  - Locking symfony/event-dispatcher (v7.2.0)
  - Locking symfony/event-dispatcher-contracts (v3.5.1)
  - Locking symfony/finder (v7.2.2)
  - Locking symfony/http-foundation (v7.2.5)
  - Locking symfony/http-kernel (v7.2.5)
  - Locking symfony/mailer (v7.2.3)
  - Locking symfony/mime (v7.2.4)
  - Locking symfony/polyfill-ctype (v1.31.0)
  - Locking symfony/polyfill-intl-grapheme (v1.31.0)
  - Locking symfony/polyfill-intl-idn (v1.31.0)
  - Locking symfony/polyfill-intl-normalizer (v1.31.0)
  - Locking symfony/polyfill-mbstring (v1.31.0)
  - Locking symfony/polyfill-php80 (v1.31.0)
  - Locking symfony/polyfill-php83 (v1.31.0)
  - Locking symfony/polyfill-uuid (v1.31.0)
  - Locking symfony/process (v7.2.5)
  - Locking symfony/routing (v7.2.3)
  - Locking symfony/service-contracts (v3.5.1)
  - Locking symfony/string (v7.2.0)
  - Locking symfony/translation (v7.2.4)
  - Locking symfony/translation-contracts (v3.5.1)
  - Locking symfony/uid (v7.2.0)
  - Locking symfony/var-dumper (v7.2.3)
  - Locking symfony/yaml (v7.2.5)
  - Locking theseer/tokenizer (1.2.3)
  - Locking tijsverkoyen/css-to-inline-styles (v2.3.0)
  - Locking vlucas/phpdotenv (v5.6.2)
  - Locking voku/portable-ascii (2.0.3)
  - Locking webmozart/assert (1.11.0)
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 110 installs, 0 updates, 0 removals
  - Installing doctrine/inflector (2.0.10): Extracting archive
  - Installing doctrine/lexer (3.0.1): Extracting archive
  - Installing symfony/polyfill-ctype (v1.31.0): Extracting archive
  - Installing webmozart/assert (1.11.0): Extracting archive
  - Installing dragonmantank/cron-expression (v3.4.0): Extracting archive
  - Installing symfony/deprecation-contracts (v3.5.1): Extracting archive
  - Installing psr/container (2.0.2): Extracting archive
  - Installing fakerphp/faker (v1.24.1): Extracting archive
  - Installing symfony/polyfill-php83 (v1.31.0): Extracting archive
  - Installing symfony/polyfill-mbstring (v1.31.0): Extracting archive
  - Installing symfony/http-foundation (v7.2.5): Extracting archive
  - Installing fruitcake/php-cors (v1.3.0): Extracting archive
  - Installing psr/http-message (2.0): Extracting archive
  - Installing psr/http-client (1.0.3): Extracting archive
  - Installing ralouphie/getallheaders (3.0.3): Extracting archive
  - Installing psr/http-factory (1.1.0): Extracting archive
  - Installing guzzlehttp/psr7 (2.7.1): Extracting archive
  - Installing guzzlehttp/promises (2.2.0): Extracting archive
  - Installing guzzlehttp/guzzle (7.9.3): Extracting archive
  - Installing symfony/polyfill-php80 (v1.31.0): Extracting archive
  - Installing guzzlehttp/uri-template (v1.0.4): Extracting archive
  - Installing symfony/polyfill-intl-normalizer (v1.31.0): Extracting archive
  - Installing symfony/polyfill-intl-grapheme (v1.31.0): Extracting archive
  - Installing symfony/string (v7.2.0): Extracting archive
  - Installing symfony/service-contracts (v3.5.1): Extracting archive
  - Installing symfony/console (v7.2.5): Extracting archive
  - Installing nunomaduro/termwind (v2.3.0): Extracting archive
  - Installing voku/portable-ascii (2.0.3): Extracting archive
  - Installing phpoption/phpoption (1.9.3): Extracting archive
  - Installing graham-campbell/result-type (v1.1.3): Extracting archive
  - Installing vlucas/phpdotenv (v5.6.2): Extracting archive
  - Installing symfony/css-selector (v7.2.0): Extracting archive
  - Installing tijsverkoyen/css-to-inline-styles (v2.3.0): Extracting archive
  - Installing symfony/var-dumper (v7.2.3): Extracting archive
  - Installing symfony/polyfill-uuid (v1.31.0): Extracting archive
  - Installing symfony/uid (v7.2.0): Extracting archive
  - Installing symfony/routing (v7.2.3): Extracting archive
  - Installing symfony/process (v7.2.5): Extracting archive
  - Installing symfony/polyfill-intl-idn (v1.31.0): Extracting archive
  - Installing symfony/mime (v7.2.4): Extracting archive
  - Installing psr/event-dispatcher (1.0.0): Extracting archive
  - Installing symfony/event-dispatcher-contracts (v3.5.1): Extracting archive
  - Installing symfony/event-dispatcher (v7.2.0): Extracting archive
  - Installing psr/log (3.0.2): Extracting archive
  - Installing egulias/email-validator (4.0.4): Extracting archive
  - Installing symfony/mailer (v7.2.3): Extracting archive
  - Installing symfony/error-handler (v7.2.5): Extracting archive
  - Installing symfony/http-kernel (v7.2.5): Extracting archive
  - Installing symfony/finder (v7.2.2): Extracting archive
  - Installing ramsey/collection (2.1.1): Extracting archive
  - Installing brick/math (0.12.3): Extracting archive
  - Installing ramsey/uuid (4.7.6): Extracting archive
  - Installing psr/simple-cache (3.0.0): Extracting archive
  - Installing symfony/translation-contracts (v3.5.1): Extracting archive
  - Installing symfony/translation (v7.2.4): Extracting archive
  - Installing psr/clock (1.0.0): Extracting archive
  - Installing symfony/clock (v7.2.0): Extracting archive
  - Installing carbonphp/carbon-doctrine-types (3.2.0): Extracting archive
  - Installing nesbot/carbon (3.9.0): Extracting archive
  - Installing monolog/monolog (3.9.0): Extracting archive
  - Installing league/uri-interfaces (7.5.0): Extracting archive
  - Installing league/uri (7.5.1): Extracting archive
  - Installing league/mime-type-detection (1.16.0): Extracting archive
  - Installing league/flysystem-local (3.29.0): Extracting archive
  - Installing league/flysystem (3.29.1): Extracting archive
  - Installing nette/utils (v4.0.6): Extracting archive
  - Installing nette/schema (v1.3.2): Extracting archive
  - Installing dflydev/dot-access-data (v3.0.3): Extracting archive
  - Installing league/config (v1.2.0): Extracting archive
  - Installing league/commonmark (2.6.2): Extracting archive
  - Installing laravel/serializable-closure (v2.0.4): Extracting archive
  - Installing laravel/prompts (v0.3.5): Extracting archive
  - Installing laravel/framework (v12.11.1): Extracting archive
  - Installing laravel/pail (v1.2.2): Extracting archive
  - Installing laravel/pint (v1.22.0): Extracting archive
  - Installing symfony/yaml (v7.2.5): Extracting archive
  - Installing laravel/sail (v1.42.0): Extracting archive
  - Installing nikic/php-parser (v5.4.0): Extracting archive
  - Installing psy/psysh (v0.12.8): Extracting archive
  - Installing laravel/tinker (v2.10.1): Extracting archive
  - Installing hamcrest/hamcrest-php (v2.1.1): Extracting archive
  - Installing mockery/mockery (1.6.12): Extracting archive
  - Installing filp/whoops (2.18.0): Extracting archive
  - Installing nunomaduro/collision (v8.8.0): Extracting archive
  - Installing staabm/side-effects-detector (1.0.5): Extracting archive
  - Installing sebastian/version (5.0.2): Extracting archive
  - Installing sebastian/type (5.1.2): Extracting archive
  - Installing sebastian/recursion-context (6.0.2): Extracting archive
  - Installing sebastian/object-reflector (4.0.1): Extracting archive
  - Installing sebastian/object-enumerator (6.0.1): Extracting archive
  - Installing sebastian/global-state (7.0.2): Extracting archive
  - Installing sebastian/exporter (6.3.0): Extracting archive
  - Installing sebastian/environment (7.2.0): Extracting archive
  - Installing sebastian/diff (6.0.2): Extracting archive
  - Installing sebastian/comparator (6.3.1): Extracting archive
  - Installing sebastian/code-unit (3.0.3): Extracting archive
  - Installing sebastian/cli-parser (3.0.2): Extracting archive
  - Installing phpunit/php-timer (7.0.1): Extracting archive
  - Installing phpunit/php-text-template (4.0.1): Extracting archive
  - Installing phpunit/php-invoker (5.0.1): Extracting archive
  - Installing phpunit/php-file-iterator (5.1.0): Extracting archive
  - Installing theseer/tokenizer (1.2.3): Extracting archive
  - Installing sebastian/lines-of-code (3.0.1): Extracting archive
  - Installing sebastian/complexity (4.0.1): Extracting archive
  - Installing sebastian/code-unit-reverse-lookup (4.0.1): Extracting archive
  - Installing phpunit/php-code-coverage (11.0.9): Extracting archive
  - Installing phar-io/version (3.2.1): Extracting archive
  - Installing phar-io/manifest (2.0.4): Extracting archive
  - Installing myclabs/deep-copy (1.13.1): Extracting archive
  - Installing phpunit/phpunit (11.5.18): Extracting archive
66 package suggestions were added by new dependencies, use `composer suggest` to see details.
Generating optimized autoload files
> Illuminate\Foundation\ComposerScripts::postAutoloadDump
> @php artisan package:discover --ansi

   INFO  Discovering packages.

  laravel/pail .................................................................................. DONE
  laravel/sail .................................................................................. DONE
  laravel/tinker ................................................................................ DONE
  nesbot/carbon ................................................................................. DONE
  nunomaduro/collision .......................................................................... DONE
  nunomaduro/termwind ........................................................................... DONE

80 packages you are using are looking for funding.
Use the `composer fund` command to find out more!
> @php artisan vendor:publish --tag=laravel-assets --ansi --force

   INFO  No publishable resources for tag [laravel-assets].

No security vulnerability advisories found.
> @php artisan key:generate --ansi

   INFO  Application key set successfully.

> @php -r "file_exists('database/database.sqlite') || touch('database/database.sqlite');"
> @php artisan migrate --graceful --ansi

   WARN  could not find driver (Connection: sqlite, SQL: select exists (select 1 from "main".sqlite_master where name = 'migrations' and type = 'table') as "exists").


C:\Users\gusta>
C:\Users\gusta>
C:\Users\gusta>
C:\Users\gusta>cd laravel-test

C:\Users\gusta\laravel-test>
C:\Users\gusta\laravel-test>php artisan key:generate

   INFO  Application key set successfully.
```

#### 2. Accédez au dossier du projet :
```sh
C:\Users\gusta>cd laravel-test
```

#### 3.Configurez l'environnement (.env) en renseignant la connexion à la base de données.
-Config env 
```sh
DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=laravel
# DB_USERNAME=root
# DB_PASSWORD=
```
- Base de données via pypmyadmin
![Capture d'écran](pypmyadmin.jpg)
