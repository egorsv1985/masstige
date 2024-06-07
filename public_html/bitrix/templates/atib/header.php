<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

if (!defined("TYPE_PAGE"))
	define('TYPE_PAGE', 'TEXT');

use \Bitrix\Main\Page\Asset;

$asset = Asset::getInstance();

// $asset->addJs('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
// $asset->addJs('https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.5/jquery.inputmask.min.js');

$asset->addJs(SITE_TEMPLATE_PATH . '/libs/jquery/jquery-3.7.1.min.js');

$asset->addJs(SITE_TEMPLATE_PATH . '/libs/Inputmask-5.x/dist/jquery.inputmask.min.js');
$asset->addJs(SITE_TEMPLATE_PATH . '/libs/inputmask-multi-master/js/jquery.inputmask-multi.min.js');
$asset->addJs(SITE_TEMPLATE_PATH . '/libs/jquery-ui/jquery-ui.min.js');
$asset->addCss(SITE_TEMPLATE_PATH . '/libs/jquery-ui/jquery-ui.min.css');
$asset->addJs(SITE_TEMPLATE_PATH . '/libs/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js');
// $asset->addJs(SITE_TEMPLATE_PATH . '/libs/jquery/jquery-3.7.1.min.js');
// $asset->addJs('https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js');
$asset->addJs(SITE_TEMPLATE_PATH . '/libs/flowbite/flowbite.min.js');
$asset->addJs(SITE_TEMPLATE_PATH . '/libs/slick/slick.min.js');
$asset->addCss(SITE_TEMPLATE_PATH . '/libs/slick/slick.min.css');
// $asset->addJs('https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
// $asset->addCss('https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');

