</div>
<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html -->
@foreach($utilities as $key => $utilities)
<footer class="footer">
  <div class="d-sm-flex justify-content-center justify-content-sm-between">
    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © {{$utilities->title}}.com
      2020</span>
    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><a href="#" target="_blank">{{$utilities->title}} admin
      </a></span>
  </div>
</footer>
@endforeach
<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="../assets/backend/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="../assets/backend/vendors/chart.js/Chart.min.js"></script>
<script src="../assets/backend/vendors/progressbar.js/progressbar.min.js"></script>
<script src="../assets/backend/vendors/jvectormap/jquery-jvectormap.min.js"></script>
<script src="../assets/backend/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="../assets/backend/vendors/owl-carousel-2/owl.carousel.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="../assets/backend/js/off-canvas.js"></script>
<script src="../assets/backend/js/hoverable-collapse.js"></script>
<script src="../assets/backend/js/misc.js"></script>
<script src="../assets/backend/js/settings.js"></script>
<script src="../assets/backend/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="../assets/backend/js/dashboard.js"></script>

<script>
  ClassicEditor
    .create(document.querySelector('#editor'))
    .then(editor => {
      console.log(editor);
    })
    .catch(error => {
      console.error(error);
    });

  $(window).ready(function() {
    $("form").on("keypress", function(event) {
      var keyPressed = event.keyCode || event.which;
      if (keyPressed === 13) {
        event.preventDefault();
        return false;
      }
    });
  });
</script>
<!-- End custom js for this page -->
</body>

</html>