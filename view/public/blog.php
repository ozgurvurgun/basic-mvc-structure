<article>
    <h1><?= $value['subj'] ?></h1>
    <p><?= (strlen($value['content']) > 100) ? substr($value['content'], 0, 100) . ' <a href="?url=blog/read-more&id=' . $value['id'] . '"><b><i style="color:blue">devamını oku</i></b></a>' : $value['content']; ?></p>
    <h5>yazar: <?= $value['writer'] ?></h5>
    <h5><?= $value['date']; ?></h5>
</article>
<hr />