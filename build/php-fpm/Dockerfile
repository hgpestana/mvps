FROM alpine:edge

LABEL maintainer="Hélder Pestana <hgpestana@gmail.com>"

ADD https://dl.bintray.com/php-alpine/key/php-alpine.rsa.pub /etc/apk/keys/php-alpine.rsa.pub
RUN apk --update add ca-certificates
RUN echo "https://dl.bintray.com/php-alpine/v3.9/php-7.4" >> /etc/apk/repositories
RUN echo 'http://dl-cdn.alpinelinux.org/alpine/edge/testing' >> /etc/apk/repositories
RUN apk add -U \
    # Packages
    tini \
    php \
    php-dev \
    php-common \
    php-apcu \
    php-bcmath \
    php-ctype \
    php-curl \
    php-exif \
    php-iconv \
    php-intl \
    php-json \
    php-mbstring \
    php-opcache \
    php-openssl \
    php-pcntl \
    php-pdo \
    php-mysqlnd \
    php-pdo_mysql \
    php-pdo_pgsql \
    php-phar \
    php-posix \
    php-session \
    php-xml \
    php-xsl \
    php-zip \
    php-zlib \
    php-dom \
    php-redis \
    php-fpm \
    php-sodium \
    php-imagick \
    php-gd \
    php-tokenizer \
    php-cli \
    php-mysqli \    
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
