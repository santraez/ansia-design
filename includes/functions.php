<?php

require 'app.php';

function addTemplate(string $name) {

    include TEMPLATES_URL . "${name}.php";

}