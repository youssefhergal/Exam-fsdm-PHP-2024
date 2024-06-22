
<article>


<h1 class="my-4 content ">Liste des Départemets</h1>

<?php
echo '<table class="table table-striped table-bordered">';
echo '<thead class="thead-dark">';
echo '<tr><th>CodeD</th><th>Intitulé</th><th colspan="2">Action</th></tr>';
echo '</thead>';
echo '<tbody>';

foreach ($departements as $dept) {
    echo '<tr>';
    echo '<td>' . $dept['Code'] . '</td>';
    echo '<td>' . $dept['Intitule'] . '</td>';
    echo '<td>  Modifier  </td>';
    echo '<td>  Supprimer  </td>';

    echo '</tr>';
}

echo '</tbody>';
echo '</table>';

?>
</article>
</main>

