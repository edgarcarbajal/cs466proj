ALTER TABLE Customers AUTO_INCREMENT=1; -- Set the auto increment for each table start!

INSERT INTO Customers (Email,Name,Phone)  
   /* data set 1 */
VALUES('robertdavis1234@gmail.com','Robert Davis','5551234567'),
        /* data set 2 */
        ('sarahjohnson5678@yahoo.com','Sarah Johnson','5559876543'),
        /* data set 3 */
        ('mikejackson9101@hotmail.com','Mike Jackson','5555551212'),
        /* data set 4 */
        ('janetwilson1212@gmail.com','Janet Wilson','5555555555'),
        /* data set 5 */
        ('jasonsanchez3434@yahoo.com','Jason Sanchez','5555551234'),
        /* data set 6 */
        ('karenrodriguez5555@hotmail.com','Karen Johnson','5555554321'),
        /* data set 7 */
        ('davidbrown7890@gmail.com','David Brown','5555559876'),
        /* data set 8 */
        ('amandamiller2468@yahoo.com','Amanda Miller','5555553478'),
        /* data set9*/
        ('kevinsullivan2222@hotmail.com','Kevin Sullivan','5555552121'),
        /* data set 10 */
        ('lisajones7777@gmail.com','Lisa Jones','7733014908');



ALTER TABLE Song AUTO_INCREMENT=1; -- Set the auto increment for each table start!

INSERT INTO Song (Title, Genre, Year, Version, Duration) 
VALUES 
    ('Bohemian Rhapsody', 'Rock', 1975, 'Duet', '00:05:55'),
    ('Thriller', 'Pop', 1984, 'Single', '00:05:57'),
    ('Sweet Child O'' Mine', 'Rock', 1987, 'Duet', '00:05:55'),
    ('Hotel California', 'Rock', 1976, 'Single', '00:06:30'),
    ('Stairway to Heaven', 'Rock', 1971, 'Duet', '00:08:02'),
    ('Back in Black', 'Rock', 1980, 'Single', '00:04:14'),
    ('Billie Jean', 'Pop', 1983, 'Duet', '00:04:54'),
    ('Smells Like Teen Spirit', 'Rock', 1991, 'Single', '00:05:01'),
    ('Livin'' on a Prayer', 'Rock', 1986, 'Duet', '00:04:09'),
    ('Yesterday', 'Pop', 1965, 'Single', '00:02:05'),
    ('Sweet Home Alabama', 'Rock', 1974, 'Duet', '00:04:44'),
    ('Nothing Else Matters', 'Rock', 1991, 'Single', '00:06:28'),
    ('Boys Don''t Cry', 'Pop', 1979, 'Duet', '00:02:37'),
    ('Enter Sandman', 'Rock', 1991, 'Single', '00:05:31'),
    ('Waterloo', 'Pop', 1974, 'Duet', '00:02:47'),
    ('Like a Rolling Stone', 'Rock', 1965, 'Single', '00:06:13'),
    ('I Will Always Love You', 'Pop', 1992, 'Duet', '00:04:31'),
    ('Paint It Black', 'Rock', 1966, 'Single', '00:03:45'),
    ('More Than Words', 'Rock', 1990, 'Duet', '00:05:35'),
    ('Every Breath You Take', 'Pop', 1983, 'Single', '00:04:13'),
    ('Stereo Love', 'Meme', 2009, 'Duet', '00:04:12'),
    ('Baby I''m Yours', 'Meme', 2019, 'Single', '00:03:34'),
    ('Bed Intruder Song', 'Meme', 2010, 'Single', '00:03:23'),
    ('Perfect', 'Pop', 2017, 'Single', '00:04:24'),
    ('GANGNAM STYLE', 'Korean', 2012, 'Single', '00:03:43'),
    ('Despacito', 'Pop', 2017, 'Duet', '00:04:11'),
    ('We are Number One', 'Meme', 2014, 'Duet', '00:02:23'),
    ('Baba Yaga', 'Death Metal', 2021, 'Single', '00:04:18'),
    ('F.U.N. Song', 'Meme', 2009, 'Duet', '00:05:31'),
    ('Never Gonna Give You Up', 'Meme', 1987, 'Single', '00:03:33');



