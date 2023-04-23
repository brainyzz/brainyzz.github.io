<footer class="footer">
  <div class="container">
    <menu class="footer__menu list-reset">
      <li class="menu__item item--logo">
        <img src="<?=get_template_directory_uri()?>/farro/app/img/logo.svg" alt="" class="contact__logo">
      </li>
      <?php
	wp_nav_menu( array(
		'theme_location' => 'menu-2',
		'menu_id'        => 'Подвал',
		'container' => false,
		'items_wrap' => '%3$s',
		'nav_menu_css_class' => 'menu__item',
		'link_class' => 'item__link',
	) );
			?>
      <!-- <li class="menu__item">
        <a href="" class="item__link">
          Услуги
        </a>
      </li>
      <li class="menu__item">
        <a href="" class="item__link">
          О нас
        </a>
      </li>
      <li class="menu__item">
        <a href="" class="item__link">
          Наши проекты
        </a>
      </li>
      <li class="menu__item">
        <a href="" class="item__link">
          Цены
        </a>
      </li>
      <li class="menu__item">
        <a href="" class="item__link">
          Статьи
        </a>
      </li>
      <li class="menu__item">
        <a href="" class="item__link">
          Отзывы
        </a>
      </li>
      <li class="menu__item">
        <a href="" class="item__link">
          Контакты
        </a>
      </li> -->
    </menu>
    <div class="footer__info">
      Исключение огнезащиты
      путем разработки
      расчета огнестойкости
    </div>
    <menu class="footer__service list-reset">
    <?php
	wp_nav_menu( array(
		'theme_location' => 'menu-3',
		'menu_id'        => 'Услуги',
		'container' => false,
		'items_wrap' => '%3$s',
		'nav_menu_css_class' => 'service__item',
		'link_class' => 'item__link',
	) );
			?>
      <!-- <li class="service__item"><a href="" class="item__link">Экспертиза, испытания, аудит</a></li>
      <li class="service__item"><a href="" class="item__link">Нормативно-техническая деятельность</a></li>
      <li class="service__item"><a href="" class="item__link">Расчетно-аналитическая деятельность</a></li>
      <li class="service__item"><a href="" class="item__link">Монтажные и наладочные работы</a></li>
      <li class="service__item"><a href="" class="item__link">Проектирование</a></li>
      <li class="service__item"><a href="" class="item__link">Сервисные услуги для действующих объектов</a></li> -->
    </menu>
    <div class="contact__wrapper">
      <address class="contact__address">
        г. Москва, Страстной бульвар, д. 4, стр. 1, офис 94
      </address>
      <a href="tel:8 (495) 877-46-72" class="contact__tel">8 (495) 877-46-72</a>
      <a href="mailto:help@farro01.ru" class="contact__email">help@farro01.ru</a>
    </div>
  </div>
</footer>
<div class="popup__bg">
  <form class="popup">
    <div class="close-popup"></div>
    <h2 class="popup__title">Связаться с нами</h2>
    <div class="popup__text">
      Оставьте заявку и мы с Вами свяжемся
    </div>
    <label>
      <div class="label__text">
        Ваше Имя
      </div>
      <input class="form__input" type="text" name="name">
    </label>
    <label>

      <div class="label__text">
        Ваш телефон
      </div>
      <input class="form__input input-tel" type="tel" name="tel">
    </label>
    <button class="btn" type="submit">Отправить</button>
  </form>
</div>

  </div>

<?php wp_footer(); ?>

</body>
</html>
