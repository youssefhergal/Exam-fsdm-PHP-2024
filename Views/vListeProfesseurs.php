<article>


    <h1 class="my-4 content ">Liste des Profresseurs</h1>

    <?php
    echo '<table class="table table-striped table-bordered">';
    echo '<thead class="thead-dark">';
    echo '<tr><th>CodeE</th><th>Nom</th><th>Prenom</th><th>Departement</th><th colspan="2">Action</th></tr>';
    echo '</thead>';
    echo '<tbody>';

    foreach ($professeurs as $prof) {
        echo '<tr>';
        echo '<td>' . $prof['Code'] . '</td>';
        echo '<td>' . $prof['Nom'] . '</td>';
        echo '<td>' . $prof['Prenom'] . '</td>';
        echo '<td>' . $prof['Departement'] . '</td>';
        echo '<td> Modifier  </td>';
        echo '<td>  Supprimer  </td>';

        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';

    ?>
</article>
</main>

