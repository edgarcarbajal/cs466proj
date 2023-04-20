INSERT INTO Customers (Email,CustID,Name,Phone)  
   /* data set 1 */
VALUES('robertdavis1234@gmail.com',
        '1234',
        'Robert Davis',
        '555-123-4567'),
        /* data set 2 */
        (' sarahjohnson5678@yahoo.com',
        '5678',
        'Sarah Johnson',
        '555-987-6543'),
        /* data set 3 */
        ('mikejackson9101@hotmail.com',
        '9101',
        'Mike Jackson',
        '555-555-1212'),
        /* data set 4 */
        ('janetwilson1212@gmail.com',
        '1212',
        ' Janet Wilson',
        '555-555-5555'),
        /* data set 5 */
        ('jasonsanchez3434@yahoo.com',
        '3434',
        'Jason Sanchez',
        '555-555-1234'),
        /* data set 6 */
        ('karenrodriguez5555@hotmail.com',
        '5555',
        'Karen Johnson',
        '555-555-4321'),
        /* data set 7 */
        ('davidbrown7890@gmail.com',
        '7890',
        'David Brown',
        '555-555-9876'),
        /* data set 8 */
        ('amandamiller2468@yahoo.com',
        '2468',
        'Amanda Miller',
        '555-555-3478'),
        /* data set 9 */
        ('kevinsullivan2222@hotmail.com',
        '2222',
        'Kevin Sullivan',
        '555-555-2121'),
        /* data set 10 */
        ('lisajones7777@gmail.com',
        '7777',
        'Lisa Jones',
        '773-301-4908');

INSERT INTO Song (Title, Genre, SongID, Year, Version, Duration) 
VALUES 
    ('Bohemian Rhapsody', 'Rock', '0001', 1975, 'Duet', '00:05:55'),
    ('Thriller', 'Pop', '0002', 1984, 'Single', '00:05:57'),
    ('Sweet Child O'' Mine', 'Rock', '0003', 1987, 'Duet', '00:05:55'),
    ('Hotel California', 'Rock', '0004', 1976, 'Single', '00:06:30'),
    ('Stairway to Heaven', 'Rock', '0005', 1971, 'Duet', '00:08:02'),
    ('Back in Black', 'Rock', '0006', 1980, 'Single', '00:04:14'),
    ('Billie Jean', 'Pop', '0007', 1983, 'Duet', '00:04:54'),
    ('Smells Like Teen Spirit', 'Rock', '0008', 1991, 'Single', '00:05:01'),
    ('Livin'' on a Prayer', 'Rock', '0009', 1986, 'Duet', '00:04:09'),
    ('Yesterday', 'Pop', '0010', 1965, 'Single', '00:02:05'),
    ('Sweet Home Alabama', 'Rock', '0011', 1974, 'Duet', '00:04:44'),
    ('Nothing Else Matters', 'Rock', '0012', 1991, 'Single', '00:06:28'),
    ('Boys Don''t Cry', 'Pop', '0013', 1979, 'Duet', '00:02:37'),
    ('Enter Sandman', 'Rock', '0014', 1991, 'Single', '00:05:31'),
    ('Waterloo', 'Pop', '0015', 1974, 'Duet', '00:02:47'),
    ('Like a Rolling Stone', 'Rock', '0016', 1965, 'Single', '00:06:13'),
    ('I Will Always Love You', 'Pop', '0017', 1992, 'Duet', '00:04:31'),
    ('Paint It Black', 'Rock', '0018', 1966, 'Single', '00:03:45'),
    ('More Than Words', 'Rock', '0019', 1990, 'Duet', '00:05:35'),
    ('Every Breath You Take', 'Pop', '0020', 1983, 'Single', '00:04:13'),
    ('What''s Going On', 'Pop', '0021', 1971, 'Duet', '00:03:51'),
    ('My Heart Will Go On', 'Pop', '0022', 1997, 'Single', '00:04:41'),
    ('Born to Run', 'Rock', '0023', 1975, 'Duet', '00:04:30'),
    ('Stereo Love', 'Meme', '0021', 2009, 'Duet', '00:04:12'),
    ('Ladies and Gentlemen We Got Him', 'Meme', '0022', 2019, 'Single', '00:03:34'),
    ('Bed Intruder Song', 'Meme', '0023', 2010, 'Single', '00:03:23'),
    ('Perfect', 'Pop', '0024', 2017, 'Single', '00:04:24'),
    ('GANGNAM STYLE', 'Korean', '0025', 2012, 'Single', '00:03:43'),
    ('Despacito', 'Pop', '0026', 2017, 'Duet', '00:04:11'),
    ('We are Number One', 'Meme', '0027', 2014, 'Duet', '00:02:23'),
    ('Baba Yaga', 'Death Metal', '0028', 2021, 'Single', '00:04:18'),
    ('F.U.N. Song', 'Meme', '0029', 2009, 'Duet', '00:05:31'),
    ('Never Gonna Give You Up', 'Meme', '0030', 1987, 'Single', '00:03:33');

