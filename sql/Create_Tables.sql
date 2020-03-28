/*update table Job(
	jobID int NOT NULL AUTO_INCREMENT primary key, 
    jobType varchar(11),
    jobName varchar(255),
    city varchar(255),
    state varchar(2),
    yearCompleted year,
    style varchar(255),
    footage int,
    fullDescription varchar(420)
);

create table ProjectType(
	projectTypeID int NOT NULL auto_increment primary key,
    projectType varchar(255)
);

create table JobProjectType(
	jobID int, 
    projectTypeID int,
    foreign key (jobID) references Job(jobID),
    foreign key (projectTypeID) references ProjectType(projectTypeID)
);

alter table Job AUTO_INCREMENT=1; 

insert into Job(jobType, jobName, city, state, yearCompleted, style, footage, fullDescription)
values("Residential", "Test1", "North Hills", "CA", 2020, "Baroque", 200000, "This is a test");

insert into ProjectType(projectType)
values("Remodel");

insert into ProjectType(projectType)
values("Addition");

*/

drop table Images;

create table Images(
	jobID int,
    image blob,
    foreign key (jobID) references Job(jobID)
);

insert into Images(jobID, image)
values(1, load_file("/public_html/img/1/house1.jpg"));
