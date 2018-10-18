CREATE TABLE evenements (
  idEvenements INT PRIMARY KEY,
  nom TEXT,
  type TEXT,
  libelle TEXT,
  image TEXT,
  moment DATE,
  nbBillet INT,
  prix REAL
  );

CREATE TABLE utilisateurs (
  idUtilisateurs INTEGER PRIMARY KEY,
  identifiants TEXT,
  motDePasse TEXT,
  );

CREATE VIEW panier (idEvenements, idUtilisateurs, nbBilletAcheter)AS
  SELECT idEvenements, idUtilisateurs
  FROM evenements, utilisateurs
  WHERE nbBilletAcheter = 1;
