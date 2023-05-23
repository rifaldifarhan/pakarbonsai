<!-- Footer-->
<footer class="bg-light py-3">
    <div class="container px-4 px-lg-5">
        <div class="small text-center text-muted">Copyright &copy;
            <script>
                document.write(new Date().getFullYear())
            </script> - <a href="https://www.instagram.com/rifaldifarhan_" target="_blank" class="text-success" style="text-decoration: none;">Rifaldi Farhan</a>
        </div>
    </div>
</footer>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah Yakin Keluar?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close" style="border:none; background-color:white; font-size:x-large;">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <!-- <div class="modal-body">Pilih "Logout" Di bawah jika ingin keluar.</div> -->
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
                <a class="btn btn-danger" href="<?php echo base_url('Auth/Login/logout') ?>">Logout</a>
            </div>
        </div>
    </div>
</div>