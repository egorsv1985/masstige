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
<?
foreach ($arResult["ITEMS"] as $arItem) : ?>
	<ul class="pl-5 text-lg font-medium leading-tight list-square">
		<li class="mb-2 text-<?= $arItem["PROPERTIES"]["COLOR"]["VALUE"] ?>_500">
			<span class="leading-tight text-txt"><?= $arItem["NAME"] ?></span>
			<? if ($arItem["PREVIEW_TEXT"]) : ?>
				<div class="flex gap-2 text-base font-normal leading-tight">
					<?= $arItem["PREVIEW_TEXT"] ?>
				</div>
			<? endif; ?>
		</li>
	</ul>
<? endforeach; ?>