// Nom : Keven Imbeault
// Date : 6 avril 2020
// But : Créer une page d'acceuil HTML

"use strict"

function getDateString() {
    //Création de constantes pour les mois et jours de la semaines en prenant compte que la fonction date.getDay() donne 0 pour Dimanche
    const MONTHS = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
    const DAYS = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
    
    //« Freeze » les tableaux pour empêcher leur modification par le code 
    Object.freeze(MONTHS, DAYS);

    //Création d'une nouvelle date puis création du « string » donnant la date du jour en utilisant les tableaux créer précedemment
    let date = new Date();
    let dateString = `${DAYS[date.getDay()]}, le ${date.getDate()} ${MONTHS[date.getMonth()]} ${date.getFullYear()}`;
    
    //Affiche le texte dans la navbar
    document.getElementById("date").innerText = dateString;
}

function confirmDelete() {
    return confirm('Voulez-vous supprimer ce ou ces enregistrements ?');
}

function cancelMod() {
    window.location.href = 'modifierAthlete.php';
}

function alert(msg) {
    alert(msg);
}