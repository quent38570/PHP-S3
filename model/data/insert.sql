INSERT INTO utilisateur (identifiant, motDePasse) VALUES ('visiteur','visiteur');

INSERT INTO lieux VALUES ('lieuxTest','adresseTest','www.siteTest.test');

INSERT INTO evenement (nomEvenement,type,libelle,image,lieu,moment,nbBillet,prix) VALUES ('evnementTest','test','ceci est un test','test.jpg','lieuxTest','now',10,5.0);
INSERT INTO evenement (nomEvenement,type,libelle,image,lieu,moment,nbBillet,prix) VALUES ('evnementTest2','concert','ceci est un test 2','test.jpg','lieuxTest2','now',11,6.0);
INSERT INTO evenement (nomEvenement,type,libelle,image,lieu,moment,nbBillet,prix) VALUES ('evnementTest3','spectacle','ceci est un test 3','test.jpg','lieuxTest3','now',12,7.0);
INSERT INTO evenement (nomEvenement,type,libelle,image,lieu,moment,nbBillet,prix) VALUES ('evnementTest4','sport','ceci est un test 4','test.jpg','lieuxTest4','now',13,8.0);

INSERT INTO panier VALUES (1,1,2);
