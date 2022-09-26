
CREATE TABLE `action` (
  `idaction` int(11) NOT NULL,
  `intitule` varchar(50) NOT NULL,
  `idfiche` int(11) NOT NULL,
  `idtype_rep` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `action` (`idaction`, `intitule`, `idfiche`, `idtype_rep`) VALUES
(110, 'Phare avant', 62, 4),
(113, 'Ajouter pneu', 69, 4),
(112, 'fezfezf', 68, 4),
(114, 'changer les pneu', 70, 3),
(115, 'changer les pneu', 71, 6),
(118, 'Roue', 73, 3);

CREATE TABLE `employe` (
  `idemploye` int(11) NOT NULL,
  `nomPrenom` varchar(50) NOT NULL,
  `role` varchar(30) NOT NULL DEFAULT 'Employé',
  `login` varchar(30) NOT NULL,
  `motdepasse` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `employe` (`idemploye`, `nomPrenom`, `role`, `login`, `motdepasse`) VALUES
(5, 'Admin admin', 'Admin', 'admin', 'admin'),
(4, 'User user', 'Employé', 'user', 'user');

CREATE TABLE `fiche` (
  `idfiche` int(11) NOT NULL,
  `idemploye` int(11) NOT NULL,
  `iddiag` varchar(50) NOT NULL,
  `idrep` varchar(50) NOT NULL,
  `idcarrosserie` varchar(50) NOT NULL,
  `idcamgrue` varchar(50) NOT NULL,
  `date_creation` varchar(50) DEFAULT NULL,
  `vehicule` varchar(50) NOT NULL,
  `immatriculation` varchar(50) NOT NULL,
  `kilometrage` int(11) NOT NULL,
  `type_vehicule` varchar(50) NOT NULL,
  `etat` varchar(50) NOT NULL DEFAULT 'Non imprimée',
  `type_fiche` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `fiche` (`idfiche`, `idemploye`, `iddiag`, `idrep`, `idcarrosserie`, `idcamgrue`, `date_creation`, `vehicule`, `immatriculation`, `kilometrage`, `type_vehicule`, `etat`, `type_fiche`) VALUES
(73, 4, '', '', '', '', '24-09-2022', 'Test', '123', 123, '', 'Non imprimée', 2);

CREATE TABLE `identification_fiche` (
  `id` int(11) NOT NULL,
  `intitule` varchar(50) NOT NULL,
  `idtype_fiche` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `identification_fiche` (`id`, `intitule`, `idtype_fiche`) VALUES
(1, 'SMITer/12BSMAT-NPX/F-R2-03/A', 1),
(2, 'SMITer/12BSMAT-NPX/F-R2-04/A', 2),
(3, 'SMITer/12BSMAT-NPX/F-R2-05/A', 3);

CREATE TABLE `type_fiche` (
  `idtype` int(11) NOT NULL,
  `intitule` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `type_fiche` (`idtype`, `intitule`) VALUES
(1, 'Réparations (après diagnostic)'),
(2, 'Retouches & complément de réparation (après contrôle)'),
(3, 'Station (& banc de freinage)');

CREATE TABLE `type_reparation` (
  `idtype_rep` int(11) NOT NULL,
  `intitule` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `type_reparation` (`idtype_rep`, `intitule`) VALUES
(1, 'APG'),
(2, 'Banc freinage'),
(3, 'Carrosserie'),
(4, 'Électricité'),
(5, 'Lavage GAP'),
(6, 'Mécanique'),
(7, 'Peinture'),
(8, 'Tôlerie'),
(9, 'RDC'),
(10, 'Sellerie'),
(11, 'Station'),
(12, 'Zone RDC');


ALTER TABLE `action`
  ADD PRIMARY KEY (`idaction`),
  ADD KEY `IDFICH` (`idfiche`);

ALTER TABLE `employe`
  ADD PRIMARY KEY (`idemploye`);

ALTER TABLE `fiche`
  ADD PRIMARY KEY (`idfiche`);

ALTER TABLE `identification_fiche`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `type_fiche`
  ADD PRIMARY KEY (`idtype`);

ALTER TABLE `type_reparation`
  ADD PRIMARY KEY (`idtype_rep`);


ALTER TABLE `action`
  MODIFY `idaction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

ALTER TABLE `employe`
  MODIFY `idemploye` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `fiche`
  MODIFY `idfiche` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

ALTER TABLE `identification_fiche`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `type_fiche`
  MODIFY `idtype` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `type_reparation`
  MODIFY `idtype_rep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
