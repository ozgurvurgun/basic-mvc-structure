<?php
//CONTACT CONTROLLER
function contact()
{
    viewPage(
        'contact.php',
        [
            'title' => 'İletişim',
            'active' => 'activeContact'
        ]
    );
}