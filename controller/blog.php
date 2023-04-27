<?php
//BLOG CONTROLLER
function blog()
{
    $result = getBlogContent();
    viewPage(
        'blog.php',
        [
            'title'        => 'Blog',
            'active'       => 'activeBlog',
            'blog-content' => $result
        ]
    );
}
function readMore()
{
    $id = $_GET['id'];
    $blogData = getReadMore($id);
    viewPage(
        'readmore.php',
        [
            'title' => 'devamını oku...',
            'active' => '',
            'blog-content' => $blogData
        ]
    );
}
function newBlogPost()
{
    viewPage(
        'blogPost.php',
        [
            'title' => 'yeni post',
            'active' => 'activeNewPost'
        ]
    );
}
function newBlogPostSubmit()
{
    $subject = trim($_POST['subject']);
    $writer = trim($_POST['writer']);
    $content = trim($_POST['content']);
    if ($subject != "" && $writer != "" && $content != "") {
        $id = newBlogPostInsert($writer, $subject, $content);
        header("Location:?url=blog/read-more&id=$id");
    } else {
        echo "<h1>Tüm alanları doldurun.</h1>";
        echo '<button onclick="history.back()"><h1>Geri Dön</h1></button>';
    }
}
