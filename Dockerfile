# Use Ubuntu 22.04 LTS as the base image to ensure compatibility
FROM ubuntu:22.04

# Set non-interactive frontend (to avoid prompts during package installation)
ENV DEBIAN_FRONTEND=noninteractive

# Set the time zone
ENV TZ=America/New_York
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

# Install Apache, PHP, and Python
# - Include software-properties-common for add-apt-repository
# - Clean up the apt cache to reduce the image size
RUN apt-get update && apt-get install -y \
    apache2 \
    php \
    python3 \
    python3-pip \
    software-properties-common \
    && rm -rf /var/lib/apt/lists/*

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

# Expose port 443
EXPOSE 443

# Run Apache in foreground
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
