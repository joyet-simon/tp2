"use strict";

var prenom, nom, error;

function validateForm() {
    document.getElementById("nomError").innerHTML = "";
    document.getElementById("prenomError").innerHTML = "";
    prenom = document.forms["form"]["prenom"].value;
    nom = document.forms["form"]["nom"].value;
    if (/^[A-Z][a-z]+$/.test(prenom)) {
        if (/^[A-Z][a-z]+$/.test(nom)) {
            return true;
        } else {
            document.getElementById("nomError").innerHTML = "Le nom n'est pas valide";
        }
    } else {
        document.getElementById("prenomError").innerHTML = "Le prénom n'est pas valide";

    }
    return false;
} 