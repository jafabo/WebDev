# Use Ubuntu as the base image
FROM ubuntu:23.10

# Set the time zone
ENV TZ=America/New_York
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

# Install Apache, PHP, Python
RUN apt-get update && apt-get install -y apache2 php python3 python3-pip

# Copy custom Apache configuration
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf

# Enable the site configuration
RUN a2ensite 000-default.conf

# Remove default Apache index.html
RUN rm /var/www/html/index.html

# Copy your web files to Apache's root folder
COPY ./web-files/ /var/www/html/


# Expose port 80
EXPOSE 80

# Run Apache in foreground and reload its config before
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]

