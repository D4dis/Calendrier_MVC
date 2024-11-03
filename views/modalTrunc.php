<?php include 'inc/head.php'; ?>
<main class="main" id="top">
  <?php include 'inc/nav.php'; ?>
  <div class="content">
    <div class="d-flex justify-content-center">
      <div class="card " style="max-width:40rem;">
        <div class="card-body">
          <h5 class="card-title">Etes-vous sur de vouloir vider la table</h5>
          <p class="card-text">Confirmer votre choix </p>

          <a href="index.php?ctrl=calendar&action=confirmTruncate" class="btn btn-danger">Confirmer</a>
          <a href="index.php?ctrl=calendar" class="btn btn-outline-primary">Annuler</a>
        </div>
      </div>
    </div>
  </div>
</main>

<?php include 'inc/foot.php'; ?>