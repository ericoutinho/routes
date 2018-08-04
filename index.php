<?php

    require_once("class/FriendlyUrl.class.php");

    $url = "/admin/users/add/35";

    $friendly = new Main\FriendlyUrl();
    $friendly->add("/{indice}/{modulo}/{action}");
    $friendly->add("/{indice}/{modulo}/{action}/{id}");

    echo("<pre>");
    print_r($friendly->get($url));
    echo("</pre>");