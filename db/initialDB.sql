/*
    Auteur : Keven Imbeault
    Date : 28 Janvier 2021
 */

-- Drop tout avant l'utilisation
DROP DATABASE IF EXISTS IMBK25099802;
DROP TABLE IF EXISTS IMBK25099802.client;
DROP TABLE IF EXISTS IMBK25099802.facture;
DROP TABLE IF EXISTS IMBK25099802.commande;
DROP TABLE IF EXISTS IMBK25099802.produit_fr;
DROP TABLE IF EXISTS IMBK25099802.produit_en;
DROP TABLE IF EXISTS IMBK25099802.panier;
DROP TABLE IF EXISTS IMBK25099802.usager;
DROP TABLE IF EXISTS IMBK25099802.devise;

-- Création du schéma nécessaire s'il n'existe pas
CREATE DATABASE IF NOT EXISTS IMBK25099802;
USE IMBK25099802;

-- Création de la table client
CREATE TABLE IF NOT EXISTS client
(
    idClient    VARCHAR(8),
    prenom      VARCHAR(25) NOT NULL,
    nom         VARCHAR(25) NOT NULL,
    courriel    VARCHAR(50),
    telephone   VARCHAR(10),
    CONSTRAINT PKClient PRIMARY KEY (idClient)
);

-- Création de la table facture
CREATE TABLE IF NOT EXISTS facture
(
    idFacture       SMALLINT AUTO_INCREMENT,
    noClient        VARCHAR(8) NOT NULL,
    dateLivraison   DATETIME NOT NULL,
    montant         FLOAT NOT NULL,
    commentaire     VARCHAR(250),
    CONSTRAINT PKFacture PRIMARY KEY (idFacture),
    CONSTRAINT FKFacture FOREIGN KEY (noClient)
        REFERENCES client(idClient)
);

-- Création de la table commande
CREATE TABLE IF NOT EXISTS commande
(
    idCommande      SMALLINT AUTO_INCREMENT,
    noFacture       SMALLINT,
    noProduit       SMALLINT,
    quantite        SMALLINT NOT NULL,
    CONSTRAINT PKCommande PRIMARY KEY (idCommande, noFacture, noProduit),
    CONSTRAINT FKCommande_Facture FOREIGN KEY (noFacture)
        REFERENCES facture(idFacture)
);

-- Création de la table produit_fr
CREATE TABLE IF NOT EXISTS produit_fr
(
    idProduit   SMALLINT AUTO_INCREMENT,
    nomProduit  VARCHAR(100) NOT NULL,
    categorie   SMALLINT NOT NULL,
    fournisseur VARCHAR(50) NOT NULL,
    quantite    SMALLINT NOT NULL,
    format      VARCHAR(25) NOT NULL,
    prix        FLOAT NOT NULL,
    description VARCHAR(100) NOT NULL,
    CONSTRAINT PKProduitFR PRIMARY KEY (idProduit)
);

CREATE TABLE IF NOT EXISTS produit_en
(
    idProduit   SMALLINT AUTO_INCREMENT,
    nomProduit  VARCHAR(100) NOT NULL,
    categorie   SMALLINT NOT NULL,
    fournisseur VARCHAR(50) NOT NULL,
    quantite    SMALLINT NOT NULL,
    format      VARCHAR(25) NOT NULL,
    prix        FLOAT NOT NULL,
    description VARCHAR(100) NOT NULL,
    CONSTRAINT PKProduitEN PRIMARY KEY (idProduit)
);

-- Création de la table panier
CREATE TABLE IF NOT EXISTS panier
(
    idPanier    VARCHAR(20),
    noProduit   SMALLINT,
    quantite    SMALLINT NOT NULL,
    datePanier  DATETIME NOT NULL,
    CONSTRAINT PKPanier PRIMARY KEY (idPanier, noProduit),
    CONSTRAINT FKPanier_ProduitFR FOREIGN KEY (noProduit)
        REFERENCES produit_fr(idProduit)
    /*CONSTRAINT FKPanier_ProduitEN FOREIGN KEY (noProduit)
        REFERENCES produit_en(idProduit)*/
);

-- Création de la table usager
CREATE TABLE IF NOT EXISTS usager
(
    idUsager    SMALLINT,
    nom         VARCHAR(45) NOT NULL,
    motPasse    VARCHAR(250) NOT NULL,
    courriel    VARCHAR(50) NOT NULL,
    CONSTRAINT PKUsager PRIMARY KEY (idUsager)
);

-- Création de la table devise
CREATE TABLE IF NOT EXISTS devise
(
    idDevise    SMALLINT,
    dateTaux    Date NOT NULL,
    taux        FLOAT,
    CONSTRAINT PKDevise PRIMARY KEY (idDevise)
);