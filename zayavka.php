<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Отделка и ремонт квартир, помещений Армада. Гарантия качества, лучшие цены.">
	<meta name="keywords" content="Ремонт квартир, ремонт помещений, Армада, ремонт Армада, Армада ремонт, ремонт квартиры дешево">
	<title>Строительная фирма</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	
	<header>
		<div class="container">
			<div class="nav">
				<ul style="padding-left: 35px;" class="header-nav">
					<li><a href="index.php">Главная</a></li>
					<li><a href="job.php">Работы</a></li>
					<li><a href="kontakt.php">Контакты</a></li>
				</ul>
			</div>
		</div>
	</header>
	<div class="container">
		<div class="header-logo">
			<div class="logo">
				<a href="index.php"><img src="img/logo_one.png"></a>
			</div>
			<div class="number">
				<p class="numb">+7(812)956-02-55</p><br>
				<p class="number-ps">c 10:00 до 22:00</p>
			</div>
			<div class="garant">
				<p class="numb">Группа компаний Проект-А</p>
				<p class="garant-ps">Армада</p>
			</div>
		</div>
		<div class="nav-bar">
			<ul class="nav-bar-ul">
				<li><a href="usl.php"><div>Услуги</div></a></li>
				<li><a href="job.php"><div>Наши работы</div></a></li>
				<li><a href="zayavka.php"><div>Оставьте заявку</div></a></li>
				<li><a href="sovet.php"><div>Советы</div></a></li>
				<li><a href="kontakt.php"><div>Как нас найти</div></a></li>
			</ul>
		</div>
		

		<div class="message">
		<h3 style="color: #3641C1;">Сделайте заказ с нашего сайта, мы свяжемся с вами в ближайшее время *</h3><br>
		<table>
			<tr>
				<td>

				 	<?php
				      /* отправка сообщения на email из формы */
				      if($_POST['user_sub']) // если нажата кнопка
				      {
				          $name = substr(htmlspecialchars(trim($_POST['user_name'])),0, 40);
				          $email = substr(htmlspecialchars(trim($_POST['user_email'])), 0, 150);
				          $mess = substr(htmlspecialchars(trim($_POST['user_mess'])), 0, 500);
				          $to = 'foxyany22@gmail.com';
				          mail($to, $email, $name, $mess);
				      }
				    ?>
					<form action="" method="post" class="form-message" style="margin: auto;">
						<input class="name" type="text" name="user_name" maxlength="64" placeholder="Как к вам обращаться" />
						<input class="name" type="text" name="user_email" maxlength="64" placeholder="Ваш e-mail для ответа"/><br>
						<textarea class="mess" name="user_mess" rows="5" cols="30" placeholder="Ваше сообщение"></textarea><br>
						<input class="but" type="submit" name="user_sub" value="Отправить" />
					</form>
				</td>
			</tr>
		</table>
			<p>* Наш менеджер свяжется с вами в течении 2 дней (48 часов).</p>
		</div>

	</div>
	<div style=" width:100%; height:1px; clear:both;"></div>
	<footer>
		<div class="streets">
			<div class="container">
				<p style="float: left">
					Компания Armada - ремонт квартир и домов.<br><br>
					Адрес: Россия, Санкт- петербург, ул. Фучика, 4, лит. К, офис 205 <br><br>
					Телефон: +7(812)956-02-55, +7(812)912-51-77, +7(981)763-36-75<br><br>
					E-mail: 9560255@gmail.com<br><br>
					Армада/Armada
				</p>
				<p style="float: right">
					Оставьте свою заявку на ремонт на данном сайте,<br>
					мы свяжемся с вами в ближайшее время.<br><br>
					Часы работы: 10:00 - 22:00 Ежедневно.
				</p>
			</div>
		</div>
		<div class="desc">
			<div style="padding-top: 30px; text-align: center;" class="container">
				<p style="paddign-top: 10px;">
					&copy Armada 2014 год
				</p>
			</div>
		</div>
	</footer>

	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="js/simplebox_util.js"></script>
	<script type="text/javascript">
	(function(){
	var boxes=[],els,i,l;
	if(document.querySelectorAll){
	els=document.querySelectorAll('a[rel=simplebox]');	
	Box.getStyles('js/simplebox_css','js/simplebox.css');
	Box.getScripts('js/simplebox_js','js/simplebox.js',function(){
	simplebox.init();
	for(i=0,l=els.length;i<l;++i)
	simplebox.start(els[i]);
	simplebox.start('a[rel=simplebox_group]');			
	});
	}
	})();</script>
</body>
</html>