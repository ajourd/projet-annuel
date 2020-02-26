drop table if exists `enregistre`;
drop table if exists `contient`;
drop table if exists `utilisateur`;
drop table if exists `musique`;
drop table if exists `playlist`;



create table `musique`(
`id_musique` int primary key not null auto_increment,
`titre` varchar(100) not null,
`artiste` varchar(50) not null,
`album` varchar(50) not null,
`genre` varchar(50) not null,
`lien` varchar(300) null 
);



INSERT INTO `musique` (`id_musique`, `titre`, `artiste`, `album`, `genre`, `lien`) VALUES
(1, 'Smells Like Teen Spirit', 'Nirvana', 'Nevermind', 'Rock', 'Nirvana - Smells Like Teen Spirit.mp3'),
(2, 'Imagine', 'John Lennon', 'Imagine', 'Rock', 'John Lennon - Imagine.mp3'),
(3, 'One', 'U2', 'Achtung baby', 'Rock', 'U2 - One - Anton Corbjin Version.mp3'),
(4, 'Billie Jean', 'Michael Jackson', 'Thriller', 'Pop', 'Michael Jackson - Billie Jean (Official Video).mp3'),
(5, 'Bohemian Rhapsody', 'Queen', 'A night at the Opera', 'Rock', 'queen-bohemian-rhapsody-with-lyrics.mp3'),
(6, 'Over The Rainbow', 'Judy Garland', 'Ka Ano i', 'Pop', '8) Movie CLIP (1939) HD.mp3'),
(7, 'Like A Rolling Stone', 'Bob Dylan', 'Highway 61 Revisited', 'Rock', 'Bob Dylan - Like a Rolling Stone (Audio).mp3'),
(8, 'I Can’t Get No Satisfaction', 'Rolling Stones', 'Out of Our Heads', 'Rock', 'The Rolling Stones - (I Can\'t Get No) Satisfaction (Official Lyric Video).mp3'),
(9, 'What’s Goin’ On', 'Marvin Gaye', 'Whats Going On', 'Soul', 'Marvin Gaye - What\'s Going On.mp3'),
(10, 'Sweet Child O’Mine', 'Guns N’ Roses', 'Appetite for Destruction', 'Rock', 'Sweet Child O\' Mine (Album Version).mp3'),
(11, 'London Calling', 'The Clash', 'London calling', 'Punk', 'The Clash-London Calling.mp3'),
(12, 'Waterloo Sunset', 'The Kinks', 'Something Else by the Kinks', 'Pop', 'The Kinks - Waterloo Sunset (Official Audio).mp3'),
(13, 'Hotel California', 'The Eagles', 'Hotel california', 'Rock', 'Eagles - Hotel California Lyrics.mp3'),
(14, 'Your Song', 'Elton John', 'Elton John', 'Rock', 'Elton John - Your Song (Top Of The Pops 1971).mp3'),
(15, 'The Twist', 'Chubby Checker', 'Twist With Chubby Checker', 'Rock', 'The Twist - Chubby Checker.mp3'),
(16, 'Live Forever', 'Oasis', 'Definitely Maybe', 'Musique alternative/inde', 'Oasis - Live Forever.mp3'),
(17, 'I Will Always Love You', 'Whitney Houston', 'The Bodyguard', 'R&B/Soul', 'I Will Always Love You.mp3'),
(18, 'Life On Mars?', 'David Bowie', 'Hunky Dory', 'Rock', 'david-bowie-life-on-mars-lyrics.mp3'),
(19, 'Heartbreak Hotel', 'Elvis Presley', 'The Heartbreakers', 'Pop', 'Elvis Presley - Heartbreak Hotel (Audio).mp3'),
(20, 'Whole Lotta Love', 'Led Zeppelin', 'Led Zeppelin II', 'Metal', 'Led Zeppelin - Whole Lotta Love (1997 Promo).mp3');



create table `utilisateur`(
`id_uti` int primary key not null auto_increment,
`pseudo` varchar(50) not null unique,
`nom` varchar(50) not null,
`prenom` varchar(50) not null,
`mdp` varchar(50) not null,
`admin` boolean null
);


create table `playlist`(
`id_playlist` int primary key not null auto_increment,
`nom_playlist` varchar(50) not null
);

create table `enregistre`(
    `id_enr` int PRIMARY key not null auto_increment,
    `id_uti` int not null,
    `id_playlist` int not null,
    foreign key (`id_uti`) references `utilisateur`(`id_uti`),
    foreign key (`id_playlist`) references `playlist`(`id_playlist`));


create table `contient` (
    `id_contient` int PRIMARY key not null auto_increment,
    `id_playlist` int not null, 
    `id_musique` int not null,
    foreign key (`id_playlist`) references `playlist`(`id_playlist`),
    foreign key (`id_musique`) references `musique`(`id_musique`));