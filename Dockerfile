FROM nginx:alpine

# Remove the default index.html provided by Nginx
RUN rm /usr/share/nginx/html/index.html

# Create a new index.html with "New Dashboard" content
RUN echo '<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Dashboard</title></head><body><h1>New Dashboard</h1></body></html>' > /usr/share/nginx/html/index.html

# Expose port 80 to the outside world
EXPOSE 80

# Start Nginx when the container has provisioned.
CMD ["nginx", "-g", "daemon off;"]