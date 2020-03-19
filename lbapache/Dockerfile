FROM ubuntu

RUN apt-get update
RUN apt-get install -y apache2

ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
ENV APACHE_RUN_DIR /var/run
ENV APACHE_PID_FILE /var/run/apache2.pid

RUN sed -r -i 's?%h ?%A %h ?' /etc/apache2/apache2.conf
RUN sed -r -i 's?\$\{APACHE_LOG_DIR\}/error.log?/dev/stderr?' /etc/apache2/apache2.conf
RUN sed -r -i 's?\$\{APACHE_LOG_DIR\}/error.log?/dev/stderr?' /etc/apache2/sites-available/000-default.conf
RUN sed -r -i 's?\$\{APACHE_LOG_DIR\}/access.log?/dev/stdout?' /etc/apache2/sites-available/000-default.conf
RUN echo 'Hello Again Apache in Docker<br>' > /var/www/html/index.html

ENTRYPOINT ["/usr/sbin/apache2"]
CMD ["-D", "FOREGROUND"]

