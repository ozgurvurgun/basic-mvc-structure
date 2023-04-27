<?php
$host = 'localhost';
$db_name = 'mvc';
$user = 'root';
$password = '';
try {
    $db = new PDO(
        "mysql:host=$host;dbname=$db_name" . ";charset=utf8",
        $user,
        $password
    );
} catch (PDOException $e) {
    echo $e->getMessage();
}


//BLOG OPERATIONS
//BU KISIM OPERASYONLARA GORE AYRISTIRILIIP CONTROLLER ILE CEKILMELI, PERFORMANS ICIN DAHA IYI OLACAKTIR
function getBlogContent()
{
    global $db;
    $result = $db->query('SELECT * FROM basic_mvc ORDER BY id DESC')->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function getReadMore($id)
{
    global $db;
    $result = $db->query("SELECT * FROM basic_mvc WHERE id=$id")->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function newBlogPostInsert($writer, $subject, $content)
{
    global $db;
    $insert =  $db->query("INSERT INTO basic_mvc (writer,subj,content) VALUES ('$writer','$subject','$content')");
    if (!$insert) {
        die("blog veri tabanına kayıt edilirken hata oluştu" .
            '<br /><button onclick="history.back()"><h1>Geri Dön</h1></button>');
    }
    return  $db->lastInsertId();
}
