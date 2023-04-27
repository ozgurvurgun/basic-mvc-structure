<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $values['title'] ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: monospace;
            text-decoration: none;
            list-style: none;
        }

        header {
            height: 100px;
            background-color: powderblue;
        }

        nav {
            height: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 25px;
        }

        nav div a {
            font-size: 30px;
        }

        nav ul li a {
            margin-right: 10px;
            font-size: 20px;
        }

        footer {
            position: -webkit-sticky;
            position: sticky;
            bottom: 0;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: powderblue;
            color: black;
            text-align: center;
            padding: 20px;
            font-size: 20px;
        }

        .active {
            border: 2px solid grey;
            padding: 6px;
            border-radius: 50px;
        }

        article {
            margin-top: 15px;
            margin-bottom: 15px;
            text-align: center;
        }

        article p {
            font-size: 18px;
            padding: 0 60px;
            margin-bottom: 10px;
        }

        article h1 {
            margin-top: 10px;
            margin-bottom: 15px;
            font-size: 28px;
        }

        article h5 {
            font-size: 15px;
            color: red;
        }
    </style>
</head>
<?php
$activeAnasayfa = '';
$activeBlog = '';
$activeContact = '';
$activeNewPost = '';
switch ($values['active']) {
    case 'activeAnasayfa':
        $activeAnasayfa = 'active';
        break;
    case 'activeBlog':
        $activeBlog = 'active';
        break;
    case 'activeContact':
        $activeContact = 'active';
        break;
    case 'activeNewPost':
        $activeNewPost = 'active';
        break;
}
?>

<body>
    <header>
        <nav>
            <div>
                <a href="http://localhost/basic-mvc-structure/">LOGO</a>
            </div>
            <ul>
                <li>
                    <a class="<?= $activeAnasayfa; ?>" href="http://localhost/basic-mvc-structure/">Anasayfa</a>
                    <a class="<?= $activeBlog; ?>" href="http://localhost/basic-mvc-structure/?url=blog">Blog</a>
                    <a class="<?= $activeContact; ?>" href="http://localhost/basic-mvc-structure/?url=iletisim">İletişim</a>
                    <a class="<?= $activeNewPost; ?>" href="http://localhost/basic-mvc-structure/?url=blog/new">Yeni Yazı</a>
                </li>
            </ul>
        </nav>
    </header>