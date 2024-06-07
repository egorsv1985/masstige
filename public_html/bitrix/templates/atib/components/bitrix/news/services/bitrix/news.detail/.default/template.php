<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

//


?>
<section class="py-14">
	<div class="flex flex-col gap-24">
		<div class="grid grid-cols-3 gap-7 border-b-gray_border">
			<div class="relative col-span-3 lg:col-span-2 pseudo-grid before:absolute before:block  before:top-[10%] before:left-[52%] before:-bottom-[10%] before:right-0">
				<div class="">
					<h2 class="font-bold text-white font-display text-5xl sm:text-[64px]  leading-tight text-balance ">
						Разработка сайтов и сервисов
					</h2>
				</div>
			</div>
			<div class="col-span-3 mt-64 lg:col-span-1">
				<p class="text-lg leading-tight text-txt">
					Разработка сайтов и сервисов включает в себя не только создание дизайна и наполнение контентом, но и
					установку
					необходимых функциональных возможностей.
				</p>
			</div>
		</div>
		<div class="grid grid-cols-3 gap-7">
			<div class="col-span-3 lg:col-span-1">
				<h4 class="text-lg leading-tight text-txt">Проектов</h4>
				<h2 class="font-bold text-white font-display text-5xl sm:text-[64px]  leading-tight text-balance ">
					100+
				</h2>
			</div>
			<div class="col-span-3 lg:col-span-1">
				<h4 class="text-lg leading-tight text-txt">Проектов</h4>
				<h2 class="font-bold text-white font-display text-5xl sm:text-[64px]  leading-tight text-balance ">
					100+
				</h2>
			</div>
			<div class="col-span-3 lg:col-span-1">
				<h4 class="mb-4 text-lg leading-tight text-txt">Сомневаешься?</h4>
				<button type="button" id="" class="font-medium px-8 py-4 rounded-[80px] border justify-center items-center gap-2.5 inline-flex text-center text-white text-base font-display border-blue_border bg-blue_500 text-nowrap hover:border-white/50 leading-tight max-w-48">
					Задать вопрос
				</button>
			</div>
		</div>
	</div>
</section>

<section class="pb-12 about-service pt-36">
	<div class="grid grid-cols-3 gap-7">
		<div class="col-span-3 lg:col-span-1">
			<div class="px-4 py-1 text-lg font-medium leading-tight text-white border bg-gray_light border-gray_border rounded-[20px] inline-flex ">
				О услуге
			</div>

		</div>
		<div class="col-span-3 lg:col-span-2">
			<div class="text-lg leading-tight text-txt about__content">
				<p>
					Разработка сайтов и сервисов включает в себя не только создание дизайна и наполнение контентом, но и
					установку
					необходимых функциональных возможностей. Это может быть создание интернет-магазина, блога, форума или
					любого другого
					онлайн-сервиса. При этом важно учитывать потребности целевой аудитории и делать сайт удобным и
					функциональным.
				</p>
				<p>
					Кроме того, разработка сайтов и сервисов должна включать в себя веб-аналитику. Это позволяет получить
					информацию о
					поведении пользователей на сайте, о том, как они взаимодействуют с контентом и функционалом сайта. Эти
					данные могут быть
					использованы для оптимизации пользовательского опыта, улучшения конверсии и монетизации сайта.
					Веб-аналитика также
					помогает выявить проблемы на сайте и определить, какие изменения нужно внести, чтобы улучшить его
					производительность и
					эффективность.
				</p>
			</div>
		</div>
	</div>
