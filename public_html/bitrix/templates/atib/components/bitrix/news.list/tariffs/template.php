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
<section class="py-12 tariffs">
	<div class="mb-4">

		<div class="px-4 py-1 text-lg font-medium leading-tight text-white border bg-gray_light border-gray_border rounded-[20px] inline-flex ">
			Тарифы
		</div>

	</div>
	<div class="w-full md:w-2/3 mb-9">
		<div class="mb-4">

			<h2 class="font-bold text-white text-balance font-display text-3xl sm:text-[40px] leading-tight">
				Мы готовы работать с разными задачами, но для примера описали самые популярные
			</h2>
		</div>
		<p class="text-xl leading-tight text-txt text-balance">Стоимость каждого проекта рассчитывается
			индивидуально, в зависимости от объёмов, сложности и сроков.</p>

	</div>
	<div class="grid grid-cols-3 gap-7 mb-11">
		<div class="col-span-3 lg:col-span-1">
			<div class="rounded-[10px] border border-blue_border bg-blue_500  shadow-lg px-7 py-12 ">
				<div class="px-4 mb-6 py-1 text-sm leading-tight text-white border bg-gray_light border-gray_border rounded-[20px] inline-flex ">
					Детали по проекту
				</div>
				<ul class="space-y-2 text-lg font-medium leading-tight text-white">
					<li class="">Работаем по договору, оплата в 2 этапа</li>
					<li class="">Лицензия Битрикс оплачивается отдельно</li>
					<li class="">Включено до 3-х итераций правок</li>
					<li class="">Техническая поддержка сайта первый месяц после сдачи проекта бесплатно.</li>
					<li class="">Адаптивность и кроссплатформенность включены в стоимость</li>
					<li class="">Первичная SEO-оптимизация включена в стоимость</li>
					<li class="">Услуги копирайтинга оплачиваются дополнительно</li>
				</ul>
			</div>
		</div>
		<div class="col-span-3 lg:col-span-2">
			<div class="flex items-center justify-between mb-4">
				<ul class="flex flex-wrap border-gray_border bg-gray_light rounded-[40px] -mb-px text-lg font-medium leading-tight text-center text-blue_border p-4 gap-2" id="tariffs-tab" data-tabs-toggle="#tariffs-tab-content" role="tablist">
					<li class="" role="presentation">
						<button class="text-blue_border inline-block py-1 px-4 border border-blue_border rounded-[20px] hover:bg-blue_500 hover:text-white " id="tilda-tab" data-tabs-target="#tilda" type="button" role="tab" aria-controls="tilda" aria-selected="true">Tilda</button>
					</li>
					<li class="" role="presentation">
						<button class="text-blue_border inline-block py-1 px-4 border border-blue_border rounded-[20px] hover:bg-blue_500 hover:text-white  " id="bitrix-tab" data-tabs-target="#bitrix" type="button" role="tab" aria-controls="bitrix" aria-selected="false">Bitrix</button>
					</li>
					<li class="" role="presentation">
						<button class="text-blue_border inline-block py-1 px-4 border border-blue_border rounded-[20px] hover:bg-blue_500 hover:text-white  " id="wordpress-tab" data-tabs-target="#wordpress" type="button" role="tab" aria-controls="wordpress" aria-selected="false">Wordpress</button>
					</li>
					<li role="presentation">
						<button class="text-blue_border inline-block py-1 px-4 border border-blue_border rounded-[20px] hover:bg-blue_500 hover:text-white  " id="modx-tab" data-tabs-target="#modx" type="button" role="tab" aria-controls="modx" aria-selected="false">MODX</button>
					</li>
				</ul>
				<a href="" class="flex gap-3">
					<span class="flex items-center justify-center w-10 h-10 border rounded-full border-gray_border bg-gray_500"><img src="./images/icons/question.svg" alt="question" /></span>
					<p class="leading-tight text-txt ">
						В чем отличие <br />
						данных CMS?
					</p>
				</a>
			</div>
			<div id="tariffs-tab-content">
				<div class="hidden " id="tilda" role="tabpanel" aria-labelledby="tilda-tab">
					<div class="flex flex-col gap-5">
						<div class="flex flex-wrap gap-7 border border-gray_border rounded-[10px] py-6 px-7">
							<div class="flex flex-col w-3/5">
								<div class="mb-2 text-xl font-bold leading-tight text-white font-display">Landing Page</div>
								<div class="mb-5 leading-tight text-txt">Одностраничный сайт</div>
								<div class="text-sm leading-tight text-txt">Идеальный вариант для конвертиции рекламного трафика,
									сбора
									лидов, презентации товара или услуги.</div>
							</div>
							<div class="flex flex-col gap-5">
								<div class="flex flex-col gap-2">
									<div class="leading-tight text-txt">Цена</div>
									<div class="text-xl font-bold leading-tight text-white font-display">От 700 руб.</div>
								</div>
								<div class="flex flex-col gap-2">
									<div class="leading-tight text-txt">Сроки</div>
									<div class="text-xl font-bold leading-tight text-white font-display">От 7 дней</div>
								</div>
							</div>
						</div>
						<div class="flex flex-wrap gap-7 border border-gray_border rounded-[10px] py-6 px-7">
							<div class="flex flex-col w-3/5">
								<div class="mb-2 text-xl font-bold leading-tight text-white font-display">Корпоративный сайт</div>
								<div class="mb-5 leading-tight text-txt">Многостраничный сайт</div>
								<div class="text-sm leading-tight text-txt">Информационный сайт с большим объемом информации о
									компании,
									новостями и прочее.</div>
							</div>
							<div class="flex flex-col gap-5">
								<div class="flex flex-col gap-2">
									<div class="leading-tight text-txt">Цена</div>
									<div class="text-xl font-bold leading-tight text-white font-display">От 1000 руб.</div>
								</div>
								<div class="flex flex-col gap-2">
									<div class="leading-tight text-txt">Сроки</div>
									<div class="text-xl font-bold leading-tight text-white font-display">От 14 дней</div>
								</div>
							</div>
						</div>
						<div class="flex flex-wrap gap-7 border border-gray_border rounded-[10px] py-6 px-7">
							<div class="flex flex-col w-3/5">
								<div class="mb-2 text-xl font-bold leading-tight text-white font-display">Сайт с каталогом</div>
								<div class="mb-5 leading-tight text-txt">Многостраничный сайт с каталогом товаров</div>
								<div class="text-sm leading-tight text-txt">Полноценный сайт с каталогом товаров/услуг, описанием,
									фильтрами и сбором заявок.</div>
							</div>
							<div class="flex flex-col gap-5">
								<div class="flex flex-col gap-2">
									<div class="leading-tight text-txt">Цена</div>
									<div class="text-xl font-bold leading-tight text-white font-display">От 1500 руб.</div>
								</div>
								<div class="flex flex-col gap-2">
									<div class="leading-tight text-txt">Сроки</div>
									<div class="text-xl font-bold leading-tight text-white font-display">От 20 дней</div>
								</div>
							</div>
						</div>
						<div class="flex flex-wrap gap-7 border border-gray_border rounded-[10px] py-6 px-7">
							<div class="flex flex-col w-3/5">
								<div class="mb-2 text-xl font-bold leading-tight text-white font-display">Интернет-магазин</div>
								<div class="mb-5 leading-tight text-txt">Многостраничный сайт с корзиной</div>
								<div class="text-sm leading-tight text-txt">Идеальный вариант для сфер торговли и онлайн-продаж.
								</div>
							</div>
							<div class="flex flex-col gap-5">
								<div class="flex flex-col gap-2">
									<div class="leading-tight text-txt">Цена</div>
									<div class="text-xl font-bold leading-tight text-white font-display">От 2000 руб.</div>
								</div>
								<div class="flex flex-col gap-2">
									<div class="leading-tight text-txt">Сроки</div>
									<div class="text-xl font-bold leading-tight text-white font-display">От 30 дней</div>
								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="hidden" id="bitrix" role="tabpanel" aria-labelledby="bitrix-tab">
					<div class="flex flex-col gap-5">
						<div class="flex flex-wrap gap-7 border border-gray_border rounded-[10px] py-6 px-7">
							<div class="flex flex-col w-3/5">
								<div class="mb-2 text-xl font-bold leading-tight text-white font-display">Корпоративный сайт</div>
								<div class="mb-5 leading-tight text-txt">Многостраничный сайт</div>
								<div class="text-sm leading-tight text-txt">Информационный сайт с большим объемом информации о
									компании,
									новостями
									и прочее.</div>
							</div>
							<div class="flex flex-col gap-5">
								<div class="flex flex-col gap-2">
									<div class="leading-tight text-txt">Цена</div>
									<div class="text-xl font-bold leading-tight text-white font-display">От 1000 руб.</div>
								</div>
								<div class="flex flex-col gap-2">
									<div class="leading-tight text-txt">Сроки</div>
									<div class="text-xl font-bold leading-tight text-white font-display">От 14 дней</div>
								</div>
							</div>
						</div>
						<div class="flex flex-wrap gap-7 border border-gray_border rounded-[10px] py-6 px-7">
							<div class="flex flex-col w-3/5">
								<div class="mb-2 text-xl font-bold leading-tight text-white font-display">Landing Page</div>
								<div class="mb-5 leading-tight text-txt">Одностраничный сайт</div>
								<div class="text-sm leading-tight text-txt">Идеальный вариант для конвертиции рекламного трафика,
									сбора
									лидов, презентации товара или услуги.</div>
							</div>
							<div class="flex flex-col gap-5">
								<div class="flex flex-col gap-2">
									<div class="leading-tight text-txt">Цена</div>
									<div class="text-xl font-bold leading-tight text-white font-display">От 700 руб.</div>
								</div>
								<div class="flex flex-col gap-2">
									<div class="leading-tight text-txt">Сроки</div>
									<div class="text-xl font-bold leading-tight text-white font-display">От 7 дней</div>
								</div>
							</div>
						</div>
						<div class="flex flex-wrap gap-7 border border-gray_border rounded-[10px] py-6 px-7">
							<div class="flex flex-col w-3/5">
								<div class="mb-2 text-xl font-bold leading-tight text-white font-display">Сайт с каталогом</div>
								<div class="mb-5 leading-tight text-txt">Многостраничный сайт с каталогом товаров</div>
								<div class="text-sm leading-tight text-txt">Полноценный сайт с каталогом товаров/услуг, описанием,
									фильтрами и
									сбором заявок.</div>
							</div>
							<div class="flex flex-col gap-5">
								<div class="flex flex-col gap-2">
									<div class="leading-tight text-txt">Цена</div>
									<div class="text-xl font-bold leading-tight text-white font-display">От 1500 руб.</div>
								</div>
								<div class="flex flex-col gap-2">
									<div class="leading-tight text-txt">Сроки</div>
									<div class="text-xl font-bold leading-tight text-white font-display">От 20 дней</div>
								</div>
							</div>
						</div>
						<div class="flex flex-wrap gap-7 border border-gray_border rounded-[10px] py-6 px-7">
							<div class="flex flex-col w-3/5">
								<div class="mb-2 text-xl font-bold leading-tight text-white font-display">Интернет-магазин</div>
								<div class="mb-5 leading-tight text-txt">Многостраничный сайт с корзиной</div>
								<div class="text-sm leading-tight text-txt">Идеальный вариант для сфер торговли и онлайн-продаж.
								</div>
							</div>
							<div class="flex flex-col gap-5">
								<div class="flex flex-col gap-2">
									<div class="leading-tight text-txt">Цена</div>
									<div class="text-xl font-bold leading-tight text-white font-display">От 2000 руб.</div>
								</div>
								<div class="flex flex-col gap-2">
									<div class="leading-tight text-txt">Сроки</div>
									<div class="text-xl font-bold leading-tight text-white font-display">От 30 дней</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="hidden" id="wordpress" role="tabpanel" aria-labelledby="wordpress-tab">
					<div class="flex flex-col gap-5">
						<div class="flex flex-wrap gap-7 border border-gray_border rounded-[10px] py-6 px-7">
							<div class="flex flex-col w-3/5">
								<div class="mb-2 text-xl font-bold leading-tight text-white font-display">Сайт с каталогом</div>
								<div class="mb-5 leading-tight text-txt">Многостраничный сайт с каталогом товаров</div>
								<div class="text-sm leading-tight text-txt">Полноценный сайт с каталогом товаров/услуг, описанием,
									фильтрами и
									сбором заявок.</div>
							</div>
							<div class="flex flex-col gap-5">
								<div class="flex flex-col gap-2">
									<div class="leading-tight text-txt">Цена</div>
									<div class="text-xl font-bold leading-tight text-white font-display">От 1500 руб.</div>
								</div>
								<div class="flex flex-col gap-2">
									<div class="leading-tight text-txt">Сроки</div>
									<div class="text-xl font-bold leading-tight text-white font-display">От 20 дней</div>
								</div>
							</div>
						</div>
						<div class="flex flex-wrap gap-7 border border-gray_border rounded-[10px] py-6 px-7">
							<div class="flex flex-col w-3/5">
								<div class="mb-2 text-xl font-bold leading-tight text-white font-display">Landing Page</div>
								<div class="mb-5 leading-tight text-txt">Одностраничный сайт</div>
								<div class="text-sm leading-tight text-txt">Идеальный вариант для конвертиции рекламного трафика,
									сбора
									лидов, презентации товара или услуги.</div>
							</div>
							<div class="flex flex-col gap-5">
								<div class="flex flex-col gap-2">
									<div class="leading-tight text-txt">Цена</div>
									<div class="text-xl font-bold leading-tight text-white font-display">От 700 руб.</div>
								</div>
								<div class="flex flex-col gap-2">
									<div class="leading-tight text-txt">Сроки</div>
									<div class="text-xl font-bold leading-tight text-white font-display">От 7 дней</div>
								</div>
							</div>
						</div>
						<div class="flex flex-wrap gap-7 border border-gray_border rounded-[10px] py-6 px-7">
							<div class="flex flex-col w-3/5">
								<div class="mb-2 text-xl font-bold leading-tight text-white font-display">Корпоративный сайт</div>
								<div class="mb-5 leading-tight text-txt">Многостраничный сайт</div>
								<div class="text-sm leading-tight text-txt">Информационный сайт с большим объемом информации о
									компании,
									новостями
									и прочее.</div>
							</div>
							<div class="flex flex-col gap-5">
								<div class="flex flex-col gap-2">
									<div class="leading-tight text-txt">Цена</div>
									<div class="text-xl font-bold leading-tight text-white font-display">От 1000 руб.</div>
								</div>
								<div class="flex flex-col gap-2">
									<div class="leading-tight text-txt">Сроки</div>
									<div class="text-xl font-bold leading-tight text-white font-display">От 14 дней</div>
								</div>
							</div>
						</div>
						<div class="flex flex-wrap gap-7 border border-gray_border rounded-[10px] py-6 px-7">
							<div class="flex flex-col w-3/5">
								<div class="mb-2 text-xl font-bold leading-tight text-white font-display">Интернет-магазин</div>
								<div class="mb-5 leading-tight text-txt">Многостраничный сайт с корзиной</div>
								<div class="text-sm leading-tight text-txt">Идеальный вариант для сфер торговли и онлайн-продаж.
								</div>
							</div>
							<div class="flex flex-col gap-5">
								<div class="flex flex-col gap-2">
									<div class="leading-tight text-txt">Цена</div>
									<div class="text-xl font-bold leading-tight text-white font-display">От 2000 руб.</div>
								</div>
								<div class="flex flex-col gap-2">
									<div class="leading-tight text-txt">Сроки</div>
									<div class="text-xl font-bold leading-tight text-white font-display">От 30 дней</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="hidden" id="modx" role="tabpanel" aria-labelledby="modx-tab">
					<div class="flex flex-col gap-5">
						<div class="flex flex-wrap gap-7 border border-gray_border rounded-[10px] py-6 px-7">
							<div class="flex flex-col w-3/5">
								<div class="mb-2 text-xl font-bold leading-tight text-white font-display">Интернет-магазин</div>
								<div class="mb-5 leading-tight text-txt">Многостраничный сайт с корзиной</div>
								<div class="text-sm leading-tight text-txt">Идеальный вариант для сфер торговли и онлайн-продаж.
								</div>
							</div>
							<div class="flex flex-col gap-5">
								<div class="flex flex-col gap-2">
									<div class="leading-tight text-txt">Цена</div>
									<div class="text-xl font-bold leading-tight text-white font-display">От 2000 руб.</div>
								</div>
								<div class="flex flex-col gap-2">
									<div class="leading-tight text-txt">Сроки</div>
									<div class="text-xl font-bold leading-tight text-white font-display">От 30 дней</div>
								</div>
							</div>
						</div>
						<div class="flex flex-wrap gap-7 border border-gray_border rounded-[10px] py-6 px-7">
							<div class="flex flex-col w-3/5">
								<div class="mb-2 text-xl font-bold leading-tight text-white font-display">Landing Page</div>
								<div class="mb-5 leading-tight text-txt">Одностраничный сайт</div>
								<div class="text-sm leading-tight text-txt">Идеальный вариант для конвертиции рекламного трафика,
									сбора
									лидов, презентации товара или услуги.</div>
							</div>
							<div class="flex flex-col gap-5">
								<div class="flex flex-col gap-2">
									<div class="leading-tight text-txt">Цена</div>
									<div class="text-xl font-bold leading-tight text-white font-display">От 700 руб.</div>
								</div>
								<div class="flex flex-col gap-2">
									<div class="leading-tight text-txt">Сроки</div>
									<div class="text-xl font-bold leading-tight text-white font-display">От 7 дней</div>
								</div>
							</div>
						</div>
						<div class="flex flex-wrap gap-7 border border-gray_border rounded-[10px] py-6 px-7">
							<div class="flex flex-col w-3/5">
								<div class="mb-2 text-xl font-bold leading-tight text-white font-display">Корпоративный сайт</div>
								<div class="mb-5 leading-tight text-txt">Многостраничный сайт</div>
								<div class="text-sm leading-tight text-txt">Информационный сайт с большим объемом информации о
									компании,
									новостями
									и прочее.</div>
							</div>
							<div class="flex flex-col gap-5">
								<div class="flex flex-col gap-2">
									<div class="leading-tight text-txt">Цена</div>
									<div class="text-xl font-bold leading-tight text-white font-display">От 1000 руб.</div>
								</div>
								<div class="flex flex-col gap-2">
									<div class="leading-tight text-txt">Сроки</div>
									<div class="text-xl font-bold leading-tight text-white font-display">От 14 дней</div>
								</div>
							</div>
						</div>
						<div class="flex flex-wrap gap-7 border border-gray_border rounded-[10px] py-6 px-7">
							<div class="flex flex-col w-3/5">
								<div class="mb-2 text-xl font-bold leading-tight text-white font-display">Сайт с каталогом</div>
								<div class="mb-5 leading-tight text-txt">Многостраничный сайт с каталогом товаров</div>
								<div class="text-sm leading-tight text-txt">Полноценный сайт с каталогом товаров/услуг, описанием,
									фильтрами и
									сбором заявок.</div>
							</div>
							<div class="flex flex-col gap-5">
								<div class="flex flex-col gap-2">
									<div class="leading-tight text-txt">Цена</div>
									<div class="text-xl font-bold leading-tight text-white font-display">От 1500 руб.</div>
								</div>
								<div class="flex flex-col gap-2">
									<div class="leading-tight text-txt">Сроки</div>
									<div class="text-xl font-bold leading-tight text-white font-display">От 20 дней</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
