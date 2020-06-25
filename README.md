# sampleProject

## Steps to Run

* Download Xampp
* git clone `https://github.com/pradhuman1/sampleProject.git`
* Paste sampleProject in htdocs of lampp folder
* Start Server in Xampp
* hit url `http://localhost:8080/sampleProject/user.php`

### About Database
* go to `http://localhost:8080/phpmyadmin/`
* Create two mySQL Databases named "users" and "gh_members"

#### For users

* Create a table named "info" with two columns "loginID" and "password" 
* type of columns should be varchar and let the other fields empty

#### For gh_members

* Create a table named "memberInfo" with two columns "name" and "wing" 
* type of columns should be varchar and let the other fields empty

## A sample user with  Username = "exampleID" and password = "password" will be added to info table when you hit url `http://localhost:8080/sampleProject/user.php`

