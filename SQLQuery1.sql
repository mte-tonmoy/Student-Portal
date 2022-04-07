/* Create Database Portal*/
CREATE TABLE Students (
    
	First_Name varchar(200) not null,
	Last_Name varchar(200) not null,
    	Email varchar(200) not null,
	Student_Id int not null,
	Batch_Number int not null,
	Section varchar(200) not null,
	Course_Code text not null,
	Course_Title text not null,
	Password text not null,
	Confirm_Password text not null,
	Semester text not null
   
);