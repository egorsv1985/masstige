<section class="contacts py-14">

	<div class="grid grid-cols-6 gap-7">
		<div class="flex flex-col col-span-6 pb-6 lg:col-span-3">
			<div class="mb-4 max-w-32">
				<div class="px-4 py-1 text-lg font-medium leading-tight text-white border bg-gray_light border-gray_border rounded-[20px] inline-flex ">
					Контакты
				</div>

			</div>
			<div class="mb-4">
				<h2 class="font-bold text-white text-balance font-display text-3xl sm:text-[40px] leading-tight">
					Расслабься, мы сделаем за тебя всю работу!
				</h2>
			</div>
			<p class="text-xl leading-tight text-txt mb-11">
				Мы поможем вам создать дизайн, который очаровывает и вдохновляет!
			</p>
			<h3 class="mb-4 text-xl font-bold leading-tight text-white font-display">
				Мы в социальных сетях
			</h3>
			<?
			$be_link = \Victory\Options\CVictoryOptions::getOptionValue('be_link_' . SITE_ID);
			$dr_link = \Victory\Options\CVictoryOptions::getOptionValue('dr_link_' . SITE_ID);
			$insta_link = \Victory\Options\CVictoryOptions::getOptionValue('insta_link_' . SITE_ID);
			$in_link = \Victory\Options\CVictoryOptions::getOptionValue('in_link_' . SITE_ID);
			if ($be_link || $dr_link || $insta_link || $in_link) :
			?>
				<ul class="flex items-center justify-between gap-2 max-w-36">
					<? if ($be_link) : ?>
						<li class="social__item">
							<a href="<?= $be_link ?>" class="flex items-center justify-center w-10 h-10 transition duration-500 border rounded-full group/messengers border-gray_border bg-gray_light hover:border-gray_light hover:bg-gray_border">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/Behance.svg" width="20" height="20" alt="Behance" />
							</a>
						</li>
					<? endif; ?>
					<? if ($dr_link) : ?>
						<li class=" social__item">
							<a href="<?= $dr_link ?>" class="flex items-center justify-center w-10 h-10 transition duration-500 border rounded-full group/messengers border-gray_border bg-gray_light hover:border-gray_light hover:bg-gray_border">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/dribbble.svg" width="20" height="20" alt="dribbble" />
							</a>
						</li>
					<? endif; ?>
					<? if ($insta_link) : ?>
						<li class="social__item">
							<a href="<?= $insta_link ?>" class="flex items-center justify-center w-10 h-10 transition duration-500 border rounded-full group/messengers border-gray_border bg-gray_light hover:border-gray_light hover:bg-gray_border">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/inst.svg" width="20" height="20" alt="instagram" />
							</a>
						</li>
					<? endif; ?>
					<? if ($in_link) : ?>
						<li class="social__item">
							<a href="<?= $in_link ?>" class="flex items-center justify-center w-10 h-10 transition duration-500 border rounded-full group/messengers border-gray_border bg-gray_light hover:border-gray_light hover:bg-gray_border">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/Linkedin.svg" width="20" height="20" alt="Linkedin" />
							</a>
						</li>
					<? endif; ?>
				</ul>
			<? endif; ?>

			<div class="grid grid-cols-6 mt-4 lg:mt-auto gap-7">
				<div class="col-span-6 md:col-span-3 lg:col-span-2">
					<a href="" class="flex gap-3">
						<span class="flex items-center justify-center w-10 h-10 border rounded-full border-gray_border bg-gray_500">
							<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/map.svg" alt="г. Минск, БЦ S.Union" />
						</span>
						<p class="text-sm font-medium leading-tight text-txt font-display">
							г. Минск,<br />
							БЦ S.Union
						</p>
					</a>
				</div>
				<div class="col-span-6 md:col-span-3 lg:col-span-4">

					<form class="flex gap-3">
						<label for="file" class="flex items-center w-full h-full gap-3 text-sm text-txt font-display text-balance">
							<span class="flex items-center justify-center w-10 h-10 border rounded-full min-w-10 border-gray_border bg-gray_500">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/upload-file.svg" alt="загрузите файл" />
							</span>
							<span>Если у вас есть ТЗ, вы можете прислать его нам и мы оценим
								проект</span>
						</label>
						<input class="hidden" aria-describedby="upload_file" id="file" type="file" />
					</form>
				</div>
			</div>
		</div>
		<div class="col-span-6 lg:col-span-3">
			<div class="grid grid-cols-6 gap-x-9 gap-y-7">
				<div class="col-span-6 sm:col-span-3 min-h-72">
					<div class="border rounded-[10px] border-gray_border h-full flex flex-col py-6 px-7">
						<h3 class="mb-2 text-lg font-medium leading-tight text-white">
							Начать<br />
							переписку
						</h3>
						<p class="leading-tight text-txt">
							Выбери удобный для себя мессенджер
						</p>
						<div class="mt-auto">
							<?
							$tg_link = \Victory\Options\CVictoryOptions::getOptionValue('tg_link_' . SITE_ID);
							$wa_link = \Victory\Options\CVictoryOptions::getOptionValue('wa_link_' . SITE_ID);
							$vb_link = \Victory\Options\CVictoryOptions::getOptionValue('vb_link_' . SITE_ID);
							if ($tg_link || $wa_link || $vb_link) :
							?>
								<ul class="flex items-center justify-between gap-2 max-w-36">
									<? if ($tg_link) : ?>
										<li class="social__item">
											<a href="<?= $tg_link ?>" class="flex items-center justify-center w-10 h-10 transition duration-500 border rounded-full group/messengers border-gray_border bg-gray_light hover:border-gray_light hover:bg-gray_border">
												<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/telegramm.svg" width="20" height="20" alt="telegramm" />
											</a>
										</li>
									<? endif; ?>
									<? if ($wa_link) : ?>
										<li class=" social__item">
											<a href="<?= $wa_link ?>" class="flex items-center justify-center w-10 h-10 transition duration-500 border rounded-full group/messengers border-gray_border bg-gray_light hover:border-gray_light hover:bg-gray_border">
												<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/whatsapp.svg" width="20" height="20" alt="whatsapp" />
											</a>
										</li>
									<? endif; ?>
									<? if ($vb_link) : ?>
										<li class="social__item">
											<a href="<?= $vb_link ?>" class="flex items-center justify-center w-10 h-10 transition duration-500 border rounded-full group/messengers border-gray_border bg-gray_light hover:border-gray_light hover:bg-gray_border">
												<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/viber.svg" width="20" height="20" alt="viber" />
											</a>
										</li>
									<? endif; ?>
								</ul>
							<? endif; ?>
						</div>
					</div>
				</div>
				<div class="col-span-6 sm:col-span-3 min-h-72">
					<div class="border rounded-[10px] border-gray_border h-full flex flex-col py-6 px-7">
						<h3 class="text-lg font-medium leading-tight text-white">
							Поговорить по телефону
						</h3>

						<div class="mt-auto">
							<div class="flex flex-col gap-3 md:gap-1 ">
								<?
								$phone1 = \Victory\Options\CVictoryOptions::getOptionValue('phone1_' . SITE_ID);
								$phone2 = \Victory\Options\CVictoryOptions::getOptionValue('phone2_' . SITE_ID);
								?>
								<a data-hover="<?= $phone1 ?>" href="tel:<?= str_replace(array(' ', '(', ')', '-'), '', $phone1); ?>" class="pl-5 relative before:content-[attr(data-hover)] before:absolute before:top-0 before:left-0 before:overflow-hidden  before:h-0 before:pl-5 before:duration-300 before:text-white before:transition-[height] hover:before:h-full  leading-tight text-txt" style="background: url(<?= SITE_TEMPLATE_PATH ?>/images/icons/mts.svg) no-repeat left 50% / 13px 20px"> <?= $phone1 ?>
								</a>
								<a data-hover="<?= $phone2 ?>" href="tel:<?= str_replace(array(' ', '(', ')', '-'), '', $phone2); ?>" class="pl-5 relative before:content-[attr(data-hover)] before:absolute before:top-0 before:left-0 before:overflow-hidden  before:h-0 before:pl-5 before:duration-300 before:text-white before:transition-[height] hover:before:h-full  leading-tight text-txt" style="background: url(<?= SITE_TEMPLATE_PATH ?>/images/icons/a1.svg) no-repeat left 50% / 13px 20px"> <?= $phone2 ?>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-span-6 sm:col-span-3 min-h-72">
					<div class="border rounded-[10px] border-gray_border h-full flex flex-col py-6 px-7">
						<h3 class="text-lg font-medium leading-tight text-white">
							Написать на почту
						</h3>

						<div class="mt-auto">
							<?
							$email = \Victory\Options\CVictoryOptions::getOptionValue('email_' . SITE_ID);

							?>
							<a href="mailto:<?= $email ?>" class="flex items-center gap-3">
								<span class="flex items-center justify-center w-10 h-10 border rounded-full border-gray_border bg-gray_500">
									<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/mail.svg" alt="<?= $email ?>" />
								</span>
								<p data-hover="<?= $email ?>" class="relative before:content-[attr(data-hover)] before:absolute before:top-0 before:left-0 before:overflow-hidden  before:h-0 before:duration-300 before:text-white before:transition-[height] hover:before:h-full leading-tight text-txt">
									<?= $email ?></p>
							</a>
						</div>
					</div>
				</div>
				<div class="col-span-6 sm:col-span-3 min-h-72">
					<div class="border rounded-[10px] border-gray_border h-full flex flex-col py-6 px-7">
						<h3 class="text-lg font-medium leading-tight text-white">
							Заполнить бриф
						</h3>
						<form class="flex items-center gap-3 mt-auto">
							<label for="download" class="flex items-center gap-3 cursor-pointer">
								<span class="flex items-center justify-center w-10 h-10 border rounded-full border-gray_border bg-gray_500 min-w-10"><img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/download.svg" alt="Заполнить бриф" /></span>
								<span data-hover="Заполнить бриф" class="relative block before:content-[attr(data-hover)] before:absolute before:top-0 before:left-0 before:overflow-hidden  before:h-0 before:duration-300 before:text-white before:transition-[height] hover:before:h-full leading-tight w-full h-full text-txt">Заполнить
									бриф</span>
							</label>
							<input class="hidden" aria-describedby="upload_file" id="download" type="file" />
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>