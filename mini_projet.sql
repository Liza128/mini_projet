SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_clt` int(11) NOT NULL AUTO_INCREMENT,
  `nom_clt` varchar(50) NOT NULL,
  `prenom_clt` varchar(50) NOT NULL,
  `age_clt` int(2) NOT NULL,
  `adresse_clt` varchar(250) NOT NULL,
  `email_clt` varchar(30) NOT NULL,
   `tel_clt` varchar(15) NOT NULL,
   `username` varchar(250) NOT NULL,
  `password_clt` varchar(225) NOT NULL,
  
  PRIMARY KEY (`id_clt`)
)ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;



INSERT INTO `client` (`id_clt`, `nom_clt`, `prenom_clt`, `email_clt`, `password_clt`, `tel_clt`, `age_clt`, `adresse_clt`, `username`) VALUES
(1, 'mehallel', 'liza', 'liza@gmail.com', '123','0552889952', '21', 'larba nath irathen', 'liza'),
(2, 'bedri', 'mariam', 'mariam@gmail.com', '123', '0678546323', '21', 'mekla', 'lydia'),
(3, 'fenek', 'inass', 'inass@gmail.com', '123', '0578546323', '21', 'beni douala', 'werda'),
(4, 'smail ', 'mina', 'mina@gmail.com', '123', '0778546323', '21', 'tizi_ouzou', 'imene');



DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_adm` int(11) NOT NULL AUTO_INCREMENT,
  `login_adm` varchar(250) NOT NULL,
  `password_adm` varchar(225) NOT NULL,
  PRIMARY KEY (`id_adm`)
)ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;


INSERT INTO `admin` (`id_adm`, `password_adm`, `login_adm`) VALUES
(1, '123',  'azerty');




DROP TABLE IF EXISTS `voiture`;
CREATE TABLE IF NOT EXISTS `voiture` (
  `imt_vtr` varchar(60) NOT NULL ,
  `mrq_vtr` varchar(60) NOT NULL,
  `modele_vtr` varchar(60) NOT NULL,
  `classe_vtr` varchar(60) NOT NULL,
  `couleur_vtr` varchar(60) NOT NULL,
  `prix_par_jour` int(11) NOT NULL,
  `photo` text NOT NULL,
  `nbr_portes` int(10) NOT NULL,
  `carburant` varchar(60) NOT NULL,
  `boite_vitesse` varchar(60) NOT NULL,
  `annee` int(7) NOT NULL,

  PRIMARY KEY (`imt_vtr`)
)ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;



INSERT INTO `voiture` (`imt_vtr`, `mrq_vtr` , `modele_vtr`, `classe_vtr`, `couleur_vtr`, `prix_par_jour`, `photo`,`nbr_portes`,`carburant`,`boite_vitesse`,`annee`) VALUES
( '256 118 15',  'renault',  'clio',  'citadine',  'grenas',  8000,  'renault-clio-1.jpg',  '5',  'essence',  'automatique',  '2020'),
( '1005 119 16',  'peugeot',  '207',  'cabriolet',  'blanche',  3500,  'peugeot-207.jpg',  '2',  'diesel',  'mécanique',  '2015'),
( '346 120 15',  'peugeot',  '208',  'citadine',  'jaune',  10000,  'peugeot-208.jpg',  '5',  'diesel',  'automatique',  '2020'),
( '110 119 15',  'peugeot',  '308',  'break',  'rouge',  15000,  'peugeot-308.jpg',  '5',  'essence',  'automatique',  '2018'),
( '2100 118 16',  'peugeot',  '206',  'citadine',  'blanche',   2800,  'peugeot-206.jpg',  '4',  'diesel',  'mécanique',  '2011'),
( '317 117 16',  'renault',  'captur',  '4x4',  'blanche',  8000,  'renault-captur.jpg',  '6',  'essence',  'automatique',  '2017'),
('255 109 16', 'renault', 'kangoo', 'break', 'grise', 2800, 'renault-kangoo.jpg',  '5',  'essence',  'mécanique',  '2016'),
('334 220 15', 'renault', 'scenic', 'monospace', 'marron', 7000, 'renault-scenic.jpg',  '6',  'diesel',  'automatique',  '2018'),
('333 220 15', 'mercedes ', 'CLASS A', 'compacte', 'verte', 12000, 'mercedes-classe-a.jpg',  '6',  'essence',  'mécanique',  '2020'),
('335 220 15', 'Peugeot', '308 SW', 'Break', 'rouge', 9000, 'peugeot-308.jpg',  '5',  'diesel',  'automatique',  '2019'),
('336 220 15', 'Peugeot', '508 SW', 'Break', 'marron', 7000, 'peugeot-508-sw.jpg',  '6',  'essence',  'mécanique',  '2017'),
('337 220 15', 'Renault', 'Laguna', 'Break', 'noire', 10000, 'renault-laguna.jpg',  '7',  'diesel',  'automatique',  '2014'),
('338 220 15', 'mercedes', 'CL', 'coupé', 'blanche', 15000, 'S7-modele--mercedes-cl-3.jpg',  '5',  'diesel',  'mécanique',  '2020'),
('339 220 15', 'mercedes', 'CLASS B', 'monospace', 'grise', 9000, 'S7-modele--mercedes-classe-b-2.jpg',  '5',  'diesel',  'automatique',  '2013'),
('340 220 15', 'mercedes', 'CLASS M', 'SUV', 'blanche', 9000, 'S7-modele--mercedes-classe-m-3.jpg',  '6',  'essence',  'mécanique',  '2020'),
('341 217 15', 'mercedes', 'Santa Fe', 'SUV', 'grise', 5000, 'hyundai-santa-fe.jpg',  '4',  'diesel',  'automatique',  '2015'),
('342 217 15', 'volkswagen', 'arteon', 'coupé', 'jaune', 9000, 'S7-gamme--volkswagen-arteon.jpg',  '7',  'essence',  'mécanique',  '2020'),
('343 217 15', 'volkswagen', 'bora', 'compacte', 'grise', 7500, 'S7-modele--volkswagen-bora.jpg',  '4',  'diesel',  'automatique',  '2018'),

