<?php


if (isset($dataArriveSub['difference']) && isset($dataDepartSub['difference'])) {
  $differencesTotale = $dataArriveSub['difference'] + $dataDepartSub['difference'];
}

$heuresTotale = !empty($differencesTotale) ? gmdate("H:i:s", $differencesTotale) : '';
?>

<?php include 'inc/head.php'; ?>


<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->
<main class="main" id="top">
  <?php include 'inc/nav.php'; ?>
  <div class="content">
    <div class="row g-0 mb-4 align-items-center">
      <div class="col-5 col-md-6">
        <h4 class="mb-0 text-body-emphasis fw-bold fs-md-6"><span class="calendar-day d-block d-md-inline mb-1"></span><span class="px-3 fw-thin text-body-quaternary d-none d-md-inline">|</span><span class="calendar-date"></span></h4>
      </div>
      <div class="col-7 col-md-6 d-flex justify-content-end">
        <div class="btn-group me-3">

          <button class="btn dropdown-toggle btn-primary" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Exporter</button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="index.php?ctrl=calendar&action=exportCsv">Export en CSV</a>
            <a class="dropdown-item" href="index.php?ctrl=calendar&action=exportPdf">Export en PDF</a>
          </div>
        </div>

        <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Vider la table (truncate)</button>
        <div class="modal fade" id="exampleModal" tabindex="-1" style="display: none;" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Veuillez confirmer</h5>
                <button class="btn btn-close p-1" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p class="text-body-tertiary lh-lg mb-0">Êtes-vous sur de vouloir vider la table SQL ?</p>
              </div>
              <div class="modal-footer">
                <a class="btn btn-danger btn-sm" href="index.php?ctrl=calendar&action=delete">Vider la table (truncate)</a>
                <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 border-y border-translucent">
      <div class="row py-3 gy-3 gx-0">
        <div class="col-6 col-md-4 order-1 d-flex align-items-center">
          <button class="btn btn-sm btn-phoenix-primary px-4" data-event="today">Aujourd'hui</button>
        </div>
        <div class="col-12 col-md-4 order-md-1 d-flex align-items-center justify-content-center">
          <button class="btn icon-item icon-item-sm shadow-none text-body-emphasis p-0" type="button" data-event="prev" title="Previous"><span class="fas fa-chevron-left"></span></button>
          <h3 class="px-3 text-body-emphasis fw-semibold calendar-title mb-0"> </h3>
          <button class="btn icon-item icon-item-sm shadow-none text-body-emphasis p-0" type="button" data-event="next" title="Next"><span class="fas fa-chevron-right"></span></button>
        </div>
        <div class="col-6 col-md-4 ms-auto order-1 d-flex justify-content-end">
          <div>
            <div class="btn-group btn-group-sm" role="group">
              <!-- <button class="btn btn-phoenix-secondary" data-fc-view="dayGridMonth">Month</button> -->
              <button class="btn btn-phoenix-secondary active-view" data-fc-view="timeGridWeek">Semaine</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="d-flex flex-column">
      <div class="d-flex justify-content-center gap-3 mt-3">
        <!-- <input type="hidden" name="statut" value="1"> -->
        <a class="btn btn-primary btn-sm <?= $dataCountSuivi['count'] >= 2 ? "disabled" : "" ?>" href="index.php?ctrl=calendar&action=<?php if ($dataCountSuivi['count'] < 1) {
                                                                                                                                        echo 'insertMatin';
                                                                                                                                      } elseif ($dataCountSuivi['count'] < 2) {
                                                                                                                                        echo 'insertAprem';
                                                                                                                                      } else {
                                                                                                                                        echo 'index';
                                                                                                                                      } ?>">Arrivé</a>
        <!-- <input type="hidden" name="statut" value="0"> -->
        <a class="btn btn-danger btn-sm <?= (!empty($dataDepart['s_heure_fin'])) ? 'disabled' : '' ?>" href="index.php?ctrl=calendar&action=<?php if ($dataArrive['s_heure_fin'] == NULL && $dataCountSuivi['count'] == 1) {
                                                                                                                                              echo 'updateMatin';
                                                                                                                                            } elseif (empty($dataDepart['s_heure_fin'])) {
                                                                                                                                              echo 'updateAprem';
                                                                                                                                            } else {
                                                                                                                                              echo 'index';
                                                                                                                                            } ?>">Départ</a>
      </div>
      <?php if (isset($datasSuivi) && !empty($datasSuivi)) : ?>
        <div class="d-flex flex-column align-items-center mt-3">
          <table class="table w-50">
            <thead>
              <tr>
                <th>Date et Heure</th>
                <th>Statut</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($datasSuivi as $dataSuivi) :
                $heureDebut = date('d/m/Y G:i:s', strtotime($dataSuivi['s_heure_debut']));
                $heureFin = !empty($dataSuivi['s_heure_fin']) ? date('G:i:s', strtotime($dataSuivi['s_heure_fin'])) : 'Pas encore défini'
              ?>
                <tr>
                  <td scope="row"><?= $heureDebut . ' -> ' . $heureFin ?></td>
                  <td><?= $dataSuivi['s_status'] == 1 ? 'Matin' : 'Aprés-midi' ?></td>
                </tr>
              <?php endforeach; ?>
              <tr>
                <th>Heures totale : </th>
                <td><?= !empty($heuresTotale) ? $heuresTotale : 'Vous n\'avez pas encore rentrer assez d\'heures' ?></td>
              </tr>
            </tbody>
          </table>
        </div>
      <?php endif; ?>
    </div>
    <div class="calendar-outline mt-3 mb-9" id="appCalendar"></div>
  </div>
  <div class="modal fade" id="searchBoxModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="true" data-phoenix-modal="data-phoenix-modal" style="--phoenix-backdrop-opacity: 1;">
    <div class="modal-dialog">
      <div class="modal-content mt-15 rounded-pill">
        <div class="modal-body p-0">
          <div class="search-box navbar-top-search-box" data-list='{"valueNames":["title"]}' style="width: auto;">
            <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
              <input class="form-control search-input fuzzy-search rounded-pill form-control-lg" type="search" placeholder="Search..." aria-label="Search" />
              <span class="fas fa-search search-box-icon"></span>

            </form>
            <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none" data-bs-dismiss="search">
              <button class="btn btn-link p-0" aria-label="Close"></button>
            </div>
            <div class="dropdown-menu border start-0 py-0 overflow-hidden w-100">
              <div class="scrollbar-overlay" style="max-height: 30rem;">
                <div class="list pb-3">
                  <h6 class="dropdown-header text-body-highlight fs-10 py-2">24 <span class="text-body-quaternary">results</span></h6>
                  <hr class="my-0" />
                  <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Recently Searched </h6>
                  <div class="py-2"><a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">

                        <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> Store Macbook</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">

                        <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
                      </div>
                    </a>

                  </div>
                  <hr class="my-0" />
                  <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Products</h6>
                  <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="apps/e-commerce/landing/product-details.html">
                      <div class="file-thumbnail me-2"><img class="h-100 w-100 object-fit-cover rounded-3" src="assets/img/products/60x60/3.png" alt="" /></div>
                      <div class="flex-1">
                        <h6 class="mb-0 text-body-highlight title">MacBook Air - 13″</h6>
                        <p class="fs-10 mb-0 d-flex text-body-tertiary"><span class="fw-medium text-body-tertiary text-opactity-85">8GB Memory - 1.6GHz - 128GB Storage</span></p>
                      </div>
                    </a>
                    <a class="dropdown-item py-2 d-flex align-items-center" href="apps/e-commerce/landing/product-details.html">
                      <div class="file-thumbnail me-2"><img class="img-fluid" src="assets/img/products/60x60/3.png" alt="" /></div>
                      <div class="flex-1">
                        <h6 class="mb-0 text-body-highlight title">MacBook Pro - 13″</h6>
                        <p class="fs-10 mb-0 d-flex text-body-tertiary"><span class="fw-medium text-body-tertiary text-opactity-85">30 Sep at 12:30 PM</span></p>
                      </div>
                    </a>

                  </div>
                  <hr class="my-0" />
                  <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Quick Links</h6>
                  <div class="py-2"><a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">

                        <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-link text-body" data-fa-transform="shrink-2"></span> Support MacBook House</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">

                        <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-link text-body" data-fa-transform="shrink-2"></span> Store MacBook″</div>
                      </div>
                    </a>

                  </div>
                  <hr class="my-0" />
                  <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Files</h6>
                  <div class="py-2"><a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">

                        <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-file-zipper text-body" data-fa-transform="shrink-2"></span> Library MacBook folder.rar</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">

                        <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-file-lines text-body" data-fa-transform="shrink-2"></span> Feature MacBook extensions.txt</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">

                        <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-image text-body" data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg</div>
                      </div>
                    </a>

                  </div>
                  <hr class="my-0" />
                  <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Members</h6>
                  <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="pages/members.html">
                      <div class="avatar avatar-l status-online  me-2 text-body">
                        <img class="rounded-circle " src="assets/img/team/40x40/10.webp" alt="" />

                      </div>
                      <div class="flex-1">
                        <h6 class="mb-0 text-body-highlight title">Carry Anna</h6>
                        <p class="fs-10 mb-0 d-flex text-body-tertiary">anna@technext.it</p>
                      </div>
                    </a>
                    <a class="dropdown-item py-2 d-flex align-items-center" href="pages/members.html">
                      <div class="avatar avatar-l  me-2 text-body">
                        <img class="rounded-circle " src="assets/img/team/40x40/12.webp" alt="" />

                      </div>
                      <div class="flex-1">
                        <h6 class="mb-0 text-body-highlight title">John Smith</h6>
                        <p class="fs-10 mb-0 d-flex text-body-tertiary">smith@technext.it</p>
                      </div>
                    </a>

                  </div>
                  <hr class="my-0" />
                  <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Related Searches</h6>
                  <div class="py-2"><a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">

                        <div class="fw-normal text-body-highlight title"><span class="fa-brands fa-firefox-browser text-body" data-fa-transform="shrink-2"></span> Search in the Web MacBook</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">

                        <div class="fw-normal text-body-highlight title"> <span class="fa-brands fa-chrome text-body" data-fa-transform="shrink-2"></span> Store MacBook″</div>
                      </div>
                    </a>

                  </div>
                </div>
                <div class="text-center">
                  <p class="fallback fw-bold fs-7 d-none">No Result Found.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="eventDetailsModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content border border-translucent"></div>
    </div>
  </div>
  <div class="modal fade" id="addEventModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content border border-translucent">
        <form id="addEventForm" autocomplete="off" method="post">
          <div class="modal-header px-card border-0">
            <div class="w-100 d-flex justify-content-between align-items-start">
              <div>
                <h5 class="mb-0 lh-sm text-body-highlight">Add new</h5>
                <div class="mt-2">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" id="inlineRadio1" type="radio" name="calendarTask" checked="checked" />
                    <label class="form-check-label" for="inlineRadio1">Event</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" id="inlineRadio2" type="radio" name="calendarTask" />
                    <label class="form-check-label" for="inlineRadio2">Task</label>
                  </div>
                </div>
              </div>
              <button class="btn p-1 fs-10 text-body" type="button" data-bs-dismiss="modal" aria-label="Close">DISCARD </button>
            </div>
          </div>
          <div class="modal-body p-card py-0">
            <div class="form-floating mb-3">
              <input class="form-control" id="eventTitle" type="text" name="title" required="required" placeholder="Event title" />
              <label for="eventTitle">Title</label>
            </div>
            <div class="form-floating mb-5">
              <select class="form-select" id="eventLabel" name="label">
                <option value="primary" selected="selected">Business</option>
                <option value="secondary">Personal</option>
                <option value="success">Meeting</option>
                <option value="danger">Birthday</option>
                <option value="info">Report</option>
                <option value="warinng">Must attend</option>
              </select>
              <label for="eventLabel">Label</label>
            </div>
            <div class="flatpickr-input-container mb-3">
              <div class="form-floating">
                <input class="form-control datetimepicker" id="eventStartDate" type="text" name="startDate" placeholder="yyyy/mm/dd hh:mm" data-options='{"disableMobile":true,"enableTime":"true","dateFormat":"Y-m-d H:i"}' /><span class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span>
                <label class="ps-6" for="eventStartDate">Starts at</label>
              </div>
            </div>
            <div class="flatpickr-input-container mb-3">
              <div class="form-floating">
                <input class="form-control datetimepicker" id="eventEndDate" type="text" name="endDate" placeholder="yyyy/mm/dd hh:mm" data-options='{"disableMobile":true,"enableTime":"true","dateFormat":"Y-m-d H:i"}' /><span class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span>
                <label class="ps-6" for="eventEndDate">Ends at</label>
              </div>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="eventAllDay" name="allDay" />
              <label class="form-check-label" for="eventAllDay">All day event
              </label>
            </div>
            <div class="form-floating my-5">
              <textarea class="form-control" id="eventDescription" placeholder="Leave a comment here" name="description" style="height: 128px"></textarea>
              <label for="eventDescription">Description</label>
            </div>
            <div class="form-floating mb-3">
              <select class="form-select" id="eventRepetition" name="repetition">
                <option value="" selected="selected">No Repeat</option>
                <option value="daily">Daily </option>
                <option value="deekly">Weekly</option>
                <option value="monthly">Monthly</option>
                <option value="dailyExceptHolidays">Daily (except holidays)</option>
                <option value="custom">Custom</option>
              </select>
              <label for="eventRepetition">Repetition</label>
            </div>
            <div class="form-floating mb-3">
              <select class="form-select" id="eventReminder" name="reminder">
                <option value="" selected="selected">30 minutes earlier</option>
                <option value="">8 am on the day</option>
                <option value="">8 am on the day before</option>
                <option value="">2 days earlier</option>
                <option value="">a week earlier</option>
              </select>
              <label for="eventReminder">Reminder</label>
            </div>
            <button class="btn btn-link p-0 mb-3" type="button"> <span class="fa-solid fa-plus me-2"></span>Add Reminder</button>
          </div>
          <div class="modal-footer d-flex justify-content-between align-items-center border-0"><a class="me-3 fs-9 text-body" href="apps/events/create-an-event.html">More options<span class="fas fa-angle-right ms-1 fs-10"></span></a>
            <button class="btn btn-primary px-4" type="submit">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script>
    var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
    var navbarTop = document.querySelector('.navbar-top');
    if (navbarTopStyle === 'darker') {
      navbarTop.setAttribute('data-navbar-appearance', 'darker');
    }

    var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
    var navbarVertical = document.querySelector('.navbar-vertical');
    if (navbarVertical && navbarVerticalStyle === 'darker') {
      navbarVertical.setAttribute('data-navbar-appearance', 'darker');
    }
  </script>
