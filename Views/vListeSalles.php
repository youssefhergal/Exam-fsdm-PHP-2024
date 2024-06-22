
<article>


    <h1 class="my-4 content ">Liste des Salles</h1>

    <?php
    echo '<table class="table table-striped table-bordered">';
    echo '<thead class="thead-dark">';
    echo '<tr><th>CodeS</th><th>Nom</th> <th>Capacité</th> <th colspan="2">Action</th></tr>';
    echo '</thead>';
    echo '<tbody>';

    foreach ($salles as $salle) {
        echo '<tr>';
        echo '<td>' . $salle['Code'] . '</td>';
        echo '<td>' . $salle['Nom'] . '</td>';
        echo '<td>' . $salle['Capacité'] . '</td>';
        echo '<td> Modifier  </td>';
        echo '<td>  Supprimer  </td>';

        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';

    ?>


</article>


</main>
