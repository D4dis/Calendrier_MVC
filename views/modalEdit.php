<?php

var_dump($_POST);

?>


<?= include 'inc/head.php'; ?>

<main class="main" id="top">
  <div class="content">
    <?= include 'inc/nav.php'; ?>
    <?php if (isset($_SESSION['error'])) : ?>
      <div class="d-flex justify-content-center">
        <div class="alert alert-outline-danger d-flex align-items-center w-50" role="alert">
          <span class="fas fa-times-circle text-danger fs-5 me-3"></span>
          <p class="mb-0 flex-1"><?= $_SESSION['error'] ?></p>
          <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
    <?php endif; ?>
    <div class="d-flex justify-content-center">
      <div class="card " style="width:40rem;">
        <div class="card-body">
          <h5 class="card-title">Entrer les heures à modifier</h5>
          <form action="index.php?ctrl=calendar&action=confirmEditOneEvent" method="post">
            <div class="my-5">
              <div class="mb-2"><label class="form-label" for="timepicker1">Heure début</label></div>
              <input class="form-control datetimepicker flatpickr-input" id="timepicker1" name="heureDebut" type="text" placeholder="Heure : minute" data-options="{&quot;enableTime&quot;:true,&quot;noCalendar&quot;:true,&quot;dateFormat&quot;:&quot;H:i&quot;,&quot;disableMobile&quot;:true}" readonly="readonly">
            </div>

            <div class="mb-2"><label class="form-label" for="timepicker2">Heure fin</label></div>
            <input class="form-control datetimepicker flatpickr-input mb-3" id="timepicker2" name="heureFin" type="text" placeholder="Heure : minute" data-options="{&quot;enableTime&quot;:true,&quot;noCalendar&quot;:true,&quot;dateFormat&quot;:&quot;H:i&quot;,&quot;disableMobile&quot;:true}" readonly="readonly">
            <?php if (isset($_GET['id'])) : ?>
              <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
            <?php endif; ?>
            <button class="btn btn-primary" type="submit">Confirmer</button>
            <a href="index.php?ctrl=calendar" class="btn btn-outline-primary">Annuler</a>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
</main>

<?= include 'inc/foot.php'; ?>