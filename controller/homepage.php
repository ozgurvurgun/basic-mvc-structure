<?php
//HOMEPAGE CONTROLLER
function homePage()
{
    viewPage(
        'homepage.php',
        [
            'title' => 'Anasayfa',
            'active' => 'activeAnasayfa'
        ]
    );
}