<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

// Delayed function must return a string
if (empty($arResult))
	return "";

$strReturn = '
<nav class="flex pt-24" aria-label="breadcrumb">
    <ol class="inline-flex items-center space-x-1 breadcrumb md:space-x-2" itemscope itemtype="http://schema.org/BreadcrumbList">';

$itemSize = count($arResult);
for ($index = 0; $index < $itemSize; $index++) {
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);

	if ($arResult[$index]["LINK"] <> "" && $index != $itemSize - 1) {
		$strReturn .= '
            <li class="inline-flex items-center breadcrumb-item" id="bx_breadcrumb_' . $index . '" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a href="' . $arResult[$index]["LINK"] . '" class="flex items-center justify-center w-10 h-10 border rounded-full bg-gray_light border-gray_border" title="' . $title . '" itemprop="item">
                    <img src="/bitrix/components/bitrix/breadcrumb/.default/images/icons/home.svg" alt="home" />
                    <span class="hidden" itemprop="name">' . $title . '</span>
                </a>
                <meta itemprop="position" content="' . ($index + 1) . '" />
            </li>';
	} else {
		$strReturn .= '
            <li class="breadcrumb-item active" aria-current="page" id="bx_breadcrumb_' . $index . '" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <div class="relative flex items-center text-white ml-7 after:absolute after:top-1/2 after:w-4 after:h-px after:bg-gray_border after:-left-7">
                    <span class="leading-tight" itemprop="name">' . $title . '</span>
                </div>
                <meta itemprop="position" content="' . ($index + 1) . '" />
            </li>';
	}
}

$strReturn .= '
    </ol>
</nav>';

return $strReturn;
