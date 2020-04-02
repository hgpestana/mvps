FROM alpine:latest

LABEL maintainer="Hélder Pestana <hgpestana@gmail.com>"

RUN echo 'http://dl-4.alpinelinux.org/alpine/edge/testing' >> /etc/apk/repositories
RUN apk add -U \
    # Packages
    tini \
    php7 \
    php7-dev \
    php7-common \
    php7-apcu \
    php7-bcmath \
    php7-ctype \
    php7-curl \
    php7-exif \
    php7-iconv \
    php7-intl \
    php7-json \
    php7-mbstring \
    php7-opcache \
    php7-openssl \
    php7-pcntl \
    php7-pdo \
    php7-mysqlnd \
    php7-pdo_mysql \
    php7-pdo_pgsql \
    php7-phar \
    php7-posix \
    php7-session \
    php7-xml \
    php7-xsl \
    php7-zip \
    php7-zlib \
    php7-dom \
    php7-fpm \
    php7-sodium \
    php7-imagick \
    php7-gd \
    php7-tokenizer \
    php7-cli \
    php7-mysqli \
    make \
    curl

RUN rm -rf /var/cache/apk/* && rm -rf /tmp/* && \
    curl --insecure https://getcomposer.org/composer.phar -o /usr/bin/composer && chmod +x /usr/bin/composer

ADD php_custom.ini /etc/php7/conf.d/
ADD php_custom.ini /etc/php7/cli/conf.d/
#ADD xdebug.ini  /etc/php7/conf.d/

ADD fpm.pool.conf /etc/php7/php-fpm.d/

ENTRYPOINT ["/sbin/tini", "--"]

CMD ["/usr/sbin/php-fpm7", "-R", "--nodaemonize"]

WORKDIR /var/www/

EXPOSE 9001
