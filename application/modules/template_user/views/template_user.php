<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- header -->
<?php $this->load->view("header"); ?>
  <body>
    <!-- Preloader Start -->
    <?php $this->load->view("menu"); ?>
    <!-- isi content -->
    <?php $this->load->view($content); ?>
    <!-- footer -->
    <?php $this->load->view("footer"); ?>
    <!-- javascript -->
    <?php $this->load->view("js"); ?>
  </body>
</html>
