<section class="py-14 services">
	<div class="mb-5">
		<div class="px-4 py-1 text-lg font-medium leading-tight text-white border bg-gray_light border-gray_border rounded-[20px] inline-flex ">
			Услуги
		</div>
	</div>
	<div class="mb-6">
		<h2 class="font-bold text-white text-balance font-display text-3xl sm:text-[40px] leading-tight">
			Направления работы
		</h2>
	</div>
	<div class="w-full mb-16 md:w-2/3">
		<p class="text-xl leading-tight text-txt text-balance">Стоимость каждого проекта рассчитывается индивидуально, в зависимости от объёмов, сложности и сроков</p>
	</div>
	<div class="grid grid-cols-3 gap-7">
		<div class="col-span-3 lg:col-span-2">
			<div class="grid grid-cols-3 gap-7">
				<div class="col-span-3">
					<div class="border bg-gray_light border-gray_border pt-6 pb-11 px-7 services__content rounded-[10px]">
						<div class="px-4 py-1 text-xl font-medium leading-tight text-white border bg-yellow_500 border-yellow_border rounded-[20px] inline-flex relative -top-10">
							Брендинг
						</div>
						<div class="grid justify-center grid-cols-2 gap-7">
							<div class="col-span-2 md:col-span-1">
								<? $APPLICATION->IncludeComponent(
									"bitrix:news.list",
									"services",
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
										"FIELD_CODE" => array("", ""),
										"FILTER_NAME" => "",
										"HIDE_LINK_WHEN_NO_DETAIL" => "N",
										"IBLOCK_ID" => "1",
										"IBLOCK_TYPE" => "CONTENT",
										"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
										"INCLUDE_SUBSECTIONS" => "Y",
										"MESSAGE_404" => "",
										"NEWS_COUNT" => "20",
										"PAGER_BASE_LINK_ENABLE" => "N",
										"PAGER_DESC_NUMBERING" => "N",
										"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
										"PAGER_SHOW_ALL" => "N",
										"PAGER_SHOW_ALWAYS" => "N",
										"PAGER_TEMPLATE" => ".default",
										"PAGER_TITLE" => "Новости",
										"PARENT_SECTION" => "1",
										"PARENT_SECTION_CODE" => "",
										"PREVIEW_TRUNCATE_LEN" => "",
										"PROPERTY_CODE" => array("COLOR", ""),
										"SET_BROWSER_TITLE" => "Y",
										"SET_LAST_MODIFIED" => "N",
										"SET_META_DESCRIPTION" => "Y",
										"SET_META_KEYWORDS" => "Y",
										"SET_STATUS_404" => "N",
										"SET_TITLE" => "Y",
										"SHOW_404" => "N",
										"SORT_BY1" => "ACTIVE_FROM",
										"SORT_BY2" => "SORT",
										"SORT_ORDER1" => "DESC",
										"SORT_ORDER2" => "ASC",
										"STRICT_SECTION_CHECK" => "N"
									)
								); ?>
							</div>
							<div class="col-span-2 md:col-span-1">
								<div class="flex gap-4 border justify-between items-center border-gray_border rounded-[10px] shadow-inset p-[30px] -mt-5 lg:mb-[30px] mb-3">
									<div class="w-[30px] h-[30px] border border-purple_border shadow-inner shadow-purple_light/50 rounded-full bg-purple_light">
									</div>
									<div class="w-[30px] h-[30px] border border-pink_border shadow-inner shadow-pink_light/50 rounded-full bg-pink_light">
									</div>
									<div class="w-[30px] h-[30px] border border-blue_border shadow-inner shadow-blue_light/50 rounded-full bg-blue_light">
									</div>
									<div class="w-[30px] h-[30px] border border-green_border shadow-inner shadow-green_light/50 rounded-full bg-green_light">
									</div>
									<div class="w-[30px] h-[30px] border border-yellow_border shadow-inner shadow-yellow_light/50 rounded-full bg-yellow_light">
									</div>
									<div class="w-[30px] h-[30px] border border-red_border shadow-inner shadow-red_light/50 rounded-full bg-red_light">
									</div>
								</div>
								<div class="flex max-[400px]:flex-col flex-row justify-between lg:gap-2 gap-3">
									<div class="flex gap-1 flex-col border items-center border-gray_border rounded-[10px] shadow-inset py-4 px-7">
										<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/company_name.svg" alt="Company name" class="" />
										<p class="text-sm leading-tight text-center text-white">
											Company name
										</p>
									</div>
									<div class="flex flex-col border items-center border-gray_border rounded-[10px] shadow-inset py-2 px-8">
										<span class="block text-[40px] leading-tight font-display text-white font-bold text-center">Aa</span>
										<p class="text-sm leading-tight text-center text-white">
											Brand font
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-span-3">
					<div class="border px-7 bg-gray_light border-gray_border services__content rounded-[10px]">
						<div class="grid grid-cols-2 gap-7">
							<div class="col-span-2 md:col-span-1">
								<div class="px-4 py-1 text-xl font-medium leading-tight text-white border bg-pink_500 border-pink_border rounded-[20px] inline-flex relative -top-4">
									Дизайн рекламы
								</div>
								<div class="pt-6">
									<? $APPLICATION->IncludeComponent(
										"bitrix:news.list",
										"services",
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
											"FIELD_CODE" => array("", ""),
											"FILTER_NAME" => "",
											"HIDE_LINK_WHEN_NO_DETAIL" => "N",
											"IBLOCK_ID" => "1",
											"IBLOCK_TYPE" => "CONTENT",
											"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
											"INCLUDE_SUBSECTIONS" => "Y",
											"MESSAGE_404" => "",
											"NEWS_COUNT" => "20",
											"PAGER_BASE_LINK_ENABLE" => "N",
											"PAGER_DESC_NUMBERING" => "N",
											"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
											"PAGER_SHOW_ALL" => "N",
											"PAGER_SHOW_ALWAYS" => "N",
											"PAGER_TEMPLATE" => ".default",
											"PAGER_TITLE" => "Новости",
											"PARENT_SECTION" => "2",
											"PARENT_SECTION_CODE" => "",
											"PREVIEW_TRUNCATE_LEN" => "",
											"PROPERTY_CODE" => array("COLOR", ""),
											"SET_BROWSER_TITLE" => "Y",
											"SET_LAST_MODIFIED" => "N",
											"SET_META_DESCRIPTION" => "Y",
											"SET_META_KEYWORDS" => "Y",
											"SET_STATUS_404" => "N",
											"SET_TITLE" => "Y",
											"SHOW_404" => "N",
											"SORT_BY1" => "ACTIVE_FROM",
											"SORT_BY2" => "SORT",
											"SORT_ORDER1" => "DESC",
											"SORT_ORDER2" => "ASC",
											"STRICT_SECTION_CHECK" => "N"
										)
									); ?>
								</div>
							</div>
							<div class="col-span-2 md:col-span-1">
								<? $APPLICATION->IncludeComponent(
									"bitrix:news.list",
									"services-slider",
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
										"FIELD_CODE" => array("", ""),
										"FILTER_NAME" => "",
										"HIDE_LINK_WHEN_NO_DETAIL" => "N",
										"IBLOCK_ID" => "2",
										"IBLOCK_TYPE" => "CONTENT",
										"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
										"INCLUDE_SUBSECTIONS" => "Y",
										"MESSAGE_404" => "",
										"NEWS_COUNT" => "20",
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
										"PROPERTY_CODE" => array("IMAGES", ""),
										"SET_BROWSER_TITLE" => "Y",
										"SET_LAST_MODIFIED" => "N",
										"SET_META_DESCRIPTION" => "Y",
										"SET_META_KEYWORDS" => "Y",
										"SET_STATUS_404" => "N",
										"SET_TITLE" => "Y",
										"SHOW_404" => "N",
										"SORT_BY1" => "ACTIVE_FROM",
										"SORT_BY2" => "SORT",
										"SORT_ORDER1" => "DESC",
										"SORT_ORDER2" => "ASC",
										"STRICT_SECTION_CHECK" => "N"
									)
								); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-span-3 lg:col-span-1">
			<div class="border px-7 h-full bg-gray_light border-gray_border services__content rounded-[10px] pb-4">
				<div class="px-4 py-1 text-xl font-medium leading-tight text-white border bg-blue_500 border-blue_border rounded-[20px] inline-flex relative -top-4">
					Разработка
				</div>
				<div class="grid grid-cols-2 gap-4 md:gap-7 lg:gap-4">
					<div class="col-span-2 md:col-span-1 lg:col-span-2 md:order-1 lg:order-none">
						<div class="flex flex-col border px-5 py-6 bg-gray_light border-gray_border cursor-[url(<?= SITE_TEMPLATE_PATH ?>/images/icons/cursor_development2.svg),_pointer] rounded-[10px]">
							<div class="flex items-center justify-between mb-4">
								<div class="flex items-center gap-2">
									<div>
										<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/figma_small.svg" alt="figma" class="" />
									</div>
									<p class="leading-tight text-txt">Project</p>
								</div>
								<div class="flex">
									<div class="w-4 h-4 border rounded-full bg-green_500 border-green_border"></div>
									<div class="w-4 h-4 bg-blue-500 border rounded-full border-blue_border"></div>
								</div>
							</div>
							<div class="relative pb-16 ">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/development.png" alt="" class="w-full cursor-[url(<?= SITE_TEMPLATE_PATH ?>/images/icons/cursor_development1.svg),_pointer]" />
							</div>
						</div>
					</div>
					<div class="col-span-2 md:col-span-1 lg:col-span-2">
						<div class="pt-6">
							<? $APPLICATION->IncludeComponent(
								"bitrix:news.list",
								"services",
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
									"FIELD_CODE" => array("", ""),
									"FILTER_NAME" => "",
									"HIDE_LINK_WHEN_NO_DETAIL" => "N",
									"IBLOCK_ID" => "1",
									"IBLOCK_TYPE" => "CONTENT",
									"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
									"INCLUDE_SUBSECTIONS" => "Y",
									"MESSAGE_404" => "",
									"NEWS_COUNT" => "20",
									"PAGER_BASE_LINK_ENABLE" => "N",
									"PAGER_DESC_NUMBERING" => "N",
									"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
									"PAGER_SHOW_ALL" => "N",
									"PAGER_SHOW_ALWAYS" => "N",
									"PAGER_TEMPLATE" => ".default",
									"PAGER_TITLE" => "Новости",
									"PARENT_SECTION" => "3",
									"PARENT_SECTION_CODE" => "",
									"PREVIEW_TRUNCATE_LEN" => "",
									"PROPERTY_CODE" => array("COLOR", ""),
									"SET_BROWSER_TITLE" => "Y",
									"SET_LAST_MODIFIED" => "N",
									"SET_META_DESCRIPTION" => "Y",
									"SET_META_KEYWORDS" => "Y",
									"SET_STATUS_404" => "N",
									"SET_TITLE" => "Y",
									"SHOW_404" => "N",
									"SORT_BY1" => "ACTIVE_FROM",
									"SORT_BY2" => "SORT",
									"SORT_ORDER1" => "DESC",
									"SORT_ORDER2" => "ASC",
									"STRICT_SECTION_CHECK" => "N"
								)
							); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>