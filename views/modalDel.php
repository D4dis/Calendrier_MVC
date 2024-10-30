<?= include 'inc/head.php'; ?>
<main class="main" id="top">
  <?= include 'inc/nav.php'; ?>
  <div class="content">
    <div class="d-flex justify-content-center">
      <div class="card " style="max-width:40rem;">
        <div class="card-body">
          <h5 class="card-title">Etes-vous sur de vouloir supprimer cet élément</h5>
          <p class="card-text">Confirmer votre choix </p>

          <a href="index.php?ctrl=calendar&action=confirmDeleteOneEvent&id=<?= $_GET['id'] ?>" class="btn btn-danger">Confirmer</a>
          <a href="index.php?ctrl=calendar" class="btn btn-outline-primary">Annuler</a>
        </div>
      </div>
    </div>
  </div>
</main>

<?= include 'inc/foot.php'; ?>