ALTER TABLE Contributor AUTO_INCREMENT=1; -- Set the auto increment for each table start!

INSERT INTO Contributor (Name)
VALUES                  -- v for Bohemian Rhapsody
        ('Queen'), -- 1 Artist, producer
        ('Freddie Mercury'), -- 2 Writer, vocals, piano
        ('John Deacon'), -- 3 bass
        ('Roger Taylor'), -- 4 drums
        ('Brian May'), -- 5 guitar
        -- vv for Thriller
        ('Micheal Jackson'), -- 6 vocalist, artist
        ('Rod Temperton'), -- 7 writer
        ('Quincy Jones'), -- 8 producer
        -- vv for Sweet Child O'' Mine
        ('Guns N Roses'), -- 9artist
        ('Mike Clink'),  -- 10 producer
        ('Axl Rose'), -- 11 writter, vocals
        ('Slash'),    --  12 writer, guitar
        ('Duff'),     -- 13 writer, bass
        ('Steven Adler'), -- 14 writer, drums
        ('Izzy Stradlin'), -- 15
        -- vv Hotel California
        ('Bill Szymczyk'), -- 16 producer
        ('Don Felder'),  -- 17guitar, writer
        ('Glenn Frey'),  -- 18guitar, writer
        ('Joe Walsh'), -- 19guitar, writer
        ('Don Henley'), -- 20drums, vocals
        ('Eagles'), -- 21 artist
        -- vv Stairway to Heaven
        ('Jimmy Page'), -- 22producer,writer,guitar 
        ('Robert Plant'), -- 23writer, vocals
        ('John Paul Jones'), -- 24guitar, piano
        ('John Bonham'), -- 25drums
        -- vv Back in Black 
        ('Robert John Lange'), -- 26producer
        ('Cliff Williams'), -- 27bass
        ('Malcom Young'), -- 28guitar, writer
        ('Angus Young'), -- 29guitar, writer
        ('Brian Johnson'), -- 30vocals, writer
        ('AC DC'), -- 31artist
        -- vv Billie Jean
        -- quincyjones - 8producer
        -- micheal jackson - 6producer, writer, vocals
        --
        -- vv Smells Like Teen Spirit
        ('Nirvana'), -- 32artist
        ('Butch Vig'), -- 33producer
        ('Kurt Cobain'), -- 34guitar, vocal, writer
        ('Dave Grohl'), -- 35drums, writer
        ('Krist Novoselic'), -- 36bass, writer
        -- vv Livin' on a Prayer
        ('Bon Jovi'), -- 37artist
        ('Jon Bon Jovi'), -- 38guitar, vocals, writter, 
        ('Richie Sambora'), -- 39writer, guitar
        ('Desmond Child'), -- 40writer
        ('Alec John Such'), -- 41bass
        ('Bruce Fairbairn'), -- 42producer
        -- vv Yesterday
        ('George Martin'), -- 43producer, strings
        ('Paul McCartney'), -- 44vocals, guitar
        ('John Lennon'), -- 45writter
        ('Lennon-McCartney'), -- 46writter
        --
        -- Sweet Home Alabama -- 
    ('Al Kooper'), -- 47Producer
    ('Lynyrd Skynyrd'), -- 48artist
    ('Ronnie Van Zant'), -- 49writer, vocals
    ('Gary Rossington'), -- 50writer, guitar
    ('Ed King'), -- 51writer, guitar
    ('Bob Burns'), -- 52drums 
    ('Leon Wilkeson'),-- 53bass 
    ('Allen Collins'), -- 54guitar
    ('Billy Powell'), -- 55piano

    -- Nothing Else Matters --
    ('Bob Rock'), -- 56producer
    ('Metallica'),-- 57artist
    ('James Hetfield'), -- 58producer, guitar
    ('Lars Ulrich'), -- 59producer, drums 
    ('Jason Newsted'), -- 60bass, vocals
    ('Kirk Hammett'), -- 61guitar 

    -- Boys Don''t Cry -- 
    ('Chris Parry'), -- 62producer 
    ('The Cure'), -- 63artist
    ('Michael Dempsey'), -- 64writer, guitar 
    ('Lol Tolhurst'), -- 65writer, drums 
    ('Robert Smith'), -- 66writer, guitar

 /*   -- Enter Sandman -- 
    ('Bob Rock'), -- 56producer
    ('Metallica'), -- 57artist
    ('James Hetfield'), -- 58producer, guitar
    ('Lars Ulrich'), -- 59producer, drums 
    ('Jason Newsted'), -- 60bass, vocals
    ('Kirk Hammett'), -- 61guitar */
    
    -- Waterloo -- 
    ('Benny Anderson'), -- 67producer, writer
    ('ABBA'), -- 68artist
    ('Bjön Ulvaeus'),-- 69producer, writer, guitar
    ('Stig Anderson'),-- 70writer
    ('Ola Brunkert'),-- 71drums
    ('Rutger Gunnarsson'),-- 72bass 
    ('Janne Schaffer'), -- 73guitar
    ('Anni-Frid Lyngstad'),-- 74vocals 
    ('Agnetha Fältskog'), -- 75vocals 

    -- Like a Rolling Stone -- 
    ('Tom Wilson'), -- 76producer
    ('Bob Dylan'), -- 77artist
    ('Bob Dylan'), -- 78writer , Harmonica, guitar 
    ('Joe Macho Jr.'), -- 79bass
    ('Mike Bloomfield'), -- 80guitar 
    ('Frank Owens'), -- 81piano 
    ('Bobby Gregg'), -- 82drums

    -- I Will Always Love You -- 
    ('David Foster'), -- 83producer  
    ('Whitney Houston'), -- 84artist
    ('Dolly Parton '), -- 85writer 
    ('Neil Stubenhaus'), -- 86bass  
    ('Kirk Whalum'), -- 87Saxophone 
    ('Ricky Lawson'), -- 88drums 

    -- Paint It Black --
    ('Andrew Loog Oldham'), -- 89producer
    ('Rolling Stone'), -- 90artist
    ('Mick Jagger'), -- 91writer, vocals 
    ('Keith Richards'), -- 92writer, guitar 
    ('Bill Wyman'), -- 93bass 
    ('Charile Watts'), -- 94drums

    -- More Than Words --
    ('Michael Wagener'), -- 95producer
    ('Extreme'), -- 96artist
    ('Gary Cherone'), -- 97writer 
    ('Nuno Bettencourt'), -- 98writer

    -- Every Breath You Take --
    ('The Police'), -- 99producer , artist 
    ('Hugh Padgham'), -- 100producer 
    ('Sting'), -- 101writer, guitar, vocals, piano
    ('Stewart Copeland'), -- 102drums 
    ('Andy Summers'), -- 103guit
    --
 -- vv for Stereo love
    ('Edward Maya'), -- 104Artist
    ('Vika Jigulina'), -- 105Vocalist
 -- vv for Ladies and Gentlemen We got him
    ('Breakbot'),  -- 106Artist
    ('Irfane'), -- 107Vocalist
 -- vv for Bed Intruder Song
    ('The Gregory Brothers'), -- 108Artist
    ('Antoine Dodson'), -- 109Vocalist
    ('Kelly Dodson'), -- 110Vocalist
    ('Michael Gregory'), -- 111Producer
 -- vv for Perfect
    ('Benny Blanco'), -- 112Producer
    ('Will Hicks'), -- 113Producer
    ('Ed Sheeran'), -- 114Artist
 -- vv for Gangnam style
    ('PSY'), -- 115Artist
    ('Yoo Gun Hyung'), -- 116Producer
    ('Yang Hyun Suk'), -- 117Producer
 -- vv for Despacito 
    ('Daddy Yankee'), -- 118Feature
    ('Luis Fonsi'), -- 119Artist
    ('Andres Torres'), -- 120Producer
    ('El Dandee'), -- 121Producer
    ('Justin Beiber'), -- 122Feature
 -- vv for We are number one
    ('Mani Svavarsson'),  -- 123Producer
    ('Lazy Town'),  -- 124Artist
    ('Stefan Karl Stefansson'), -- 125Vocalist
 -- vv for Baba Yaga
    ('Slaughter to prevail'), -- 126Artist
    ('Jack Simmons'),  -- 127Guitar
    ('Ivan Anthropocide'),  -- 128Mastering Engineer
    ('Mike Petrov'), -- 129Bass
    ('Evgeny Novikov'), -- 130Drums
    ('Alex Terrible'),  -- 131Vocals
 -- vv for F.U.N. song
    ('Spongebob Squarepants'), -- 132Artist
    ('Plankton'),  -- 133Feature
    ('Albie Hecht'), -- 134Producer
    ('Sherm Cohen'), -- 135Writer
 -- vv for Never gonna give you up
    ('Rick Astley'), -- 136Artist 
    ('Mike Stock'), -- 137Writer
    ('Matt Aitken'), -- 138Writer
    ('Pete Waterman'), -- 139Writer
    ('Stock Aitken Waterman'),  -- 140Producer
   -- missed artists below:
   ('Led Zepplin'), -- 141 artist - for song5
   ('The Beatles'); -- 142 artist - for song10



