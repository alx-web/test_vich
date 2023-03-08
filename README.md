# test_vich


Installation

- php composer.phar install
- php bin/console doctrine:database:create
- php bin/console doctrine:cache:clear-metadata && php bin/console doctrine:migrations:diff --allow-empty-diff && php bin/console --no-interaction doctrine:migrations:migrate
- php bin/console doctrine:fixtures:load

