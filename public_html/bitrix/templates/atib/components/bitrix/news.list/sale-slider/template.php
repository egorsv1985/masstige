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
<div class="-mx-4 sale__slider slider">
	<? foreach ($arResult["ITEMS"] as $arItem) :
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
		<div class="flex flex-col h-auto   px-4 slider__item group/slider__item hover:cursor-[url(../images/icons/cursor_you.svg),_pointer] ">
			<div class="rounded-[10px] py-12 ps-7 flex-1 group-hover/slider__item:shadow-lg group-hover/slider__item:shadow-<?= $arItem["PROPERTIES"]["COLOR"]["VALUE"] ?>_light/20  transition duration-300  gap-8 flex flex-col pe-6  border border-<?= $arItem["PROPERTIES"]["COLOR"]["VALUE"] ?>_border group-hover/slider__item:bg-<?= $arItem["PROPERTIES"]["COLOR"]["VALUE"] ?>_500 ">
				<div class="">
					<div class="px-4 py-1 text-sm mb-8 font-medium leading-tight border bg-<?= $arItem["PROPERTIES"]["COLOR"]["VALUE"] ?>_500 border-<?= $arItem["PROPERTIES"]["COLOR"]["VALUE"] ?>_border rounded-[20px] inline-flex slider__name group-hover/slider__item:bg-gray_500">
						<?= $arItem["NAME"] ?>
					</div>
					<div class="mb-2">
						<h3 class="font-display font-bold text-[28px] leading-tight text-white">
							<?= $arItem["PROPERTIES"]["TITLE"]["VALUE"] ?>
						</h3>
					</div>
					<div class="text-lg font-medium leading-tight text-txt group-hover/slider__item:text-white">
						<?= $arItem["PREVIEW_TEXT"] ?>
					</div>
				</div>
				<div class="mt-auto">
					<div class="space-y-6 mb-6 text-base leading-tight text-txt group-hover/slider__item:text-white">
						<?= $arItem["DETAIL_TEXT"] ?>
					</div>

					<button class="font-medium px-8 py-4 rounded-[80px] border justify-center items-center gap-2.5 inline-flex text-center text-white group-hover/slider__item:text-<?= $arItem["PROPERTIES"]["COLOR"]["VALUE"] ?>_500 group-hover/slider__item:bg-white text-base font-display border-<?= $arItem["PROPERTIES"]["COLOR"]["VALUE"] ?>_border bg-<?= $arItem["PROPERTIES"]["COLOR"]["VALUE"] ?>_500 text-nowrap leading-tight" type="button">
						Подробнее
					</button>
				</div>
			</div>
		</div>
	<? endforeach; ?>
</div>