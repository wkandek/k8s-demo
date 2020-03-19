# Slow Webserver for horizontal scaling demo

index.php runs a slow loop to load the pod, allows to demo horizontal autoscaling

- Dockerfile to build image
  - php
  - listens on port 8080
- hpadeployment.yaml - deploys the hpa-example image
- hpaservice.yaml - exposes port 80
