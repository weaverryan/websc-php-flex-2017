# 06) Annotation Routes
> _slides/06-route-annotations.md

A) Install annotations support

    composer req sensio/framework-extra-bundle annot

(Note, in Symfony 4, sensio/framework-extra-bundle won't be needed)

B) Uncomment out the 3 annotation lines in
    `app/config/routes.yaml`

C) Create a new page: /speakers

    1) In SummerCampController, add a new
        `public function speakers()`

    2) Give it a route with an annotation:
        @Route("/speakers")

        hint: you'll need a use statement for Route
            and either Route class should work 

    3) Return a JSON response of some speakers:
        Marco, Paula, Antonio, Marcello

SUCCESS WHEN:

You can go to `http://localhost:8000/speakers` and
see a JSON response of some of the speakers. They
are not as delicious as fish, but are still nice.
