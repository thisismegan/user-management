<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Ecommerce Panel Admin</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Bootstrap core JavaScript-->
<script src="<?= url('assets') ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?= url('assets') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= url('assets') ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= url('assets') ?>/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= url('assets') ?>/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= url('assets') ?>/js/demo/chart-area-demo.js"></script>
<script src="<?= url('assets') ?>/js/demo/chart-pie-demo.js"></script>

<!-- select2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        $('.select2').select2()

        $('#inputGroupFile02').on('change', function() {
            var fileName = $(this).val();
            $(this).next('.custom-file-label').html(fileName);
        })
    });
</script>