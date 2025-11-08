<?php


use Http\form\logform;
use Core\Authenticator;


$form = logform::validate($attributes=[
    'email'=>$_POST['email'],
    'password'=>$_POST['password']
]);

$sigenIn = (new Authenticator)->auth(
$attributes['email'], $attributes['password']);

if (!$sigenIn) {
    $form->setError('password', 'password or email worng')->throw();
}
location('/to-do-list/');





