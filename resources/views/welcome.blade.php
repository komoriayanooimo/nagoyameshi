  <!DOCTYPE html>
  <html lang="ja"> 
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NAGOYAMESHI</title>
    <link href="{{ asset('css/nagoyameshi.css') }}" rel="stylesheet">
  </head>
  <body> 
    <header>
        <h1 id="a">NAGOYAMESHI</h1>
    </header>
        <h2 id="b">名古屋のB級グルメを探す</h2>
        <form action="" method="post">
      <input type="search" name="search" placeholder="店名">
      <br>
      <select name="categories">
        <option value="cate">カテゴリ</option>
        <option value="cate">寿司</option>
        <option value="cate">焼肉</option>
        <option value="cate">パスタ</option>
        <option value="cate">中華</option>
        <option value="cate">洋食</option>
      </select>
      <br>
      <input type="submit" name="submit" value="検索">
    </form>
        <nav>
            <a href="http://localhost/nagoyameshi/public/company">会社概要</a>
            <a href="http://localhost/nagoyameshi/public/service">利用規約</a>
            <a href="http://localhost/nagoyameshi/public/login">ログイン</a>
            <a href="http://localhost/nagoyameshi/public/register">新規登録</a>
        </nav>
    <img src="img/breads_color.png">
    <footer>
      <p class="c">©NAGOYAMESHI All Rights Reserved.</p>
    </footer>
  </body>

  </html>

