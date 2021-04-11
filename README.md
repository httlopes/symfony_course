# Beginnig of a Symfony 5 course

https://symfonycasts.com/screencast/symfony/setup

# Create php server

php -S 127.0.0.1:8000 -t public/

# Place to check recipes

https://flex.symfony.com/

# Place to check twig

https:/#/twig.symfony.com/

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

# Specific router info

php bin/console router:match /comments/10/vote/up php bin/console router:match /comments/10/vote/up --method=POST <- method needed in case this of its specific, otherwise error

# Call all Symfony services we might need in future (cache, loggers, twig, etc)

php bin/console debug:autowiring

# Check for a specific service

php bin/console debug:autowiring log

php bin/console debug:autowiring twig

# Install webpack

composer require encore

# Yarn - its the same thing as composer but for node

### Get Jquery from yarn

yarn add jquery --dev

yarn add bootstrap --dev

# Markdown conversation

https://github.com/KnpLabs/KnpMarkdownBundle

# Check what we can change on a certain bundle

php bin/console config:dump KnpMarkdownBundle
