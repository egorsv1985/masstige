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
<section class="py-12 team">
	<div class="mb-4">
		<div class="px-4 py-1 text-lg font-medium leading-tight text-white border bg-gray_light border-gray_border rounded-[20px] inline-flex ">
			Команда
		</div>

	</div>
	<div class="grid grid-cols-12 mb-10">
		<div class="col-span-12 lg:col-span-5">
			<div class="mb-6">

				<h2 class="font-bold text-white text-balance font-display text-3xl sm:text-[40px] leading-tight">
					Команда увлеченных и вовлеченных
				</h2>
			</div>
			<div class="">
				<p class="text-xl leading-tight text-txt text-balance">Знакомьтесь с людьми, которые делают ваш проект
					возможным</p>

			</div>
		</div>
	</div>
	<div class="gap-5 sm:grid sm:grid-cols-4 team__slider slider">

		<? foreach ($arResult["ITEMS"] as $arItem) :
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

			if (CModule::IncludeModule("millcom.phpthumb")) {
				$arItem["PREVIEW_PICTURE"]["WEBP"] = CMillcomPhpThumb::generateImg($arItem["PREVIEW_PICTURE"]["SRC"], 11);
				$arItem["PREVIEW_PICTURE"]["PNG"] = CMillcomPhpThumb::generateImg($arItem["PREVIEW_PICTURE"]["SRC"], 12);
			}
		?>
			<div class="mr-8 slider__item sm:mr-0">
				<div class="p-5 rounded-[10px] border border-gray_border mb-2 bg-gray_light">
					<div class="mb-3 slider__box-img position-relative">
						<picture>
							<source srcset="<?= $arItem["PREVIEW_PICTURE"]["WEBP"] ?>" type="image/webp"><img src="<?= $arItem["PREVIEW_PICTURE"]["PNG"] ?>" alt="<?= $arItem["NAME"] ?>" class="slider__img" width="215" height="215" />
						</picture>
					</div>
					<p class="mb-2 text-xl font-bold leading-tight text-txt font-display"> <?= $arItem["NAME"] ?> </p>
					<p class="leading-tight text-txt text-nowrap"><?= $arItem["PROPERTIES"]["POSITION"]["VALUE"] ?></p>
				</div>
			</div>
		<? endforeach; ?>
	</div>