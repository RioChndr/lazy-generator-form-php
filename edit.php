<?php
$IS_TEMPLATE = true;

require('../form_library.php');
require('koneksi.php');
$get_id = @$_GET['id']?:1;

$form = new form_control;
$form->database = $link;
$form->set_column(['id', 'nama', 'alamat', 'email'], 'email');
$form->set_table('member');
$form->set_where('id', $get_id);

$form->add_input_text('id', 'ID');
$form->add_input_text('nama', 'Nama');
$form->add_input_text('alamat', 'Alamat');
$form->add_input_text('email', 'Email');

$form->redirect_success('pendaftaran.php');
$generate_form = $form->generate_update_form();

echo $generate_form;