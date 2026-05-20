let inputCP = document.getElementById('cp');

inputCP.onblur = function() {
    fetch('txt/GetVilles.php?cp=' + inputCP.value, {method: 'GET'})
    .then(reponse => reponse.text())
    .then(donnees => insererChoixVilles(donnees))
    .catch(erreur => console.log('Echec de l\'appel asynchrone', erreur));
}

function insererChoixVilles(donnees) {
    villes = donnees.split("|");
    let chpVille = document.getElementById("ville");
    chpVille.innerHTML = "";
    let parent = inputCP.parentElement;
    let newchpVille;
    if (villes[0] === "") {
        newchpVille = document.createElement('input');
        newchpVille.type = 'text';
    } else {
        newchpVille = document.createElement('select');
        for (v of villes) {
            let option = document.createElement('option');
            option.value = v;
            option.textContent = v;
            newchpVille.appendChild(option);
        }
    }
    newchpVille.id = chpVille.id;
    newchpVille.name = chpVille.name;
    newchpVille.required = chpVille.required;
    parent.replaceChild(newchpVille, chpVille);
    newchpVille.focus();
}