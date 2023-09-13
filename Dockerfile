FROM ubuntu:latest

ENV TZ=America/New_York
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN apt-get update && apt-get install -y apache2 php python3 python3-pip
COPY . /var/www/html/
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
