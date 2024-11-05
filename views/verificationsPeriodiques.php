<?php

require 'inc/head.php';

?>

<main class="main" id="top">
  <?php require 'inc/nav.php'; ?>
  <div class="content">

    <table class="table">
      <thead>
        <tr>
          <th scope="col">Eléments</th>
          <th scope="col"></th>
          <th scope="col" class="text-center">Etat</th>
          <th scope="col"></th>
          <th scope="col">Modifier</th>
        </tr>
        <tr class="text-center">
          <th scope="col"></th>
          <th scope="col">Conforme</th>
          <th scope="col">Non Conforme</th>
          <th scope="col">Non Concerné</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td scope="row">État général (vétusté, entretien, vandalisme...)</td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckDefault" type="checkbox" onclick="return false;" />
            </div>
          </td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckChecked" type="checkbox" value="" checked="" onclick="return false;" />
            </div>
          </td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckDefault" type="checkbox" value="" onclick="return false;" />
            </div>
          </td>
          <td>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-pen"></i></button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">État général (vétusté, entretien, vandalisme...)</h5>
                    <button class="btn btn-close p-1" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p class="text-body-tertiary lh-lg mb-0">This is a static modal example (meaning its position and display have been overridden). Included are the modal header, modal body (required for padding), and modal footer (optional). </p>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary" type="button">Okay</button>
                    <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</button>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td scope="row">Propreté et état du sol</td>
          <td>...</td>
        </tr>
        <tr>
          <td scope="row">Fondations</td>
          <td>...</td>
        </tr>
        <tr>
          <td scope="row">Niveau 0 (indication du niveau 0
            sur les poteaux ou la structure)</td>
          <td>...</td>
        </tr>
        <tr>
          <td scope="row">Signalétique</td>
          <td>...</td>
        </tr>
        <tr>
          <td scope="row">Surface de sécurité (2 mètres
            minimum autour de l’équipement
            sans obstacle)</td>
          <td>...</td>
        </tr>
        <tr>
          <td scope="row">Stabilité générale de la structure</td>
          <td>...</td>
        </tr>
        <tr>
          <td scope="row">Présence de visserie saillante ou
            arêtes vives</td>
          <td>...</td>
        </tr>
        <tr>
          <td scope="row">Main courante</td>
          <td>...</td>
        </tr>
        <tr>
          <td scope="row">Garde corps/Balustrade</td>
          <td>...</td>
        </tr>
        <tr>
          <td scope="row">Cordes à grimper (corde scellée au
            sol et tendue)</td>
          <td>...</td>
        </tr>
        <tr>
          <td scope="row">Tubes (extrémités bouchées)</td>
          <td>...</td>
        </tr>
        <tr>
          <td scope="row">Échelle d’accès</td>
          <td>...</td>
        </tr>
        <tr>
          <td scope="row">Escaliers</td>
          <td>...</td>
        </tr>
        <tr>
          <td scope="row">Dispositif à grimper</td>
          <td>...</td>
        </tr>
        <tr>
          <td scope="row">Glissière</td>
          <td>...</td>
        </tr>
        <tr>
          <td scope="row">Plate-forme</td>
          <td>...</td>
        </tr>
        <tr>
          <td scope="row">Ressort</td>
          <td>...</td>
        </tr>
        <tr>
          <td scope="row">Axe de rotation</td>
          <td>...</td>
        </tr>
      </tbody>
    </table>

    <!-- <form action="" method="post">
      <div class="form-check">

        <input class="form-check-input" id="etatGeneral" type="radio" name="conforme" />

        <label class="form-check-label" for="etatGeneral">Default radio</label>
      </div>
      </td>
      <td>
        <div class="form-check">

          <input class="form-check-input" id="etatGeneral" type="radio" name="nonConforme" />

          <label class="form-check-label" for="etatGeneral">Default radio</label>
        </div>
      </td>
      <td>
        <div class="form-check">

          <input class="form-check-input" id="etatGeneral" type="radio" name="nonConcerne" />

          <label class="form-check-label" for="etatGeneral">Default radio</label>
        </div>
    </form> -->

  </div>
</main>

<?php require 'inc/foot.php'; ?>