<?php
// 関数ファイルの読み込み
include('functions.php');

// getで送信されたidを取得
$id=$_GET['id'];

//DB接続します
$pdo=db_conn();

//データ登録SQL作成，指定したidのみ表示する
$sql = 'SELECT * FROM gs_bm_table WHERE id=:id';//sql文   資料は省略表示している
$stmt = $pdo->prepare($sql); //実行準備させる
$stmt->bindValue(':id', $id, PDO::PARAM_INT);//バインド変数 idから引っ張る
$status = $stmt->execute();//実行している

//データ表示
if ($status==false) {
    // エラーのとき
    errorMsg($stmt);
} else {
    // エラーでないとき
    $rs = $stmt->fetch();
    // fetch()で1レコードを取得して$rsに入れる
    // $rsは配列で返ってくる．$rs["id"], $rs["task"]などで値をとれる
    // var_dump()で見てみよう
}
?>


<!DOCTYPE html>
<html lang="ja">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>キャンプ場登録</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style>
        div{
            padding: 10px;
            font-size:16px;
            }
    </style>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">キャンプ場登録</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="select.php">データ一覧</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <form action="update.php" method="post">
        <div class="form-group">
            <label for="name">名前</label>
            <input type="text" class="form-control" id="name" name="name" value="<?=$rs['name']?>">
        </div>
            <div class="form-group">
            <label for="zip">郵便番号</label>
            <input type="text" class="form-control" id="zip" name="zip" value="<?=$rs['zip']?>">
        </div>
        <div class="form-group">
            <label for="address">住所</label>
            <input type="text" class="form-control" id="address" name="address" value="<?=$rs['address']?>">
        </div>
        <div class="form-group">
            <label for="tel">電話番号</label>
            <input type="text" class="form-control" id="tel" name="tel" value="<?=$rs['tel']?>">
        </div>
        <div class="form-group">
            <label for="comment">キャンプ場案内文</label>
            <textarea class="form-control" id="comment" rows="10" name="comment" ><?=$rs['comment']?></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

<!-- idは変えたくない = ユーザーから見えないようにする-->

        <input type="hidden" name="id" value="<?=$rs['id']?>">


    </form>

</body>

</html>