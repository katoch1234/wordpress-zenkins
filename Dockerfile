FROM wordpress:latest
RUN rm -r /var/www/html/* && rm -r /etc/apache2/sites-enabled/*
COPY ./default.conf /etc/apache2/sites-enabled/
COPY . /var/www/html/
EXPOSE 80
