<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="cs" href="">
  <link rel="stylesheet" href="./assets/css/style.css">
  <title>食費</title>
</head>
<div class="top">

  <h1>KAKEIBO</h1>

</div>

<body>

<div class="box">
<!-- 食費 -->
<div class="box1">
  <form class="m-5" action="todo_food.php" method="GET">
  
      <p class="alert alert-primary" role="alert"></p>
      <div class="head">
        <h2>食費</h2>
      </div>
      <div class="form-group">
        <label for="date"></label>
        <input type="date" class="form-control" id="date" name="date">
      </div>
      <div class="form-group">
        <label for="title"></label>
        <input type="text" placeholder="品名" class="form-control" id="title" name="title">
      </div>
      <div class="form-group">
        <label for="amount"></label>
        <input type="number" placeholder="金額" class="form-control" id="amount" name="amount">
      </div>
      <div class="form-group">
        <label for="amount"></label>
        <!-- <input type="number" class="form-control" id="amount" name="amount"> -->
        <textarea name="memo"  placeholder="メモ" class="form-control" id="memo" cols="30" rows="5"></textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary" id="form-control">登録</button>
      </div>
   
    
    </form>
</div>
<!-- 日用品 -->
<div class="box1">
  <form class="m-5" action="todo_daily.php" method="POST">
      <p class="alert alert-primary" role="alert"></p>
      <div class="head1">
        <h2>日用品</h2>
      </div>
      <div class="form-group">
        <label for="date"></label>
        <input type="date" class="form-control" id="date" name="date">
      </div>
      <div class="form-group">
        <label for="title"></label>
        <input type="text" placeholder="品名" class="form-control" id="title" name="title">
      </div>
      <div class="form-group">
        <label for="amount"></label>
        <input type="number" placeholder="金額" class="form-control" id="amount" name="amount">
      </div>
      <div class="form-group">
        <label for="amount"></label>
        <!-- <input type="number" class="form-control" id="amount" name="amount"> -->
        <textarea name="memo"  placeholder="メモ" class="form-control" id="memo" cols="30" rows="5"></textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary" id="form-control">登録</button>
      </div>
    
    </form>
</div>
<!-- 遊び -->
<div class="box1">
  <form class="m-5" action="todo_play.php" method="POST">
      <p class="alert alert-primary" role="alert"></p>
      <div class="head2">
        <h2>交際費</h2>
      </div>
      <div class="form-group">
        <label for="date"></label>
        <input type="date" class="form-control" id="date" name="date">
      </div>
      <div class="form-group">
        <label for="title"></label>
        <input type="text" placeholder="品名" class="form-control" id="title" name="title">
      </div>
      <div class="form-group">
        <label for="amount"></label>
        <input type="number" placeholder="金額" class="form-control" id="amount" name="amount">
      </div>
      <div class="form-group">
        <label for="amount"></label>
        <!-- <input type="number" class="form-control" id="amount" name="amount"> -->
        <textarea name="memo"  placeholder="メモ" class="form-control" id="memo" cols="30" rows="5"></textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary" id="form-control">登録</button>
      </div>
       
    </form>
    </div>
<!-- 投資 -->
<div class="box1">
  <form class="m-5" action="todo_investment.php" method="POST">
      <p class="alert alert-primary" role="alert"></p>
      <div class="head3">
        <h2>投資</h2>
      </div>
      <div class="form-group">
        <label for="date"></label>
        <input type="date" class="form-control" id="date" name="date">
      </div>
      <div class="form-group">
        <label for="title"></label>
        <input type="text" placeholder="品名" class="form-control" id="title" name="title">
      </div>
      <div class="form-group">
        <label for="amount"></label>
        <input type="number" placeholder="金額" class="form-control" id="amount" name="amount">
      </div>
      <div class="form-group">
        <label for="amount"></label>
        <!-- <input type="number" class="form-control" id="amount" name="amount"> -->
        <textarea name="memo"  placeholder="メモ" class="form-control" id="memo" cols="30" rows="5"></textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary" id="form-control">登録</button>
      </div>
   
    </form>
</div>
</div>

<section class="section">
  <a href="todo_food_read.php" class="tab1"> 食  費 </a>
   <a href="todo_daily_read.php" class="tab2">日用品</a>
    <a href="todo_play_read.php" class="tab3"> 交際費 </a>
     <a href="todo_investment_read.php" class="tab4"> 投  資 </a>
</section>
</body>

</html>