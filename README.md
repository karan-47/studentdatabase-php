# studentdatabase-php

We have implemented a student database which is a distributed system in which we have included data transparency, location transparency , data replication and traffic control(semaphore).
Database has the following tables :
1) Login_credentials (uid int primary key, password varchar)
2) student_info(dob varchar, mobile_no varchar, name varchar , uid int primary key)
3) student_info2(batch varchar, college varchar, department varchar , uid int primary key, year vachar)

and create multiple copies of this data to make sure we have data duplicay

And one database (lock_status) which has one table called traffic_control for implementing locking.

traffic_control(db_name primary key varchar , status  int )
here status represents whether the database is currently being accessed.
db_name is name of different database with same data that we have created earlier.

To run this application you will have to run loginads.php, change the database name and password everywhere to make sure no error comes up.

