# Beginnig of a Symfony 5 course

https://symfonycasts.com/screencast/symfony/setup

# Create php server

php -S 127.0.0.1:8000 -t public/

# Place to check recipes

https://flex.symfony.com/

# Place to check twig

https://twig.symfony.com/

# Check all recipes installed

composer recipes

# Check details for a specific recipe (status, if updated, URL when it lives etc)

composer recipes name_of_recipe

# Profiler recipe (to add debug toolbar on our page)

#### Only --dev bcs we only need this one dev environment while we are developing and testing

composer require profiler --dev

# Another recipe for debugging - this one should be both dev and prod as this enables logs

composer require debug

# Check all routes

php bin/console debug:router