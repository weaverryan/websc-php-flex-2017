# 08) I <3 Logging!
> _slides/08-logging.md

A) Install the logger

    composer req logger

B) In the `speakers()` function, "ask" for the logger
    via a type-hint:

    public function speakers(LoggerInterface $logger)

C) Log something! Like, your favorite speaker... or color!

SUCCESS WHEN:

Refresh the page! If you don't see any errors, it
probably just logged :). 

By default, logs are saved in `var/logs/dev.log`. You
can tail that file to see your logs:

    tail var/logs/dev.log

---------

LOST?

If you're lost, you can fast forward to the START of
this step by running:

    git reset --hard HEAD^
    git checkout -b rescue07 origin/07-templating-finished
