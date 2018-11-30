composer require api
Using version ^1.1 for api-platform/api-pack
./composer.json has been updated
Loading composer repositories with package information
Updating dependencies (including require-dev)
Restricting packages listed in "symfony/symfony" to "4.2.*"

Prefetching 15 packages 🎶 💨
  - Downloading (100%)

Package operations: 39 installs, 0 updates, 0 removals
  - Installing symfony/validator (v4.2.0): Loading from cache
  - Installing twig/twig (v2.5.0): Loading from cache
  - Installing symfony/twig-bridge (v4.2.0): Loading from cache
  - Installing symfony/twig-bundle (v4.2.0): Loading from cache
  - Installing symfony/security-core (v4.2.0): Loading from cache
  - Installing symfony/inflector (v4.2.0): Loading from cache
  - Installing symfony/property-access (v4.2.0): Loading from cache
  - Installing symfony/security-http (v4.2.0): Loading from cache
  - Installing symfony/security-guard (v4.2.0): Loading from cache
  - Installing symfony/security-csrf (v4.2.0): Loading from cache
  - Installing symfony/security-bundle (v4.2.0): Loading from cache
  - Installing symfony/expression-language (v4.2.0): Loading from cache
  - Installing symfony/asset (v4.2.0): Loading from cache
  - Installing webmozart/assert (1.3.0): Loading from cache
  - Installing phpdocumentor/reflection-common (1.0.1): Loading from cache
  - Installing phpdocumentor/type-resolver (0.4.0): Loading from cache
  - Installing phpdocumentor/reflection-docblock (4.3.0): Loading from cache
  - Installing nelmio/cors-bundle (1.5.4): Loading from cache
  - Installing doctrine/cache (v1.8.0): Loading from cache
  - Installing doctrine/inflector (v1.3.0): Loading from cache
  - Installing doctrine/lexer (v1.0.1): Loading from cache
  - Installing doctrine/annotations (v1.6.0): Loading from cache
  - Installing doctrine/reflection (v1.0.0): Loading from cache
  - Installing doctrine/event-manager (v1.0.0): Loading from cache
  - Installing doctrine/collections (v1.5.0): Loading from cache
  - Installing doctrine/persistence (v1.1.0): Loading from cache
  - Installing symfony/doctrine-bridge (v4.2.0): Loading from cache
  - Installing doctrine/doctrine-cache-bundle (1.3.5): Loading from cache
  - Installing jdorn/sql-formatter (v1.2.17): Loading from cache
  - Installing doctrine/dbal (v2.8.0): Loading from cache
  - Installing doctrine/common (v2.10.0): Loading from cache
  - Installing doctrine/doctrine-bundle (1.9.1): Loading from cache
  - Installing doctrine/instantiator (1.1.0): Loading from cache
  - Installing doctrine/orm (v2.6.3): Loading from cache
  - Installing willdurand/negotiation (v2.3.1): Loading from cache
  - Installing symfony/serializer (v4.2.0): Loading from cache
  - Installing symfony/property-info (v4.2.0): Loading from cache
  - Installing api-platform/core (v2.3.4): Loading from cache
  - Installing api-platform/api-pack (1.1.0): Loading from cache
Writing lock file
Generating autoload files
Symfony operations: 8 recipes (a4de809680a80493c3333b3c102bd2d6)
  - Configuring symfony/validator (>=4.1): From github.com/symfony/recipes:master
  - Configuring symfony/twig-bundle (>=3.3): From github.com/symfony/recipes:master
  - Configuring symfony/security-bundle (>=3.3): From github.com/symfony/recipes:master
  - Configuring nelmio/cors-bundle (>=1.5): From github.com/symfony/recipes:master
  - Configuring doctrine/annotations (>=1.0): From github.com/symfony/recipes:master
  - Configuring doctrine/doctrine-cache-bundle (>=1.3.5): From auto-generated recipe
  - Configuring doctrine/doctrine-bundle (>=1.6): From github.com/symfony/recipes:master
  - Configuring api-platform/core (>=2.1): From github.com/symfony/recipes:master
Executing script cache:clear [OK]
Executing script assets:install public [OK]

Some files may have been created or updated to configure your new packages.
Please review, edit and commit them: these files are yours.

                        
 Database Configuration 
                        

  * Modify your DATABASE_URL config in .env

  * Configure the driver (mysql) and
    server_version (5.7) in config/packages/doctrine.yaml

              
 What's next? 
              

  * Your API is almost ready:
    1. Create your first API resource in src/Entity;
    2. Go to /api to browse your API

  * To enable the GraphQL support, run composer require webonyx/graphql-php,
    then browse /api/graphql.

  * Read the documentation at https://api-platform.com/docs

