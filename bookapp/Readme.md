# Simple PHP/MySQL application 

- app/Dockerfile - builds the wkandek/bookapp application, selects a random book to read from a list of 200 books
- app/src - contains the index.php file
- app/bookappdeployment.yaml - depends on a configmap for the database server and a secrets file for username and password
- app/bookappconfigmap.yaml
- app/bookappsecrets.yaml - username and password in base64: bookdb/bookdbpass
- app/bookappservice.yaml - exposes the application
