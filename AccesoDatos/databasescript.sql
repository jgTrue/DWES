DROP DATABASE IF EXISTS leagueoflegends;
CREATE DATABASE leagueoflegends CHARACTER SET utf8mb4;
USE leagueoflegends;

CREATE TABLE `champ` (
  `id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(100) NOT NULL,
  `rol` enum('Asesino','Luchador','Mago','Tirador','Apoyo','Tanque') NOT NULL,
  `difficulty` enum('Baja','Media','Alta') NOT NULL,
  `description` text NOT NULL
);


INSERT INTO `champ` (`name`, `rol`, `difficulty`, `description`) VALUES
('AKSHAN', 'Tirador', 'Baja', 'Impávido ante el peligro, Akshan combate el mal con gran carisma, ganas de impartir justa venganza y una evidente falta de camisetas. Domina el arte del combate sigiloso, por lo que es capaz de desaparecer a los ojos de sus enemigos y volver a aparecer cuando menos se lo esperan. Con un gran sentido de la justicia y un arma legendaria capaz de revivir a quien muere en combate, Akshan enmienda las injusticias cometidas por los canallas de Runaterra siguiendo siempre su propio código moral: \'\'No seas un capullo\'\'.');

INSERT INTO `champ` (`name`, `rol`, `difficulty`, `description`) VALUES
('NOCTURNE', 'Asesino', 'Media', 'El ser conocido como Nocturne es una fusión demoníaca extraída de las pesadillas que acechan a todas las mentes conscientes y se ha convertido en una fuerza primordial de pura maldad. Tiene un aspecto líquido y caótico, una sombra sin rostro con ojos fríos y armada con cuchillas aterradoras. Después de liberarse del reino espiritual, Nocturne descendió al mundo para alimentarse del tipo de terror que solo puede albergar la verdadera oscuridad.');

INSERT INTO `champ` (`name`, `rol`, `difficulty`, `description`) VALUES
('OLAF', 'Luchador', 'Baja', 'Olaf porta sus hachas de forma que es una fuerza imparable de destrucción que no quiere nada, salvo morir en un combate glorioso. Natural de Lokfar, una brutal península de Freljord, una vez escuchó una profecía que lo avisaba de una muerte tranquila, el destino de un cobarde y un gran insulto entre los suyos. En busca de la muerte y motivado por la ira, arrasó por toda la tierra, acabando con montones de guerreros magníficos y bestias legendarios, en busca de un rival que pudiera detenerlo. Ahora es el sicario de la Garra Invernal y busca su perdición en las grandes guerras que están por llegar.');

INSERT INTO `champ` (`name`, `rol`, `difficulty`, `description`) VALUES
('EKKO', 'Asesino', 'Alta', 'Ekko, un prodigio surgido de las implacables calles de Zaun, manipula el tiempo para sacar ventaja de todas las situaciones. Con una máquina de su invención llamada Dispositivo Z, explora las distintas posibilidades de la realidad hasta alcanzar el momento ideal. Aunque adora su libertad, si algo amenaza a sus amigos, hará lo que sea para defenderlos. Para quien no sepa quién es este muchacho, Ekko parece conseguir lo imposible a la primera, una y otra vez.');

INSERT INTO `champ` (`name`, `rol`, `difficulty`, `description`) VALUES
('AZIR', 'Mago', 'Alta', 'Azir, emperador de Shurima en un pasado remoto, fue un hombre orgulloso que estuvo a punto de alcanzar la inmortalidad. Dominado por la arrogancia, fue traicionado y asesinado en la hora de su mayor triunfo, pero ahora, milenios después, ha renacido como un ser Ascendido de inmenso poder. Su enterrada ciudad ha resurgido en medio de las arenas y Azir está decidido a restaurar la antigua gloria de Shurima.');


CREATE TABLE `user` (
  `id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL UNIQUE,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL UNIQUE
);
