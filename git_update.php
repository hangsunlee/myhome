<!doctype html>
<html lang="ko">
<?php
include_once "./head.php";
?>
<body>
<div id="wrap">
    <?php
    include_once "./header.php";
    include_once "./db/db.php";
    $idx=$_POST['idx'];
    $sql="select * from git where idx=$idx";
    $stmt=$pdo->prepare($sql);
    $stmt->execute();
    $rows=$stmt->fetchAll();
    ?>
    <div id="container">
        <form action="./git_insert.php" method="post">
            <dl class="item_info">
                <dt><label for="id">id</label></dt>
                <dd><input type="text" id="id" name="id" value="<?=$rows['id']?>"></dd>
            </dl>
            <dl class="item_info">
                <dt><label for="name">이름</label></dt>
                <dd><input type="text" id="name" name="name" value="<?=$rows['name']?>"></dd>
            </dl>
            <dl class="item_info">
                <dt><label for="git_url">git 주소</label></dt>
                <dd><input type="text" id="git_url" name="git_url" value="<?=$rows['git_url']?>"></dd>
            </dl>
            <button class="btn_git" type="submit" >확인</button>
        </form>
    </div>

</div>

</body>
</html>
