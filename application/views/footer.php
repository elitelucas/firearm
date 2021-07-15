<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<script src="<?= base_url('assets/js/jquery-2.0.3.min.js') ?>"></script>

<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>

<script src="<?= base_url('assets/js/slimscroll/jquery.slimscroll.min.js') ?>"></script>

<script src="<?= base_url('assets/js/select2/select2.js')?>"></script>

<script src="<?= base_url('assets/js/datetime/bootstrap-datepicker.js') ?>"></script>

<script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>

<?php isset($view_js) ? $this->load->view($view_js) : '' ?>

<?= $before_body;?>

</body>

</html>