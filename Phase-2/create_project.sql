drop database saa_final_library;
create database saa_final_library;

\c saa_final_library

drop table book;
drop table author;
drop table publisher;
drop table admin;
drop table department;
drop table branch;
drop table student;
drop table faculty;
drop table borrows;
drop table issues;

CREATE TABLE 	Branch
(	Branch_id CHAR(10) NOT NULL,
	Baddress VARCHAR(100) NOT NULL,
	Year_of_setup INT,
	Locality VARCHAR(30) NOT NULL,
	Bname VARCHAR(10) NOT NULL,
	PRIMARY KEY (Branch_id)
);

CREATE TABLE 	Department
(	Did CHAR(10) NOT NULL, 
	No_of_students INT NOT NULL,
	No_of_sections INT NOT NULL,
	Branch_id_dept CHAR(10) NOT NULL,
	Dname VARCHAR(50)  NOT NULL,
	PRIMARY KEY (Did),
	FOREIGN KEY (Branch_id_dept) REFERENCES Branch(Branch_id));

CREATE TABLE 	Student
(	Fname VARCHAR(15) NOT NULL ,
	Minit CHAR, 
	Lname VARCHAR(15) NOT NULL, 
	Usn CHAR(13) NOT NULL,
	Semester INT NOT NULL,
	Dob DATE,
	Twelfth_Percent DECIMAL(4,2) NOT NULL,
	CGPA DECIMAL(3,2) NOT NULL,
	Email VARCHAR(50) NOT NULL,
	Phone_no DECIMAL(10) NOT NULL,
	Did_stud CHAR(10) NOT NULL,
	Branch_id_stud CHAR(10) NOT NULL,
	password VARCHAR(50),
	PRIMARY KEY (Usn),
	FOREIGN KEY (Branch_id_stud) REFERENCES Branch(Branch_id),
	FOREIGN KEY (Did_stud) REFERENCES Department(Did));

CREATE TABLE 	Faculty
(
	Fid CHAR(10) NOT NULL,
	Fname VARCHAR(15) NOT NULL ,
	Minit CHAR, 
	Lname VARCHAR(15) NOT NULL, 
	Age INT NOT NULL,
	Year_of_join INT NOT NULL,
	Email VARCHAR(50) NOT NULL,
	Phoneno DECIMAL(10) NOT NULL,
	Address VARCHAR(100) NOT NULL,
	Did_fac CHAR(10) NOT NULL,
	Branch_id_fac CHAR(10) NOT NULL,
	password VARCHAR(50),
	PRIMARY KEY (Fid),
	FOREIGN KEY (Branch_id_fac) REFERENCES Branch(Branch_id),
	FOREIGN KEY (Did_fac) REFERENCES Department(Did)
);

CREATE TABLE Publisher
(
	Pid CHAR(10) NOT NULL,
	Paddress VARCHAR(100) NOT NULL,
	Email VARCHAR(50) NOT NULL,
	Pname VARCHAR(60) NOT NULL,
	PRIMARY KEY (Pid)
);

CREATE TABLE Author
(
	Fname VARCHAR(15) NOT NULL ,
	Minit CHAR, 
	Lname VARCHAR(15) NOT NULL, 
	Au_id CHAR(10) NOT NULL,
	Pid_auth CHAR(10) NOT NULL,
	Type VARCHAR(60),
	Genre VARCHAR(60),
	PRIMARY KEY (Au_id),
	FOREIGN KEY (Pid_auth) REFERENCES Publisher(Pid)
);

CREATE TABLE Book
(
	Book_name VARCHAR(50) NOT NULL,
	Book_id CHAR(10) NOT NULL,
	Type VARCHAR(16) NOT NULL,
	Semester INT,
	Pdate DATE NOT NULL,
	Rating DECIMAL(3,1) NOT NULL,
	Age_rest INT NOT NULL,
	Au_id_book CHAR(10) NOT NULL,
	Branch_id_book CHAR(10) NOT NULL,
	Did_book CHAR(10),
	Pid_book CHAR(10) NOT NULL,
	Genre VARCHAR(60),
	PRIMARY KEY(Book_id),
	FOREIGN KEY (Branch_id_book) REFERENCES Branch(Branch_id),
	FOREIGN KEY (Did_book) REFERENCES Department(Did),
	FOREIGN KEY (Au_id_book) REFERENCES Author(Au_id),
	FOREIGN KEY (Pid_book) REFERENCES Publisher(Pid));

CREATE TABLE Admin(
	Fname VARCHAR(15) NOT NULL ,
	Minit CHAR, 
	Lname VARCHAR(15) NOT NULL, 
	Aid CHAR(10) NOT NULL,
	Date_of_join DATE,
	Email VARCHAR(50) NOT NULL,
	Phone_no DECIMAL(10) NOT NULL,
	Branch_id_admin CHAR(10) NOT NULL,
	password VARCHAR(50),
	PRIMARY KEY (Aid),
	FOREIGN KEY (Branch_id_admin) REFERENCES Branch(Branch_id)
);
	

CREATE TABLE Borrows 
(
	Borrowal_id CHAR(10) NOT NULL,
	Due_date DATE,
	Usn_borrows CHAR(13),
	Fid_borrows CHAR(10),
	Book_id_borrows CHAR(10),
	Overdue_fees INT,
	PRIMARY KEY (Borrowal_id),
	FOREIGN KEY (Usn_borrows) REFERENCES Student(Usn),
	FOREIGN KEY (Fid_borrows) REFERENCES Faculty(Fid),
	FOREIGN KEY (Book_id_borrows) REFERENCES Book(Book_id)
);

CREATE TABLE Issues 
(
	Issue_id CHAR(10) NOT NULL,
	Issue_date DATE,
	Book_id_issues CHAR(10) NOT NULL,
	Aid_issues CHAR(10) NOT NULL,
	PRIMARY KEY (Issue_id),
	FOREIGN KEY (Book_id_issues) REFERENCES Book(Book_id),
	FOREIGN KEY (Aid_issues) REFERENCES Admin(Aid)
);