$asset->addJs(SITE_TEMPLATE_PATH . '/scripts.js');
if (CModule::IncludeModule("victory.options")) {
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<? $APPLICATION->ShowHead(); ?>
	<title><? $APPLICATION->ShowTitle(); ?></title>
	<link rel="apple-touch-icon" sizes="180x180" href="<?= SITE_TEMPLATE_PATH ?>/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= SITE_TEMPLATE_PATH ?>/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= SITE_TEMPLATE_PATH ?>/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?= SITE_TEMPLATE_PATH ?>/favicon/site.webmanifest">
</head>

<body class="bg-gray_500 body font-SFUIText">
	<div id="panel">
		<? $APPLICATION->ShowPanel(); ?>
	</div>

	<div class="wrapper">
		<header class=" py-4 header z-[9999] left-0 right-0 top-0 before:absolute before:inset-0 before:bg-gray_500 before:transition-opacity before:duration-500 before:ease-out backdrop-blur-lg before:opacity-80 before:-z-10">
			<div class="container px-2">
				<div class="z-40 flex items-center justify-between pb-3 border-b border-b-gray_border">
					<div class="w-1/3 mr-3 sm:w-1/4 lg:w-1/6 max-[400px]:w-1/2">
						<a href="/" class="block  target="_blank"max-w-full text-center">
							<picture>
								<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/logo.webp" type="image/webp"><img src="<?= SITE_TEMPLATE_PATH ?>/images/logo.png" alt="logo" class="max-w-full" width="160" height="34" />
							</picture>
						</a>
					</div>
					<div class="hidden w-1/2 mr-3 md:mr-7 md:w-1/5 sm:block">
						<button id="menuDropdownButton" data-dropdown-toggle="menuDropdown" data-dropdown-trigger="hover" class="gap-2 bg-white rounded-[5rem] px-8 py-4 text-center flex items-center" type="button">
							<span class="grid grid-flow-row gap-[3px] grid-cols-2 grid-rows-2">
								<span class="bg-blue_500  w-[5px] rounded-full h-[5px]"></span>
								<span class="bg-green_500  w-[5px] rounded-full h-[5px]"></span>
								<span class="bg-red_500  w-[5px] rounded-full h-[5px]"></span>
								<span class="bg-yellow_500  w-[5px] rounded-full h-[5px]"></span>
							</span>

							<span class="text-base font-medium text-gray_500 font-display">
								Услуги
							</span>
						</button>
						<!-- Dropdown menu -->
						<div id="menuDropdown" class="text-gray_light z-10 py-4 px-10 dropdown-menu hidden  bg-white rounded-[10px]">
							<div class="flex items-center gap-2 text-center">
								<div class="grid grid-flow-row gap-[3px] grid-cols-2 grid-rows-2">
									<div class="bg-blue_500  w-[5px] rounded-full h-[5px]"></div>
									<div class="bg-green_500  w-[5px] rounded-full h-[5px]"></div>
									<div class="bg-red_500  w-[5px] rounded-full h-[5px]"></div>
									<div class="bg-yellow_500  w-[5px] rounded-full h-[5px]"></div>
								</div>
								<span>Услуги</span>
							</div>
							<? $APPLICATION->IncludeComponent(
								"bitrix:menu",
								"services-menu",
								array(
									"COMPONENT_TEMPLATE" => "services-menu",
									"ROOT_MENU_TYPE" => "top",
									"MENU_CACHE_TYPE" => "A",
									"MENU_CACHE_TIME" => "3600",
									"MENU_CACHE_USE_GROUPS" => "Y",
									"MENU_CACHE_GET_VARS" => array(),
									"MAX_LEVEL" => "2",
									"CHILD_MENU_TYPE" => "left",
									"USE_EXT" => "Y",
									"DELAY" => "N",
									"ALLOW_MULTI_SELECT" => "N"
								),
								false
							); ?>
						</div>
					</div>
					<div class="lg:w-[12.6%] md:w-1/6 sm:w-1/5 w-1/3 md:mr-7 mr-3 max-[400px]:hidden">
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

					</div>
					<div class="hidden w-1/4 mr-7 lg:w-1/6 lg:block">
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
					<div class="hidden w-1/6 lg:block">
						<button data-modal-target="callback-modal" data-modal-toggle="callback-modal" class="relative items-center justify-start inline-block px-8 py-4 overflow-hidden font-medium transition-all border rounded-full shadow border-gray_border bg-gray_light hover:bg-white group" type="button">
							<span class="absolute inset-0 border-0 group-hover:border-[40px] ease-linear duration-100 transition-all border-white rounded-full"></span>
							<span class="relative w-full text-base leading-tight text-white transition-colors duration-500 ease-in-out text-nowrap group-hover:text-gray_500">Работать
								с нами</span>
						</button>
					</div>
					<div class="w-1/4 md:w-1/12">
						<button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center justify-end w-full gap-3 p-2 ml-1 font-medium text-white rounded-lg font-display focus:outline-none " aria-controls="mobile-menu-2" aria-expanded="true">
							<span class="flex flex-col gap-[3px]">
								<span class="bg-blue_500 w-[5px] h-[5px]"></span>
								<span class="bg-red_500 w-[5px] h-[5px]"></span>
								<span class="bg-yellow_500 w-[5px] h-[5px]"></span>
							</span>
							<span class="">Меню</span>
						</button>
					</div>
				</div>
				<nav class="hidden w-full " id="mobile-menu-2">
					<div class="grid grid-cols-10 gap-3 py-4 md:gap-7">
						<div class="col-span-10 md:col-span-2">
							<? $APPLICATION->IncludeComponent(
								"bitrix:menu",
								"main-menu",
								array(
									"COMPONENT_TEMPLATE" => "main-menu",
									"ROOT_MENU_TYPE" => "left",
									"MENU_CACHE_TYPE" => "A",
									"MENU_CACHE_TIME" => "3600",
									"MENU_CACHE_USE_GROUPS" => "Y",
									"MENU_CACHE_GET_VARS" => array(),
									"MAX_LEVEL" => "2",
									"CHILD_MENU_TYPE" => "left",
									"USE_EXT" => "Y",
									"DELAY" => "N",
									"ALLOW_MULTI_SELECT" => "N"
								),
								false
							); ?>

						</div>
						<div class="col-span-10 col-start-1 md:col-span-12 md:col-start-6">
							<div class="flex flex-col gap-5">
								<span class="text-xl font-bold leading-tight text-white font-display">Услуги</span>
								<? $APPLICATION->IncludeComponent(
									"bitrix:menu",
									"secondary-menu",
									array(
										"COMPONENT_TEMPLATE" => "secondary-menu",
										"ROOT_MENU_TYPE" => "right",
										"MENU_CACHE_TYPE" => "A",
										"MENU_CACHE_TIME" => "3600",
										"MENU_CACHE_USE_GROUPS" => "Y",
										"MENU_CACHE_GET_VARS" => array(),
										"MAX_LEVEL" => "2",
										"CHILD_MENU_TYPE" => "left",
										"USE_EXT" => "Y",
										"DELAY" => "N",
										"ALLOW_MULTI_SELECT" => "N"
									),
									false
								); ?>

							</div>
						</div>
						<div class="block col-span-10 md:col-span-12 md:hidden">
							<div class="flex flex-col gap-3 md:gap-1 ">
								<?
								$phone1 = \Victory\Options\CVictoryOptions::getOptionValue('phone1_' . SITE_ID);
								$phone2 = \Victory\Options\CVictoryOptions::getOptionValue('phone2_' . SITE_ID);
								print_r($phone1);
								?>
								<a data-hover="<?= $phone1 ?>" href="tel:<?= str_replace(array(' ', '(', ')', '-'), '', $phone1); ?>" target="_blank" class="pl-5 relative before:content-[attr(data-hover)] before:absolute before:top-0 before:left-0 before:overflow-hidden  before:h-0 before:pl-5 before:duration-300 before:text-white before:transition-[height] hover:before:h-full  leading-tight text-txt" style="background: url(<?= SITE_TEMPLATE_PATH ?>/images/icons/mts.svg) no-repeat left 50% / 13px 20px"> <?= $phone1 ?>
								</a>
								<a data-hover="<?= $phone2 ?>" href="tel:<?= str_replace(array(' ', '(', ')', '-'), '', $phone2); ?>" target="_blank" class="pl-5 relative before:content-[attr(data-hover)] before:absolute before:top-0 before:left-0 before:overflow-hidden  before:h-0 before:pl-5 before:duration-300 before:text-white before:transition-[height] hover:before:h-full  leading-tight text-txt" style="background: url(<?= SITE_TEMPLATE_PATH ?>/images/icons/mts.svg) no-repeat left 50% / 13px 20px"> <?= $phone2 ?>
								</a>
							</div>
						</div>
						<div class="block col-span-10 md:col-span-12 md:hidden">
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
						</div>
					</div>
				</nav>
			</div>
		</header>
		<main class="<?= TYPE_PAGE == 'TEXT' ? 'pt-28' : '' ?>">
			<div class="container">
				<? if (TYPE_PAGE == 'TEXT') : ?>

					<? $APPLICATION->IncludeComponent(
						"bitrix:breadcrumb",
						"",
						array(
							"PATH" => "",
							"SITE_ID" => SITE_ID,
							"START_FROM" => "0"
						)
					); ?>
				<? endif; ?>

				<? if (TYPE_PAGE == 'MAIN') : ?>
					<section class="hero cursor-[url(<?= SITE_TEMPLATE_PATH ?>/images/icons/cursor_you.svg),_pointer]">
						<div class="grid grid-cols-2 ">
							<div class="col-span-2 md:col-span-1">
								<div class="flex flex-col hero__box py-[30%] md:py-[27vh] relative pseudo-grid before:absolute before:block   before:top-[21%] before:left-[14%] before:bottom-[12%] before:-right-[24%]">
									<h1 class="lg:text-[64px]  text-5xl font-bold text-white font-display leading-tight mb-2"> <?= \Victory\Options\CVictoryOptions::getOptionValue('hero_h1_' . SITE_ID); ?>
									</h1>
									<div class="relative mb-7 hero__box-logo">
										<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/corner_logo.svg" alt="atib" class="" width="518" height="187" />
									</div>
									<h2 class="mb-12 text-2xl leading-tight tracking-wider text-txt text-balance"><?= \Victory\Options\CVictoryOptions::getOptionValue('hero_description_' . SITE_ID); ?></h2>
									<button data-modal-target="callback-modal" data-modal-toggle="callback-modal" class="rounded-[80px]  justify-center items-center gap-2.5 text-center text-white text-base font-display  bg-blue_500 text-nowrap hover:border-white/50 leading-tight max-w-48 relative  inline-block px-8 py-4 overflow-hidden font-medium transition-all border shadow border-blue_border  hover:bg-white group" type="button">
										<span class="absolute inset-0 border-0 group-hover:border-[40px] ease-linear duration-100 transition-all border-white rounded-full"></span>
										<span class="relative w-full text-base leading-tight text-white transition-colors duration-500 ease-in-out text-nowrap group-hover:text-blue_500">Связаться
											с нами</span>
									</button>
								</div>
							</div>
							<div class="relative col-span-2 md:col-span-1 aspect-square before:h-[30%] after:h-[30%] md:before:h-[27vh] md:after:h-[27vh] before:-top-px after:-bottom-px hero__gradient  md:aspect-[5/8]">
								<div class="relative flex flex-col h-full overflow-hidden ">
									<div class="z-10 relative  hero__animation flex min-w-full flex-[0_0_auto] items-center flex-col  animate-translate">
										<div class="relative flex items-center justify-center w-20 overflow-hidden transition duration-300 ease-out border rounded-full group aspect-square sm:w-24 md:w-32 p-7 bg-gray_light hover:bg-gray_light/50 border-gray_border animate-left-right0 -left-48">
											<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/Adobe_Photoshop.svg" alt="Adobe Photoshop" class="" width="50" height="50" />
										</div>
										<div class="relative flex items-center justify-center w-20 overflow-hidden transition duration-300 ease-out border rounded-full group aspect-square sm:w-24 md:w-32 p-7 bg-gray_light hover:bg-gray_light/50 border-gray_border animate-left-right1">
											<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/tilda.svg" alt="tilda" class="" width="50" height="50" />
										</div>
										<div class="relative flex items-center justify-center w-20 overflow-hidden transition duration-300 ease-out border rounded-full group aspect-square sm:w-24 md:w-32 p-7 bg-gray_light hover:bg-gray_light/50 border-gray_border animate-left-right2 -right-44">
											<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/Microsoft_Office.svg" alt="Microsoft Office" class="" width="50" height="50" />
										</div>
										<div class="relative flex items-center justify-center w-20 overflow-hidden transition duration-300 ease-out border rounded-full group aspect-square sm:w-24 md:w-32 p-7 bg-gray_light hover:bg-gray_light/50 border-gray_border animate-left-right3 left-7">
											<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/bitrix.svg" alt="bitrix" class="" width="50" height="50" />
										</div>
										<div class="relative flex items-center justify-center w-20 overflow-hidden transition duration-300 ease-out border rounded-full group aspect-square sm:w-24 md:w-32 p-7 bg-gray_light hover:bg-gray_light/50 border-gray_border animate-left-right4 -left-24">
											<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/Adobe_Illustrator.svg" alt="Adobe Illustrator" class="" width="50" height="50" />
										</div>
										<div class="relative flex items-center justify-center w-20 overflow-hidden transition duration-300 ease-out border rounded-full group aspect-square sm:w-24 md:w-32 p-7 bg-gray_light hover:bg-gray_light/50 border-gray_border animate-left-right5 -right-52">
											<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/MODX.svg" alt="MODX" class="" width="50" height="50" />
										</div>
										<div class="relative flex items-center justify-center w-20 overflow-hidden transition duration-300 ease-out border rounded-full group aspect-square sm:w-24 md:w-32 p-7 bg-gray_light hover:bg-gray_light/50 border-gray_border animate-left-right6 left-28">
											<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/figma.svg" alt="Figma" class="" width="50" height="50" />
										</div>
										<div class="relative flex items-center justify-center w-20 overflow-hidden transition duration-300 ease-out border rounded-full group aspect-square sm:w-24 md:w-32 p-7 bg-gray_light hover:bg-gray_light/50 border-gray_border animate-left-right7 -left-3">
											<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/Wordpress.svg" alt="Wordpress" class="" width="50" height="50" />
										</div>
									</div>
									<div class="z-10 relative hero__animation flex min-w-full flex-[0_0_auto] items-center flex-col  animate-translate">
										<div class="relative flex items-center justify-center w-20 overflow-hidden transition duration-300 ease-out border rounded-full group aspect-square sm:w-24 md:w-32 p-7 bg-gray_light hover:bg-gray_light/50 border-gray_border animate-left-right0 -left-48">
											<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/Adobe_Photoshop.svg" alt="Adobe Photoshop" class="" width="50" height="50" />
										</div>
										<div class="relative flex items-center justify-center w-20 overflow-hidden transition duration-300 ease-out border rounded-full group aspect-square sm:w-24 md:w-32 p-7 bg-gray_light hover:bg-gray_light/50 border-gray_border animate-left-right1">
											<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/tilda.svg" alt="tilda" class="" width="50" height="50" />
										</div>
										<div class="relative flex items-center justify-center w-20 overflow-hidden transition duration-300 ease-out border rounded-full group aspect-square sm:w-24 md:w-32 p-7 bg-gray_light hover:bg-gray_light/50 border-gray_border animate-left-right2 -right-44">
											<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/Microsoft_Office.svg" alt="Microsoft Office" class="" width="50" height="50" />
										</div>
										<div class="relative flex items-center justify-center w-20 overflow-hidden transition duration-300 ease-out border rounded-full group aspect-square sm:w-24 md:w-32 p-7 bg-gray_light hover:bg-gray_light/50 border-gray_border animate-left-right3 left-7">
											<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/bitrix.svg" alt="bitrix" class="" width="50" height="50" />
										</div>
										<div class="relative flex items-center justify-center w-20 overflow-hidden transition duration-300 ease-out border rounded-full group aspect-square sm:w-24 md:w-32 p-7 bg-gray_light hover:bg-gray_light/50 border-gray_border animate-left-right4 -left-24">
											<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/Adobe_Illustrator.svg" alt="Adobe Illustrator" class="" width="50" height="50" />
										</div>
										<div class="relative flex items-center justify-center w-20 overflow-hidden transition duration-300 ease-out border rounded-full group aspect-square sm:w-24 md:w-32 p-7 bg-gray_light hover:bg-gray_light/50 border-gray_border animate-left-right5 -right-52">
											<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/MODX.svg" alt="MODX" class="" width="50" height="50" />
										</div>
										<div class="relative flex items-center justify-center w-20 overflow-hidden transition duration-300 ease-out border rounded-full group aspect-square sm:w-24 md:w-32 p-7 bg-gray_light hover:bg-gray_light/50 border-gray_border animate-left-right6 left-28">
											<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/figma.svg" alt="Figma" class="" width="50" height="50" />
										</div>
										<div class="relative flex items-center justify-center w-20 overflow-hidden transition duration-300 ease-out border rounded-full group aspect-square sm:w-24 md:w-32 p-7 bg-gray_light hover:bg-gray_light/50 border-gray_border animate-left-right7 -left-3">
											<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/Wordpress.svg" alt="Wordpress" class="" width="50" height="50" />
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				<? endif; ?>