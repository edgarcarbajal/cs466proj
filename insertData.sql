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
    ('Born to Run', 'Rock', '0023', 1975, 'Duet', '00:04:30');

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
        ('Hotel California', '21'), --artist
        -- vv Stairway to Heaven

