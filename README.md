[Behat](http://behat.org/) is an open source BDD framework for __PHP 5.3__.

__INSTALL__

There are 3 methods to [install](http://docs.behat.org/quick_intro.html#installation) Behat.
I prefer to use PEAR

    $ pear channel-discover pear.behat.org
    $ pear channel-discover pear.symfony.com
    $ pear install behat/behat

Test your installation

    $ behat

then you should see

      [InvalidArgumentException]
      Provide correct feature(s) path. "/your/current/directory/features" given
      
You want to [install PHPUnit](http://www.phpunit.de/manual/current/en/installation.html) as well.
