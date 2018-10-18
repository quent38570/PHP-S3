CREATE TABLE evenements (
  idEvenements INT PRIMARY KEY,
  nomEvenements TEXT,
  type TEXT,
  libelle TEXT,
  image TEXT,
  lieu TEXT REFERENCES lieux(nomLieux),
  moment DATE,
  nbBillet INT,
  prix REAL
  );

CREATE TABLE utilisateurs (
  idUtilisateurs INTEGER PRIMARY KEY,
  identifiants TEXT,
  motDePasse TEXT,
  );

CREATE TABLE lieux (
  nomLieux TEXT PRIMARY KEY,
  adresse TEXT,
  site TEXT
);

CREATE VIEW panier (idEvenements, idUtilisateurs, nbBilletAcheter)AS
  SELECT idEvenements, idUtilisateurs
  FROM evenements, utilisateurs
  WHERE nbBilletAcheter = 1;
