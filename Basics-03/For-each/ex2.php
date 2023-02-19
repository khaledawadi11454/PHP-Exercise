<?php

$users = array(
    array(
        "id" => 1,
        "name"=> "Gaby",
        "email"=> "gaby@codi.tech"
    ),
    array(
       "id" => 2,
       "name"=> "Omar",
       "email"=> "omar@codi.tech"
    )
);

foreach ($users as $user) {
    echo "id: " . $user["id"] . ", name: " . $user["name"] . ", email: " . $user["email"] . "\n";
}
?>