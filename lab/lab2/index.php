<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <link rel="stylesheet" href="../../css/lab2.css">
	
    <script src="../../js/jquery.min.js"></script>
    <title></title>
	
</head>

<body>
    <div class="container">
        <header class="header">
		<div>
			<h3>Лабораторна робота №2</h3>
			<p>з курсу</p>
			<p>Сучасні технології інтернет програмування</p>
		</div>
            <div>
                <p>Шумейко Аліна</p>
                <p>ІПЗ-17-2</p>
            </div>		
        </header>
        <main>
            <div class="main">
				<div class="a">
					<a href="../../index.php">exit</a>
				</div>
			
				<div class="category">
					<ul>
						<li>
							<select name="" id="select1">
								<option value=""></option>
								<option value="">Завтраки</option>
								<option value="">Бульоны</option>
								<option value="">Закуски</option>
								<option value="">Напитки</option>
							</select>
						</li>
						<li id="select2">
							<select>
								<option value=""></option>
							</select>
						</li>
					</ul>
				</div>
				<div class="code">
				<p>Исходный код файлов лабораторной работы: </p>
				<textarea name="textarea"   cols="168" rows="122" disabled>
INDEX.PHP
				
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/lab2.css">
    <script src="../../js/jquery.min.js"></script>
    <title></title>
</head>

<body>
    <div class="container">
        <header class="header">
		<div>
			<h3>Лабораторна робота №2</h3>
			<p>з курсу</p>
			<p>Сучасні технології інтернет програмування</p>
		</div>
            <div>
                <p>Шумейко Аліна</p>
                <p>ІПЗ-17-2</p>
            </div>		
        </header>
        <main>
            <div class="main">
				<div class="a">
					<a href="../../index.php">exit</a>
				</div>
			
				<div class="category">
					<ul>
						<li>
							<select name="" id="select1">
								<option value=""></option>
								<option value="">Завтраки</option>
								<option value="">Бульоны</option>
								<option value="">Закуски</option>
								<option value="">Напитки</option>
							</select>
						</li>
						<li id="select2">
							<select>
								<option value=""></option>
							</select>
						</li>
					</ul>
				</div>
				<script>
				$("#select1").change(function() {
					$.getJSON('dishes.json', function(data) {
						var items = [];
						$.each(data, function(key, val) {
							if ($("#select1 option:selected").text() == key) {
								$.each(val.sort(), function(i, item) {
									items.push('<option>' + item + '</option>');
								});
							};
							$('#select2').html($('<select/>', {
								html: items
							}));
							if ($("#select1 option:selected").text() == "") {
								$('#select2').empty();
							};
						})
					}).fail(function() {
						alert("Ошибка.");
					})
				});
			</script>
        </main>
        <footer>
			    
        </footer>
    </div>
</body>
</html>
	
	
DISHES.JSON

{
    "Завтраки": [
	"",
        "Американские блины",
        "Сырники",
        "Омлет с помидорами",
        "Панкейки с корицей",
	"Яичница",
	"Рисовая каша"
    ],
    "Бульоны": [
	"",
        "Куриный бульон",
        "Рыбный суп",
        "Бульон овощной",
        "Хаш",
	"Тайский бульон",
	"Кокосовый суп"
    ],
    "Закуски": [
	"",
        "Брускетта с помидорами",
        "Кесадилья с курицей",
        "Рулеты с сёмгой",
        "Кабачки с сыром",
	"Луковые колечки",
	"Грибной жульен"
    ],
    "Напитки": [
	"",
        "Имбирный лимонад",
        "Мохито",
        "Горячий шоколад",
        "Глинтвейн",
	"Смузи",
	"Компот"
    ]
}			
				</textarea>
				</div>
			</div>
			<script>
				$("#select1").change(function() {
					$.getJSON('dishes.json', function(data) {
						var items = [];
						$.each(data, function(key, val) {
							if ($("#select1 option:selected").text() == key) {
								$.each(val.sort(), function(i, item) {
									items.push('<option>' + item + '</option>');
								});
							};
							$('#select2').html($('<select/>', {
								html: items
							}));
							if ($("#select1 option:selected").text() == "") {
								$('#select2').empty();
							};
						})
					}).fail(function() {
						alert("Ошибка.");
					})
				});
			</script>
        </main>
        <footer>
			    
        </footer>
    </div>
</body>
</html>