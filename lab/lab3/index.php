<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/lab3.css">
	<link href="/bitrix/js/ui/fonts/opensans/ui.font.opensans.min.css?15529391931861" type="text/css"  rel="stylesheet" >
	<link href="https://taganrog.positronica.ru/bitrix/js/main/popup/dist/main.popup.bundle.min.css?160381717323459" type="text/css"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/templates/.default/components/bitrix/catalog.search/catalog/style.css?1571331083286" type="text/css"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/templates/.default/components/bitrix/catalog.item/main/style.css?16021615687480" type="text/css"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/components/positronica/bx_main.register/templates/popup/style.css?1571331082226" type="text/css"  data-template-style="true"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/templates/.default/components/bitrix/system.auth.form/top_login/style.css?15911911881109" type="text/css"  data-template-style="true"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/templates/main_posi/css/positronica.css?1604400209208719" type="text/css"  data-template-style="true"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/templates/main_posi/css/header.css?16021508707003" type="text/css"  data-template-style="true"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/templates/main_posi/css/footer.css?16021615688844" type="text/css"  data-template-style="true"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/templates/main_posi/css/404.css?1571331083630" type="text/css"  data-template-style="true"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/templates/main_posi/css/select2/core.css?157614613818811" type="text/css"  data-template-style="true"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/templates/main_posi/css/select2/theme/bootstrap/layout.css?157614613823628" type="text/css"  data-template-style="true"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/templates/main_posi/css/loader.css?15761461383498" type="text/css"  data-template-style="true"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/templates/main_posi/css/slick.css?15713310831776" type="text/css"  data-template-style="true"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/templates/main_posi/css/star-rating.css?15713310832944" type="text/css"  data-template-style="true"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/components/positronica/city.selector/templates/main/style.css?15761461381733" type="text/css"  data-template-style="true"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/components/positronica/bx_sale.basket.basket.line/templates/mini_top/style.css?16021508702344" type="text/css"  data-template-style="true"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/templates/.default/components/bitrix/search.title/top_search/style.css?16021508703450" type="text/css"  data-template-style="true"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/components/positronica/filials.contact_info/templates/main/style.css?16021508702202" type="text/css"  data-template-style="true"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/components/positronica/menu/templates/left_catalog_full/style.css?160215087016263" type="text/css"  data-template-style="true"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/templates/.default/components/bitrix/breadcrumb/main/style.css?1571331083587" type="text/css"  data-template-style="true"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/templates/.default/components/bitrix/sender.subscribe/in_footer/style.css?15942894234071" type="text/css"  data-template-style="true"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/templates/.default/components/bitrix/sale.location.selector.search/top_mycity/style.css?15713310836359" type="text/css"  data-template-style="true"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/templates/main_posi/styles.css?16038732403779" type="text/css"  data-template-style="true"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/components/positronica/bx_catalog.section/templates/main_horizontal/style.css?160215087011748" type="text/css"  data-template-style="true"  rel="stylesheet" >  
    <link rel="apple-touch-icon" sizes="180x180" href="../../img/favicon/apple-touch-icon-180x180.png">
    <link rel="icon" href="../../img/favicon/favicon.ico">
</head>
<body>
    <div class="container">
        <header class="header">
		<div>
			<p class="p1">Лабораторна робота №3</p>
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
				<div class="search">
					<form id="form" onsubmit="return false">
						<input type="text" placeholder="Поиск..." id="search">
					</form>
					<p id="results"></p>
				</div>
				<div class="code">
				<p>Исходный код файлов лабораторной работы: </p>
				<textarea name="textarea"   cols="186" rows="124" disabled>
