#!/bin/bash
apt update;
apt install nginx php8.1 php8.1-fpm libapache2-mod-php php-mysql php-curl php-gd php-mbstring php-xml php-xmlrpc php-soap php-intl php-zip git -y;
systemctl stop apache2 &&  apt purge apache2 -y;
systemctl start nginx;
systemctl start php8.1-fpm;
git config --global user.name "katoch1234"
git config --global user.email "katochvaibhav3@gmail.com"
cd /tmp/ && git clone https://github.com/katoch1234/wordpress-zenkins.git;
mv wordpress-zenkins/nginx-conf/default /etc/nginx/sites-enabled/;
# mv wordpress-zenkins/* /var/www/html/;
apt install composer -y
chmod 777 /var/www/html/ && cd /var/www/html/
composer require vlucas/phpdotenv
find /var/www/html -type d -exec chmod 755 {} \;
find /var/www/html -type f -exec chmod 644 {} \;
chmod 600 /path/to/wordpress/wp-config.php
systemctl restart nginx
systemctl restart php8.1-fpm
rsync -av --progress /tmp/wordpress-zenkins/ /var/www/html/
chown -R www-data:www-data /var/www/html/ &&  chmod 700 /var/www/html/.env
rm -r /tmp/wordpress-zenkins;
