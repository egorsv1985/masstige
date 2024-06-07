<section class="pb-16 pt-7 about-page">
	<div class="mb-14">
		<h2 class="font-bold text-white font-display text-5xl sm:text-[64px]  leading-tight text-balance ">
			Мы проявляем креативность, разрабатываем дизайн и осуществляем твои желания
		</h2>
	</div>
	<div class="grid grid-cols-2 gap-7">
		<div class="col-span-2 pt-2 lg:col-span-1">
			<? $APPLICATION->IncludeComponent(
				"bitrix:news.list",
				"quote",
				array(
					"ACTIVE_DATE_FORMAT" => "d.m.Y",
					"ADD_SECTIONS_CHAIN" => "N",
					"AJAX_MODE" => "N",
					"AJAX_OPTION_ADDITIONAL" => "",
					"AJAX_OPTION_HISTORY" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "Y",
					"CACHE_FILTER" => "N",
					"CACHE_GROUPS" => "Y",
					"CACHE_TIME" => "7200",
					"CACHE_TYPE" => "A",
					"CHECK_DATES" => "Y",
					"DETAIL_URL" => "",
					"DISPLAY_BOTTOM_PAGER" => "Y",
					"DISPLAY_DATE" => "Y",
					"DISPLAY_NAME" => "Y",
					"DISPLAY_PICTURE" => "Y",
					"DISPLAY_PREVIEW_TEXT" => "Y",
					"DISPLAY_TOP_PAGER" => "N",
					"FIELD_CODE" => array(
						0 => "",
						1 => "",
					),
					"FILTER_NAME" => "",
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",
					"IBLOCK_ID" => "3",
					"IBLOCK_TYPE" => "CONTENT",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
					"INCLUDE_SUBSECTIONS" => "Y",
					"MESSAGE_404" => "",
					"NEWS_COUNT" => "1",
					"FILTER" => array(
						"ID" => "17"
					),
					"PAGER_BASE_LINK_ENABLE" => "N",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
					"PAGER_SHOW_ALL" => "N",
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_TEMPLATE" => ".default",
					"PAGER_TITLE" => "Новости",
					"PARENT_SECTION" => "",
					"PARENT_SECTION_CODE" => "",
					"PREVIEW_TRUNCATE_LEN" => "",
					"PROPERTY_CODE" => array(
						0 => "POSITION",
						1 => "",
					),
					"SET_BROWSER_TITLE" => "Y",
					"SET_LAST_MODIFIED" => "N",
					"SET_META_DESCRIPTION" => "Y",
					"SET_META_KEYWORDS" => "Y",
					"SET_STATUS_404" => "N",
					"SET_TITLE" => "Y",
					"SHOW_404" => "N",
					"SORT_BY1" => "SORT",
					"SORT_BY2" => "SORT",
					"SORT_ORDER1" => "DESC",
					"SORT_ORDER2" => "ASC",
					"STRICT_SECTION_CHECK" => "N",
					"COMPONENT_TEMPLATE" => "quote"
				),
				false
			); ?>
		</div>
		<div class="col-span-2 lg:col-span-1">
			<div class="flex flex-col space-y-5 text-lg leading-tight text-txt">
				<p>Мы предлагаем полный цикл разработки сайта - от создания дизайна до наполнения контентом и
					продвижения в
					поисковых
					системах. Каждый проект мы рассматриваем индивидуально, учитывая особенности бизнеса и потребности
					клиента.
				</p>
				<p>Наш подход к работе основан на современных технологиях и трендах веб-разработки. Мы используем только
					проверенные
					инструменты и платформы, чтобы обеспечить высокую производительность и безопасность сайта.</p>
				<p>Сотрудничество с нами - это возможность получить профессиональный и уникальный сайт, который будет
					соответствовать всем
					требованиям и ожиданиям. Мы гарантируем индивидуальный подход к каждому клиенту, высокое качество
					работы и
					своевременное
					выполнение проектов.</p>
			</div>
		</div>
	</div>
</section>