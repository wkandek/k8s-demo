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
```
curl -o /var/lib/mysql-files/ http:
https://gist.githubusercontent.com/jaidevd/23aef12e9bf56c618c41/raw/c05e98672b8d52fa0cb94aad80f75eb78342e5d4/books.csv
create database books;
create table book ( title varchar(80), author varchar(80), genre varchar(30), pages int, publisher varchar(60) );
load data infile '/var/lib/mysql-files/books.csv' ignore into table book fields terminated by ',' enclosed by '"' lines terminated by '\n' ignore 1 rows;
create user 'bookdb'@'%' identified by 'bookdbpass';
grant all privileges on books.* to 'bookdb'@'%';
```


