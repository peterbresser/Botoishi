#! /bin/sh

SCRIPT="cd  /var/www; chown www-data:www-data botoishi -R"

ssh  wrath "${SCRIPT}"