INSERT INTO Contributor (Name, ContribID)
VALUES                  -- v for Bohemian Rhapsody
        ('Queen', '1'), -- Artist, producer
        ('Freddie Mercury', '2'), -- Writer, vocals, piano
        ('John Deacon', '3'), -- bass
        ('Roger Taylor', '4'), -- drums
        ('Brian May', '5'), -- guitar
        -- vv for Thriller
        ('Micheal Jackson', '6'), --vocalist, artist
        ('Rod Temperton','7'), --writer
        ('Quincy Jones', '8'), -- producer
        -- vv for Sweet Child O'' Mine
        ('Guns N Roses', '9'), -- artist
        ('Mike Clink', '10'),  --producer
        ('Axl Rose', '11'), --writter, vocals
        ('Slash', '12'),    -- writer, guitar
        ('Duff', '13'),     --writer, bass
        ('Steven Adler', '14'), --writer, drums
        ('Izzy Stradlin', '15'),
        --vv Hotel California
        ('Bill Szymczyk', '16'), -- producer
        ('Don Felder', '17'),  --guitar, writer
        ('Glenn Frey','18'),  --guitar, writer
        ('Joe Walsh', '19'), --guitar, writer
        ('Don Henley', '20'), --drums, vocals
        ('Eagles', '21'), --artist
        -- vv Stairway to Heaven
        ('Jimmy Page','22'), -- producer,writer,guitar 
        ('Robert Plant','23'), -- writer, vocals
        ('John Paul Jones','24'), -- guitar, piano
        ('John Bonham','25'), -- drums
        -- vv Back in Black
        ('Robert John Lange', '26'), --producer
        ('Cliff Williams', '27'), --bass
        ('Malcom Young', '28'), -- guitar, writer
        ('Angus Young', '29'), --guitar, writer
        ('Brian Johnson', '30'), --vocals, writer
        ('AC DC', '31'), --artist
        -- vv Billie Jean
        -- quincyjones - producer
        -- micheal jackson - producer, writer, vocals
        --
        -- vv Smells Like Teen Spirit
        ('Nirvana', '32'), --artist
        ('Butch Vig', '33'), --producer
        ('Kurt Cobain', '34'), --guitar, vocal, writer
        ('Dave Grohl', '35'), -- drums, writer
        ('Krist Novoselic', '36'), --bass, writer
        -- vv Livin' on a Prayer
        ('Bon Jovi','37'), --artist
        ('Jon Bon Jovi', '38'), --guitar, vocals, writter, 
        ('Richie Sambora', '39'), --writer, guitar
        ('Desmond Child', '40'), --writer
        ('Alec John Such', '41'), --bass
        ('Bruce Fairbairn', '42'), --producer
        -- vv Yesterday
        ('George Martin', '43'), --producer, strings
        ('Paul McCartney','44'), --vocals, guitar
        ('John Lennon', '45'), --writter
        ('Lennon-McCartney', '46'), --writter
        --
        -- Sweet Home Alabama -- 
    ('Al Kooper', '47'), -- Producer
    ('Lynyrd Skynyrd', '48'), -- artist
    ('Ronnie Van Zant', '49'), -- writer, vocals
    ('Gary Rossington', '50'), -- writer, guitar
    ('Ed King', '51'), -- writer, guitar
    ('Bob Burns', '52'), -- drums 
    ('Leon Wilkeson', '53'),-- bass 
    ('Allen Collins', '54'), -- guitar
    ('Billy Powell', '55'), -- piano

    -- Nothing Else Matters --
    ('Bob Rock', '56'), --producer
    ('Metallica', '57'),--artist
    ('James Hetfield', '58'), --producer, guitar
    ('Lars Ulrich', '59'), --producer, drums 
    ('Jason Newsted', '60'), -- bass, vocals
    ('Kirk Hammett', '61'), -- guitar 

    -- Boys Don''t Cry -- 
    ('Chris Parry', '62'), -- producer 
    ('The Cure', '63'),-- artist
    ('Michael Dempsey', '64'), -- writer, guitar 
    ('Lol Tolhurst', '65'), -- writer, drums 
    ('Robert Smith', '66'), -- writer, guitar

 /*   -- Enter Sandman -- 
    ('Bob Rock'), --producer
    ('Metallica'),--artist
    ('James Hetfield'), --producer, guitar
    ('Lars Ulrich'), --producer, drums 
    ('Jason Newsted'), -- bass, vocals
    ('Kirk Hammett'), -- guitar */
    
    -- Waterloo -- 
    ('Benny Anderson', '67'),-- producer, writer
    ('ABBA', '68'), -- artist
    ('Bjön Ulvaeus', '69'),-- producer, writer, guitar
    ('Stig Anderson', '70'),-- writer
    ('Ola Brunkert', '71'),-- drums
    ('Rutger Gunnarsson', '72'),-- bass 
    ('Janne Schaffer', '73'), -- guitar
    ('Anni-Frid Lyngstad','74'),-- vocals 
    ('Agnetha Fältskog', '75'), -- vocals 

    -- Like a Rolling Stone -- 
    ('Tom Wilson', '76'), -- producer
    ('Bob Dylan', '77'), --artist
    ('Bob Dylan', '78'), -- writer , Harmonica, guitar 
    ('Joe Macho Jr.', '79'), -- bass
    ('Mike Bloomfield', '80'), -- guitar 
    ('Frank Owens', '81'), -- piano 
    ('Bobby Gregg', '82'), -- drums

    -- I Will Always Love You -- 
    ('David Foster', '83'), -- producer  
    ('Whitney Houston', '84'), --artist
    ('Dolly Parton ', '85'), -- writer 
    ('Neil Stubenhaus', '86'), -- bass  
    ('Kirk Whalum', '87'), -- Saxophone 
    ('Ricky Lawson', '88'), -- drums 

    --Paint It Black--
    ('Andrew Loog Oldham', '89'), -- producer
    ('Rolling Stone', '90'), -- artist
    ('Mick Jagger', '91'), -- writer, vocals 
    ('Keith Richards', '92'), --writer, guitar 
    ('Bill Wyman', '93'), -- bass 
    ('Charile Watts', '94'), -- drums

    --More Than Words --
    ('Michael Wagener', '95'), -- producer
    ('Extreme', '96'), -- artist
    ('Gary Cherone', '97'), -- writer 
    ('Nuno Bettencourt', '98'), -- writer

    --Every Breath You Take --
    ('The Police', '99'), -- producer , artist 
    ('Hugh Padgham', '100'), -- producer 
    ('Sting', '101'), -- writer, guitar, vocals, piano
    ('Stewart Copeland', '102'), -- drums 
    ('Andy Summers', '103'), -- guit
    --
 -- vv for Stereo love
    ('Edward Maya','104'), -- Artist
    ('Vika Jigulina','105'), -- Vocalist
 -- vv for Ladies and Gentlemen We got him
    ('Breakbot','106'),  -- Artist
    ('Irfane','107'), -- Vocalist
 -- vv for Bed Intruder Song
    ('The Gregory Brothers','108'), -- Artist
    ('Antoine Dodson','109'), -- Vocalist
    ('Kelly Dodson','110'), -- Vocalist
    ('Michael Gregory','111'), -- Producer
 -- vv for Perfect
    ('Benny Blanco','112'), -- Producer
    ('Will Hicks','113'), -- Producer
    ('Ed Sheeran','114'), -- Artist
 -- vv for Gangnam style
    ('PSY','115'), -- Artist
    ('Yoo Gun Hyung','116'), -- Producer
    ('Yang Hyun Suk','117'), -- Producer
 -- vv for Despacito 
    ('Daddy Yankee','118'), -- Feature
    ('Luis Fonsi','119'), -- Artist
    ('Andres Torres','120'), -- Producer
    ('El Dandee','121'), -- Producer
    ('Justin Beiber','122'), -- Feature
 -- vv for We are number one
    ('Mani Svavarsson','123'),  -- Producer
    ('LazyTown','124'),  -- Artist
    ('Stefan Karl Stefansson','125'), -- Vocalist
 -- vv for Baba Yaga
    ('Slaughter to prevail','126'), -- Artist
    ('Jack Simmons','127'),  -- Guitar
    ('Ivan Anthropocide','128'),  -- Mastering Engineer
    ('Mike Petrov','129'), -- Bass
    ('Evgeny Novikov','130'), -- Drums
    ('Alex Terrible','131'),  -- Vocals
 -- vv for F.U.N. song
    ('Spongebob Squarepants','132'), -- Artist
    ('Plankton','133'),  -- Feature
    ('Albie Hecht','134'), -- Producer
    ('Sherm Cohen','135'), -- Writer
 -- vv for Never gonna give you up
    ('Rick Astley','136'), -- Artist 
    ('Mike Stock','137'), -- Writer
    ('Matt Aitken','138'), -- Writer
    ('Pete Waterman','139'), -- Writer
    ('Stock Aitken Waterman','140');  -- Producer