('343 220 15', 'volkswagen', 'passat', 'cabriolet', 'grise', 9000, 'S7-gamme--volkswagen-passat.jpg',  '4',  'essence',  'mécanique',  '2014'),
('350 220 15', 'volkswagen', 'sirocco', 'coupé', 'blanche', 10000, 'S7-modele--volkswagen-scirocco-2.jpg',  '5',  'diesel',  'automatique',  '2020'),
('351 220 15', 'volkswagen', 'touran', 'monospace', 'bleu', 9000, 'S7-modele--volkswagen-touran-3.jpg',  '5',  'essence',  'mécanique',  '2018'),
('354 220 15', 'volkswagen', 'touareg', '4x4', 'blanche', 9000, 'S7-modele--volkswagen-touareg-3.jpg',  '6',  'diesel',  'automatique',  '2016'),

('353 219 15', 'mercedes', 'GLA', '4x4', 'grise', 8000, 'S7-modele--mercedes-gla.jpg',  '6',  'essence',  'mécanique',  '2020'),
('355 217 15', 'mercedes', 'CLASS GL', '4X4', 'noire', 8500, 'S7-modele--mercedes-classe-gl.jpg',  '6',  'diesel',  'automatique',  '2018'),

('389 220 15', 'peugeot', '308', 'Cabriolet', 'marron', 5000, 'peugeot-308-sw.jpg',  '5',  'essence',  'mécanique',  '2014'),
( '257 118 16',  'renault',  'clio',  'citadine',  'blanche',  8500,  'renault-clio-2.jpg',  '5',  'essence',  'automatique',  '2019');





DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id_res` int(11) NOT NULL AUTO_INCREMENT,
  `duree_res` varchar(60) NOT NULL ,
  `date_debut_res` date NOT NULL,
  `id_clt` int(11) NOT NULL,
  `imt_vtr` varchar(60) NOT NULL,
  `etat_res` varchar(60) NOT NULL,
  FOREIGN KEY (id_clt) REFERENCES client(id_clt),
  FOREIGN KEY (imt_vtr) REFERENCES voiture(imt_vtr),
  PRIMARY KEY (`id_res`)
)ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;


INSERT INTO `reservation` (`id_res`,`duree_res`,`date_debut_res`,`id_clt`,`imt_vtr`,`etat_res`) 
values (1,'3','2020.3.5','2','257 118 16','confirmée'),
 (2,'5','2020.7.2','2','343 220 15','confirmée'),
 (3,'4','2020.8.9','1','338 220 15','annulée'),
 (4,'8','2020.6.8','4','340 220 16','en attente'),
 (5,'4','2020.8.9','1','338 220 04','en attente'),
 (6,'4','2020.8.9','1','338 569 15','en attente');






























ALTER TABLE `admin`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_clt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_res` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;
