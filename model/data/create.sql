DROP TABLE IF EXISTS [lieux]; -- "OR REPLACE"
CREATE TABLE lieux (
  nomLieux TEXT PRIMARY KEY,
  adresse TEXT,
  site TEXT
);

DROP TABLE IF EXISTS [evenement]; -- "OR REPLACE"
CREATE TABLE evenement (
  idEvenement INTEGER PRIMARY KEY AUTOINCREMENT,
  nomEvenement TEXT,
  type TEXT,
  libelle TEXT,
  image TEXT,
  lieu TEXT REFERENCES lieux(nomLieux),
  moment DATE,
  nbBillet INT,
  prix REAL
);

DROP TABLE IF EXISTS [utilisateur]; -- "OR REPLACE"
CREATE TABLE utilisateur (
  idUtilisateur INTEGER PRIMARY KEY AUTOINCREMENT,
  identifiant TEXT,
  motDePasse TEXT
);

DROP TABLE IF EXISTS [panier]; -- "OR REPLACE"
CREATE TABLE panier (
  idEvenement INTEGER REFERENCES evenenment(idEvenement),
  idUtilisateur INTEGER REFERENCES utilisateur(idUtilisateur),
  nbBilletAcheter INT,
  CONSTRAINT PRIMARY KEY(idEvenenement, idUtilisateur)
);
