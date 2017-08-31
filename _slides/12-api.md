# 12) API Platform
> _slides/12-api.md

A) Install API Platform

    composer require api-platform/api-pack:^2.1@dev api-platform/core:^2.1@dev

WOW! Ugly! Soon, it will be just `compose require api`

B) In `MenuItem.php`, add an annotation above the class:

    use ApiPlatform\Core\Annotation\ApiResource;
    // ...
    
    /**
      * ...
      * @ApiResource
      */

C) We have new routes!

    ./bin/console debug:router

SUCCESS WHEN:

You can now go to `http://localhost:8000/menu_items`
to see documentation! Now try going to `/menu_items.json`
or `/menu_items.jsonld`!

---------

LOST?

If you're lost, you can fast forward to the START of
this step by running:

    git reset --hard HEAD^
    git checkout -b rescue11 origin/11-orm-finished
