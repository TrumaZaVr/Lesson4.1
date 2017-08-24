<?php
$pdo = new PDO("mysql:host=localhost;dbname=tet;charset=utf8", "root");
$sql = "SELECT * FROM books";   
?>
<!DOCTYPE html>
<body>
<style>
    table { 
        border-spacing: 0;
        border-collapse: collapse;
    }

    table td, table th {
        border: 1px solid #ccc;
        padding: 5px;
    }
    
    table th {
        background: #eee;
    }
</style>
<h1>Библиотека успешного человека</h1>
<table>
    <tr>
        <th>Название</th>
        <th>Автор</th>
        <th>Год выпуска</th>
        <th>Жанр</th>
        <th>ISBN</th>
    </tr>
    <?php foreach($pdo->query($sql) as $obj) { ?>
        <tr>
            <td><?php echo $obj["name"]; ?></td>
            <td><?php echo $obj["author"]; ?></td>
            <td><?php echo $obj["year"]; ?></td>
            <td><?php echo $obj["genre"]; ?></td>
            <td><?php echo $obj["isbn"]; ?></td>
        </tr>
    <?php } ?>
</table>
</body>