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
// print_r($arResult);
?>
<section class="py-11 portfolio">
	<div class="mb-5">
		<div class="px-4 py-1 text-lg font-medium leading-tight text-white border bg-gray_light border-gray_border rounded-[20px] inline-flex ">
			Портфолио
		</div>

	</div>
	<div class="w-full mb-5 md:w-2/3">
		<h2 class="font-bold text-white text-balance font-display text-3xl sm:text-[40px] leading-tight">
			Работы, сочетающие красоту и практичность
		</h2>
	</div>
	<div class="w-full md:w-2/3 mb-11">
		<p class="text-xl leading-tight  text-txt text-balance">Наши проекты объединяют в себе эстетику и функциональность для достижения оптимальных результатов.</p>
	</div>
	<div class="flex justify-between mb-7">
		<div class="relative">
			<div class="items-center hidden gap-4 sm:flex">

				<ul class="flex  flex-col sm:flex-row -mb-px p-4 gap-2 text-center bg-gray_light border-gray_border rounded-[40px]" aria-labelledby="dropdownTabListButton" id="portfolio-tab" data-tabs-toggle="#portfolio-tab-content" role="tablist">
					<? foreach ($arResult['SECTIONS'] as $key => $arSection) :
						$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
						$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
					?>
						<li class="" role="presentation">
							<button class="px-4 py-1 text-lg font-medium leading-tight text-yellow_border aria-selected:text-white border relative group overflow-hidden  inline-block border-yellow_border rounded-[20px] aria-selected:bg-yellow_500" id="<?= $arSection['ID']; ?>-tab" data-tabs-target="#<?= $arSection['ID']; ?>" type="button" role="tab" aria-controls="<?= $arSection['ID']; ?>" aria-selected="false">
								<span class="absolute top-0 left-0 flex w-full h-0 transition-all duration-200 ease-out transform translate-y-0 bg-yellow_500 group-hover:h-full opacity-90"></span>
								<span class="relative z-20 group-hover:text-white group-aria-selected:text-white"><?= $arSection['NAME']; ?></span>
							</button>
						</li>
					<? endforeach; ?>
				</ul>
			</div>
			<div class="flex sm:hidden">
				<!-- Dropdown button -->
				<button id="dropdownTabListButton" data-dropdown-toggle="dropdown" data-dropdown-on-hide="true" class="px-4 py-1 text-lg font-medium leading-tight text-white  border relative    inline-block border-white rounded-[20px]" type="button">Портфолио
				</button>
				<!-- Dropdown menu -->
				<div id="dropdown" class="z-10 hidden py-2">
					<ul class="flex  flex-col sm:flex-row -mb-px p-4 gap-2 text-center bg-gray_light border-gray_border rounded-[40px]" aria-labelledby="dropdownTabListButton" data-tabs-toggle="#portfolio-tab-content" role="tablist">
						<? foreach ($arResult['SECTIONS'] as $key => $arSection) :
							$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
							$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
						?>
							<li class="" role="presentation">
								<button class="px-4 py-1 text-lg font-medium leading-tight text-yellow_border aria-selected:text-white border relative group overflow-hidden  inline-block border-yellow_border rounded-[20px] aria-selected:bg-yellow_500" id="<?= $arSection['ID']; ?>-tab" data-tabs-target="#<?= $arSection['ID']; ?>" type="button" role="tab" aria-controls="<?= $arSection['ID']; ?>" aria-selected="false">
									<span class="absolute top-0 left-0 flex w-full h-0 transition-all duration-200 ease-out transform translate-y-0 bg-yellow_500 group-hover:h-full opacity-90"></span>
									<span class="relative z-20 group-hover:text-white group-aria-selected:text-white"><?= $arSection['NAME']; ?></span>
								</button>
							</li>
						<? endforeach; ?>
					</ul>
				</div>
			</div>
		</div>
		<div class="items-center hidden gap-4 sm:flex slider__controls-btns"></div>
	</div>

	<div id="portfolio-tab-content">
		<? foreach ($arResult['SECTIONS'] as $key => $arSection) :
			$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
			$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
		?>
			<div class="hidden" id="<?= $arSection['ID']; ?>" role="tabpanel" aria-labelledby="<?= $arSection['ID']; ?>-tab">
				<div class="-mx-4 branding__slider slider">
					<? $APPLICATION->IncludeComponent(
						"bitrix:news.list",
						"portfolio-item",
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
							"IBLOCK_ID" => "4",
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
							"PARENT_SECTION" => $arItem['ID'],
							"PARENT_SECTION_CODE" => "",
							"PREVIEW_TRUNCATE_LEN" => "",
							"PROPERTY_CODE" => array("COLOR", "STYLE"),
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
		<? endforeach; ?>
		
	</div>
</section>