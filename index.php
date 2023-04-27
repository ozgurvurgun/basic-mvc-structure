<?php
require_once './controller/controller.php';
if (!empty($_GET['url'])) {
    $url = $_GET['url'];
    switch ($url) {
        case 'anasayfa':
            controller('homepage.php', 'homePage');
            break;
        case 'blog':
            controller('blog.php', 'blog');
            break;
        case 'blog/read-more':
            controller('blog.php', 'readMore');
            break;
        case 'iletisim':
            controller('contact.php', 'contact');
            break;
        case 'blog/new':
            controller('blog.php', 'newBlogPost');
            break;
        case 'blog/new/post':
            controller('blog.php', 'newBlogPostSubmit');
            break;
        default:
            page404();
            break;
    }
} else {
    controller('homepage.php', 'homePage');
}