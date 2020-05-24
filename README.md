### Overview

Test project, which implements CRUD operations and the ability to filter table data

#### What technologies were used in the project:

#### 1) PHP 7.
###### To create logic of pages and link with DB. In "index.php" some logic and grab data from DB, in "process.php" file requests to the DB with SQL synt.
#### 2) HTML 5.
###### To create a pages for project.
#### 3) Bootstrap 4.
###### For easy page style creation.
#### 4) MySQL
###### To create a relational database. Here one DB - "e-stations" with two tables - "stations" and "cities"
#### 5) JQuery
###### To create a script that adds the ability to filter the list by parameters 

#### Some description about project structure:

#### index.php - ###### main page with list and forms for add new record to list of stations or cities
#### process.php - PHP config file for connection to DB and requests. 
#### info.php - info page with some description about project.
#### ddtf.js - ready-to-use JS plugin to add filtering to the list.
#### table.css - CSS file for config a work of ddtf.js
#### src folder - screenshots of using the project for the info.php

#### What would I add if I had more time:
#### 1) Link with Google maps to use location tags and look for nearest location.
#### 2) Pagination of list.
#### 3) Login system to crate user and admin role. Only admins can add/update/delete record from list.
#### 4) Add a label of "favorite" for users.
