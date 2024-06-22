<?php


include("data/data.php");
include("models/model.php");



function indexAction()
{
    $view = "Views/vindex.php";
    render($view);
}

function listefilieresAction()
{
    $view = "Views/vListeFilieres.php";
    $variables = ["filieres" => findAll("filieres")];
    render($view, $variables);
}

function listeetudiantsAction()
{
    $view = "Views/vListeEtudiants.php";
    $variables = ["etudiants" => findAll("etudiants") ];
    render($view, $variables);

}
function listedepartementsAction()
{
    $view = "Views/vListeDepartements.php";
    $variables = ["departements" => findAll("departements")];
    render($view, $variables);
}


function listeprofesseursAction()
{
    $view = "Views/vListeProfesseurs.php";
    $variables = ["professeurs" => findAll("professeurs")];
    render($view, $variables);
}

function listesallesAction()
{
    $view = "Views/vListeSalles.php";
    $variables = ["salles" => findAll("salles")];
    render($view, $variables);
}



function render($vue , array $variables=array()) {

    extract($variables);
    if(file_exists($vue)) {
        ob_start();
        require($vue);
        $view= ob_get_clean();
        require("Views/template.php");
    }

    else throw New Exception("La vue $vue n'existe pas");

}


