<!doctype html>
<html>
	<head>
	<meta charset="utf-8">
	<title>Target</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#fff">
	<meta name="format-detection" content="telephone=no">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
	<link rel="stylesheet" media="all" href="css/app.css">
	</head>
	<body>

		<header class="header">
			<div class="header__logo-mob">
				<div class="logo">
					<img src="img/logo.png" alt="">
				</div>
			</div>
			<div class="in">
				<div class="header__flex">
					<div class="header__logo">
						<div class="logo">
							<img src="img/logo.png" alt="">
						</div>
					</div>
					<div class="header__nav">
						<nav class="nav">
							<div class="nav__item">
								<a href="#">О ПРОЕКТЕ</a>
							</div>
							<div class="nav__item">
								<a href="#">НОВОСТИ</a>
							</div>
							<div class="nav__item">
								<a href="#">ТАРИФЫ</a>
							</div>
							<div class="nav__item">
								<a href="#">КОНТАКТЫ</a>
							</div>
						</nav>
					</div>
				</div>

				<div class="header__mob">
					<div class="responsive-nav" id="js-responsive-nav">
						<ul class="responsive-nav__list">
							<li class="responsive-nav__item">
								<a href="#">О ПРОЕКТЕ</a>
							</li>
							<li class="responsive-nav__item">
								<a href="#">НОВОСТИ</a>
							</li>
							<li class="responsive-nav__item">
								<a href="#">ТАРИФЫ</a>
							</li>
							<li class="responsive-nav__item">
								<a href="#">КОНТАКТЫ</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="header__account">
					<div class="account">
						<div class="account1">
							<div class="account1-wrapper">
								<div class="account__reg">
									Регистрация
								</div>
								<div class="account__login btn">
									Войти
								</div>
							</div>
						</div>
						<div class="account2">
							<div class="account2-wrapper">
								<div class="account__user">
									<div class="user">
										<div class="user__info">
											<img src="img/man-user.png" alt="">
											<div class="user__name">
												Nikolay
											</div>
											<div class="user__mail btn">
												<img src="img/mail.png" alt="">
												<div class="user__mail-count">2</div>
											</div>
										</div>
										<div class="user__rate">
											Тариф: <span>Бесплатный</span>
										</div>
									</div>
								</div>
								<div class="account__logout">
									<div class="account__logout-img"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

	<section class="second-header">
		<div class="in">
			<div class="menu">
				<a href="#" class="menu__item menu__item1">
					<div class="menu__item-img"></div>
					<p>торги</p>
				</a>
				<a href="#" class="menu__item menu__item2">
					<div class="menu__item-img"></div>
					<p>Избранное</p>
				</a>
				<a href="#" class="menu__item menu__item3">
					<div class="menu__item-img"></div>
					<p>мониторинг</p>
				</a>
				<a href="#" class="menu__item menu__item4">
					<div class="menu__item-img"></div>
					<p>успей купить</p>
				</a>
				<a href="#" class="menu__item menu__item5">
					<div class="menu__item-img"></div>
					<p>календарь</p>
				</a>
				<a href="#" class="menu__item menu__item6">
					<div class="menu__item-img"></div>
					<p>аналитика</p>
				</a>
				<a href="#" class="menu__item menu__item7">
					<div class="menu__item-img"></div>
					<p>реестры</p>
				</a>
				<a href="#" class="menu__item menu__item8">
					<div class="menu__item-img"></div>
				</a>
			</div>
			<div class="search">
				<div class="search__filter">
					<div class="filter">
						<div class="filter__main">
							<p>Фильтр</p>
							<div class="filter__main-img"></div>
						</div>
						<div class="filter-nav">
							<div class="filter-nav__header">
								<div class="filter-nav__menu filter-nav__menu1 active">Основные параметры</div>
								<div class="filter-nav__menu filter-nav__menu2">стоимость</div>                
								<div class="filter-nav__menu filter-nav__menu3">даты торгов</div>                 
								<div class="filter-nav__menu filter-nav__menu4">другие параметры</div>                 
								<div class="filter-nav__menu filter-nav__menu5">шаблоны</div>     
							</div>

							<div class="filter-nav__content filter-nav__content1 active">
								<div class="filter-nav__content-part">
									<div class="filter-nav__item">
										<p>Слова исключения</p>
										<input type="text" placeholder="Введите слова через запятую" class="mainstyle input-long">
									</div>
									<div class="filter-nav__item">
										<p>Регион</p>
										<div class="mainstyle region-popup">Все регионы</div>
										<div class="popup popup-region">
											<div class="popup-wrapper">
												<div class="in">
													<div class="popup-close"></div>
													<div class="popup__btns flex">
														<div class="popup__btn popup__btn-choose flex active">
															Выбрать всё
														</div>
														<div class="popup__btn popup__btn-remove flex">
															Снять всё
														</div>
													</div>
													<div class="popup__filter">
														<input type="text" class="mainstyle input-long" placeholder="Фильтр по названию региона">
													</div>
													<div class="popup__main">
														<div class="popup__item">
															<div class="flex">
																<div class="popup__plus"></div>
																<div class="flex">
																	<div class="popup__checkbox popup__checkbox-main">
																		<input type="checkbox" id="checkbox5" checked>
																		<label for="checkbox5" class="pop__checkbox"></label>
																	</div>
																	<div class="popup__name">Дальневосточный ФО</div>
																</div>
															</div>
															<div class="popup__in">
																<div class="flex">
																	<div class="popup__checkbox">
																		<input type="checkbox" id="checkbox6" checked>
																		<label for="checkbox6" class="pop__checkbox"></label>
																	</div>
																	<div class="popup__name">Адыгея</div>
																</div>
																<div class="flex">
																	<div class="popup__checkbox">
																		<input type="checkbox" id="checkbox7" checked>
																		<label for="checkbox7" class="pop__checkbox"></label>
																	</div>
																	<div class="popup__name">Астраханская область</div>
																</div>
																<div class="flex">
																	<div class="popup__checkbox">
																		<input type="checkbox" id="checkbox8" checked>
																		<label for="checkbox8" class="pop__checkbox"></label>
																	</div>
																	<div class="popup__name">Астраханская область</div>
																</div>
																<div class="flex">
																	<div class="popup__checkbox">
																		<input type="checkbox" id="checkbox9" checked>
																		<label for="checkbox9" class="pop__checkbox"></label>
																	</div>
																	<div class="popup__name">Астраханская область</div>
																</div>
															</div>
														</div>
														<div class="popup__item">
															<div class="flex">
																<div class="popup__plus"></div>
																<div class="flex">
																	<div class="popup__checkbox popup__checkbox-main">
																		<input type="checkbox" id="checkbox10" checked>
																		<label for="checkbox10" class="pop__checkbox"></label>
																	</div>
																	<div class="popup__name">Дальневосточный ФО</div>
																</div>
															</div>
															<div class="popup__in">
																<div class="flex">
																	<div class="popup__checkbox">
																		<input type="checkbox" id="checkbox11" checked>
																		<label for="checkbox11" class="pop__checkbox"></label>
																	</div>
																	<div class="popup__name">Адыгея</div>
																</div>
																<div class="flex">
																	<div class="popup__checkbox">
																		<input type="checkbox" id="checkbox12" checked>
																		<label for="checkbox12" class="pop__checkbox"></label>
																	</div>
																	<div class="popup__name">Астраханская область</div>
																</div>
																<div class="flex">
																	<div class="popup__checkbox">
																		<input type="checkbox" id="checkbox13" checked>
																		<label for="checkbox13" class="pop__checkbox"></label>
																	</div>
																	<div class="popup__name">Астраханская область</div>
																</div>
																<div class="flex">
																	<div class="popup__checkbox">
																		<input type="checkbox" id="checkbox14" checked>
																		<label for="checkbox14" class="pop__checkbox"></label>
																	</div>
																	<div class="popup__name">Астраханская область</div>
																</div>
															</div>
														</div>
														<div class="popup__item">
															<div class="flex">
																<div class="popup__plus"></div>
																<div class="flex">
																	<div class="popup__checkbox popup__checkbox-main">
																		<input type="checkbox" id="checkbox15" checked>
																		<label for="checkbox15" class="pop__checkbox"></label>
																	</div>
																	<div class="popup__name">Дальневосточный ФО</div>
																</div>
															</div>
															<div class="popup__in">
																<div class="flex">
																	<div class="popup__checkbox">
																		<input type="checkbox" id="checkbox16" checked>
																		<label for="checkbox16" class="pop__checkbox"></label>
																	</div>
																	<div class="popup__name">Адыгея</div>
																</div>
																<div class="flex">
																	<div class="popup__checkbox">
																		<input type="checkbox" id="checkbox17" checked>
																		<label for="checkbox17" class="pop__checkbox"></label>
																	</div>
																	<div class="popup__name">Астраханская область</div>
																</div>
																<div class="flex">
																	<div class="popup__checkbox">
																		<input type="checkbox" id="checkbox18" checked>
																		<label for="checkbox18" class="pop__checkbox"></label>
																	</div>
																	<div class="popup__name">Астраханская область</div>
																</div>
																<div class="flex">
																	<div class="popup__checkbox">
																		<input type="checkbox" id="checkbox19" checked>
																		<label for="checkbox19" class="pop__checkbox"></label>
																	</div>
																	<div class="popup__name">Астраханская область</div>
																</div>
															</div>
														</div>
													</div>
													<div class="popup__save flex">
														Сохранить
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="filter-nav__item">
										<p>Торговая площадка</p>
										<div class="mainstyle sales-area-popup">Все площадки</div>
										<div class="popup popup-sales-area">
											<div class="popup-wrapper">
												<div class="in">
													<div class="popup-close"></div>
													<div class="popup__btns flex">
														<div class="popup__btn popup__btn-choose flex active">
															Выбрать всё
														</div>
														<div class="popup__btn popup__btn-remove flex">
															Снять всё
														</div>
													</div>
													<div class="popup__filter">
														<input type="text" class="mainstyle input-long" placeholder="Фильтр по названию региона">
													</div>
													<div class="popup__main">
														<div class="popup__item">
															<div class="flex">
																<div class="flex">
																	<div class="popup__checkbox popup__checkbox-main">
																		<input type="checkbox" id="checkbox20" checked>
																		<label for="checkbox20" class="pop__checkbox"></label>
																	</div>
																	<div class="popup__name">Дальневосточный ФО</div>
																</div>
															</div>
														</div>
														<div class="popup__item">
															<div class="flex">
																<div class="flex">
																	<div class="popup__checkbox popup__checkbox-main">
																		<input type="checkbox" id="checkbox21" checked>
																		<label for="checkbox21" class="pop__checkbox"></label>
																	</div>
																	<div class="popup__name">Дальневосточный ФО</div>
																</div>
															</div>
														</div>
														<div class="popup__item">
															<div class="flex">
																<div class="flex">
																	<div class="popup__checkbox popup__checkbox-main">
																		<input type="checkbox" id="checkbox22" checked>
																		<label for="checkbox22" class="pop__checkbox"></label>
																	</div>
																	<div class="popup__name">Дальневосточный ФО</div>
																</div>
															</div>
														</div>
													</div>
													<div class="popup__save flex">
														Сохранить
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="filter-nav__item">
										<p>Типы торгов</p>
										<div class="filter-nav__flex">
											<div class="filter-nav__radio">
												<input type="radio" name="bidding" checked id="radio1">
												<label for="radio1" class="mainstyle">Аукцион</label>
											</div>
											<div class="filter-nav__radio">
												<input type="radio" name="bidding" id="radio2">
												<label for="radio2" class="mainstyle label-long">Публичное предложение</label>
											</div>
										</div>									
									</div>
								</div>
								<div>
									<div class="filter-nav__item">
										<p>Номер торгов</p>
										<input type="text" class="mainstyle">
									</div>
									<div class="filter-nav__item filter-nav__item-select">
										<p>Категории должника</p>
										<div>
											<div class="filter-nav__item-select-wrapper">
												<select class="filter-nav__select mainstyle input-long">
													<option value="">Все категории</option>
													<option value="">Градообразующая компания</option>
													<option value="">Застройщик</option>
													<option value="">Иная финансовая организация</option>
													<option value="">Индивидуальный предпрениматель</option>
													<option value="">Кредитная организация</option>
													<option value="">Фермерское хозяйство</option>
													<option value="">Ликвидируемый должник</option>
													<option value="">Обычная организация</option>
													<option value="">Отсутствующий должник</option>
													<option value="">Сельскохозяйственная организация</option>
													<option value="">Стратегическое предприятие и организация</option>
													<option value="">Субъект естественных монополий</option>
													<option value="">Физическое лицо</option>
												</select>
											</div>
											<input type="text" placeholder="Должник" class="mainstyle input-long">
											<input type="text" placeholder="Арбитражный управляющий" class="mainstyle input-long">
											<input type="text" placeholder="Организатор торгов" class="mainstyle input-long">
										</div>
									</div>
								</div>
							</div>

							<!------------------------------------------------------------>
							<div class="filter-nav__content filter-nav__content2">
								<div class="filter-nav__content-part">
									<div class="filter-nav__item">
										<p>Цена начальная</p>
										<div class="filter-nav__flex">
											<input type="text" class="mainstyle" placeholder="От">
											<input type="text" class="mainstyle" placeholder="До">
										</div>
									</div>
									<div class="filter-nav__item">
										<p>Цена текущая</p>
										<div class="filter-nav__flex">
											<input type="text" class="mainstyle" placeholder="От">
											<input type="text" class="mainstyle" placeholder="До">
										</div>
									</div>
									<div class="filter-nav__item">
										<p>Цена минимальная</p>
										<div class="filter-nav__flex">
											<input type="text" class="mainstyle" placeholder="От">
											<input type="text" class="mainstyle" placeholder="До">
										</div>
									</div>
									<div class="filter-nav__item">
										<p>Процент снижения</p>
										<div class="filter-nav__flex">
											<input type="text" class="mainstyle" placeholder="От">
											<input type="text" class="mainstyle" placeholder="До">
										</div>
									</div>
								</div>
							</div>

							<!------------------------------------------------------------>
							<div class="filter-nav__content filter-nav__content3">
								<div class="filter-nav__content-part">
									<div class="filter-nav__item">
										<p>Начало торгов</p>
										<div class="filter-nav__flex">
											<input type="text" class="mainstyle">
											<input type="text" class="mainstyle">
										</div>
									</div>
									<div class="filter-nav__item">
										<p>Начало приёма заказов</p>
										<div class="filter-nav__flex">
											<input type="text" class="mainstyle">
											<input type="text" class="mainstyle">
										</div>
									</div>
									<div class="filter-nav__item">
										<p>Окончание приёма заказов</p>
										<div class="filter-nav__flex">
											<input type="text" class="mainstyle">
											<input type="text" class="mainstyle">
										</div>
									</div>
									<div class="filter-nav__item">
										<p>Окончание торгов</p>
										<div class="filter-nav__flex">
											<input type="text" class="mainstyle">
											<input type="text" class="mainstyle">
										</div>
									</div>
								</div>
							</div>
							<!------------------------------------------------------------>
							<div class="filter-nav__content filter-nav__content4">
								<div class="filter-nav__content-part">
									<div class="filter-nav__item">
										<p>Сортировка по</p>
										<div class="filter-nav__item-select-wrapper">
											<select class="filter-nav__select input-long mainstyle">
												<option>Дате добавления</option>
												<option>Ключевому слову </option>
												<option>Цене</option>
												<option>Дате начала торгов</option>
												<option>Дате окончания торгов</option>
											</select>
										</div>
									</div>
									<div class="filter-nav__item">
										<p>Сортировка по</p>
										<div class="filter-nav__item-select-wrapper wrapper-short">
											<select class="filter-nav__select mainstyle select-short">
												<option>Все</option>
												<option>Часу</option>
												<option>Дню</option>
												<option>Сутках</option>
												<option>7 днях</option>
												<option>30 днях</option>
											</select>
										</div>
									</div>
									<div class="filter-nav__item">
										<p></p>
										<div class="filter-nav__checkbox">
											<div>
												<div class="filter-nav__checkbox-item">
													<input type="checkbox" id="checkbox1" checked>
													<label for="checkbox1" class="checkbox-type1"></label>
													<label for="checkbox1">Удалённые</label>
												</div>
												<div class="filter-nav__checkbox-item">
													<input type="checkbox" id="checkbox2" checked>
													<label for="checkbox2" class="checkbox-type1"></label>
													<label for="checkbox2">Завершённые</label>
												</div>
											</div>
											<div>
												<div class="filter-nav__checkbox-item">
													<input type="checkbox" id="checkbox3" checked>
													<label for="checkbox3" class="checkbox-type1"></label>
													<label for="checkbox3">Только с фото</label>
												</div>
												<div class="filter-nav__checkbox-item">
													<input type="checkbox" id="checkbox4" checked>
													<label for="checkbox4" class="checkbox-type1"></label>
													<label for="checkbox4">По лоту получен ответ организатора</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!------------------------------------------------------------>
							<div class="filter-nav__content filter-nav__content5">
								<div class="filter-nav__content-part">
									<div class="filter-nav__item">
										<p>Создать шаблон</p>
										<div class="filter-nav__flex">
											<input type="text" placeholder="Название шаблона" class="mainstyle">
											</input>
											<div class="btn">
												Сохранить текущий шаблон
											</div>
										</div>
									</div>
									<div class="filter-nav__item template">
										<p>Мои Шаблоны:</p>
										<div class="template__item">
											<div>Шаблон #1</div>
											<div class="template__close">
											</div>
										</div>
										<div class="template__item">
											<div>Шаблон #2</div>
											<div class="template__close">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="search__main">
						<input type="text" placeholder="Введите для поиска лота ключевое слово или номер...">
			
					</div>
					<div class="search__button btn">
						Поиск
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="main">
		<div class="in">
			<div class="main__caption">
				(Название) сайт агрегатор торгов по банкротству с 37 площадок 
			</div>
			
			<section class="main__info">
				<div class="info">
					<div class="info__items">
						<div class="info__item info__item1">
							<img src="img/img1.png" alt="">
							<div>
								<p>Зарегестрируйся бесплатно!</p>
								<ul>
									<li>И получи возможность</li>
									<li>отслеживать лоты</li>
									<li>в личном кабинете</li>
								</ul>
							</div>
						</div>
						<div class="info__item info__item2">
							<p>Основанием для снятия ареста <br>на имущество должника</p>
						</div>
						<div class="info__item info__item3">
							<div class="info__table">
								<div class="info__caption">Всего лотов:</div>
								<span>987 253</span>
							</div>
							<div class="info__table">
								<div class="info__caption">Активных лотов:</div>
								<span>987 253</span>
							</div>
							<div class="info__table">
								<div class="info__caption">Добавлено сегодня:</div>
								<span>987 253</span>
							</div>
							<div class="info__table">
								<div class="info__caption">Выиграно лотов:</div>
								<span>987 253</span>
							</div>
						</div>
					</div>
				</div>
			</section>
				
			<section class="main-nav">
				<div class="in">
					<div class="main-nav__item main-nav__item1">
						<div class="main-nav__img"></div>
						<div><span>(1409)</span></div>
					</div>
					<div class="main-nav__item main-nav__item2">
						<div class="main-nav__img"></div>
						<div><span>(1409)</span></div>
					</div>
					<div class="main-nav__item main-nav__item3">
						<div class="main-nav__img"></div>
						<div><span>(1409)</span></div>
					</div>
					<div class="main-nav__item main-nav__item4">
						<div class="main-nav__img"></div>
						<div><span>(1409)</span></div>
					</div>
					<div class="main-nav__item main-nav__item5">
						<div class="main-nav__img"></div>
						<div><span>(1409)</span></div>
					</div>
					<div class="main-nav__item main-nav__item6">
						<div class="main-nav__img"></div>
						<div><span>(1409)</span></div>
					</div>
					<div class="main-nav__item main-nav__item7">
						<div class="main-nav__img"></div>
						<div><span>(1409)</span></div>
					</div>
					<div class="main-nav__item main-nav__item8">
						<div class="main-nav__img"></div>
						<div><span>(1409)</span></div>
					</div>
					<div class="main-nav__item main-nav__item9">
						<div class="main-nav__img"></div>
						<div><span>(1409)</span></div>
					</div>
					<div class="main-nav__item main-nav__item10">
						<div class="main-nav__img"></div>
						<div><span>(1409)</span></div>
					</div>
				</div>
			</section>
			
			<section class="lots">
				<div class="in">
					<div class="lot">
						<div class="lot__main flex">
							<div class="lot__main-info">
								<div class="lot__header flex">
									<div class="lot__bidding flex">
										<div class="lot__status lot__status-active"></div>
										<p>ТОРГИ №</p> 
										<img src="img/cipher.png" alt="">
									</div>
									<div class="lot__icons flex">
										<div class="icons">
											<img src="img/sports-car.png" alt="">
											<img src="img/house-icon.png" alt="">
											<img src="img/screwdriver.png" alt="">
										</div>
										<a href="#">Источник</a>
									</div>
									<div class="lot__number">
										ЛОТ № <span>3456</span>
									</div>
								</div>
								<div class="lot__info flex">
									<img src="img/img2.png" alt="">
									<div class="lot__text">
										<div class="lot__name flex">
											<div class="lot__name-width">
												Гудко Сергей Александрович
											</div>
											<div class="lot__check btn">Проверить</div>	
										</div>
										<div class="lot__address">
											<p>Имущество общества с ограниченной ответственностью</p>
											<p>«Вельская птицефабрика»:</p>
											<p>1 Железнодорожный тупик (ст. "Вага", в р-не ул. Заводская), инв. </p>
											<p>№ БТИ 09016279 литера А 0,357 км;</p>
											<p>2 Здание №20 склада кормов "Вага", 29-29-02/018/2010-425 А 444,6;</p>
										</div>
									</div>
								</div>
							</div>
							<div class="lot__stats">
								<div class="lot__stats-mainprice">
									<span>9 986 987,20</span>руб.
								</div>
								<div class="lot__stats-other">
									<div class="lot__stats-item">
										<p>Текущая цена</p>
										<div class="lot__stats-price lot__stats-price-red">
											<span>9 986 987,20</span> руб.
										</div>
									</div>
									<div class="lot__stats-item">
										<p>Минимальная цена</p>
										<div class="lot__stats-price lot__stats-price-green">
											<span>9 986 987,20</span> руб.
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="lot__footer flex">
							<div>
								<div class="lot__date">
									<p>Дата публикации: <span>03/09/2018 14:40</span></p>
									<p>Дата торгов: <span>с 03.09.2018 08:00 по 29.10.2018 17:00</span></p>
								</div>
							</div>
							<div class="flex">
								<div class="lot__func flex">
									<div class="lot__favorites flex">
										<div class="lot__favorites-img"></div>
										<div class="lot__favorites-text">
											Добавить <br>в избранное
										</div>
									</div>
									<div class="lot__delete flex">
										<div class="lot__delete-img"></div>
										<div class="lot__delete-text">
											Удалить <br>из списка
										</div>
									</div>
								</div>
								<div class="lot__more-btn btn">
									подробнее
								</div>
							</div>
						</div>
					</div>
					<!-- ---------next lot item----------- -->
					<div class="lot">
						<div class="lot__main flex">
							<div class="lot__main-info">
								<div class="lot__header flex">
									<div class="lot__bidding flex">
										<div class="lot__status"></div>
										<p>ТОРГИ №</p> 
										<img src="img/cipher.png" alt="">
									</div>
									<div class="lot__icons flex">
										<div class="icons">
											<img src="img/house-icon.png" alt="">
										</div>
										<a href="#">Источник</a>
									</div>
									<div class="lot__number">
										ЛОТ № <span>3456</span>
									</div>
								</div>
								<div class="lot__info flex">
									<img src="img/img3.png" alt="">
									<div class="lot__text">
										<div class="lot__name flex">
											<div class="lot__name-width">
												Гудко Сергей Александрович
											</div>
											<div class="lot__check btn">Проверить</div>	
										</div>
										<div class="lot__address">
												<ul>
													<li>Имущество общества с ограниченной ответственностью</li>
													<li>«Вельская птицефабрика»:</li>
													<li>1 Железнодорожный тупик (ст. "Вага", в р-не ул. Заводская), инв. </li>
													<li>№ БТИ 09016279 литера А 0,357 км;</li>
													<li>2 Здание №20 склада кормов "Вага", 29-29-02/018/2010-425 А 444,6;</li>
												</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="lot__stats">
								<div class="lot__stats-mainprice">
									<span>9 986 987,20</span>руб.
								</div>
								<div class="lot__stats-other">
									<div class="lot__stats-item">
										<p>Шаг аукциона</p>
										<div class="lot__stats-price lot__stats-price-red">
											<span>9 986 987,20</span> руб.
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="lot__footer flex">
							<div>
								<div class="lot__date">
									<p>Дата публикации: <span>03/09/2018 14:40</span></p>
									<p>Дата торгов: <span>с 03.09.2018 08:00 по 29.10.2018 17:00</span></p>
								</div>
							</div>
							<div class="flex">
								<div class="lot__func flex">
									<div class="lot__favorites flex">
										<div class="lot__favorites-img"></div>
										<div class="lot__favorites-text">
											Добавить <br>в избранное
										</div>
									</div>
									<div class="lot__delete flex">
										<div class="lot__delete-img"></div>
										<div class="lot__delete-text">
											Удалить <br>из списка
										</div>
									</div>
								</div>
								<div class="lot__more-btn btn">
									подробнее
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<section class="pagination flex">
				<div class="pagination__arrow pagination__arrow-prev"></div>
				<div class="pagination__items flex">
					<div class="pagination__item flex">1</div>
					<div class="pagination__item flex">2</div>
					<div class="pagination__item flex active">3</div>
					<div class="pagination__item flex">4</div>
				</div>
				<div class="pagination__arrow pagination__arrow-next active"></div>
			</section>
		</div>

	</section>

	<section class="footer">
		<div class="in">
			<div class="footer__flex flex">
				<div class="footer__soc">
					<img src="img/logo.png" alt="">
					<p>Наши соц.сети:</p>
					<div>
						<a href="#">
							<img src="img/vk.png" alt="">
						</a>
						<a href="#">
							<img src="img/twitter.png" alt="">
						</a>
						<a href="#">
							<img src="img/facebook.png" alt="">
						</a>
					</div>
				</div>
				<div class="footer__menu">
					<ul>
						<li><a href="#">О ПРОЕКТЕ</a></li>
						<li><a href="#">НОВОСТИ</a></li>
						<li><a href="#">ТАРИФЫ</a></li>
						<li><a href="#">КОНТАКТЫ</a></li>
					</ul>
				</div>
				<div class="footer__article">
					<ul>
						<li><a href="#">Ссылка на статью </a></li>
						<li><a href="#">Ссылка на статью </a></li>
						<li><a href="#">Ссылка на статью </a></li>
					</ul>
				</div>
				<div class="footer__pay">
					<p>Платёжные системы:</p>
					<div class="img">
						<img src="img/visa.png" alt="">
						<img src="img/mastercard.png" alt="">
					</div>
					<a href="#">Договор оферты</a>
				</div>
				<div class="footer__contacts">
					<div class="footer__contacts-item">
						<div>Телефон</div>
						<a href="tel:+375272343838">+375 (27) 234-38-38</a>
					</div>
					<div class="footer__contacts-item">
						<div>Почта</div>
						<a href="mailto:hhhhh@gmail.com">hhhhh@gmail.com</a>
					</div>
				</div>
			</div>
		</div>
		<div class="footer__bot">
			<div class="in flex">
				<div>Все права защищены © 2014 - 2018 Probankrot.ru</div>
				<div><a href="#">Политика конфенденциальности</a></div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/script.js"></script>  
	</body>
</html>
