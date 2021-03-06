INSERT INTO utilisateur (identifiant, motDePasse) VALUES ('visiteur','visiteur');

INSERT INTO lieux VALUES ('Stade Des Alpes','1 Avenue de Valmy ,38000 Grenoble','www.stadedesalpes.fr');
INSERT INTO lieux VALUES ('Patinoire Polesud','1 Avenue d Innsbruck ,38100 Grenoble','www.patinoirepolesud.fr');
INSERT INTO lieux VALUES ('L amperage','163 Cours Berriat ,38000 Grenoble','www.amperage.fr');
INSERT INTO lieux VALUES ('La Belle Electrique','12 Esplanade Andry Farcy ,38000 Grenoble','http://www.la-belle-electrique.com');
INSERT INTO lieux VALUES ('Summum-Alpexpo','Rue Henri Barbusse ,38100 Grenoble','http://summum-grenoble.com');

INSERT INTO evenement (nomEvenement,type,libelle,image,lieu,moment,nbBillet,prix) VALUES ('LOUD','concert','Concert de LOUD à l ampérage','loud.png','L amperage','06/12/2018',20,17.0);
INSERT INTO evenement (nomEvenement,type,libelle,image,lieu,moment,nbBillet,prix) VALUES ('GEORGIO','concert','Concert de GEORGIO à La Belle Electrique','georgio.jpg','La Belle Electrique','29/03/2019',3,27.0);
INSERT INTO evenement (nomEvenement,type,libelle,image,lieu,moment,nbBillet,prix) VALUES ('KYO','concert','Concert de KYO au Summum-Alpexpo','kyo.png','Summum-Alpexpo','06/12/2018',10,35.0);
INSERT INTO evenement (nomEvenement,type,libelle,image,lieu,moment,nbBillet,prix) VALUES ('POSTMODERN JUKEBOX','concert','Concert de POSTMODERN JUKEBOX à La Belle Electrique','postmodern.jpeg','La Belle Electrique','06/12/2018',25,40.0);
INSERT INTO evenement (nomEvenement,type,libelle,image,lieu,moment,nbBillet,prix) VALUES ('FLAVIEN BERGER','concert','Concert de FLAVIEN BERGER à La Belle Electrique','flavienberger.jpg','La Belle Electrique','26/01/2019',15,16.80);

INSERT INTO evenement (nomEvenement,type,libelle,image,lieu,moment,nbBillet,prix) VALUES ('ARY ABITTAN','spectacle','ARY ABITTAN my story','aa.png','Summum-Alpexpo','20/12/2018',20,34.0);
INSERT INTO evenement (nomEvenement,type,libelle,image,lieu,moment,nbBillet,prix) VALUES ('JEFF PANACLOC','spectacle','JEFF PANACLOC contre-attaque','jp.png','Summum-Alpexpo','03/05/2019',30,43.0);
INSERT INTO evenement (nomEvenement,type,libelle,image,lieu,moment,nbBillet,prix) VALUES ('MALIK BENTALHA','spectacle','MALIK BENTALHA encore','mb.png','Summum-Alpexpo','11/01/19',10,37.0);
INSERT INTO evenement (nomEvenement,type,libelle,image,lieu,moment,nbBillet,prix) VALUES ('LAURENT GERRA','spectacle','LAURENT GERRA sans moderation','lg.jpeg','Summum-Alpexpo','30/11/2018',25,49.0);
INSERT INTO evenement (nomEvenement,type,libelle,image,lieu,moment,nbBillet,prix) VALUES ('JAMEL DEBBOUZE','spectacle','Maintenant ou JAMEL','jd.png','Summum-Alpexpo','10/04/2019',15,32.0);

INSERT INTO evenement (nomEvenement,type,libelle,image,lieu,moment,nbBillet,prix) VALUES ('GRENOBLE Bruleurs de Loups/GAP (Hockey sur Glace)','sport','Match comptant pour la SYNERGLACE LIGUE MAGNUS','bdl.png','Patinoire Polesud','28/12/2018',20,8.0);
INSERT INTO evenement (nomEvenement,type,libelle,image,lieu,moment,nbBillet,prix) VALUES ('GRENOBLE Bruleurs de Loups/BORDEAUX (Hockey sur Glace)','sport','Match comptant pour la SYNERGLACE LIGUE MAGNUS','bdl.png','Patinoire Polesud','02/01/2019',10,8.0);
INSERT INTO evenement (nomEvenement,type,libelle,image,lieu,moment,nbBillet,prix) VALUES ('GRENOBLE 38/METZ (Football)','sport','Match comptant pour la Dominos Ligue 2','gf38.png','Stade des Alpes','01/12/18',10,10.0);
INSERT INTO evenement (nomEvenement,type,libelle,image,lieu,moment,nbBillet,prix) VALUES ('FC GRENOBLE/MONTPELLIER (Rugby)','sport','Match comptant pour le TOP 14','fcg.png','Stade des alpes','22/12/2018',25,24.0);
INSERT INTO evenement (nomEvenement,type,libelle,image,lieu,moment,nbBillet,prix) VALUES ('FC GRENOBLE/AGEN (Rugby)','sport','Match comptant pour le challenge européen','fcg.png','Stade des alpes','07/12/2018',15,12.5);

INSERT INTO panier VALUES (1,1,1);
