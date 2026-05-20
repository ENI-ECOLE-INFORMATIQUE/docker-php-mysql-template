let inputCPjson = document.getElementById('cpJson');

inputCPjson.onblur = function() {
    fetch('json/GetVilles.php?cp=' + inputCPjson.value, {method: 'GET'})
    .then(reponse => reponse.json())
    .then(donnees => insererChoixVillesJson(donnees))
    .catch(erreur => console.log('Echec de l\'appel asynchrone', erreur));
}

function insererChoixVillesJson(villes) {
    let chpVilleJson = document.getElementById("villeJson");
    chpVilleJson.innerHTML = "";
    let parent = inputCPjson.parentElement;
    let newchpVille;
    if (!Array.isArray(villes) || !villes.length) {
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
    newchpVille.id = chpVilleJson.id;
    newchpVille.name = chpVilleJson.name;
    newchpVille.required = chpVilleJson.required;
    parent.replaceChild(newchpVille, chpVilleJson);
    newchpVille.focus();
}