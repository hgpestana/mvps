FROM alpine:3.8

LABEL maintainer="Hélder Pestana <hgpestana@gmail.com>"

ADD https://php.codecasts.rocks/php-alpine.rsa.pub /etc/apk/keys/php-alpine.rsa.pub

RUN apk --update add ca-certificates \
    && echo "@edge-main http://dl-cdn.alpinelinux.org/alpine/edge/main" >> /etc/apk/repositories \
    && echo "@edge-community http://dl-cdn.alpinelinux.org/alpine/edge/community" >> /etc/apk/repositories \
    && echo "@cast https://php.codecasts.rocks/v3.8/php-7.2" >> /etc/apk/repositories \
    && apk add -U \
    # Packages
    tini \
    php@cast \
    php-dev@cast \
    php-common@cast \
    php-apcu@cast \
    php-bcmath@cast \
    php-ctype@cast \
    php-curl@cast \
    php-exif@cast \
    php-iconv@cast \
    php-intl@cast \
    php-json@cast \
    php-mbstring@cast \
    php-opcache@cast \
    php-openssl@cast \
    php-pcntl@cast \
    php-pdo@cast \
    php-mysqlnd@cast \
    php-pdo_mysql@cast \
    php-pdo_pgsql@cast \
    php-phar@cast \
    php-posix@cast \
    php-session@cast \
    php-xml@cast \
    php-xsl@cast \
    php-zip@cast \
    php-zlib@cast \
    php-dom@cast \
    php-redis@cast \
    php-fpm@cast \
    php-sodium@cast \
    make \
    curl

RUN rm -rf /var/cache/apk/* && rm -rf /tmp/* && \
    curl --insecure https://getcomposer.org/composer.phar -o /usr/bin/composer && chmod +x /usr/bin/composer

ADD symfony.ini /etc/php7/conf.d/
ADD symfony.ini /etc/php7/cli/conf.d/
ADD xdebug.ini  /etc/php7/conf.d/

ADD symfony.pool.conf /etc/php7/php-fpm.d/

ENTRYPOINT ["/sbin/tini", "--"]

CMD ["/usr/sbin/php-fpm7", "-R", "--nodaemonize"]

WORKDIR /var/www/symfony
EXPOSE 9001
