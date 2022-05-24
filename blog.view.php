<!DOCTYPE HTML>
<head>
	<meta charset="UTF-8" />
	<title>Moje hobby: ogród | Blog dla pasjonatów ogrodnictwa i miłośników roślin</title>
	<meta name="description" content="Blog o wszystkim, co jest związane z ogrodem | Porady dotyczące pielęgnacji roślin, pomysły na zorganizowanie balkonu lub tarasu i inspiracje dotyczące architektury ogrodowej" />
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
	<link rel="icon" href="img/favicon.ico"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<div id="container">
	
	<nav>
	<div id="navbar">
			
			
			<ul>
				<li>
					<a href="">O autorze</a>
				</li>
				<li>
					<a href="">Kategorie</a>
				</li>
				<li>
					<a href="index.php">Strona główna</a>
				</li>
			</ul>
			
	</div>
	</nav>
	<main>
	
		<header>
		<div class="header">
		<figure>
		<img src="img/ogród.jpg" alt="ogród" />
		</figure>
		</div>
		<div class="header" style="padding-top:10%">
			<h1>Moje hobby: ogród</h1>
			<p> Witaj na moim blogu! Znajdziesz tu informacje o roślinach ogrodowych, pomysły na urządzenie tarasu, inspiracje dotyczące architektury ogrodowej dla dzieci i wiele innych.</p>
		</div>
		<div style="clear:both"></div>
		</header>
		
		<div id="posts">
		
		<h2>Ogrodowe inspiracje - najnowsze posty</h2>
		
		<?php
		foreach($array_result as $data):
		?>
		<article>
		<header>
			<h3><?= $data['title'];?></h3>
			<p class="author"><?= $data['name'];?></p>
			<p class="date"><?= $data['created_at'];?></p>
		</header>
		<section>
			<p class="description"><?= $data['description'];?></p>
			<a href="<?= 'index.php?post='.$data['url_key']?>" class="readMore">Czytaj dalej</a>
		</section>
		</article>
		<?php endforeach; ?>
		
		</div>
	</main>
<footer>
<p>created by PM</p>
</footer>
</div>

</body>
</html>
