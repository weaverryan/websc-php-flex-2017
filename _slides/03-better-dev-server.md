# 03) Install a better dev server
> _slides/03-better-dev-server.md

A) Install the WebServerBundle

    composer require server

    (`server` is a Flex alias for `symfony/web-server-bundle`)

B) Stop the `make serve` command. Now run:

    bin/console server:start

SUCCESS WHEN:

The same as the last step: you can *still* go to
`http://localhost:8000` and see a Symfony "Route not found"
error page! Yay for errors!
