<article>


<h1 class="my-4 content ">Liste des Étudiants</h1>

<?php
echo '<table class="table table-striped table-bordered">';
echo '<thead class="thead-dark">';
echo '<tr><th>CodeE</th><th>Nom</th><th>Prenom</th><th>Filière</th><th>Note</th><th colspan="2">Action</th></tr>';
echo '</thead>';
echo '<tbody>';

foreach ($etudiants as $student) {
    echo '<tr>';
    echo '<td>' . $student['Code'] . '</td>';
    echo '<td>' . $student['Nom'] . '</td>';
    echo '<td>' . $student['Prenom'] . '</td>';
    echo '<td>' . $student['Filière'] . '</td>';
    echo '<td>' . $student['Note'] . '</td>';
    echo '<td> Modifier  </td>';
    echo '<td>  Supprimer  </td>';

    echo '</tr>';
}

echo '</tbody>';
echo '</table>';

?>
</article>
</main>

