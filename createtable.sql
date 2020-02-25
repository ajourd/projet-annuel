drop table if exists `musique`;
drop table if exists `utilisateur`;
drop table if exists `playlist`;
drop table if exists `enregistre`;
drop table if exists `contient`;



create table `musique`(
`id_musique` int primary key,
`titre` varchar(100) not null,
`artiste` varchar(50) not null,
`album` varchar(50) not null,
`genre` varchar(50) not null,
`lien` varchar(300) null 
);


insert into `musique` (`id_musique`, `titre`, `artiste`, `album`, `genre`, `lien`) values
	(1, 'Smells Like Teen Spirit', 'Nirvana', 'Nevermind', 'Rock', ''),
	(2, 'Imagine', 'John Lennon', 'Imagine', 'Rock', ''),
	(3, 'One', 'U2', 'Achtung baby', 'Rock', ''),
	(4, 'Billie Jean', 'Michael Jackson', 'Thriller', 'Pop', ''),
	(5, 'Bohemian Rhapsody', 'Queen', 'A night at the Opera', 'Rock', ''),
	(6, 'Over The Rainbow', 'Judy Garland', 'Ka Ano i', 'Pop', ''),
	(7, 'Like A Rolling Stone', 'Bob Dylan', 'Highway 61 Revisited', 'Rock', ''),
	(8, 'I Can’t Get No Satisfaction', 'Rolling Stones', 'Out of Our Heads', 'Rock', ''),
	(9, 'What’s Goin’ On', 'Marvin Gaye', 'Whats Going On', 'Soul', ''),
	(10, 'Sweet Child O’Mine', 'Guns N’ Roses', 'Appetite for Destruction', 'Rock', ''),
	(11, 'London Calling', 'The Clash', 'London calling', 'Punk', ''),
	(12, 'Waterloo Sunset', 'The Kinks', 'Something Else by the Kinks', 'Pop', ''),
	(13, 'Hotel California', 'The Eagles', 'Hotel california', 'Rock', ''),
	(14, 'Your Song', 'Elton John', 'Elton John', 'Rock', ''),
	(15, 'The Twist', 'Chubby Checker', 'Twist With Chubby Checker', 'Rock', ''),
	(16, 'Live Forever', 'Oasis', 'Definitely Maybe', 'Musique alternative/inde', ''),
	(17, 'I Will Always Love You', 'Whitney Houston', 'The Bodyguard', 'R&B/Soul', ''),
	(18, 'Life On Mars?', 'David Bowie', 'Hunky Dory', 'Rock', ''),
	(19, 'Heartbreak Hotel', 'Elvis Presley', 'The Heartbreakers', 'Pop', ''),
	(20, 'Whole Lotta Love', 'Led Zeppelin', 'Led Zeppelin II', 'Metal', '');


create table `utilisateur`(
`id_uti` int primary key,
`pseudo` varchar(50) not null unique,
`nom` varchar(50) not null,
`prenom` varchar(50) not null,
`mdp` varchar(50) not null,
`admin` boolean null
);


create table `playlist`(
`id_playlist` int primary key,
`nom_playlist` varchar(50) not null
);

create table `enregistre`(
    `id_enr` int PRIMARY key,
    `id_uti` int not null,
    `id_playlist` int not null,
    foreign key (`id_uti`) references `utilisateur`(`id_uti`),
    foreign key (`id_playlist`) references `playlist`(`id_playlist`));


create table `contient` (
    `id_contient` int PRIMARY key,
    `id_playlist` int not null, 
    `id_musique` int not null,
    foreign key (`id_playlist`) references `playlist`(`id_playlist`),
    foreign key (`id_musique`) references `musique`(`id_musique`));