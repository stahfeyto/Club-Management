This repository contains the "World Class" project, a MySQL database developed for club management. The project includes a 
graphical interface in the form of a back office, a detailed report in Word and PDF format, as well as three fundamental SQL files for implementing the database.

Repository Contents: Backoffice - Graphical Interface:

Find the "Backoffice" directory to access the system's graphical interface.

To access the back office code, you need an IDE that supports PHP, JS, HTML, and CSS. In the web part of the back office, you will need to use a platform like XAMPP, MySQL Workbench to have MySQL tools, and to access the back office via the web. To enter the back office, you will need to enter the path to the back folder in the search bar of the word processor. The first page to be accessed by the admin is HomeAd.php where login and admin registration can be done. If registration is needed, it's done on the form.php page. After registration, one can go to HomeAd and select Login.php and enter the email and password of the admin that was registered. After logging in, the admin will enter the HomeBack.php directory where all the database tables will be displayed. From this graphical environment, it's possible to select which table to edit and also search for any record. When it comes to the member's login, we have directories quite similar to those of the admin but after logging in, the person will be redirected to the club's website.

Detailed Report:

The project report is available in Word (Report_World_Class_Project.docx) and PDF (Report_World_Class_Project.pdf) formats. Refer to these documents for detailed information about the database structure, design decisions, and other important considerations. SQL Files:

Import to Microsoft SQL:

Use the file Classe_Mundial_BACPAC.bacpac to import all data directly into Microsoft SQL. To perform the import, follow these steps: Open Microsoft SQL Server Management Studio (SSMS). Connect to your SQL server. Select the target database. Right-click on the database and choose "Import Data-Tier" or a similar option. Follow the instructions to select the BACPAC file and complete the import process.

If you want to import in parts:

Table Creation Script:

The Create_Tables.sql file contains the script generated through Microsoft SQL to create all necessary tables. Execute this script on your MySQL server to configure the database structure. Data Insertion:

The Insert_Values.sql file contains the data to be inserted into the database. Execute this script after creating the tables to populate the database with initial information. Important Notes:

Make sure to follow the import instructions and execute the scripts correctly to ensure the proper functioning of the database. Refer to the report to understand design decisions and obtain additional information about the project. For any questions or issues, please contact the developers responsible for the project. Thank you for choosing the World Class Project!
