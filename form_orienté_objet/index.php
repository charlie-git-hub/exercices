<?php
require'form.php';
$form = new Form(array(
    'username' => 'Username',
    'password' => 'Password'
));
echo $form->input('username');
echo $form->input('password');
echo $form->submit();