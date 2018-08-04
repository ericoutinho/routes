<?php

    require_once("class/FriendlyUrl.class.php");

    $url = "/admin/users/add/35";

    $friendly = new FriendlyUrl();
    $friendly->add("/{indice}/{modulo}/{action}");
    $friendly->add("/{indice}/{modulo}/{action}/{id}");

    var_dump($friendly->get($url));