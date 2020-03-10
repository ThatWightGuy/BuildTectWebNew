create table Job(
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

create table Images(
	jobID int,
    fileLocation varchar(255),
    foreign key (jobID) references Job(jobID)
);

create table ProjectType(
	jobID int, 
    projectType varchar(255),
    foreign key (jobID) references Job(jobID)
);

insert into Job(jobType, jobName, city, state, yearCompleted, style, footage, fullDescription)
values("Residential", "Test", "North Hills", "CA", 2020, "Baroque", 200000, "This is a test");