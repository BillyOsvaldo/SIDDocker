FROM php:7.2.6-fpm-stretch

RUN mkdir -p /app
WORKDIR /app

COPY desa /app/desa
COPY vendor /app/vendor
COPY themes /app/themes
COPY donjo-app /app/donjo-app
COPY assets /app/assets
COPY surat /app/surat
COPY securimage /app/securimage
# COPY gulpfile.js /app/gulpfile.js
# COPY src         /app/src

# COPY bower.json   /app/bower.json
# COPY package.json /app/package.json

# for upload
# RUN mkdir -p /app/uploads
# RUN chmod -R 777 /app/uploads

# install node
RUN apt -qq update && \
    apt -qq install -my \
    wget \
    gnupg \
    git \
    zip \
    zlib1g-dev \
    unzip \
    libmagickwand-dev && \
    rm -rf /var/lib/apt/lists/*
RUN curl -sL https://deb.nodesource.com/setup_10.x | bash -
RUN apt -qq install -y nodejs

# install php-gd
RUN docker-php-ext-install gd

# install php mysql
RUN docker-php-ext-install mysqli zip

# install imagick
# RUN pecl install imagick
# RUN docker-php-ext-enable imagick

# install npm dependency
#RUN npm install

# install bower dependency
RUN npm install --global bower

# install composer dependency
# RUN cd /app/application && \
#     wget https://getcomposer.org/download/1.6.5/composer.phar && \
#     php composer.phar install && \
#     php composer.phar update

RUN touch /usr/local/etc/php/conf.d/uploads.ini \
    && echo "upload_max_filesize = 50M;" >> /usr/local/etc/php/conf.d/uploads.ini

# bower can't be installed by root, so we have to create standard user
RUN useradd -ms /bin/bash sid
RUN chown -R sid .
USER sid 