INSERT INTO Contributes (ContribID, SongID, Version, Role)
VALUES
    (1, 1, 'Duet', 'Artist'),
    (1, 1, 'Duet', 'Producer'),
    (2, 1, 'Duet', 'Writer'),
    (2, 1, 'Duet', 'Vocals'),
    (2, 1, 'Duet', 'Piano'),
    (3, 1, 'Duet', 'Bass'),
    (4, 1, 'Duet', 'Drums'),
    (5, 1, 'Duet', 'Guitar'),
    -- next song --
    (6, 2, 'Single', 'Vocals'),
    (6, 2, 'Single', 'Artist'),
    (7, 2, 'Single', 'Writer'),
    (8, 2, 'Single', 'Producer'),
    -- next --
    (9, 3, 'Duet', 'Artist'),
    (10, 3, 'Duet', 'Producer'),
    (11, 3, 'Duet', 'Writer'),
    (11, 3, 'Duet', 'Vocals'),
    (12, 3, 'Duet', 'Writer'),
    (12, 3, 'Duet', 'Guitar'),
    (13, 3, 'Duet', 'Writer'),
    (13, 3, 'Duet', 'Bass'),
    (14, 3, 'Duet', 'Writer'),
    (14, 3, 'Duet', 'Drums'),
    (15, 3, 'Duet', 'Writer'),
    (15, 3, 'Duet', 'Guitar'),
    -- next --
    (16, 4, 'Single', 'Producer'),
    (17, 4, 'Single', 'Guitar'),
    (17, 4, 'Single', 'Writer'),
    (18, 4, 'Single', 'Guitar'),
    (18, 4, 'Single', 'Writer'),
    (19, 4, 'Single', 'Guitar'),
    (19, 4, 'Single', 'Writer'),
    (20, 4, 'Single', 'Drums'),
    (20, 4, 'Single', 'Vocals'),
    (21, 4, 'Single', 'Artist'),
    -- next --
    (22, 5, 'Duet', 'Producer'),
    (22, 5, 'Duet', 'Writer'),
    (22, 5, 'Duet', 'Guitar'),
    (23, 5, 'Duet', 'Writer'),
    (23, 5, 'Duet', 'Vocals'),
    (24, 5, 'Duet', 'Piano'),
    (24, 5, 'Duet', 'Guitar'),
    (25, 5, 'Duet', 'Drums'),
    (141, 5, 'Duet', 'Artist'),
    -- next --
    (26, 6, 'Single', 'Producer'),
    (27, 6, 'Single', 'Bass'),
    (28, 6, 'Single', 'Guitar'),
    (28, 6, 'Single', 'Writer'),
    (29, 6, 'Single', 'Guitar'),
    (29, 6, 'Single', 'Writer'),
    (30, 6, 'Single', 'Vocals'),
    (30, 6, 'Single', 'Writer'),
    (31, 6, 'Single', 'Artist'),
    -- next --
    (8, 7, 'Duet', 'Producer'),
    (6, 7, 'Duet', 'Writer'),
    (6, 7, 'Duet', 'Vocals'),
    (6, 7, 'Duet', 'Producer'),
    (6, 7, 'Duet', 'Artist'),
    -- next --
    (32, 8, 'Single', 'Artist'),
    (33, 8, 'Single', 'Producer'),
    (34, 8, 'Single', 'Guitar'),
    (34, 8, 'Single', 'Vocals'),
    (34, 8, 'Single', 'Writer'),
    (35, 8, 'Single', 'Drums'),
    (35, 8, 'Single', 'Writer'),
    (36, 8, 'Single', 'Bass'),
    (36, 8, 'Single', 'Writer'),
    -- next --
    (37, 9, 'Duet', 'Artist'),
    (38, 9, 'Duet', 'Guitar'),
    (38, 9, 'Duet', 'Vocals'),
    (38, 9, 'Duet', 'Writer'),
    (39, 9, 'Duet', 'Guitar'),
    (39, 9, 'Duet', 'Writer'),
    (40, 9, 'Duet', 'Writer'),
    (41, 9, 'Duet', 'Bass'),
    (42, 9, 'Duet', 'Producer'),
    -- next --
    (43, 10, 'Single', 'Producer'),
    (43, 10, 'Single', 'Strings'),
    (44, 10, 'Single', 'Vocals'),
    (44, 10, 'Single', 'Guitar'),
    (45, 10, 'Single', 'Writer'),
    (46, 10, 'Single', 'Writer'),
    (142, 10, 'Single', 'Artist'),

   -- Sweet Home Alabama --
   (47,11,'Duet','Producer'),
   (48,11,'Duet','Artist'),
   (49,11,'Duet','Writer'),
   (49,11,'Duet','Vocals'),
   (50,11,'Duet','Writer'),
   (50,11,'Duet','Guitar'),
   (51,11,'Duet','Writer'),
   (51,11,'Duet','Guitar'),
   (52,11,'Duet','Drums'),
   (53,11,'Duet','Bass'),
   (54,11,'Duet','Guitar'),
   (55,11,'Duet','Piano'),

   -- Nothing Else Matters --
   (56,12,'Single','Producer'),
   (57,12,'Single','Artist'),
   (58,12,'Single','Producer'),
   (58,12,'Single','Guitar'),
   (59,12,'Single','Producer'),
   (59,12,'Single','Drums'),
   (60,12,'Single','Bass'),
   (60,12,'Single','Vocals'),
   (61,12,'Single','Guitar'),

   -- Boys Don't Cry --
   (62,13,'Duet','Producer'),
   (63,13,'Duet','Artist'),
   (64,13,'Duet','Writer'),
   (65,13,'Duet','Guitar'),
   (65,13,'Duet','Writer'),
   (65,13,'Duet','Drums'),
   (66,13,'Duet','Writer'),
   (66,13,'Duet','Guitar'),

   -- Enter Sandman --
   (56,14,'Single','Producer'),
   (57,14,'Single','Artist'),
   (58,14,'Single','Producer'),
   (58,14,'Single','Guitar'),
   (59,14,'Single','Producer'),
   (59,14,'Single','Drums'),
   (60,14,'Single','Bass'),
   (60,14,'Single','Vocals'),
   (61,14,'Single','Guitar'),

   -- Waterloo --
   (67,15,'Duet','Producer'),
   (68,15,'Duet','Artist'),
   (69,15,'Duet','Producer'),
   (69,15,'Duet','Writer'),
   (69,15,'Duet','Guitar'),
   (70,15,'Duet','Writer'),
   (71,15,'Duet','Drums'),
   (72,15,'Duet','Bass'),
   (73,15,'Duet','Guitar'),
   (74,15,'Duet','Vocals'),
   (75,15,'Duet','Vocals'),

   -- Like a Rolling Stone --
   (76,16,'Single','Producer'),
   (77,16,'Single','Artist'),
   (78,16,'Single','Writer'),
   (78,16,'Single','Harmonica'),
   (78,16,'Single','Guitar'),
   (79,16,'Single','Bass'),
   (80,16,'Single','Guitar'),
   (81,16,'Single','Piano'),
   (82,16,'Single','Drums'),

   -- I will Always Love You --
   (83,17,'Duet','Producer'),
   (84,17,'Duet','Artist'),
   (85,17,'Duet','Writer'),
   (86,17,'Duet','Bass'),
   (87,17,'Duet','Saxophone'),
   (88,17,'Duet','Drums'),

   -- Paint It Back --
   (89,18,'Single','Producer'),
   (90,18,'Single','Artist'),
   (91,18,'Single','Writer'),
   (91,18,'Single','Vocals'),
   (92,18,'Single','Writer'),
   (92,18,'Single','Guitar'),
   (93,18,'Single','Bass'),
   (94,18,'Single','Drums'),

   -- More Than Words -- 
   (95,19,'Duet','Producer'),
   (96,19,'Duet','Artist'),
   (97,19,'Duet','Writer'),
   (98,19,'Duet','Writer'),

   -- Every Breath You Take -- 
   (99,20,'Single','Producer'),
   (99,20,'Single','Artist'),
   (100,20,'Single','Producer'),
   (101,20,'Single','Writer'),
   (101,20,'Single','Guitar'),
   (101,20,'Single','Vocals'),
   (101,20,'Single','Piano'),
   (102,20,'Single','Drums'),
   (103,20,'Single','Guitar'), 

   -- last 10 songs
   -- Stereo Love --
   (104,21,'Duet','Artist'),
   (105,21,'Duet','Vocalist'),

   -- Baby Im Yours
   (106,22,'Single','Artist'),
   (107,22,'Single','Vocalist'),

   -- Bed Intruder Song --
   (108,23,'Single','Artist'),
   (109,23,'Single','Vocalist'),
   (110,23,'Single','Vocalist'),
   (111,23,'Single','Producer'),

   -- Perfect --
   (112,24,'Single','Producer'),
   (113,24,'Single','Producer'),
   (114,24,'Single','Artist'),
   
   -- Gangnam Style --
   (115,25,'Single','Artist'),
   (116,25,'Single','Producer'),
   (117,25,'Single','Producer'),

   -- Despacito --
   (118,26,'Duet','Feature'),
   (119,26,'Duet','Artist'),
   (120,26,'Duet','Producer'),
   (121,26,'Duet','Producer'),
   (122,26,'Duet','Feature'),

   -- We Are Number One --
   (123,27,'Duet','Producer'),
   (124,27,'Duet','Artist'),
   (125,27,'Duet','Vocalist'),

   -- Baba Yaga --
   (126,28,'Single','Artist'),
   (127,28,'Single','Guitar'),
   (128,28,'Single','Mastering Engineer'),
   (129,28,'Single','Bass'),
   (130,28,'Single','Drums'),
   (131,28,'Single','Vocals'),

   -- F.U.N. Song --
   (132,29,'Duet','Artist'),
   (133,29,'Duet','Feature'),
   (134,29,'Duet','Producer'),
   (135,29,'Duet','Writer'),

   -- Never gonna give you up --
   (136,30,'Single','Artist'),
   (137,30,'Single','Writer'),
   (138,30,'Single','Writer'),
   (139,30,'Single','Writer'),
   (140,30,'Single','Producer');


   --- end of stuff contibutes table here

INSERT INTO PriorityQueues (CustID, SongID, Version, Time, Money)
VALUES
    (1, 25, 'Single', '2023-04-20 16:36:30', 12.50),
    (2, 26, 'Duet', '2023-04-20 16:45:22', 2.75),
    (3, 27, 'Duet', '2023-04-20 16:45:39', 5.00),
    (4, 28, 'Single', '2023-04-20 16:51:00', 10.50),
    (5, 29, 'Duet', '2023-04-20 17:23:00', 3.00);   

    INSERT INTO Queues(CustID,SongID,Version,Time)
VALUES 
    (6,1,'Duet','2023-04-20 4:33:40'),
    (7,2,'Single','2023-04-20 10:45:04'),
    (8,3,'Duet','2023-04-20 12:30:20'),
    (9,4,'Single','2023-04-20 6:45:21'),
    (10,5,'Duet','2023-04-20 8:43:28');


