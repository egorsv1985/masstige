<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (!empty($arResult)) :

?>
	<ul class="grid grid-flow-row grid-cols-1 grid-rows-3 text-lg leading-tight md:grid-cols-2 text-txt">
		<?
		foreach ($arResult as $arItem) :
			if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
				continue;
		?>
			<li class="mb-2">
				<div class="flex items-center gap-2">
					<span class="w-4 h-4 rounded-full border-<?= $arItem["PARAMS"]["COLOR"] ?>_border bg-<?= $arItem["PARAMS"]["COLOR"] ?>_500"></span>
					<a href="<?= $arItem["LINK"] ?>" class="relative  before:absolute before:bottom-0 before:left-0 before:overflow-hidden before:w-0 before:border-b-2 before:border-b-<?= $arItem["PARAMS"]["COLOR"] ?>_border hover:text-<?= $arItem["PARAMS"]["COLOR"] ?>_500  before:transition-[width] before:duration-500 hover:before:w-full"><?= $arItem["TEXT"] ?></a>
				</div>
			</li>
		<? endforeach ?>
	</ul>
<? endif ?>