</section>
<? if ($arResult['PROPERTIES']['TARIFFS']['VALUE']) : ?>
	<? $APPLICATION->IncludeComponent(
		"bitrix:catalog.section.list",
		"tariffs",
		array(
			"SECTION_ID_SELECT" => $arResult['PROPERTIES']['TARIFFS']['VALUE'],
			"ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",	// Дополнительный фильтр для подсчета количества элементов в разделе
			"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
			"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
			"CACHE_GROUPS" => "Y",	// Учитывать права доступа
			"CACHE_TIME" => "7200",	// Время кеширования (сек.)
			"CACHE_TYPE" => "A",	// Тип кеширования
			"COUNT_ELEMENTS" => "Y",	// Показывать количество элементов в разделе
			"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",	// Показывать количество
			"FILTER_NAME" => "sectionsFilter",	// Имя массива со значениями фильтра разделов
			"HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",	// Скрывать разделы с нулевым количеством элементов
			"IBLOCK_ID" => "12",	// Инфоблок
			"IBLOCK_TYPE" => "CONTENT",	// Тип инфоблока
			"SECTION_CODE" => "",	// Код раздела
			"SECTION_FIELDS" => array(	// Поля разделов
				0 => "",
				1 => "",
			),
			"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
			"SECTION_USER_FIELDS" => array(	// Свойства разделов
				0 => "",
				1 => "",
			),
			"SHOW_PARENT_NAME" => "Y",	// Показывать название раздела
			"TOP_DEPTH" => "2",	// Максимальная отображаемая глубина разделов
			"VIEW_MODE" => "LINE",	// Вид списка подразделов
		),
		false
	); ?>
<? endif; ?>
<? $APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"portfolio",
	array(
		"ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "7200",
		"CACHE_TYPE" => "A",
		"COUNT_ELEMENTS" => "Y",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"FILTER_NAME" => "",
		"HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "CONTENT",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SECTION_ID" => "",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "2",
		"VIEW_MODE" => "LINE",
		"COMPONENT_TEMPLATE" => "portfolio"
	),
	false
); ?>
<?
$APPLICATION->IncludeFile("includes/sale.php", array(),);
?>
<div class="mb-7">

	<h2 class="font-bold text-white text-balance font-display text-3xl sm:text-[40px] leading-tight">
		Вы получите полноценный сайт с уникальным дизайном для вашей ниши
	</h2>
</div>
<?
$APPLICATION->IncludeFile("includes/contacts-form.php", array(),);
?>
<? if ($arResult['PROPERTIES']['FAQ']['VALUE']) : ?>

	<? $APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"faq",
		array(
			"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
			"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
			"AJAX_MODE" => "N",	// Включить режим AJAX
			"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
			"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
			"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
			"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
			"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
			"CACHE_GROUPS" => "Y",	// Учитывать права доступа
			"CACHE_TIME" => "7200",	// Время кеширования (сек.)
			"CACHE_TYPE" => "A",	// Тип кеширования
			"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
			"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
			"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
			"DISPLAY_DATE" => "Y",	// Выводить дату элемента
			"DISPLAY_NAME" => "Y",	// Выводить название элемента
			"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
			"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
			"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
			"FIELD_CODE" => array(	// Поля
				0 => "NAME",
				1 => "PREVIEW_TEXT",
				2 => "DETAIL_TEXT",
				3 => "",
			),
			"FILTER_NAME" => "",	// Фильтр
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
			"IBLOCK_ID" => "11",	// Код информационного блока
			"IBLOCK_TYPE" => "CONTENT",	// Тип информационного блока (используется только для проверки)
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
			"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
			"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
			"NEWS_COUNT" => "2000",	// Количество новостей на странице
			"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
			"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
			"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
			"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
			"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
			"PAGER_TITLE" => "Новости",	// Название категорий
			"PARENT_SECTION" => $arResult['PROPERTIES']['FAQ']['VALUE'],	// ID раздела
			"PARENT_SECTION_CODE" => "",	// Код раздела
			"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
			"PROPERTY_CODE" => array(	// Свойства
				0 => "",
				1 => "",
			),
			"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
			"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
			"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
			"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
			"SET_STATUS_404" => "N",	// Устанавливать статус 404
			"SET_TITLE" => "N",	// Устанавливать заголовок страницы
			"SHOW_404" => "N",	// Показ специальной страницы
			"SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
			"SORT_BY2" => "ACTIVE_FROM",	// Поле для второй сортировки новостей
			"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
			"SORT_ORDER2" => "DESC",	// Направление для второй сортировки новостей
			"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
		),
		false
	); ?>
<? endif; ?>