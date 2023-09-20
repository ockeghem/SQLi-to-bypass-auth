FROM php:8.2.10-apache
WORKDIR /var/www
COPY ./init.sql .
RUN apt update \
    && apt install -y sqlite3 \
    && sqlite3 db.sqlite3 ".read init.sql"
