 <?php
$to = "lavaresones@ex.ua"; // емайл получателя данных из формы
$tema = "Прийшов новий відгук з сайту!"; // тема полученного емайла
$message = "ПІБ: ".$_POST['name']."<br>";//присвоить переменной значение, полученное из формы name=name
  $message .= "Ел. пошта: ".$_POST['email']."<br>"; //полученное из формы name=email
$message .= "Телефон: ".$_POST['phone']."<br>"; //полученное из формы name=phone
$message .= "Відгук: ".$_POST['message']."<br>"; //полученное из формы name=message
$headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Адвокати Миколаїв</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="content">
  <div id="sidebar">
  <div id="logo">
  <h1 style="text-align: center;"><a href="#"><i>K&V</i></a></h1>
  <h3 style="padding-left: 2px; text-align: center;"><a href="#">адвокати Миколаєва</a></h3>
</div>
    <div id="menu">
      <ul>
        <li><a href="http://www.advocate.mk.ua/" title="">Головна</a></li>
        <li><a href="http://www.advocate.mk.ua/about.php" title="">Про нас</a></li>
        <li class="active"><a href="http://www.advocate.mk.ua/sites_and_links.php" title="">Корисні сайти та реєстри</a></li>
        <li><a href="http://www.advocate.mk.ua/reviews.php" title="">Відгуки клієнтів</a></li>
        <li><a href="http://www.advocate.mk.ua/contacts.php" title="">Контакти</a></li>
      </ul>
    </div>
    
    <div id="callus">
						<div class="callus-text">
							Швидка та професійна <span>Консультація</span>	
						</div>
						<div class="callus-phones">
							<a class="phone" href="tel:+380957589155"><span class="code">095 </span><span class="number">758-91-55</span></a> 
							<a class="phone" href="tel:+380976397806"><span class="code">097 </span><span class="number">639-78-06</span></a>
							<span class="note">(Натисніть для дзвінка)</span>
						</div>
					</div>
                    <br />
                
    <!--<div id="login" class="boxed">
      <h2 class="title">ПОШУК</h2>
      <div class="content" style="padding-top: 0px;">
        <form id="form1" method="post" action="#">
          <fieldset>
          <legend>Найти</legend>
          <label for="inputtext1">Пошук по сайту:</label>
          <input id="inputtext1" type="text" name="inputtext1" value="" />
          <input id="inputsubmit1" type="submit" name="inputsubmit1" value="Знайти" />
          </fieldset>
        </form>
      </div>
    </div> -->
    <br />
    <!--<div id="updates" class="boxed">
      <h2 class="title">НОВИНИ</h2>
      <div class="content">
        <ul>
          <li>
            <h3>1 вересня 2019</h3>
            <p><a href="#">Заголовок статті Заголовок статті Заголовок статті Заголовок статті Заголовок статті Заголовок статті Заголовок статті Заголовок статті Заголовок статті Заголовок статті&#8230;</a></p>
          </li>
                    <li>
            <h3>1 вересня 2019</h3>
            <p><a href="#">Заголовок статті Заголовок статті Заголовок статті Заголовок статті Заголовок статті Заголовок статті Заголовок статті Заголовок статті Заголовок статті Заголовок статті&#8230;</a></p>
          </li>
                    <li>
            <h3>1 вересня 2019</h3>
            <p><a href="">Заголовок статті Заголовок статті Заголовок статті Заголовок статті Заголовок статті Заголовок статті Заголовок статті Заголовок статті Заголовок статті Заголовок статті&#8230;</a></p>
          </li>
<ins><em><a style="color: #ccc;" href="">Всі новини >></a></em></ins>
<br />
        </ul>
      </div>
    </div>-->
    
    <br />
    
  </div>
  <div id="main">
    <div id="welcome" class="post">
      <h2 class="title">Відгуки клієнтів</h2>
<strong>ДЯКУЄМО ЗА ВІДГУК!</strong>
<br />
<br />
<a href="http://www.advocate.mk.ua/reviews.php"><-- Назад до відгуків</a>

<br />
<br />
<br />

  </div>
</div>
<div id="footer">
  <p id="legal">&copy; 2019 Адвокати Миколаїв.</p>

</div>
</body>
</html>
