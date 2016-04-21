FROM ubuntu:latest

RUN apt-get update && \
    apt-get install -y apache2 php5 libapache2-mod-php5 php5-mongo && \
    apt-get clean

ADD html /var/www/html

# Launch apache2 server in the foreground
ENTRYPOINT ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]

