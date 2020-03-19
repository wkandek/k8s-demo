# Apache configured for loadbalancing Demo

- Dockerfile builds the image
  - single HTML page
  - listens on port 80
  - httpd.conf modified to log to stdout rather than a file
- lbapachedeployment.yaml to run a pod
  - 2 replicas 
- lbapacheservice.yaml to expose port 80
