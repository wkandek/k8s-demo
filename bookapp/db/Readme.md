# MySQL database handbuilt

- ubuntu 18.04
- install mysql
- create a database
- create a table
- create a user
- grant user access
- load table
- configure run for docker image
  docker commit  --change='USER mysql' --change='CMD ["/usr/bin/mysqld_safe"]' --change "EXPOSE 3306"    41f26b6dccd5



