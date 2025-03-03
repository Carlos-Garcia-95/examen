FROM ubuntu:latest

RUN apt update -y
RUN apt upgrade -y
RUN apt install apache2 -y
RUN apt install php php-mysql libapache2-mod-php -y
RUN apt install mariadb-server -y

COPY moverDespliegeBBDD.php /var/www/html/

RUN service apache2 start