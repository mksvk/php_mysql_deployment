FROM mysql:8.0

# Set environment variables
ENV MYSQL_ROOT_PASSWORD=mksvk
ENV MYSQL_DATABASE=tms
ENV MYSQL_USER=tms_user
ENV MYSQL_PASSWORD=tms_password

# Copy snapshot file to container
COPY tms.sql /docker-entrypoint-initdb.d/

# Expose MySQL port
EXPOSE 3306

# Start MySQL server
CMD ["mysqld"]
