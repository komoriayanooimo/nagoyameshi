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

        <div class="h">
        <a  href="http://localhost/nagoyameshi/public/">戻る</a><br>
        </div>
        <h2 class="k">会員情報編集</h2>
        <div class="kk">
          <label>氏名</label>
          <input type="text" class="name" name="name" required="name" placeholder="小森綾乃"><br>
          <label>メールアドレス</label>
          <input type="text" class="email" name="name" required="email" placeholder="samurai@icloud.com"><br>
          <label>電話番号</label>
          <input type="text" class="tel" name="name" required="tel" placeholder="000-0000-0000"><br>
        </div>
        <button type="submit" class="btn">編集</button>

        <nav>
            <a href="http://localhost/nagoyameshi/public/company">会社概要</a>
            <a href="http://localhost/nagoyameshi/public/home">マイページ</a>
        </nav>
    <footer>
      <p class="m">©NAGOYAMESHI All Rights Reserved.</p>
    </footer>
  </body>

  </html>