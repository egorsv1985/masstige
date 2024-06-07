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

	<div class="pl-24 quote__title">
		<?
		foreach ($arResult["ITEMS"] as $arItem) :
			if (CModule::IncludeModule("millcom.phpthumb")) {
				$arItem["PREVIEW_PICTURE"]["WEBP"] = CMillcomPhpThumb::generateImg($arItem["PREVIEW_PICTURE"]["SRC"], 5);
				$arItem["PREVIEW_PICTURE"]["PNG"] = CMillcomPhpThumb::generateImg($arItem["PREVIEW_PICTURE"]["SRC"], 6);
			}
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>

			<div class="mb-6">
				<h2 class="font-bold text-balance text-white font-display text-3xl sm:text-[40px] leading-tight ">
					<?= $arItem["PREVIEW_TEXT"] ?>
				</h2>
			</div>
			<div class="flex gap-5">
				<div class="rounded-full">
					<picture>
						<source srcset="<?= $arItem["PREVIEW_PICTURE"]["WEBP"] ?>" type="image/webp"><img src="<?= $arItem["PREVIEW_PICTURE"]["PNG"] ?>" alt="<?= $arItem["NAME"] ?>" title="<?= $arItem["NAME"] ?>" class="" width="65" height="65" />
					</picture>
				</div>
				<div class="flex flex-col justify-center gap-1">
					<p class="text-lg font-medium leading-tight text-txt"><?= $arItem["NAME"] ?></p>
					<p class="leading-tight text-txt text-balance"><?= $arItem["PROPERTIES"]["POSITION"]["VALUE"] ?></p>
				</div>
			</div>
		<? endforeach; ?>
	</div>
