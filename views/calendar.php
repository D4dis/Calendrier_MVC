<?php


if (isset($datasTache)) {
  $datasTacheToJs = json_encode($datasTache);
}


if (isset($datasSuivi)) {
  $datasSuiviToJs = json_encode($datasSuivi);
}

if (isset($dataArriveSub['difference']) && isset($dataDepartSub['difference'])) {
  $differencesTotale = $dataArriveSub['difference'] + $dataDepartSub['difference'];
}

$heuresTotale = !empty($differencesTotale) ? gmdate("H:i:s", $differencesTotale) : '';

?>

<?= include 'inc/head.php'; ?>


<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->
<main class="main" id="top">
  <?= include 'inc/nav.php' ?>
  <div class="content">
    <div class="row g-0 mb-4 align-items-center">
      <div class="col-5 col-md-6">
        <h4 class="mb-0 text-body-emphasis fw-bold fs-md-6"><span class="calendar-day d-block d-md-inline mb-1"></span><span class="px-3 fw-thin text-body-quaternary d-none d-md-inline">|</span><span class="calendar-date"></span></h4>
      </div>
      <div class="col-7 col-md-6 d-flex justify-content-end">
        <button class="btn btn-link text-body px-0 me-2 me-md-4"><span class="fa-solid fa-sync fs-10 me-2"></span><span class="d-none d-md-inline">Sync Now</span></button>
        <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#addEventModal"> <span class="fas fa-plus pe-2 fs-10"></span>Add new task </button>
      </div>
    </div>
    <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 border-y border-translucent">
      <div class="row py-3 gy-3 gx-0">
        <div class="col-6 col-md-4 order-1 d-flex align-items-center">
          <button class="btn btn-sm btn-phoenix-primary px-4" data-event="today">Today</button>
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
              <button class="btn btn-phoenix-secondary active-view" data-fc-view="timeGridWeek">Week</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="d-flex flex-column">
      <div class="d-flex justify-content-center gap-3 mt-3">
        <!-- <input type="hidden" name="statut" value="1"> -->
        <a class="btn btn-primary btn-sm" href="index.php?ctrl=calendar&action=<?php if ($dataCountSuivi['count'] < 1) {
                                                                                  echo 'insertMatin';
                                                                                } elseif ($dataCountSuivi['count'] < 2) {
                                                                                  echo 'insertAprem';
                                                                                } else {
                                                                                  echo 'index';
                                                                                } ?>">Arrivé</a>
        <!-- <input type="hidden" name="statut" value="0"> -->
        <a class="btn btn-danger btn-sm" href="index.php?ctrl=calendar&action=<?php  if ($dataArrive['s_heure_fin'] == NULL && $dataCountSuivi['count'] == 1) {
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
      <a class="btn btn-danger btn-sm" href="index.php?ctrl=calendar&action=truncate">Vider le tableau</a>
    <footer class="footer position-absolute">
      <div class="row g-0 justify-content-between align-items-center h-100">
        <div class="col-12 col-sm-auto text-center">
          <p class="mb-0 mt-2 mt-sm-0 text-body">Thank you for creating with Phoenix<span class="d-none d-sm-inline-block"></span><span class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2024 &copy;<a class="mx-1" href="https://themewagon.com">Themewagon</a></p>
        </div>
        <div class="col-12 col-sm-auto text-center">
          <p class="mb-0 text-body-tertiary text-opacity-85">v1.18.0</p>
        </div>
      </div>
    </footer>
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
  <div class="support-chat-container">
    <div class="container-fluid support-chat">
      <div class="card bg-body-emphasis">
        <div class="card-header d-flex flex-between-center px-4 py-3 border-bottom border-translucent">
          <h5 class="mb-0 d-flex align-items-center gap-2">Demo widget<span class="fa-solid fa-circle text-success fs-11"></span></h5>
          <div class="btn-reveal-trigger">
            <button class="btn btn-link p-0 dropdown-toggle dropdown-caret-none transition-none d-flex" type="button" id="support-chat-dropdown" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h text-body"></span></button>
            <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="support-chat-dropdown"><a class="dropdown-item" href="#!">Request a callback</a><a class="dropdown-item" href="#!">Search in chat</a><a class="dropdown-item" href="#!">Show history</a><a class="dropdown-item" href="#!">Report to Admin</a><a class="dropdown-item btn-support-chat" href="#!">Close Support</a></div>
          </div>
        </div>
        <div class="card-body chat p-0">
          <div class="d-flex flex-column-reverse scrollbar h-100 p-3">
            <div class="text-end mt-6"><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                <p class="mb-0 fw-semibold fs-9">I need help with something</p><span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
              </a><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                <p class="mb-0 fw-semibold fs-9">I can’t reorder a product I previously ordered</p><span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
              </a><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                <p class="mb-0 fw-semibold fs-9">How do I place an order?</p><span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
              </a><a class="false d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                <p class="mb-0 fw-semibold fs-9">My payment method not working</p><span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
              </a>
            </div>
            <div class="text-center mt-auto">
              <div class="avatar avatar-3xl status-online"><img class="rounded-circle border border-3 border-light-subtle" src="assets/img/team/30.webp" alt="" /></div>
              <h5 class="mt-2 mb-3">Eric</h5>
              <p class="text-center text-body-emphasis mb-0">Ask us anything – we’ll get back to you here or by email within 24 hours.</p>
            </div>
          </div>
        </div>
        <div class="card-footer d-flex align-items-center gap-2 border-top border-translucent ps-3 pe-4 py-3">
          <div class="d-flex align-items-center flex-1 gap-3 border border-translucent rounded-pill px-4">
            <input class="form-control outline-none border-0 flex-1 fs-9 px-0" type="text" placeholder="Write message" />
            <label class="btn btn-link d-flex p-0 text-body-quaternary fs-9 border-0" for="supportChatPhotos"><span class="fa-solid fa-image"></span></label>
            <input class="d-none" type="file" accept="image/*" id="supportChatPhotos" />
            <label class="btn btn-link d-flex p-0 text-body-quaternary fs-9 border-0" for="supportChatAttachment"> <span class="fa-solid fa-paperclip"></span></label>
            <input class="d-none" type="file" id="supportChatAttachment" />
          </div>
          <button class="btn p-0 border-0 send-btn"><span class="fa-solid fa-paper-plane fs-9"></span></button>
        </div>
      </div>
    </div>
    <button class="btn btn-support-chat p-0 border border-translucent"><span class="fs-8 btn-text text-primary text-nowrap">Chat demo</span><span class="ping-icon-wrapper mt-n4 ms-n6 mt-sm-0 ms-sm-2 position-absolute position-sm-relative"><span class="ping-icon-bg"></span><span class="fa-solid fa-circle ping-icon"></span></span><span class="fa-solid fa-headset text-primary fs-8 d-sm-none"></span><span class="fa-solid fa-chevron-down text-primary fs-7"></span></button>
  </div>
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
</div><a class="card setting-toggle" href="#settings-offcanvas" data-bs-toggle="offcanvas">
  <div class="card-body d-flex align-items-center px-2 py-1">
    <div class="position-relative rounded-start" style="height:34px;width:28px">
      <div class="settings-popover"><span class="ripple"><span class="fa-spin position-absolute all-0 d-flex flex-center"><span class="icon-spin position-absolute all-0 d-flex flex-center">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="#ffffff" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z" fill="#2A7BE4"></path>
              </svg></span></span></span></div>
    </div><small class="text-uppercase text-body-tertiary fw-bold py-2 pe-2 ps-1 rounded-end">customize</small>
  </div>
</a>

<?= include 'inc/foot.php' ?>

</html>