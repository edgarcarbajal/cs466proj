create table Customers(
    Email VARCHAR(30) NOT NULL,
    CustID VARCHAR(10) NOT NULL,
    Name VARCHAR(25) NOT NULL,
    Phone VARCHAR(10) NOT NULL,
    PRIMARY KEY (CustID)
);

create table Song(
    Title VARCHAR(30) NOT NULL,
    Genre VARCHAR(30) NOT NULL,
    SongID VARCHAR(10) NOT NULL,
    Year INT NOT NULL,
    Version VARCHAR(16) NOT NULL,
    Duration time NOT NULL,
    PRIMARY KEY (SongID,Version)
);

create table Contributor(
    Name VARCHAR(25) NOT NULL,
    ContribID VARCHAR(10) NOT NULL,
    PRIMARY KEY(ContribID) 

);