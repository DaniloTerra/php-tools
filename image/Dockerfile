FROM daniloterra/php:7.0

MAINTAINER Danilo Terra <danilo_terra@live.com>

ADD https://cloud.github.com/downloads/Behat/Behat/behat.phar  /usr/local/bin/behat
ADD https://squizlabs.github.io/PHP_CodeSniffer/phpcs.phar     /usr/local/bin/phpcs
ADD https://squizlabs.github.io/PHP_CodeSniffer/phpcbf.phar    /usr/local/bin/phpcbf
ADD https://getcomposer.org/composer.phar                      /usr/local/bin/composer
ADD https://phar.phpunit.de/phpunit.phar                       /usr/local/bin/phpunit
ADD https://phar.phpunit.de/phpcpd.phar                        /usr/local/bin/phpcpd
ADD https://phar.phpunit.de/phpdcd.phar                        /usr/local/bin/phpdcd
ADD http://static.phpmd.org/php/latest/phpmd.phar              /usr/local/bin/phpmd
ADD http://static.pdepend.org/php/latest/pdepend.phar          /usr/local/bin/pdepend
ADD http://www.phing.info/get/phing-latest.phar                /usr/local/bin/phing

RUN chmod +x /usr/local/bin/composer \
             /usr/local/bin/phpunit  \
             /usr/local/bin/phpcpd   \
             /usr/local/bin/phpdcd   \
             /usr/local/bin/phpcbf   \
             /usr/local/bin/phing    \
             /usr/local/bin/phpcs    \
             /usr/local/bin/pdepend  \
             /usr/local/bin/phpmd    \
             /usr/local/bin/behat

ENV PATH /usr/local/bin:$PATH

VOLUME ["/app"]
WORKDIR /app
