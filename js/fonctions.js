/*
* Auteur : Keven Imbeault
* Date : 10 Février 2021
* */


// Envoie à la page commande avec l'action ajouter lorsqu'un utilisateur
// clique sur le bouton "Acheter" de la page produit.php
addRedirect = (productId) => window.location.href='./commande.php?action=ajouter&no=' + productId;

// Modifier le lien afin de lancer la suppression d'un article du panier
removeRedirect = (productId) => window.location.href='./commande.php?action=supprimer&no=' + productId;

mailRedirect = (emailAddress) => window.location.href='./commande.php?action=courriel&email=' + emailAddress;

test = () => console.log(document.getElementById("email"));

function askEmailAddress () {
    return prompt("Inscrire votre adresse courriel : ");
}

function updateAmount (originalAmount) {
    let totalAmount = parseFloat(document.getElementById("totalAmount").value)
    let totalAmountSpan = document.getElementById("totalAmountSpan");
    let radioTransportLivraison = document.getElementById("transportLivraison");

    // Retire les taxes du montant
    totalAmount /= 1.14975

    if(totalAmount < 100  && radioTransportLivraison.checked) {
        totalAmountSpan.innerText = (totalAmount * 1.14975 + 10).toFixed(2);
    } else {
        totalAmountSpan.innerText = originalAmount;
    }
}

function validateEmail(emailAddress) {
    if(emailAddress == "") {
        alert("Veuillez entrer une adresse courriel !");
    } else {
        window.location.href = './index.php?action=resetmp&email=' + emailAddress;
    }
}

function verifyNewPassword() {
    if(document.getElementById("pass1").value == "" || document.getElementById("pass2").value == "") {
        alert("Un ou les champ(s) sont vides !");
        return false;
    }

    if(document.getElementById("pass1").value == document.getElementById("pass2").value) {
        alert("Mot de passe modifé !");
        return true;
    } else {
        alert("Mot de passe ne correspondent pas, essayer de nouveau !")
        return false;
    }
}