<?php

function DBConnect() {
    $banco = @mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE) or die (mysqli_error());
    @mysqli_set_charset($banco, DB_CHARSET) or die (mysqli_error($banco));
    return $banco;
}

function DBClose($banco) {
    @mysqli_close($banco) or die(mysqli_error($banco));
}