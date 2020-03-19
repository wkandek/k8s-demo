  389  docker ps
  390  docker commit  --change='USER mysql' --change='CMD ["/usr/bin/mysqld_safe"]' --change "EXPOSE 3306"    41f26b6dccd5
  391  docker push
  392  docker ps
  393  docke rimages
  394  docker images
  395  docker tag
  396  docker tag 9e39e8574d97 wkandek/bookdb:latest
  397  docker images
  398  docker push wkandek/bookdb
  399  history
  400  history | tail -12 > readme.txt
