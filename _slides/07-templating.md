# 07) Twig Templates!
> _slides/07-templating.md

A) Install twig

    composer req twig

B) In the `speakers()` function, render a template:

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