INSERT INTO Contributes (ContribID, SongID, Version, Role)
VALUES
    ('1', '0001', 'Duet', 'Artist'),
    ('1', '0001', 'Duet', 'Producer'),
    ('2', '0001', 'Duet', 'Writer'),
    ('2', '0001', 'Duet', 'Vocals'),
    ('2', '0001', 'Duet', 'Piano'),
    ('3', '0001', 'Duet', 'Bass'),
    ('4', '0001', 'Duet', 'Drums'),
    ('5', '0001', 'Duet', 'Guitar'),
    -- next song --
    ('6', '0002', 'Single', 'Vocals'),
    ('6', '0002', 'Single', 'Artist'),
    ('7', '0002', 'Single', 'Writer'),
    ('8', '0002', 'Single', 'Producer'),
    -- next --
    ('9', '0003', 'Duet', 'Artist'),
    ('10', '0003', 'Duet', 'Producer'),
    ('11', '0003', 'Duet', 'Writer'),
    ('11', '0003', 'Duet', 'Vocals'),
    ('12', '0003', 'Duet', 'Writer'),
    ('12', '0003', 'Duet', 'Guitar'),
    ('13', '0003', 'Duet', 'Writer'),
    ('13', '0003', 'Duet', 'Bass'),
    ('14', '0003', 'Duet', 'Writer'),
    ('14', '0003', 'Duet', 'Drums'),
    ('15', '0003', 'Duet', 'Writer'),
    ('15', '0003', 'Duet', 'Guitar'),
    -- next --
    ('16', '0004', 'Single', 'Producer'),
    ('17', '0004', 'Single', 'Guitar'),
    ('17', '0004', 'Single', 'Writer'),
    ('18', '0004', 'Single', 'Guitar'),
    ('18', '0004', 'Single', 'Writer'),
    ('19', '0004', 'Single', 'Guitar'),
    ('19', '0004', 'Single', 'Writer'),
    ('20', '0004', 'Single', 'Drums'),
    ('20', '0004', 'Single', 'Vocals'),
    ('21', '0004', 'Single', 'Artist'),
    -- next --
    ('22', '0005', 'Duet', 'Producer'),
    ('22', '0005', 'Duet', 'Writer'),
    ('22', '0005', 'Duet', 'Guitar'),
    ('23', '0005', 'Duet', 'Writer'),
    ('23', '0005', 'Duet', 'Vocals'),
    ('24', '0005', 'Duet', 'Piano'),
    ('24', '0005', 'Duet', 'Guitar'),
    ('25', '0005', 'Duet', 'Drums'),
    -- next --
    ('26', '0006', 'Single', 'Producer'),
    ('27', '0006', 'Single', 'Bass'),
    ('28', '0006', 'Single', 'Guitar'),
    ('28', '0006', 'Single', 'Writer'),
    ('29', '0006', 'Single', 'Guitar'),
    ('29', '0006', 'Single', 'Writer'),
    ('30', '0006', 'Single', 'Vocals'),
    ('30', '0006', 'Single', 'Writer'),
    ('31', '0006', 'Single', 'Artist'),
    -- next --
    ('6', '0007', 'Duet', 'Producer'),
    ('6', '0007', 'Duet', 'Writer'),
    ('6', '0007', 'Duet', 'Vocals'),
    ('8', '0007', 'Duet', 'Producer'),
    -- next --
    ('32', '0008', 'Single', 'Artist'),
    ('33', '0008', 'Single', 'Producer'),
    ('34', '0008', 'Single', 'Guitar'),
    ('34', '0008', 'Single', 'Vocals'),
    ('34', '0008', 'Single', 'Writer'),
    ('35', '0008', 'Single', 'Drums'),
    ('35', '0008', 'Single', 'Writer'),
    ('36', '0008', 'Single', 'Bass'),
    ('36', '0008', 'Single', 'Writer'),
    -- next --
    ('37', '0009', 'Duet', 'Artist'),
    ('38', '0009', 'Duet', 'Guitar'),
    ('38', '0009', 'Duet', 'Vocals'),
    ('38', '0009', 'Duet', 'Writer'),
    ('39', '0009', 'Duet', 'Guitar'),
    ('39', '0009', 'Duet', 'Writer'),
    ('40', '0009', 'Duet', 'Writer'),
    ('41', '0009', 'Duet', 'Bass'),
    ('42', '0009', 'Duet', 'Producer'),
    -- next --
    ('43', '0010', 'Single', 'Producer'),
    ('43', '0010', 'Single', 'Strings'),
    ('44', '0010', 'Single', 'Vocals'),
    ('44', '0010', 'Single', 'Guitar'),
    ('45', '0010', 'Single', 'Writer'),
    ('46', '0010', 'Single', 'Writer'),
   -- Sweet Home Alabama --
   ('47','0011','Duet','Producer'),
   ('48','0011,Duet','Artist'),
   ('49','0011,Duet','Writer'),
   ('49','0011,Duet','Vocals'),
   ('50','0011,Duet','Writer'),
   ('50','0011,Duet','Guitar'),
   ('51','0011,Duet','Writer'),
   ('51','0011,Duet','Guitar'),
   ('52','0011,Duet','Drums'),
   ('53','0011,Duet','Bass'),
   ('54','0011,Duet','Guitar'),
   ('55','0011,Duet','Piano'),

   -- Nothing Else Matters --
   ('56','0012','Single','Producer'),
   ('57','0012','Single','Artist'),
   ('58','0012','Single','Producer'),
   ('58','0012','Single','Guitar'),
   ('59','0012','Single','Producer'),
   ('59','0012','Single','Drums'),
   ('60','0012','Single','Bass'),
   ('60','0012','Single','Vocals'),
   ('61','0012','Single','Guitar'),

   -- Boys Don't Cry --
   ('62','0013','Duet','Producer'),
   ('63','0013','Duet','Artist'),
   ('64','0013','Duet','Writer'),
   ('64','0013','Duet','Guitar'),
   ('65','0013','Duet','Writer'),
   ('65','0013','Duet','Drums'),
   ('66','0013','Duet','Writer'),
   ('66','0013','Duet','Guitar'),

   -- Enter Sandman --
   ('56','0014','Single','Producer'),
   ('57','0014','Single','Artist'),
   ('58','0014','Single','Producer'),
   ('58','0014','Single','Guitar'),
   ('59','0014','Single','Producer'),
   ('59','0014','Single','Drums'),
   ('60','0014','Single','Bass'),
   ('60','0014','Single','Vocals'),
   ('61','0014','Single','Guitar'),

   -- Waterloo --
   ('67','0015','Duet','Producer'),
   ('68','0015','Duet','Artist'),
   ('69','0015','Duet','Producer'),
   ('69','0015','Duet','Writer'),
   ('69','0015','Duet','Guitar'),
   ('70','0015','Duet','Writer'),
   ('71','0015','Duet','Drums'),
   ('73','0015','Duet','Guitar'),
   ('74','0015','Duet','Vocals'),
   ('75','0015','Duet','Vocals'),

   -- Like a Rolling Stone --
   ('76','0016','Single','Producer'),
   ('77','0016','Single','Artist'),
   ('78','0016','Single','Writer'),
   ('78','0016','Single','Harmonica'),
   ('78','0016','Single','Guitar'),
   ('79','0016','Single','Bass'),
   ('80','0016','Single','Guitar'),
   ('81','0016','Single','Piano'),
   ('82','0016','Single','Drums'),

   -- I will Always Love You --
   ('83','0017','Duet','Producer'),
   ('84','0017','Duet','Artist'),
   ('85','0017','Duet','Writer'),
   ('86','0017','Duet','Bass'),
   ('87','0017','Duet','Saxophone'),
   ('88','0017','Duet','Drums'),

   -- Paint It Back --
   ('89','0018','Single','Producer'),
   ('90','0018','Single','Artist'),
   ('91','0018','Single','Writer'),
   ('91','0018','Single','Vocals'),
   ('92','0018','Single','Writer'),
   ('92','0018','Single','Guitar'),
   ('93','0018','Single','Bass'),
   ('94','0018','Single','Drums'),

   -- More Than Words -- 
   ('95','0019','Duet','Producer'),
   ('96','0019','Duet','Artist'),
   ('97','0019','Duet','Writer'),
   ('98','0019','Duet','Writer'),

   -- Every Breath You Take -- 
   ('99','0020','Single','Producer'),
   ('99','0020','Single','Artist'),
   ('100','0020','Single','Producer'),
   ('101','0020','Single','Writer'),
   ('101','0020','Single','Guitar'),
   ('101','0020','Single','Vocals'),
   ('101','0020','Single','Piano'),
   ('102','0020','Single','Drums'),
   ('103','0020','Single','Guitar'), 

   -- last 10 songs





   --- end of stuff contibutes table here

INSERT INTO PriorityQueues (CustID, SongID, Version, Time, Money)
VALUES
    ('5555', '0025', 'Single', '2023-04-20 16:36:30', 12.50),
    ('7890', '0026', 'Duet', '2023-04-20 16:45:22', 2.75),
    ('2468', '0027', 'Duet', '2023-04-20 16:45:39', 5.00),
    ('2222', '0028', 'Single', '2023-04-20 16:51:00', 10.50),
    ('7777', '0029', 'Single', '2023-04-20 17:23:00', 3.00);

    INSERT INTO Queues(CustID,SongID,Version,Time)
VALUES 
    ('1234','0001','Duet','2023-04-20 4:33:40'),
    ('2222','0002','Single','2023-04-20 10:45:04'),
    ('7777','0003','Duet','2023-04-20 12:30:20'),
    ('7890','0004','Single','2023-04-20 6:45:21'),
    ('3434','0005','Duet','2023-04-20 8:43:28');


