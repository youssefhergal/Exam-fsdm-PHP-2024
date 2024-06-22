
<article>


<h1 class="my-4 content ">Liste des Filiéres</h1>

<?php
echo '<table class="table table-striped table-bordered">';
echo '<thead class="thead-dark">';
echo '<tr><th>CodeF</th><th>Intitulé</th><th colspan="2">Action</th></tr>';
echo '</thead>';
echo '<tbody>';

foreach ($filieres as $fil) {
    echo '<tr>';
    echo '<td>' . $fil['Code'] . '</td>';
    echo '<td>' . $fil['Intitulé'] . '</td>';
    echo '<td> Modifier  </td>';
    echo '<td>  Supprimer  </td>';

    echo '</tr>';
}

echo '</tbody>';
echo '</table>';

?>


</article>


</main>
