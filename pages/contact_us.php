<?php

require_once 'navbar.php';

$content = '<div class="container rounded bg-light">';

$content .= '
<h2 align="center">Contact us!</h2>
<form>
<div class="form-row">
<div class="form-group col-md-6">
    <label for="inputName">Name</label>
    <input type="text" class="form-control" id="inputName" placeholder="Firstname Lastname (*Required)">
</div>
<div class="form-group col-md-6">
    <label for="inputEmail">Email</label>
    <input type="email" class="form-control" id="inputEmail" placeholder="email@test.com (*Required)">
</div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
    <label for="inputMobilephone">Mobilephone</label>
    <input type="text" class="form-control" id="inputMobilephone" placeholder="+36301234567">
</div>
<div class="form-group col-md-6">
    <label for="inputWebsite">Website</label>
    <input type="text" class="form-control" id="inputWebsite" placeholder="www.example.com">
</div>
</div>
<div class="form-row">
<div class="form-group col">
    <label for="inputMessage">Message</label>
    <textarea class="form-control" id="inputMessage" placeholder="Please leave a message... (*Required)"></textarea>
</div>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>';

$content .= '</div>';

echo $content;

?>