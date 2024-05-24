<?php

$req = (object) $_REQUEST;
header('Content-Type: application/json');
print json_encode([
    "name"    => strtoupper($req->name),
    "email" => strtoupper($req->email),
    "phone" => strtoupper($req->phone),
    "message" => strtoupper($req->message),
]);
