# 07) Twig Templates!
> _slides/07-templating.md

A) Install twig

    composer req twig

B) In the `speakers()` function, instead of returning
    JSON, render a template:

    return $this->render('summer_camp/speakers.html.twig', [
         'speakers' => ['Marco', 'Paula', 'Antonio', 'Marcello']
    ]);

C) Create the template in `templates/summer_camp/speakers.html.twig`

    {% extends 'base.html.twig' %}

    {% block body %}
        <h1>Speakers!</h1>
    
        <ul>
            {% for speaker in speakers %}
                <li>{{ speaker }}</li>
            {% endfor %}
        </ul>
    {% endblock %}

SUCCESS WHEN:

You can go to `http://localhost:8000/speakers` and
it's an HTML page! Sure, it looks ugly. But it has
a great personality.

---------

LOST?

If you're lost, you can fast forward to the START of
this step by running:

    git reset --hard HEAD^
    git checkout -b rescue06 origin/06-route-annotations-finished
