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

?>
<section class="py-24 faq">
	<div class="mb-4">

		<div class="px-4 py-1 text-lg font-medium leading-tight text-white border bg-gray_light border-gray_border rounded-[20px] inline-flex ">
			Вопрос-ответ
		</div>

	</div>
	<div class="w-full md:w-2/3 mb-9">
		<div class="mb-4">

			<h2 class="font-bold text-white text-balance font-display text-3xl sm:text-[40px] leading-tight">
				Если у вас возникли вопросы, то вероятно здесь вы найдете ответ
			</h2>
		</div>
		<p class="text-xl leading-tight text-txt text-balance">Наши проекты объединяют в себе эстетику и
			функциональность для достижения оптимальных результатов.</p>

	</div>
	<div class="space-y-5" id="accordion-collapse<?= $arParams['PARENT_SECTION'] ?>" data-accordion="collapse">

		<? foreach ($arResult["ITEMS"] as $key => $arItem) :			
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
			<div class="" id="<?= $this->GetEditAreaId($arItem['ID']); ?>" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">

				<h2 id="accordion-collapse-heading-<?= $arItem['ID']; ?>">
					<button class="group/heading sm:text-center text-left   flex items-center justify-between w-full gap-3 p-5 font-bold font-display text-xl leading-tight text-white border-t-gray_border bg-gray_light rounded-t-[10px]" type="button" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-<?= $arItem['ID']; ?>">
						<span><?= ($arItem["NAME"] ? $arItem["NAME"] : $arItem["PREVIEW_TEXT"]); ?></span>
								<span data-accordion-icon
									class="flex items-center justify-center w-10 h-10 border rounded-full group-aria-expanded/heading:bg-blue_500 border-gray_border">
									<svg data-accordion-icon aria-hidden="true" width="24.000000" height="24.000000" viewBox="0 0 24 24"
										fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
										<path d="M11 11L11 5L13 5L13 11L19 11L19 13L13 13L13 19L11 19L11 13L5 13L5 11L11 11Z" fill="#BDBDC0"
											fill-opacity="1.000000" fill-rule="nonzero" />
									</svg>
								</span>	
					</button>
				</h2>
				<div id="accordion-collapse-body-<?= $arItem['ID']; ?>" class="hidden -mt-[1px]" aria-labelledby="accordion-collapse-heading-<?= $arItem['ID']; ?>">
				<div class="px-5   rounded-b-[10px] bg-gray_light pb-3" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
								<div class="leading-tight text-txt"><?= $arItem["DETAIL_TEXT"]; ?>.</div>
							</div>					
				</div>
			</div>
		<? endforeach; ?>
	</div>

</section>