FROM webgriffe/php-apache-base 
RUN mkdir /var/www/html/fol
RUN chmod -R 777 /var/www/html
RUN chmod +x /var/www/html
COPY index.html /var/www/html
COPY write1.php /var/www/html
WORKDIR /var/www/html
EXPOSE 80 
