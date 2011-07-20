[Behat](http://behat.org/) is an open source BDD framework for PHP 5.3.

__INSTALL__

There are many ways to [install](http://docs.behat.org/quick_intro.html#installation) Behat.
I prefer to clone the project and create a sym link.
This steps is done on Ubuntu 10.04

    $ git clone git://github.com/Behat/Behat.git
    $ cd Behat
    $ git submodule update --init
    $ sudo ln -s /path/to/Behat/bin/behat /usr/bin/behat

Test your installation

    $ behat

then you should see

      [InvalidArgumentException]
      Provide correct feature(s) path. "features" given
      
You want to [install PHPUnit](http://www.phpunit.de/manual/current/en/installation.html) as well.