</main>
<!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->


<div class="offcanvas offcanvas-end settings-panel border-0" id="settings-offcanvas" tabindex="-1" aria-labelledby="settings-offcanvas">
  <div class="offcanvas-header align-items-start border-bottom flex-column border-translucent">
    <div class="pt-1 w-100 mb-6 d-flex justify-content-between align-items-start">
      <div>
        <h5 class="mb-2 me-2 lh-sm"><span class="fas fa-palette me-2 fs-8"></span>Theme Customizer</h5>
        <p class="mb-0 fs-9">Explore different styles according to your preferences</p>
      </div>
      <button class="btn p-1 fw-bolder" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><span class="fas fa-times fs-8"> </span></button>
    </div>
    <button class="btn btn-phoenix-secondary w-100" data-theme-control="reset"><span class="fas fa-arrows-rotate me-2 fs-10"></span>Reset to default</button>
  </div>
  <div class="offcanvas-body scrollbar px-card" id="themeController">
    <div class="setting-panel-item mt-0">
      <h5 class="setting-panel-item-title">Color Scheme</h5>
      <div class="row gx-2">
        <div class="col-4">
          <input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio" value="light" data-theme-control="phoenixTheme" />
          <label class="btn d-inline-block btn-navbar-style fs-9" for="themeSwitcherLight"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="assets/img/generic/default-light.png" alt="" /></span><span class="label-text">Light</span></label>
        </div>
        <div class="col-4">
          <input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio" value="dark" data-theme-control="phoenixTheme" />
          <label class="btn d-inline-block btn-navbar-style fs-9" for="themeSwitcherDark"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="assets/img/generic/default-dark.png" alt="" /></span><span class="label-text"> Dark</span></label>
        </div>
        <div class="col-4">
          <input class="btn-check" id="themeSwitcherAuto" name="theme-color" type="radio" value="auto" data-theme-control="phoenixTheme" />
          <label class="btn d-inline-block btn-navbar-style fs-9" for="themeSwitcherAuto"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="assets/img/generic/auto.png" alt="" /></span><span class="label-text"> Auto</span></label>
        </div>
      </div>
    </div>
    <div class="border border-translucent rounded-3 p-4 setting-panel-item bg-body-emphasis">
      <div class="d-flex justify-content-between align-items-center">
        <h5 class="setting-panel-item-title mb-1">RTL </h5>
        <div class="form-check form-switch mb-0">
          <input class="form-check-input ms-auto" type="checkbox" data-theme-control="phoenixIsRTL" />
        </div>
      </div>
      <p class="mb-0 text-body-tertiary">Change text direction</p>
    </div>
    <div class="border border-translucent rounded-3 p-4 setting-panel-item bg-body-emphasis">
      <div class="d-flex justify-content-between align-items-center">
        <h5 class="setting-panel-item-title mb-1">Support Chat </h5>
        <div class="form-check form-switch mb-0">
          <input class="form-check-input ms-auto" type="checkbox" data-theme-control="phoenixSupportChat" />
        </div>
      </div>
      <p class="mb-0 text-body-tertiary">Toggle support chat</p>
    </div>
    <div class="setting-panel-item">
      <h5 class="setting-panel-item-title">Navigation Type</h5>
      <div class="row gx-2">
        <div class="col-6">
          <input class="btn-check" id="navbarPositionVertical" name="navigation-type" type="radio" value="vertical" data-theme-control="phoenixNavbarPosition" data-page-url="documentation/layouts/vertical-navbar.html" />
          <label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionVertical"> <span class="rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="assets/img/generic/default-light.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="assets/img/generic/default-dark.png" alt="" /></span><span class="label-text">Vertical</span></label>
        </div>
        <div class="col-6">
          <input class="btn-check" id="navbarPositionHorizontal" name="navigation-type" type="radio" value="horizontal" data-theme-control="phoenixNavbarPosition" data-page-url="documentation/layouts/horizontal-navbar.html" />
          <label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionHorizontal"> <span class="rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="assets/img/generic/top-default.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="assets/img/generic/top-default-dark.png" alt="" /></span><span class="label-text"> Horizontal</span></label>
        </div>
        <div class="col-6">
          <input class="btn-check" id="navbarPositionCombo" name="navigation-type" type="radio" value="combo" data-theme-control="phoenixNavbarPosition" data-page-url="documentation/layouts/combo-navbar.html" />
          <label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionCombo"> <span class="rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="assets/img/generic/nav-combo-light.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="assets/img/generic/nav-combo-dark.png" alt="" /></span><span class="label-text"> Combo</span></label>
        </div>
        <div class="col-6">
          <input class="btn-check" id="navbarPositionTopDouble" name="navigation-type" type="radio" value="dual-nav" data-theme-control="phoenixNavbarPosition" data-page-url="documentation/layouts/dual-nav.html" />
          <label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionTopDouble"> <span class="rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="assets/img/generic/dual-light.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="assets/img/generic/dual-dark.png" alt="" /></span><span class="label-text"> Dual nav</span></label>
        </div>
      </div>
    </div>
    <div class="setting-panel-item">
      <h5 class="setting-panel-item-title">Vertical Navbar Appearance</h5>
      <div class="row gx-2">
        <div class="col-6">
          <input class="btn-check" id="navbar-style-default" type="radio" name="config.name" value="default" data-theme-control="phoenixNavbarVerticalStyle" />
          <label class="btn d-block w-100 btn-navbar-style fs-9" for="navbar-style-default"> <img class="img-fluid img-prototype d-dark-none" src="assets/img/generic/default-light.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="assets/img/generic/default-dark.png" alt="" /><span class="label-text d-dark-none"> Default</span><span class="label-text d-light-none">Default</span></label>
        </div>
        <div class="col-6">
          <input class="btn-check" id="navbar-style-dark" type="radio" name="config.name" value="darker" data-theme-control="phoenixNavbarVerticalStyle" />
          <label class="btn d-block w-100 btn-navbar-style fs-9" for="navbar-style-dark"> <img class="img-fluid img-prototype d-dark-none" src="assets/img/generic/vertical-darker.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="assets/img/generic/vertical-lighter.png" alt="" /><span class="label-text d-dark-none"> Darker</span><span class="label-text d-light-none">Lighter</span></label>
        </div>
      </div>
    </div>
    <div class="setting-panel-item">
      <h5 class="setting-panel-item-title">Horizontal Navbar Shape</h5>
      <div class="row gx-2">
        <div class="col-6">
          <input class="btn-check" id="navbarShapeDefault" name="navbar-shape" type="radio" value="default" data-theme-control="phoenixNavbarTopShape" data-page-url="documentation/layouts/horizontal-navbar.html" />
          <label class="btn d-inline-block btn-navbar-style fs-9" for="navbarShapeDefault"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="assets/img/generic/top-default.png" alt="" /><img class="img-fluid img-prototype d-light-none mb-0" src="assets/img/generic/top-default-dark.png" alt="" /></span><span class="label-text">Default</span></label>
        </div>
        <div class="col-6">
          <input class="btn-check" id="navbarShapeSlim" name="navbar-shape" type="radio" value="slim" data-theme-control="phoenixNavbarTopShape" data-page-url="documentation/layouts/horizontal-navbar.html#horizontal-navbar-slim" />
          <label class="btn d-inline-block btn-navbar-style fs-9" for="navbarShapeSlim"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="assets/img/generic/top-slim.png" alt="" /><img class="img-fluid img-prototype d-light-none mb-0" src="assets/img/generic/top-slim-dark.png" alt="" /></span><span class="label-text"> Slim</span></label>
        </div>
      </div>
    </div>
    <div class="setting-panel-item">
      <h5 class="setting-panel-item-title">Horizontal Navbar Appearance</h5>
      <div class="row gx-2">
        <div class="col-6">
          <input class="btn-check" id="navbarTopDefault" name="navbar-top-style" type="radio" value="default" data-theme-control="phoenixNavbarTopStyle" />
          <label class="btn d-inline-block btn-navbar-style fs-9" for="navbarTopDefault"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="assets/img/generic/top-default.png" alt="" /><img class="img-fluid img-prototype d-light-none mb-0" src="assets/img/generic/top-style-darker.png" alt="" /></span><span class="label-text">Default</span></label>
        </div>
        <div class="col-6">
          <input class="btn-check" id="navbarTopDarker" name="navbar-top-style" type="radio" value="darker" data-theme-control="phoenixNavbarTopStyle" />
          <label class="btn d-inline-block btn-navbar-style fs-9" for="navbarTopDarker"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="assets/img/generic/navbar-top-style-light.png" alt="" /><img class="img-fluid img-prototype d-light-none mb-0" src="assets/img/generic/top-style-lighter.png" alt="" /></span><span class="label-text d-dark-none">Darker</span><span class="label-text d-light-none">Lighter</span></label>
        </div>
      </div>
    </div><a class="bun btn-primary d-grid mb-3 text-white mt-5 btn btn-primary" href="https://themes.getbootstrap.com/product/phoenix-admin-dashboard-webapp-template/" target="_blank">Purchase template</a>
  </div>
</div>

<?php include 'inc/foot.php' ?>

</html>