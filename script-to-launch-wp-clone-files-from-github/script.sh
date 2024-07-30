#!/bin/bash
apt update;
apt install nginx php8.1 php8.1-fpm libapache2-mod-php php-mysql php-curl php-gd php-mbstring php-xml php-xmlrpc php-soap php-intl php-zip git -y;
systemctl stop apache2 && apt purge apache2 -y;
systemctl start nginx;
systemctl start php8.1-fpm;
cd /tmp/ && git clone https://github.com/katoch1234/wordpress-zenkins.git;
mv wordpress-zenkins/nginx-conf/default /etc/nginx/sites-enabled/;
mv wordpress-zenkins/* /var/www/html/;
rm -r wordpress-zenkins;



