# 08) I <3 Logging!
> _slides/08-logging.md

A) Install the logger

    composer req logger

B) In the `speakers()` function, "ask" for the logger
    via a type-hint:

    public function speakers(LoggerInterface $logger)

C) Log something! Like, your favorite speaker... or color!

SUCCESS WHEN:

You can go to `http://localhost:8000/speakers` and
it's an HTML page! Sure, it looks ugly. But it has
a great personality.
