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

CREATE TABLE Queues(

CustID VARCHAR(10) NOT NULL,
SongID VARCHAR(10) NOT NULL,
Version VARCHAR(16) NOT NULL,
Time DATETIME NOT NULL,

PRIMARY KEY(CustID, SongID, Version),
FOREIGN KEY(CustID) REFERENCES Customers(CustID),
FOREIGN KEY(SongID) REFERENCES Song(SongID),
FOREIGN KEY(Version) REFERENCES Song(Version)
);


CREATE TABLE PriorityQueues(

CustID VARCHAR(10) NOT NULL,
SongID VARCHAR(10) NOT NULL,
Version VARCHAR(16) NOT NULL,
Time DATETIME NOT NULL,
Money DECIMAL(6,2) NOT NULL,

PRIMARY KEY(CustID, SongID, Version),
FOREIGN KEY(CustID) REFERENCES Customers(CustID),
FOREIGN KEY(SongID) REFERENCES Song(SongID),
FOREIGN KEY(Version) REFERENCES Song(Version)
);


CREATE TABLE Contributes(

ContribID VARCHAR(10),
SongID VARCHAR(10),
Version VARCHAR(16),
Role VARCHAR(20),

PRIMARY KEY(ContribID, SongID, Version),
FOREIGN KEY(ContribID) REFERENCES Contributor(ContribID),
FOREIGN KEY(SongID) REFERENCES Song(SongID),
FOREIGN KEY(Version) REFERENCES Song(Version)
);