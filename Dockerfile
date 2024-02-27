
FROM php:8.2.16-cli

ENV REFRESH_DATE 8
#COPY sources.list /etc/apt/sources.list

RUN apt-get clean &&  apt-get update
RUN apt-get install -y wget zip libzip-dev zlib1g-dev autoconf automake libtool vim git iputils-ping


WORKDIR /home
# 安装 oniguruma
ENV ORIGURUMA_VERSION=6.9.8

RUN wget https://github.com/kkos/oniguruma/archive/v${ORIGURUMA_VERSION}.tar.gz -O oniguruma-${ORIGURUMA_VERSION}.tar.gz \
    && tar -zxvf oniguruma-${ORIGURUMA_VERSION}.tar.gz \
    && cd oniguruma-${ORIGURUMA_VERSION} \
    && ./autogen.sh \
    && ./configure \
    && make \
    && make install

# 安装必要的扩展
RUN docker-php-ext-install bcmath mbstring zip pdo_mysql


RUN apt-get install -y zlib1g-dev libz-dev libfreetype6-dev libjpeg62-turbo-dev libpng-dev \
        && docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/  && \
    docker-php-ext-install gd &&  docker-php-ext-enable  gd


# 安装composer
RUN wget https://mirrors.aliyun.com/composer/composer.phar \
	&& mv composer.phar /usr/local/bin/composer \
	&& chmod +x /usr/local/bin/composer && composer config -g repo.packagist composer https://packagist.pages.dev/

RUN docker-php-ext-install pcntl
COPY . /var/www/html
# ws 协议
EXPOSE 7272
# web 80
EXPOSE 80

WORKDIR /var/www/html






