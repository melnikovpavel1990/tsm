<?php

$sql = "SELECT * FROM pages";
$res = mysqli_query($connection, $sql);
$pages = mysqli_fetch_all($res, MYSQLI_ASSOC);
?>
<div id="page-wrapper">
    <a href="/admin/?action=add_page" class="btn ">Добавить статью</a>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Название</th>
        <th scope="col">Действие</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($pages as $page);?>
    <tr>
        <td><?=$page['title'];?></td>
        <td><a href="/admin/?action=edi_page&id=<?=$page['id']?>">Редактирование</a></td>
        <td><a href="/admin/?action=edi_page&id=<?=$page['id']?>">Удалить</a></td>
    </tr>

    </tbody>
</table>
</div>