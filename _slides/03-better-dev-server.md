# 03) Install a better dev server
> _slides/03-better-dev-server.md

A) Stop the web server (ctrl+c)

B) Install the WebServerBundle

    composer require server

    (`server` is a Flex alias for `symfony/web-server-bundle`)

C) Start a better dev server:

    bin/console server:start

SUCCESS WHEN:

The same as the last step: you can *still* go to
`http://localhost:8000` and see a Symfony "NotFoundHttpException"
error page! Yay for errors!
