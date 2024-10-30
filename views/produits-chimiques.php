<?php ?>

<?= include 'inc/head.php'; ?>

<main class="top" id="top">
  <div class="content">
    <table class="table text-center">
      <thead>
        <tr>
          <th scope="col">Type</th>
          <th scope="col">Nom du produit ou de la substance chimique</th>
          <th scope="col">Nom du fournisseur (pour les produits chimiques)</th>
          <th scope="col">Date d’intégration de la FDS ou de la Fiche toxicologique au registre</th>
          <th scope="col">Quantité présente dans l’unité (pour les produits chimiques)</th>
          <th scope="col">Date d’entrée du produit chimique dans l’unité</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td scope="row">Produit chimique</td>
          <td>BlaBla</td>
          <td>Blabla</td>
          <td>Blabla</td>
          <td>Blabla</td>
          <td>Blabla</td>
        </tr>

      </tbody>
    </table>


    <div class="d-flex justify-content-center"> <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Ajouter un élément</button></div>
    <div class="modal fade" id="exampleModal" tabindex="-1" style="display: none;" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button class="btn btn-close p-1" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="" method="post">

              <div class="form-floating mb-3">

                <input class="form-control" id="floatingNom" type="text">

                <label for="floatingInput">Nom du produit ou de la substance chimique</label>
              </div>
              <div class="form-floating">

                <input class="form-control" id="floatingFournisseur" type="text">

                <label for="floatingPassword">Nom du fournisseur (pour les produits chimiques)</label>
              </div>


          </div>
          <div class="modal-footer">
            <button class="btn btn-primary" type="sumbit">Ajouter</button>
            </form>
            <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>
  </div>

</main class="top" id="top">

<?= include 'inc/foot.php'; ?>