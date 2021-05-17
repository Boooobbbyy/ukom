<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
        <a href="<?= base_url('auth/logout'); ?>">Logout</a>
    </div>
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
        Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url('assets/adminlte/'); ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/adminlte/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/adminlte/'); ?>dist/js/adminlte.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        navigator.geolocation.getCurrentPosition(function(position) {
            tampilLokasi(position);
        }, function(e) {
            alert('Geolocation Tidak Mendukung Pada Browser Anda');
        }, {
            enableHighAccuracy: true
        });
    });

    function tampilLokasi(posisi) {
        //console.log(posisi);
        var latitude = posisi.coords.latitude;
        var longitude = posisi.coords.longitude;
        $.ajax({
            type: 'POST',
            url: 'lokasi.php',
            data: 'latitude=' + latitude + '&longitude=' + longitude,
            success: function(e) {
                if (e) {
                    $('#lokasi').html(e);
                } else {
                    $('#lokasi').html('Tidak Tersedia');
                }
            }
        })
    }
</script>
</body>

</html>