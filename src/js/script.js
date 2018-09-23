$(document).ready(function() {
	/*Авторизованный пользователь выход*/
	$('.account__logout').click(function() {
		$('account2').hide()
		$('account1').show()
	})

	/*Попап регионов открыть*/
	$('.region-popup').click(function() {
		$('.popup-region').addClass('popup-show')
		$('body').addClass('body-popup')
	})
	/*Закрыть попапы*/
	$('.popup-wrapper,.popup-close').click(function(e) {
	  if (e.target !== this)
	  return;
	  $('.popup').removeClass('popup-show')
	  $('body').removeClass('body-popup')
	 });
	/*Попап площадок открыть*/
	$('.sales-area-popup').click(function() {
		$('.popup-sales-area').addClass('popup-show')
		$('body').addClass('body-popup')
	})
	/*Раскрыть подменю регионов в попапе (Адыгея, астраханская область и другие*/
	$('.popup__plus').click(function() {
		$(this).parents('.popup__item').children('.popup__in').toggle(200)
		$(this).toggleClass('popup__minus')
	})
	/*Убрать подменю если основная галочка убрана*/
	$('.popup__checkbox-main input').change(function() {
		if ($(this).prop('checked') == false){
			$(this).parents('.popup__item').find('.popup__in input').prop("checked", false)
		}
		else {
			$(this).parents('.popup__item').find('.popup__in input').prop("checked", true)
		}
	})
	/*Выбрать все*/
	$('.popup-region .popup__btn-choose').click(function() {
		$('.popup-region .popup__main input').prop("checked", true);
		$('.popup-region .popup__btn').removeClass('active')
		$(this).toggleClass('active')
	})
	$('.popup-sales-area .popup__btn-choose').click(function() {
		$('.popup-sales-area .popup__main input').prop("checked", true);
		$('.popup-sales-area .popup__btn').removeClass('active')
		$(this).toggleClass('active')
	})
	/*Убрать всё*/
	$('.popup-region .popup__btn-remove').click(function() {
		$('.popup-region .popup__main input').prop("checked", false);
		$('.popup-region .popup__btn').removeClass('active')
		$(this).toggleClass('active')
	})

	$('.popup-sales-area .popup__btn-remove').click(function() {
		$('.popup-sales-area .popup__main input').prop("checked", false);
		$('.popup-sales-area .popup__btn').removeClass('active')
		$(this).toggleClass('active')
	})
	/*Фильтр появление*/
	$('.filter__main').click(function() {
		$('.filter__main-img').toggleClass('active')
		$('.filter-nav').toggle(200)
	})
	/*Фильтр вкладки*/
	$('.filter-nav__menu1').click(function() {
		$('.filter-nav__content').removeClass('active')
		$('.filter-nav__content1').addClass('active')
		$('.filter-nav__menu').removeClass('active')
		$(this).addClass('active')
	})
	$('.filter-nav__menu2').click(function() {
		$('.filter-nav__content').removeClass('active')
		$('.filter-nav__content2').addClass('active')
		$('.filter-nav__menu').removeClass('active')
		$(this).addClass('active')
	})
	$('.filter-nav__menu3').click(function() {
		$('.filter-nav__content').removeClass('active')
		$('.filter-nav__content3').addClass('active')
		$('.filter-nav__menu').removeClass('active')
		$(this).addClass('active')
	})
	$('.filter-nav__menu4').click(function() {
		$('.filter-nav__content').removeClass('active')
		$('.filter-nav__content4').addClass('active')
		$('.filter-nav__menu').removeClass('active')
		$(this).addClass('active')
	})
	$('.filter-nav__menu5').click(function() {
		$('.filter-nav__content').removeClass('active')
		$('.filter-nav__content5').addClass('active')
		$('.filter-nav__menu').removeClass('active')
		$(this).addClass('active')
	})
})