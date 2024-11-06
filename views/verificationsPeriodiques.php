<?php

require 'inc/head.php';

?>

<main class="main" id="top">
  <?php require 'inc/nav.php'; ?>
  <div class="content">
    <?php if (isset($_SESSION['error']) && !empty($_SESSION['error'])) : ?>
      <div class="alert alert-outline-danger d-flex align-items-center" role="alert">
        <span class="fas fa-times-circle text-danger fs-5 me-3"></span>
        <p class="mb-0 flex-1"><?= $_SESSION['error'] ?></p>
        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <?php session_destroy(); ?>
    <?php endif; ?>
    <table class="table table-striped">
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
              <input class="form-check-input" id="flexCheckDefault" type="checkbox" checked="" onclick="return false;" />
            </div>
          </td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckChecked" type="checkbox" onclick="return false;" />
            </div>
          </td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckDefault" type="checkbox" onclick="return false;" />
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

                    <form action="index.php?ctrl=verificationsPeriodiques&action=verifForm" method="post">
                      <input type="hidden" name="id" value="etatGeneral">
                      <div class="form-check">
                        <input class="form-check-input" id="etatGeneral1" type="radio" name="value" value="conforme" checked="">
                        <label class="form-check-label" for="etatGeneral1">Conforme</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="etatGeneral2" type="radio" name="value" value="nonConforme">
                        <label class="form-check-label" for="etatGeneral2">Non Conforme</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="etatGeneral3" type="radio" name="value" value="nonConcerne">
                        <label class="form-check-label" for="etatGeneral3">Non Concerné</label>
                      </div>

                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary" type="sumbit">Enregistrer</button>
                    </form>
                    <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Annuler</button>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td scope="row">Propreté et état du sol</td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckDefault" type="checkbox" checked="" onclick="return false;" />
            </div>
          </td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckChecked" type="checkbox" onclick="return false;" />
            </div>
          </td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckDefault" type="checkbox" onclick="return false;" />
            </div>
          </td>
          <td>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal1"><i class="fa-solid fa-pen"></i></button>
            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Propreté et état du sol</h5>
                    <button class="btn btn-close p-1" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">

                    <form action="index.php?ctrl=verificationsPeriodiques&action=verifForm" method="post">
                      <input type="hidden" name="id" value="proprete">
                      <div class="form-check">
                        <input class="form-check-input" id="proprete1" type="radio" name="value" value="conforme" checked="">
                        <label class="form-check-label" for="proprete1">Conforme</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="proprete2" type="radio" name="value" value="nonConforme">
                        <label class="form-check-label" for="proprete2">Non Conforme</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="proprete3" type="radio" name="value" value="nonConcerne">
                        <label class="form-check-label" for="proprete3">Non Concerné</label>
                      </div>

                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary" type="sumbit">Enregistrer</button>
                    </form>
                    <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Annuler</button>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td scope="row">Fondations</td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckDefault" type="checkbox" checked="" onclick="return false;" />
            </div>
          </td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckChecked" type="checkbox" onclick="return false;" />
            </div>
          </td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckDefault" type="checkbox" onclick="return false;" />
            </div>
          </td>
          <td>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2"><i class="fa-solid fa-pen"></i></button>
            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Fondations</h5>
                    <button class="btn btn-close p-1" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">

                    <form action="index.php?ctrl=verificationsPeriodiques&action=verifForm" method="post">
                      <input type="hidden" name="id" value="fondation">
                      <div class="form-check">
                        <input class="form-check-input" id="fondation1" type="radio" name="value" value="conforme" checked="">
                        <label class="form-check-label" for="fondation1">Conforme</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="fondation2" type="radio" name="value" value="nonConforme">
                        <label class="form-check-label" for="fondation2">Non Conforme</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="fondation3" type="radio" name="value" value="nonConcerne">
                        <label class="form-check-label" for="fondation3">Non Concerné</label>
                      </div>

                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary" type="sumbit">Enregistrer</button>
                    </form>
                    <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Annuler</button>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td scope="row">Niveau 0 (indication du niveau 0
            sur les poteaux ou la structure)</td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckDefault" type="checkbox" checked="" onclick="return false;" />
            </div>
          </td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckChecked" type="checkbox" onclick="return false;" />
            </div>
          </td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckDefault" type="checkbox" onclick="return false;" />
            </div>
          </td>
          <td>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal3"><i class="fa-solid fa-pen"></i></button>
            <div class="modal fade" id="exampleModal3" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Niveau 0 (indication du niveau 0 sur les poteaux ou la structure)</h5>
                    <button class="btn btn-close p-1" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">

                    <form action="index.php?ctrl=verificationsPeriodiques&action=verifForm" method="post">
                      <input type="hidden" name="id" value="niveau">
                      <div class="form-check">
                        <input class="form-check-input" id="niveau1" type="radio" name="value" value="conforme" checked="">
                        <label class="form-check-label" for="niveau1">Conforme</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="niveau2" type="radio" name="value" value="nonConforme">
                        <label class="form-check-label" for="niveau2">Non Conforme</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="niveau3" type="radio" name="value" value="nonConcerne">
                        <label class="form-check-label" for="niveau3">Non Concerné</label>
                      </div>

                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary" type="sumbit">Enregistrer</button>
                    </form>
                    <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Annuler</button>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td scope="row">Signalétique</td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckDefault" type="checkbox" checked="" onclick="return false;" />
            </div>
          </td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckChecked" type="checkbox" onclick="return false;" />
            </div>
          </td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckDefault" type="checkbox" onclick="return false;" />
            </div>
          </td>
          <td>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal4"><i class="fa-solid fa-pen"></i></button>
            <div class="modal fade" id="exampleModal4" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Signalétique</h5>
                    <button class="btn btn-close p-1" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">

                    <form action="index.php?ctrl=verificationsPeriodiques&action=verifForm" method="post">
                      <input type="hidden" name="id" value="signaletique">
                      <div class="form-check">
                        <input class="form-check-input" id="signaletique1" type="radio" name="value" value="conforme" checked="">
                        <label class="form-check-label" for="signaletique1">Conforme</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="signaletique2" type="radio" name="value" value="nonConforme">
                        <label class="form-check-label" for="signaletique2">Non Conforme</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="signaletique3" type="radio" name="value" value="nonConcerne">
                        <label class="form-check-label" for="signaletique3">Non Concerné</label>
                      </div>

                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary" type="sumbit">Enregistrer</button>
                    </form>
                    <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Annuler</button>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td scope="row">Surface de sécurité (2 mètres minimum autour de l’équipement sans obstacle)</td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckDefault" type="checkbox" checked="" onclick="return false;" />
            </div>
          </td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckChecked" type="checkbox" onclick="return false;" />
            </div>
          </td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckDefault" type="checkbox" onclick="return false;" />
            </div>
          </td>
          <td>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal5"><i class="fa-solid fa-pen"></i></button>
            <div class="modal fade" id="exampleModal5" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Surface de sécurité (2 mètres minimum autour de l’équipement sans obstacle)</h5>
                    <button class="btn btn-close p-1" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">

                    <form action="index.php?ctrl=verificationsPeriodiques&action=verifForm" method="post">
                      <input type="hidden" name="id" value="surface">
                      <div class="form-check">
                        <input class="form-check-input" id="surface1" type="radio" name="value" value="conforme" checked="">
                        <label class="form-check-label" for="surface1">Conforme</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="surface2" type="radio" name="value" value="nonConforme">
                        <label class="form-check-label" for="surface2">Non Conforme</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="surface3" type="radio" name="value" value="nonConcerne">
                        <label class="form-check-label" for="surface3">Non Concerné</label>
                      </div>

                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary" type="sumbit">Enregistrer</button>
                    </form>
                    <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Annuler</button>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td scope="row">Stabilité générale de la structure</td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckDefault" type="checkbox" checked="" onclick="return false;" />
            </div>
          </td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckChecked" type="checkbox" onclick="return false;" />
            </div>
          </td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckDefault" type="checkbox" onclick="return false;" />
            </div>
          </td>
          <td>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal6"><i class="fa-solid fa-pen"></i></button>
            <div class="modal fade" id="exampleModal6" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Stabilité générale de la structure</h5>
                    <button class="btn btn-close p-1" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">

                    <form action="index.php?ctrl=verificationsPeriodiques&action=verifForm" method="post">
                      <input type="hidden" name="id" value="stabilite">
                      <div class="form-check">
                        <input class="form-check-input" id="stabilite1" type="radio" name="value" value="conforme" checked="">
                        <label class="form-check-label" for="stabilite1">Conforme</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="stabilite2" type="radio" name="value" value="nonConforme">
                        <label class="form-check-label" for="stabilite2">Non Conforme</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="stabilite3" type="radio" name="value" value="nonConcerne">
                        <label class="form-check-label" for="stabilite3">Non Concerné</label>
                      </div>

                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary" type="sumbit">Enregistrer</button>
                    </form>
                    <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Annuler</button>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td scope="row">Présence de visserie saillante ou arêtes vives</td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckDefault" type="checkbox" checked="" onclick="return false;" />
            </div>
          </td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckChecked" type="checkbox" onclick="return false;" />
            </div>
          </td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckDefault" type="checkbox" onclick="return false;" />
            </div>
          </td>
          <td>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal7"><i class="fa-solid fa-pen"></i></button>
            <div class="modal fade" id="exampleModal7" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Présence de visserie saillante ou arêtes vives</h5>
                    <button class="btn btn-close p-1" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">

                    <form action="index.php?ctrl=verificationsPeriodiques&action=verifForm" method="post">
                      <input type="hidden" name="id" value="visserie">
                      <div class="form-check">
                        <input class="form-check-input" id="visserie1" type="radio" name="value" value="conforme" checked="">
                        <label class="form-check-label" for="visserie1">Conforme</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="visserie2" type="radio" name="value" value="nonConforme">
                        <label class="form-check-label" for="visserie2">Non Conforme</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="visserie3" type="radio" name="value" value="nonConcerne">
                        <label class="form-check-label" for="visserie3">Non Concerné</label>
                      </div>

                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary" type="sumbit">Enregistrer</button>
                    </form>
                    <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Annuler</button>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td scope="row">Main courante</td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckDefault" type="checkbox" checked="" onclick="return false;" />
            </div>
          </td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckChecked" type="checkbox" onclick="return false;" />
            </div>
          </td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckDefault" type="checkbox" onclick="return false;" />
            </div>
          </td>
          <td>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal8"><i class="fa-solid fa-pen"></i></button>
            <div class="modal fade" id="exampleModal8" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Main courante</h5>
                    <button class="btn btn-close p-1" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">

                    <form action="index.php?ctrl=verificationsPeriodiques&action=verifForm" method="post">
                      <input type="hidden" name="id" value="mainCourante">
                      <div class="form-check">
                        <input class="form-check-input" id="mainCourante1" type="radio" name="value" value="conforme" checked="">
                        <label class="form-check-label" for="mainCourante1">Conforme</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="mainCourante2" type="radio" name="value" value="nonConforme">
                        <label class="form-check-label" for="mainCourante2">Non Conforme</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="mainCourante3" type="radio" name="value" value="nonConcerne">
                        <label class="form-check-label" for="mainCourante3">Non Concerné</label>
                      </div>

                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary" type="sumbit">Enregistrer</button>
                    </form>
                    <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Annuler</button>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td scope="row">Garde corps/Balustrade</td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckDefault" type="checkbox" checked="" onclick="return false;" />
            </div>
          </td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckChecked" type="checkbox" onclick="return false;" />
            </div>
          </td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckDefault" type="checkbox" onclick="return false;" />
            </div>
          </td>
          <td>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal9"><i class="fa-solid fa-pen"></i></button>
            <div class="modal fade" id="exampleModal9" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Garde corps/Balustrade</h5>
                    <button class="btn btn-close p-1" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">

                    <form action="index.php?ctrl=verificationsPeriodiques&action=verifForm" method="post">
                      <input type="hidden" name="id" value="balustrade">
                      <div class="form-check">
                        <input class="form-check-input" id="balustrade1" type="radio" name="value" value="conforme" checked="">
                        <label class="form-check-label" for="balustrade1">Conforme</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="balustrade2" type="radio" name="value" value="nonConforme">
                        <label class="form-check-label" for="balustrade2">Non Conforme</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="balustrade3" type="radio" name="value" value="nonConcerne">
                        <label class="form-check-label" for="balustrade3">Non Concerné</label>
                      </div>

                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary" type="sumbit">Enregistrer</button>
                    </form>
                    <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Annuler</button>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td scope="row">Cordes à grimper (corde scellée au sol et tendue)</td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckDefault" type="checkbox" checked="" onclick="return false;" />
            </div>
          </td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckChecked" type="checkbox" onclick="return false;" />
            </div>
          </td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckDefault" type="checkbox" onclick="return false;" />
            </div>
          </td>
          <td>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal10"><i class="fa-solid fa-pen"></i></button>
            <div class="modal fade" id="exampleModal10" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cordes à grimper (corde scellée au sol et tendue)</h5>
                    <button class="btn btn-close p-1" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">

                    <form action="index.php?ctrl=verificationsPeriodiques&action=verifForm" method="post">
                      <input type="hidden" name="id" value="corde">
                      <div class="form-check">
                        <input class="form-check-input" id="corde1" type="radio" name="value" value="conforme" checked="">
                        <label class="form-check-label" for="corde1">Conforme</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="corde2" type="radio" name="value" value="nonConforme">
                        <label class="form-check-label" for="corde2">Non Conforme</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="corde3" type="radio" name="value" value="nonConcerne">
                        <label class="form-check-label" for="corde3">Non Concerné</label>
                      </div>

                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary" type="sumbit">Enregistrer</button>
                    </form>
                    <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Annuler</button>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td scope="row">Tubes (extrémités bouchées)</td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckDefault" type="checkbox" checked="" onclick="return false;" />
            </div>
          </td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckChecked" type="checkbox" onclick="return false;" />
            </div>
          </td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckDefault" type="checkbox" onclick="return false;" />
            </div>
          </td>
          <td>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal11"><i class="fa-solid fa-pen"></i></button>
            <div class="modal fade" id="exampleModal11" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tubes (extrémités bouchées)</h5>
                    <button class="btn btn-close p-1" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">

                    <form action="index.php?ctrl=verificationsPeriodiques&action=verifForm" method="post">
                      <input type="hidden" name="id" value="tubes">
                      <div class="form-check">
                        <input class="form-check-input" id="tubes1" type="radio" name="value" value="conforme" checked="">
                        <label class="form-check-label" for="tubes1">Conforme</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="tubes2" type="radio" name="value" value="nonConforme">
                        <label class="form-check-label" for="tubes2">Non Conforme</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="tubes3" type="radio" name="value" value="nonConcerne">
                        <label class="form-check-label" for="tubes3">Non Concerné</label>
                      </div>

                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary" type="sumbit">Enregistrer</button>
                    </form>
                    <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Annuler</button>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td scope="row">Échelle d’accès</td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckDefault" type="checkbox" checked="" onclick="return false;" />
            </div>
          </td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckChecked" type="checkbox" onclick="return false;" />
            </div>
          </td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckDefault" type="checkbox" onclick="return false;" />
            </div>
          </td>
          <td>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal12"><i class="fa-solid fa-pen"></i></button>
            <div class="modal fade" id="exampleModal12" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Échelle d’accès</h5>
                    <button class="btn btn-close p-1" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">

                    <form action="index.php?ctrl=verificationsPeriodiques&action=verifForm" method="post">
                      <input type="hidden" name="id" value="echelle">
                      <div class="form-check">
                        <input class="form-check-input" id="echelle1" type="radio" name="value" value="conforme" checked="">
                        <label class="form-check-label" for="echelle1">Conforme</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="echelle2" type="radio" name="value" value="nonConforme">
                        <label class="form-check-label" for="echelle2">Non Conforme</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="echelle3" type="radio" name="value" value="nonConcerne">
                        <label class="form-check-label" for="echelle3">Non Concerné</label>
                      </div>

                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary" type="sumbit">Enregistrer</button>
                    </form>
                    <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Annuler</button>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td scope="row">Escaliers</td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckDefault" type="checkbox" checked="" onclick="return false;" />
            </div>
          </td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckChecked" type="checkbox" onclick="return false;" />
            </div>
          </td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckDefault" type="checkbox" onclick="return false;" />
            </div>
          </td>
          <td>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal13"><i class="fa-solid fa-pen"></i></button>
            <div class="modal fade" id="exampleModal13" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Escaliers</h5>
                    <button class="btn btn-close p-1" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">

                    <form action="index.php?ctrl=verificationsPeriodiques&action=verifForm" method="post">
                      <input type="hidden" name="id" value="escaliers">
                      <div class="form-check">
                        <input class="form-check-input" id="escaliers1" type="radio" name="value" value="conforme" checked="">
                        <label class="form-check-label" for="escaliers1">Conforme</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="escaliers2" type="radio" name="value" value="nonConforme">
                        <label class="form-check-label" for="escaliers2">Non Conforme</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="escaliers3" type="radio" name="value" value="nonConcerne">
                        <label class="form-check-label" for="escaliers3">Non Concerné</label>
                      </div>

                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary" type="sumbit">Enregistrer</button>
                    </form>
                    <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Annuler</button>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td scope="row">Dispositif à grimper</td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckDefault" type="checkbox" checked="" onclick="return false;" />
            </div>
          </td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckChecked" type="checkbox" onclick="return false;" />
            </div>
          </td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckDefault" type="checkbox" onclick="return false;" />
            </div>
          </td>
          <td>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal14"><i class="fa-solid fa-pen"></i></button>
            <div class="modal fade" id="exampleModal14" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Dispositif à grimper</h5>
                    <button class="btn btn-close p-1" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">

                    <form action="index.php?ctrl=verificationsPeriodiques&action=verifForm" method="post">
                      <input type="hidden" name="id" value="dispositif">
                      <div class="form-check">
                        <input class="form-check-input" id="dispositif1" type="radio" name="value" value="conforme" checked="">
                        <label class="form-check-label" for="dispositif1">Conforme</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="dispositif2" type="radio" name="value" value="nonConforme">
                        <label class="form-check-label" for="dispositif2">Non Conforme</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="dispositif3" type="radio" name="value" value="nonConcerne">
                        <label class="form-check-label" for="dispositif3">Non Concerné</label>
                      </div>

                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary" type="sumbit">Enregistrer</button>
                    </form>
                    <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Annuler</button>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td scope="row">Glissière</td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckDefault" type="checkbox" checked="" onclick="return false;" />
            </div>
          </td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckChecked" type="checkbox" onclick="return false;" />
            </div>
          </td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckDefault" type="checkbox" onclick="return false;" />
            </div>
          </td>
          <td>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal15"><i class="fa-solid fa-pen"></i></button>
            <div class="modal fade" id="exampleModal15" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Glissière</h5>
                    <button class="btn btn-close p-1" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">

                    <form action="index.php?ctrl=verificationsPeriodiques&action=verifForm" method="post">
                      <input type="hidden" name="id" value="glissiere">
                      <div class="form-check">
                        <input class="form-check-input" id="glissiere1" type="radio" name="value" value="conforme" checked="">
                        <label class="form-check-label" for="glissiere1">Conforme</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="glissiere2" type="radio" name="value" value="nonConforme">
                        <label class="form-check-label" for="glissiere2">Non Conforme</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="glissiere3" type="radio" name="value" value="nonConcerne">
                        <label class="form-check-label" for="glissiere3">Non Concerné</label>
                      </div>

                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary" type="sumbit">Enregistrer</button>
                    </form>
                    <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Annuler</button>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td scope="row">Plate-forme</td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckDefault" type="checkbox" checked="" onclick="return false;" />
            </div>
          </td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckChecked" type="checkbox" onclick="return false;" />
            </div>
          </td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckDefault" type="checkbox" onclick="return false;" />
            </div>
          </td>
          <td>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal16"><i class="fa-solid fa-pen"></i></button>
            <div class="modal fade" id="exampleModal16" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Plate-forme</h5>
                    <button class="btn btn-close p-1" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">

                    <form action="index.php?ctrl=verificationsPeriodiques&action=verifForm" method="post">
                      <input type="hidden" name="id" value="plateforme">
                      <div class="form-check">
                        <input class="form-check-input" id="plateforme1" type="radio" name="value" value="conforme" checked="">
                        <label class="form-check-label" for="plateforme1">Conforme</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="plateforme2" type="radio" name="value" value="nonConforme">
                        <label class="form-check-label" for="plateforme2">Non Conforme</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="plateforme3" type="radio" name="value" value="nonConcerne">
                        <label class="form-check-label" for="plateforme3">Non Concerné</label>
                      </div>

                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary" type="sumbit">Enregistrer</button>
                    </form>
                    <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Annuler</button>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td scope="row">Ressort</td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckDefault" type="checkbox" checked="" onclick="return false;" />
            </div>
          </td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckChecked" type="checkbox" onclick="return false;" />
            </div>
          </td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckDefault" type="checkbox" onclick="return false;" />
            </div>
          </td>
          <td>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal17"><i class="fa-solid fa-pen"></i></button>
            <div class="modal fade" id="exampleModal17" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ressort</h5>
                    <button class="btn btn-close p-1" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">

                    <form action="index.php?ctrl=verificationsPeriodiques&action=verifForm" method="post">
                      <input type="hidden" name="id" value="ressort">
                      <div class="form-check">
                        <input class="form-check-input" id="ressort1" type="radio" name="value" value="conforme" checked="">
                        <label class="form-check-label" for="ressort1">Conforme</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="ressort2" type="radio" name="value" value="nonConforme">
                        <label class="form-check-label" for="ressort2">Non Conforme</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="ressort3" type="radio" name="value" value="nonConcerne">
                        <label class="form-check-label" for="ressort3">Non Concerné</label>
                      </div>

                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary" type="sumbit">Enregistrer</button>
                    </form>
                    <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Annuler</button>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td scope="row">Axe de rotation</td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckDefault" type="checkbox" checked="" onclick="return false;" />
            </div>
          </td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckChecked" type="checkbox" onclick="return false;" />
            </div>
          </td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" id="flexCheckDefault" type="checkbox" onclick="return false;" />
            </div>
          </td>
          <td>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal18"><i class="fa-solid fa-pen"></i></button>
            <div class="modal fade" id="exampleModal18" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Axe de rotation</h5>
                    <button class="btn btn-close p-1" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">

                    <form action="index.php?ctrl=verificationsPeriodiques&action=verifForm" method="post">
                      <input type="hidden" name="id" value="axe">
                      <div class="form-check">
                        <input class="form-check-input" id="axe1" type="radio" name="value" value="conforme" checked="">
                        <label class="form-check-label" for="axe1">Conforme</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="axe2" type="radio" name="value" value="nonConforme">
                        <label class="form-check-label" for="axe2">Non Conforme</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="axe3" type="radio" name="value" value="nonConcerne">
                        <label class="form-check-label" for="axe3">Non Concerné</label>
                      </div>

                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary" type="sumbit">Enregistrer</button>
                    </form>
                    <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Annuler</button>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
      </tbody>
    </table>

  </div>
</main>

<?php require 'inc/foot.php'; ?>