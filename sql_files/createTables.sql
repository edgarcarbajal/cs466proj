create table Customers(
    CustID INT NOT NULL AUTO_INCREMENT,
    Email VARCHAR(30) NOT NULL,
    Name VARCHAR(30) NOT NULL,
    Phone VARCHAR(10) NOT NULL,
    PRIMARY KEY (CustID)
);

create table Song(
    SongID INT NOT NULL AUTO_INCREMENT,
    Title VARCHAR(50) NOT NULL,
    Genre VARCHAR(30) NOT NULL,
    Year INT NOT NULL,
    Version VARCHAR(16) NOT NULL,
    Duration TIME NOT NULL,
    Imagepath VARCHAR(20),
    Current VARCHAR(10) DEFAULT 'DNE',
    PRIMARY KEY (SongID,Version)
);

create table Contributor(
    ContribID INT NOT NULL AUTO_INCREMENT,
    Name VARCHAR(25) NOT NULL,
    PRIMARY KEY(ContribID) 

);

CREATE TABLE Queues(

    CustID INT NOT NULL,
    SongID INT NOT NULL,
    Version VARCHAR(16) NOT NULL,
    Time DATETIME NOT NULL,

    PRIMARY KEY(CustID, SongID, Version),
    FOREIGN KEY(CustID) REFERENCES Customers(CustID),
    FOREIGN KEY (SongID, Version) REFERENCES Song(SongID, Version)
);


CREATE TABLE PriorityQueues(

    CustID INT NOT NULL,
    SongID INT NOT NULL,
    Version VARCHAR(16) NOT NULL,
    Time DATETIME NOT NULL,
    Money DECIMAL(6,2) NOT NULL,


    PRIMARY KEY(CustID, SongID, Version),
    FOREIGN KEY(CustID) REFERENCES Customers(CustID),
    FOREIGN KEY (SongID, Version) REFERENCES Song(SongID, Version)
);


CREATE TABLE Contributes(

    ContribID INT NOT NULL,
    SongID INT NOT NULL,
    Version VARCHAR(16) NOT NULL,
    Role VARCHAR(20) NOT NULL,

    PRIMARY KEY(ContribID, SongID, Version, Role),
    FOREIGN KEY(ContribID) REFERENCES Contributor(ContribID),
    FOREIGN KEY (SongID, Version) REFERENCES Song(SongID, Version)
);