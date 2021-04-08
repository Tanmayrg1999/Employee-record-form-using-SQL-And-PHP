# Employee-record-form-using-SQL-And-PHP
I have created a User interface page in php to read the employee details from the user and inserted it into the database.
## What was the main Objective ?
The main goal was to take the record from user and store the employee details in a database server.
Employee details included employee id,employee first-name,employee last-name,employee city,employee date of birth.

## Technology Stack 
The table is created in phpMyAdmin in a databse named user_data an table named as employee_record. phpMyAdmin is a free software tool written in PHP, intended to handle the administration of MySQL over the Web. phpMyAdmin supports a wide range of operations on MySQL and MariaDB. Frequently used operations (managing databases, tables, columns, relations, indexes, users, permissions, etc) can be performed via the user interface, while you still have the ability to directly execute any SQL statement.
XAMPP is the most popular PHP development environment.
XAMPP is a completely free, easy to install Apache distribution containing MariaDB, PHP, and Perl. The XAMPP open source package has been set up to be incredibly easy to install and to use. It was used to start the apache and mySQL server.Xampp can be easily downloaded and installed from https://www.apachefriends.org/index.html.
Sublime text was the editor that was used to write the code.Sublime Text is a sophisticated text editor for code, markup and prose. You'll love the slick user interface, extraordinary features and amazing performance.It can be easily downloaded from https://www.sublimetext.com/.

## Language used:
PHP:

PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages. PHP is a widely-used, free, and efficient alternative to competitors such as Microsoft's ASP.

HTML:

HTML is the standard markup language for Web pages.With HTML you can create your own Website.
The HyperText Markup Language, or HTML(HyperText Markup Language) is the standard markup language for documents designed to be displayed in a web browser.

BOOTSTRAP:

Bootstrap 4 is the newest version of Bootstrap, which is the most popular HTML, CSS, and JavaScript framework for developing responsive, mobile-first websites.
Bootstrap 4 is completely free to download and use!


MYSQL:

MySQL is a database system used on the web. It is a database system that runs on a server. It is ideal for both small and large applications. MySQL is very fast, reliable, and easy to use.

## Steps:

1.Firstly I designed a web page layout in sublime text editor usinh php in Index.php. This file had a Employee record as its label.

2.Then I created a form using php and inside div tags I added Employee attributes include his Id,first-name,last-name,city and his Date of Birth. All of these were given a input type as number except for the date of birth which was of date type.

3.Finally a button for submitting user entered data was placed on the page (namely Submit Button).

4.Nextly we created a SQL Database in phpmyadmin which can be accesed through http://localhost/phpmyadmin.

5.For working with phpmyadmin we need to start a SQL server from XAMPP control panel and also the Apache server. Its job is to serve websites on the internet.

6.Now we need to create a database in phpmyadmin and create a table inside this database with attributes mentioned in our PHP form. SQL is a database language, it is used for database creation, deletion, fetching rows, and modifying rows, etc.

7.In my case I have designed a database named 'user_data' inside it I created a table named 'employee_record' with employee_id as the primary key ,since it must be unique to each and every employee.The PRIMARY KEY constraint uniquely identifies each record in a table. Primary keys must contain UNIQUE values, and cannot contain NULL values.

8.After succsefully creating a database and a server we need to design our userinfo.php page where we will do all our connections with the server i.e. backend and frontend connections.Here first I would check wheather or not I am connected to my database and echo the corresponding response. Echo is a statement, which is used to display the output.

9.Nextly i designed variables in this page to store all the five attribute vaues of employee as entered by user and collect the response from the index page. 

10.Nextly we fired a query which would succesfully insert the user data in our table employee_record.The SQL INSERT INTO Statement is used to add new rows of data to a table in the database.

11.Now on refreshing the table we can easily find the record inserted succesfully with all the constraint in mind.

## Snapshots
![record](https://user-images.githubusercontent.com/53641559/113853958-ef09af80-97bb-11eb-9083-80b810b2f109.png)

![database](https://user-images.githubusercontent.com/53641559/113853954-edd88280-97bb-11eb-9105-b7a3a4d85c0d.png)
