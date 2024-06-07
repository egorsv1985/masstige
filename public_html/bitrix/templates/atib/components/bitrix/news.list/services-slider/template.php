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
<div class="grid max-[400px]:grid-cols-1 grid-cols-2 overflow-y-hidden max-h-[300px]">
	<div class="col-span-1 ">
		<div class="services__slider1 slider">
			<? foreach ($arResult["ITEMS"] as $arItem) :
				foreach ($arItem['DISPLAY_PROPERTIES']['IMAGES']['FILE_VALUE'] as $IMAGE) :
					if (CModule::IncludeModule("millcom.phpthumb")) {
						$IMAGE["WEBP"] = CMillcomPhpThumb::generateImg($IMAGE["SRC"], 1);
						$IMAGE["PNG"] = CMillcomPhpThumb::generateImg($IMAGE["SRC"], 2);
					}
			?>
					<div class="rounded-[10px]">
						<picture>
							<source srcset="<?= $IMAGE["WEBP"] ?>" type="image/webp"><img src="<?= $IMAGE["PNG"] ?>" alt="<?= $arItem['NAME']; ?>" title="<?= $arItem['NAME']; ?>" width="160" height="160" >
						</picture>
					</div>
				<? endforeach; ?>
			<? endforeach; ?>
		</div>
	</div>
	<div class="col-span-1 ml-4">
		<div class="services__slider2 slider">
			<? foreach ($arResult["ITEMS"] as $arItem) :
				foreach ($arItem['DISPLAY_PROPERTIES']['IMAGES']['FILE_VALUE'] as $IMAGE) :
					if (CModule::IncludeModule("millcom.phpthumb")) {
						$IMAGE["WEBP"] = CMillcomPhpThumb::generateImg($IMAGE["SRC"], 3);
						$IMAGE["PNG"] = CMillcomPhpThumb::generateImg($IMAGE["SRC"], 4);
					}
			?>
					<div class="rounded-[10px]">
						<picture>
							<source srcset="<?= $IMAGE["WEBP"] ?>" type="image/webp"><img src="<?= $IMAGE["PNG"] ?>" alt="<?= $arItem['NAME']; ?>" title="<?= $arItem['NAME']; ?>" width="145" height="145" >
						</picture>
					</div>
				<? endforeach; ?>
			<? endforeach; ?>
		</div>
	</div>
</div>