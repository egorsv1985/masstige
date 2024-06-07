<section class="py-10 contacts-form">
	<div class="grid grid-cols-12 bg-gray_light border gap-7 border-gray_border rounded-[10px] py-14 px-9">
		<div class="col-span-12 lg:col-span-6">
			<div class="mb-4 ">
				<h2 class="font-bold text-white text-balance font-display text-3xl sm:text-[40px] leading-tight">
					Давайте сделаем сильный проект вместе!
				</h2>
			</div>
			<div class="mb-5">
				<p class="text-xl leading-tight text-txt text-balance">Оставьте свой телефон, и аккаунт-менеджер
					сориентирует по порядку работы стоимости</p>
			</div>
			<div class="flex flex-wrap justify-between gap-4 mb-7 sm:justify-start">
				<?
				$tg_link = \Victory\Options\CVictoryOptions::getOptionValue('tg_link_' . SITE_ID);
				$wa_link = \Victory\Options\CVictoryOptions::getOptionValue('wa_link_' . SITE_ID);
				$vb_link = \Victory\Options\CVictoryOptions::getOptionValue('vb_link_' . SITE_ID);
				if ($tg_link || $wa_link || $vb_link) :
				?>
					<ul class="flex items-center justify-between gap-2 max-w-36">
						<? if ($tg_link) : ?>
							<li class="social__item">
								<a href="<?= $tg_link ?>" target="_blank" class="flex items-center justify-center w-10 h-10 transition duration-500 border rounded-full group/messengers border-gray_border bg-gray_light hover:border-gray_light hover:bg-gray_border">
									<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/telegramm.svg" width="20" height="20" alt="telegramm" />
								</a>
							</li>
						<? endif; ?>
						<? if ($wa_link) : ?>
							<li class=" social__item">
								<a href="<?= $wa_link ?>" target="_blank" class="flex items-center justify-center w-10 h-10 transition duration-500 border rounded-full group/messengers border-gray_border bg-gray_light hover:border-gray_light hover:bg-gray_border">
									<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/whatsapp.svg" width="20" height="20" alt="whatsapp" />
								</a>
							</li>
						<? endif; ?>
						<? if ($vb_link) : ?>
							<li class="social__item">
								<a href="<?= $vb_link ?>" target="_blank" class="flex items-center justify-center w-10 h-10 transition duration-500 border rounded-full group/messengers border-gray_border bg-gray_light hover:border-gray_light hover:bg-gray_border">
									<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/viber.svg" width="20" height="20" alt="viber" />
								</a>
							</li>
						<? endif; ?>
					</ul>
				<? endif; ?>
				<div class="flex flex-col gap-3 md:gap-1 ">
					<?
					$phone1 = \Victory\Options\CVictoryOptions::getOptionValue('phone1_' . SITE_ID);
					$phone2 = \Victory\Options\CVictoryOptions::getOptionValue('phone2_' . SITE_ID);
					?>
					<a data-hover="<?= $phone1 ?>" href="tel:<?= str_replace(array(' ', '(', ')', '-'), '', $phone1); ?>" target="_blank" class="pl-5 relative before:content-[attr(data-hover)] before:absolute before:top-0 before:left-0 before:overflow-hidden  before:h-0 before:pl-5 before:duration-300 before:text-white before:transition-[height] hover:before:h-full  leading-tight text-txt" style="background: url(<?= SITE_TEMPLATE_PATH ?>/images/icons/mts.svg) no-repeat left 50% / 13px 20px"> <?= $phone1 ?>
					</a>
					<a data-hover="<?= $phone2 ?>" href="tel:<?= str_replace(array(' ', '(', ')', '-'), '', $phone2); ?>" target="_blank" class="pl-5 relative before:content-[attr(data-hover)] before:absolute before:top-0 before:left-0 before:overflow-hidden  before:h-0 before:pl-5 before:duration-300 before:text-white before:transition-[height] hover:before:h-full  leading-tight text-txt" style="background: url(<?= SITE_TEMPLATE_PATH ?>/images/icons/a1.svg) no-repeat left 50% / 13px 20px"> <?= $phone2 ?>
					</a>
				</div>
			</div>
			<div class="mb-4 ">
				<h3 class="text-xl font-bold leading-tight text-white font-display">Контактное лицо</h3>
			</div>
			<div class="flex flex-wrap items-center gap-7">
				<div class="flex">
					<div class="rounded-full border bg-gray_500 border-blue_500 p-1 w-[65px] h-[65px] about__box-img relative">
						<picture>
							<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/team1.webp" type="image/webp"><img src="<?= SITE_TEMPLATE_PATH ?>/images/team1.png" alt="team" class="rounded-full" />
						</picture>
					</div>
					<div class="rounded-full border bg-gray_500 -ml-2 border-purple_500 p-1 w-[65px] h-[65px] about__box-img relative">
						<picture>
							<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/team7.webp" type="image/webp"><img src="<?= SITE_TEMPLATE_PATH ?>/images/team7.png" alt="team" class="rounded-full" />
						</picture>
					</div>
				</div>
				<ul class="flex flex-col gap-2 text-sm leading-tight text-txt">
					<li class="">
						<div class="flex gap-2">
							<span class="w-4 h-4 rounded-full border-blue_border bg-blue_500"></span>
							<p class="text-sm leading-tight text-txt">Менеджер Елена</p>
						</div>
					</li>
					<li class="flex gap-3">
						<div class="flex gap-2">
							<span class="w-4 h-4 rounded-full border-purple_border bg-purple_500"></span>
							<p class="text-sm leading-tight text-txt">Менеджер Полина</p>
						</div>
					</li>
				</ul>
				<a href="" target="_blank" class="flex gap-3">
					<span class="flex items-center justify-center w-10 h-10 border rounded-full border-gray_border bg-gray_light"><img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/map.svg" alt="г. Минск, БЦ S.Union" /></span>
					<p class="text-sm font-medium text-txt font-display">
						г. Минск,<br />
						БЦ S.Union
					</p>
				</a>
			</div>
		</div>
		<div class="col-span-12 py-3 lg:ms-24 lg:col-span-6 lg:me-14">
			<? $APPLICATION->IncludeComponent(
				"bitrix:iblock.element.add.form",
				"form-contacts",
				array(
					"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
					"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
					"CUSTOM_TITLE_DETAIL_PICTURE" => "",
					"CUSTOM_TITLE_DETAIL_TEXT" => "",
					"CUSTOM_TITLE_IBLOCK_SECTION" => "",
					"CUSTOM_TITLE_NAME" => "Ваше имя",
					"CUSTOM_TITLE_PREVIEW_PICTURE" => "",
					"CUSTOM_TITLE_PREVIEW_TEXT" => "",
					"CUSTOM_TITLE_TAGS" => "",
					"DEFAULT_INPUT_SIZE" => "30",
					"DETAIL_TEXT_USE_HTML_EDITOR" => "N",
					"ELEMENT_ASSOC" => "CREATED_BY",
					"GROUPS" => array(
						0 => "2",
					),
					"IBLOCK_ID" => "5",
					"IBLOCK_TYPE" => "CONTENT",
					"LEVEL_LAST" => "Y",
					"LIST_URL" => "",
					"MAX_FILE_SIZE" => "0",
					"MAX_LEVELS" => "100000",
					"MAX_USER_ENTRIES" => "100000",
					"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
					"PROPERTY_CODES" => array(
						0 => "11",
						1 => "12",
						2 => "NAME",
					),
					"PROPERTY_CODES_REQUIRED" => array(
						0 => "11",
						1 => "NAME",
					),
					"RESIZE_IMAGES" => "N",
					"SEF_MODE" => "N",
					"STATUS" => "ANY",
					"STATUS_NEW" => "N",
					"USER_MESSAGE_ADD" => "Спасибо, Ваша заявка успешно сохранена!",
					"USER_MESSAGE_EDIT" => "Спасибо, Ваша заявка успешно сохранена!",
					"USE_CAPTCHA" => "N",
					"AJAX_MODE" => "Y",
					"AJAX_OPTION_SHADOW" => "Y",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "N",
					"AJAX_OPTION_HISTORY" => "N",
					"COMPONENT_TEMPLATE" => "form-contacts"
				),
				false
			); ?>
		</div>
	</div>
</section>