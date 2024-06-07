<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Контакты Братьев Лесорубов | Мы выполняем свою работу качественно &#10003; быстро &#10003; безопасно! &#10003; | Работаем в Москве и Московской области | Обращайтесь по телефону! &#9742; :+7 (499) 322-08-88");
$APPLICATION->SetPageProperty("TITLE", "Контактная информация Братьев Лесорубов | Звоните!");
$APPLICATION->SetTitle("Связаться с нами просто и быстро");
?><div class="row align-items-center contacts-section">
	<div class="col-md-6 d-none d-md-block">
		<div class="row align-items-center">
			<div class="col-md-8 slogan contacts-block">
				<div class="small-title py-2">
					 Контакты
				</div>
			</div>
			<div class="col-md-4">
 <img src="/bitrix/templates/lesoruby/images/logo-dark.svg" alt="СПИЛ ДЕРЕВЬЕВ" class="mw-100">
			</div>
		</div>
	</div>
	<div class="col-md-6 d-none d-md-block">
		<div class="phone-large py-2">
 <a href="tel:+74993220888">+7 (499) 322-08-88</a>
		</div>
	</div>
	<div class="col-md-6 py-3 d-none d-md-block">
		<div class="contacts-block row gy-4 fs-16 mb-4">
			<div class="col-3">
				<div class="small-title py-2">
					 Адрес
				</div>
					Щёлково, ул. Талсинская , 7 офис 314
			</div>
<div class="col-3">
				<div class="small-title py-2">
					 Регион работы
				</div>
				 Москва и Московская область
			</div>
			<div class="col-3">
				<div class="small-title py-2">
					 Время работы
				</div>
				 Ежедневно<br>
				c 9:00 до 21:00
			</div>
			<div class="col-3">
				<div class="small-title py-2">
					 Почта
				</div>
 <a href="mailto:info@bratiya-lesoruby">info@bratiya-lesoruby.ru</a>
			</div>
		</div>
	</div>
	<div class="col-md-6 py-3">
		<ul class="social">
			<li> <a href="#"><span class="ico-tg">Написать в Telegram</span></a> </li>
			<li> <a href="#"><span class="ico-wa">Написать в WhatsApp</span></a> </li>
		</ul>
	</div>
</div>
<?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	"",
	Array(
		"API_KEY" => "",
		"CONTROLS" => array("ZOOM"),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:3:{s:10:\"yandex_lat\";s:7:\"55.7383\";s:10:\"yandex_lon\";s:7:\"37.5946\";s:12:\"yandex_scale\";i:10;}",
		"MAP_HEIGHT" => "500",
		"MAP_ID" => "",
		"MAP_WIDTH" => "100%",
		"OPTIONS" => array("ENABLE_SCROLL_ZOOM","ENABLE_DBLCLICK_ZOOM","ENABLE_DRAGGING")
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>