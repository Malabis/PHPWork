FROM php:7.3-apache

COPY ./public /var/www/html
RUN chmod -R 755 /var/www/html
RUN chmod -R 1777 /var/www/html/uploads
RUN chown root:root /var/www/html
ENV SECRET_KEY "Diamond Happy"

# flag 
ENV FLAG1 "CovteamCTF{e94d657677267c9b404164f16b4909c7}"


EXPOSE 80