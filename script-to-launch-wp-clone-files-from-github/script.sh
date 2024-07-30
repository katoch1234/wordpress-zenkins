#!/bin/bash
sudo apt update;
sudo apt install nginx php8.1 php8.1-fpm libapache2-mod-php php-mysql php-curl php-gd php-mbstring php-xml php-xmlrpc php-soap php-intl php-zip git -y;
sudo systemctl stop apache2 && sudo apt purge apache2 -y;
sudo systemctl start nginx;
sudo systemctl start php8.1-fpm;
cd /tmp/ && git clone https://github.com/katoch1234/wordpress-zenkins.git;
sudo mv wordpress-zenkins/nginx-conf/default /etc/nginx/sites-enabled/;
#sudo mv wordpress-zenkins/* /var/www/html/;
sudo rsync -av --progress wordpress-zenkins/ /var/www/html/
sudo chown -R www-data:www-data /var/www/html/ && sudo chmod 700 /var/www/html/.env
sudo rm -r wordpress-zenkins;