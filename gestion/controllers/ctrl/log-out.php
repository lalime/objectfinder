<?php
    $usrObj = new Administrateur(false);
    $usrObj->logout();
    Tools::go(URL_BASE.'gestion/');
?>                                                                           