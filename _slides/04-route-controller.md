# 04) Route & Controller
> _slides/04-route-controller.md

A) in `config/routes.yaml`:

    1) Create a route with the URL: `/fish`
    
    2) For `_controller`, use
    
        App\Controller\SummerCampController::fish

B) Create the controller:

    1) Create the `SummerCampController` class
        (hint: it should `extends Controller`_

    2) Add `fish` method

    3) Return a JSON response of our menu of fish
        (hint: there is a `$this->json()` shortcut

        brancina, tune, romba, & škampi

SUCCESS WHEN:

You can go to `http://localhost:8000/fish` and
see a JSON response of some delicious fish. Mmmm.