INDEX.PHP
				
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/lab3.css">
	<link href="/bitrix/js/ui/fonts/opensans/ui.font.opensans.min.css?15529391931861" type="text/css"  rel="stylesheet" >
	<link href="https://taganrog.positronica.ru/bitrix/js/main/popup/dist/main.popup.bundle.min.css?160381717323459" type="text/css"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/templates/.default/components/bitrix/catalog.search/catalog/style.css?1571331083286" type="text/css"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/templates/.default/components/bitrix/catalog.item/main/style.css?16021615687480" type="text/css"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/components/positronica/bx_main.register/templates/popup/style.css?1571331082226" type="text/css"  data-template-style="true"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/templates/.default/components/bitrix/system.auth.form/top_login/style.css?15911911881109" type="text/css"  data-template-style="true"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/templates/main_posi/css/positronica.css?1604400209208719" type="text/css"  data-template-style="true"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/templates/main_posi/css/header.css?16021508707003" type="text/css"  data-template-style="true"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/templates/main_posi/css/footer.css?16021615688844" type="text/css"  data-template-style="true"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/templates/main_posi/css/404.css?1571331083630" type="text/css"  data-template-style="true"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/templates/main_posi/css/select2/core.css?157614613818811" type="text/css"  data-template-style="true"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/templates/main_posi/css/select2/theme/bootstrap/layout.css?157614613823628" type="text/css"  data-template-style="true"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/templates/main_posi/css/loader.css?15761461383498" type="text/css"  data-template-style="true"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/templates/main_posi/css/slick.css?15713310831776" type="text/css"  data-template-style="true"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/templates/main_posi/css/star-rating.css?15713310832944" type="text/css"  data-template-style="true"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/components/positronica/city.selector/templates/main/style.css?15761461381733" type="text/css"  data-template-style="true"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/components/positronica/bx_sale.basket.basket.line/templates/mini_top/style.css?16021508702344" type="text/css"  data-template-style="true"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/templates/.default/components/bitrix/search.title/top_search/style.css?16021508703450" type="text/css"  data-template-style="true"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/components/positronica/filials.contact_info/templates/main/style.css?16021508702202" type="text/css"  data-template-style="true"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/components/positronica/menu/templates/left_catalog_full/style.css?160215087016263" type="text/css"  data-template-style="true"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/templates/.default/components/bitrix/breadcrumb/main/style.css?1571331083587" type="text/css"  data-template-style="true"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/templates/.default/components/bitrix/sender.subscribe/in_footer/style.css?15942894234071" type="text/css"  data-template-style="true"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/templates/.default/components/bitrix/sale.location.selector.search/top_mycity/style.css?15713310836359" type="text/css"  data-template-style="true"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/templates/main_posi/styles.css?16038732403779" type="text/css"  data-template-style="true"  rel="stylesheet" >
    <link href="https://taganrog.positronica.ru/local/components/positronica/bx_catalog.section/templates/main_horizontal/style.css?160215087011748" type="text/css"  data-template-style="true"  rel="stylesheet" >  
    <link rel="apple-touch-icon" sizes="180x180" href="../../img/favicon/apple-touch-icon-180x180.png">
    <link rel="icon" href="../../img/favicon/favicon.ico">
	<body>
	</head>
    <div class="container">
        <header class="header">
		<div>
			<p class="p1">Лабораторна робота №3</p>
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
				<div class="search">
					<form id="form" onsubmit="return false">
						<input type="text" placeholder="Поиск..." id="search">
					</form>
					<p id="results"></p>
				</div>
			</div>
		</main>
		<script src="../../js/jquery.min.js"></script>
    <script>
        search.onkeydown = search.onkeyup = search.onkeypress = handle;
        function handle(e) {
            $.ajax({
                type: "POST",
                url: 'functions.php',
                data: {
                    data: $("#search").val()
                },
                success: function(response) {
                    $('#results').html(response);
                    $('#results').find("img").each(function() {   
                        $(this).attr("src",$(this).attr("data-src"));
                        $(this).removeAttr("data-src");
                    });
                },
                error: function(xhr, str) {
                    alert('Возникла ошибка: ' + xhr.responseCode);
                }
            });
        }
        //$("#search").change(function(e) {
        // e.preventDefault();
        //});
    </script>
</body>
</html>


FUNCTIONS.PHP

    if($_POST['data']){
        $url = 'https://taganrog.positronica.ru/search/?q='. $_POST['data'];
        $arrContextOptions=array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ),
        );  
        $data = file_get_contents(str_replace(' ', '%20', $url), false, stream_context_create($arrContextOptions));
        $data = str_replace('class="panel-body"','class="panel-body" id="parse"', $data);
        $data = str_replace('href="','href="https://taganrog.positronica.ru', $data);
        $domd = new DOMDocument();
        libxml_use_internal_errors(true);
        $domd->loadHTML($data);
        libxml_use_internal_errors(false);
        $div = $domd->getElementById("parse");
        
        if ($div) {
            $dom2 = new DOMDocument();
            $dom2->appendChild($dom2->importNode($div, true));
            echo $dom2->saveHTML();
        } 
        else {
            echo '<h1 id="not_found">По Вашему запросу ничего не было найдено.</h1>';
            echo $data;
        }
    }
				</textarea>
			</div>
		</main>
		<script src="../../js/jquery.min.js"></script>
    <script>
        search.onkeydown = search.onkeyup = search.onkeypress = handle;
        function handle(e) {
            $.ajax({
                type: "POST",
                url: 'functions.php',
                data: {
                    data: $("#search").val()
                },
                success: function(response) {
                    $('#results').html(response);
                    $('#results').find("img").each(function() {   
                        $(this).attr("src",$(this).attr("data-src"));
                        $(this).removeAttr("data-src");
                    });
                },
                error: function(xhr, str) {
                    alert('Возникла ошибка: ' + xhr.responseCode);
                }
            });
        }
        //$("#search").change(function(e) {
        // e.preventDefault();
        //});
    </script>
</body>
</html>