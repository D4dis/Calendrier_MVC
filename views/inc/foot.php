  <!-- ===============================================-->
  <!--    JavaScripts-->
  <!-- ===============================================-->
  <script src="vendors/popper/popper.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.min.js"></script>
  <script src="vendors/anchorjs/anchor.min.js"></script>
  <script src="vendors/is/is.min.js"></script>
  <script src="vendors/fontawesome/all.min.js"></script>
  <script src="vendors/lodash/lodash.min.js"></script>
  <!-- <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script> -->
  <script src="vendors/list.js/list.min.js"></script>
  <script src="vendors/feather-icons/feather.min.js"></script>
  <script src="vendors/dayjs/dayjs.min.js"></script>
  <script src="vendors/echarts/echarts.min.js"></script>
  <script src="vendors/fullcalendar/index.global.min.js"></script>
  <script src="vendors/dayjs/dayjs.min.js"></script>
  <script src="vendors/flatpickr/flatpickr.min.js"></script>
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
    crossorigin=""></script>
  <script src="assets/js/map.js"></script>
  <script src="assets/js/phoenix.js"></script>
  <script src="assets/js/calendar.js"></script>
  <script src="assets/js/chat.js"></script>
  <script>
    const departements = <?= json_encode($departementsToJs); ?>;
    const userByDepartement = <?= json_encode($userByDepToJs); ?>;
    const userConnected = <?= json_encode($userConnectedToJs); ?>;
  </script>
  <script src="assets/js/echarts-example.js"></script>


  </body>