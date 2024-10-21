<?php
try{
    //DBに接続
    $dsn = 'mysql:dbname=DB成果物; host=localhost';
    $username= 'dbuser';
    $password= 'kamatama5511';
    $pdo = new PDO($dsn, $username, $password);
    
    $stmt = $pdo->prepare(" SELECT * FROM posts WHERE  submit_name LIKE '%" . $_POST["search_name"] . "%' "); 
    
    $stmt->execute();
    echo "OK";
    echo "<br>";
} catch(PDOException $e){
    echo "失敗:" . $e->getMessage() . "\n";
    exit();
}
?>

<html>
    <body>
        <table>
            <tr><th>ID</th><th>Name</th><th>remark</th></tr>
            <!-- ここでPHPのforeachを使って結果をループさせる -->
            <?php foreach ($stmt as $row): ?>
            <tr>
                <td><?php echo $row[0]?></td>
                <td><?php echo $row[1]?></td>
                <td><?php echo $row[2]?></td>
            </tr>

                <?php endforeach; ?>
        </table>
    </body>
</html>
