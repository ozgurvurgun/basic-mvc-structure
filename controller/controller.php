<?php
require_once './model/db.php';
require_once './view/view.php';
// require_once './controller/homepage.php';
// require_once './controller/blog.php';
// require_once './controller/contact.php';

//PUBLIC CONTROLLER

function controller($src, $function)
{
    require_once './controller/' . $src;
    $function();
}

function page404()
{
    viewPage(
        '404.php',
        [
            'title'  => '404',
            'active' => ''
        ]
    );
}
