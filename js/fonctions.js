/*
* Auteur : Keven Imbeault
* Date : 10 Février 2021
* */


// Envoie à la page commande avec l'action ajouter lorsqu'un utilisateur
// clique sur le bouton "Acheter" de la page produit.php
addRedirect = (productId) => window.location.href='/commande.php?action=ajouter&no=' + productId;