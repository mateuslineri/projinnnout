<?php

function addMsg($type, $msg) {
    $_SESSION['message'] = [
        'type' => $type,
        'message' => $msg
    ]; 
}