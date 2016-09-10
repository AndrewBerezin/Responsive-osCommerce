<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2013 osCommerce

  Released under the GNU General Public License
*/

// look in your $PATH_LOCALE/locale directory for available locales
// or type locale -a on the server.
// Array examples which should work on all servers:
// 'en_US.UTF-8', 'en_US.UTF8', 'enu_usa'
// 'en_GB.UTF-8', 'en_GB.UTF8', 'eng_gb'
// 'en_AU.UTF-8', 'en_AU.UTF8', 'ena_au'
@setlocale(LC_TIME, 'ru_RU.UTF-8');

define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd/m/Y'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('JQUERY_DATEPICKER_I18N_CODE', 'ru'); // leave empty for en_US; see http://jqueryui.com/demos/datepicker/#localization
define('JQUERY_DATEPICKER_FORMAT', 'dd/mm/yy'); // see http://docs.jquery.com/UI/Datepicker/formatDate

////
// Return date in raw format
// $date should be in format dd/mm/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function tep_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
  }
}

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the applications default currency (used when changing language)
define('LANGUAGE_CURRENCY', 'RUR');

// Global entries for the <html> tag
define('HTML_PARAMS', 'dir="ltr" lang="ru"');

// charset for web pages and emails
define('CHARSET', 'UTF-8');
mb_internal_encoding('UTF-8');

// page title
define('TITLE', STORE_NAME);

// text in includes/modules/downloads.php
define('HEADER_TITLE_MY_ACCOUNT', 'Мои данные');

// text in includes/application_top.php
define('HEADER_TITLE_TOP', '<i class="fa fa-home"><span class="sr-only">Магазин</span></i>');
define('HEADER_TITLE_CATALOG', 'Каталог');

// text for gender
define('MALE', 'М<span class="hidden-xs">ужской</span>');
define('FEMALE', 'Ж<span class="hidden-xs">енский</span>');

// checkout procedure text
define('CHECKOUT_BAR_DELIVERY', 'Адрес доставки');
define('CHECKOUT_BAR_PAYMENT', 'Способ оплаты');
define('CHECKOUT_BAR_CONFIRMATION', 'Подтверждение');

// pull down default text
define('PULL_DOWN_DEFAULT', 'Выберите');

// javascript messages
define('JS_ERROR', 'Ошибки при заполнении формы!\n\nИсправьте пожалуйста:\n\n');

define('JS_REVIEW_TEXT', '* Поле \'Текст отзыва\' должно содержать не менее ' . REVIEW_TEXT_MIN_LENGTH . ' символов.\n');
define('JS_REVIEW_RATING', '* Оцените, пожалуйста, продукт по пятибальной шкале.\n');

define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* Выберите метод оплаты для Вашего заказа.\n');

define('ERROR_NO_PAYMENT_MODULE_SELECTED', 'Выберите, пожалуйста, метод оплаты для Вашего заказа.');

define('ENTRY_COMPANY', 'Название компании:');
define('ENTRY_COMPANY_TEXT', '');
define('ENTRY_GENDER', 'Пол:');
define('ENTRY_GENDER_ERROR', 'Вы должны указать свой пол.');
define('ENTRY_GENDER_TEXT', '*');
define('ENTRY_FIRST_NAME', 'Имя:');
define('ENTRY_FIRST_NAME_ERROR', 'Поле Имя должно содержать как минимум ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' символа.');
define('ENTRY_FIRST_NAME_TEXT', '*');
define('ENTRY_LAST_NAME', 'Фамилия:');
define('ENTRY_LAST_NAME_ERROR', 'Поле Фамилия должно содержать как минимум ' . ENTRY_LAST_NAME_MIN_LENGTH . ' символа.');
define('ENTRY_LAST_NAME_TEXT', '*');
define('ENTRY_DATE_OF_BIRTH', 'Дата рождения:');
define('ENTRY_DATE_OF_BIRTH_ERROR', 'Дату рождения необходимо вводить в следующем формате: MM/DD/YYYY (пример 05/21/1970)');
define('ENTRY_DATE_OF_BIRTH_TEXT', '* (пример 05/21/1970)');
define('ENTRY_EMAIL_ADDRESS', 'E-Mail:');
define('ENTRY_EMAIL_ADDRESS_ERROR', 'Поле E-Mail должно содержать как минимум ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' символов.');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'Ваш E-Mail адрес указан неправильно, попробуйте ещё раз.');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'Введённый Вами E-Mail уже зарегистрирован в нашем магазине, попробуйте указать другой E-Mail адрес.');
define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
define('ENTRY_STREET_ADDRESS', 'Улица и номер дома:');
define('ENTRY_STREET_ADDRESS_ERROR', 'Поле Улица и номер дома должно содержать как минимум ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' символов.');
define('ENTRY_STREET_ADDRESS_TEXT', '*');
define('ENTRY_SUBURB', 'Дополнительный адрес:');
define('ENTRY_SUBURB_TEXT', '');
define('ENTRY_POST_CODE', 'Почтовый индекс:');
define('ENTRY_POST_CODE_ERROR', 'Поле Почтовый индекс должно содержать как минимум ' . ENTRY_POSTCODE_MIN_LENGTH . ' символа.');
define('ENTRY_POST_CODE_TEXT', '*');
define('ENTRY_CITY', 'Город:');
define('ENTRY_CITY_ERROR', 'Поле Город должно содержать как минимум ' . ENTRY_CITY_MIN_LENGTH . ' символа.');
define('ENTRY_CITY_TEXT', '*');
define('ENTRY_NAME_TEXT', '');
define('ENTRY_STATE', 'Регион:');
define('ENTRY_STATE_ERROR', 'Поле Регион должно содержать как минимум ' . ENTRY_STATE_MIN_LENGTH . ' символа.');
define('ENTRY_STATE_ERROR_SELECT', 'Выберите Регион');
define('ENTRY_STATE_TEXT', '*');
define('ENTRY_COUNTRY', 'Страна:');
define('ENTRY_COUNTRY_ERROR', 'Выберите страну');
define('ENTRY_COUNTRY_TEXT', '*');
define('ENTRY_TELEPHONE_NUMBER', 'Телефон:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', 'Поле Телефон должно содержать как минимум ' . ENTRY_TELEPHONE_MIN_LENGTH . ' символа.');
define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
define('ENTRY_FAX_NUMBER', 'Факс:');
define('ENTRY_FAX_NUMBER_TEXT', '');
define('ENTRY_NEWSLETTER', 'Новости магазина:');
define('ENTRY_NEWSLETTER_TEXT', '');
define('ENTRY_NEWSLETTER_YES', 'Подписаться');
define('ENTRY_NEWSLETTER_NO', 'Отказаться от подписки');
define('ENTRY_PASSWORD', 'Пароль:');
define('ENTRY_PASSWORD_ERROR', 'Ваш пароль должен содержать как минимум ' . ENTRY_PASSWORD_MIN_LENGTH . ' символов.');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'Поле Подтвердите пароль должно совпадать с полем Пароль.');
define('ENTRY_PASSWORD_TEXT', '*');
define('ENTRY_PASSWORD_CONFIRMATION', 'Подтвердите пароль:');
define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT', 'Текущий пароль:');
define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT_ERROR', 'Поле Пароль должно содержать как минимум ' . ENTRY_PASSWORD_MIN_LENGTH . ' символов.');
define('ENTRY_PASSWORD_NEW', 'Новый пароль:');
define('ENTRY_PASSWORD_NEW_TEXT', '*');
define('ENTRY_PASSWORD_NEW_ERROR', 'Ваш Новый пароль должен содержать как минимум ' . ENTRY_PASSWORD_MIN_LENGTH . ' символов.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'Поля Подтвердите пароль и Новый пароль должны совпадать.');
define('PASSWORD_HIDDEN', '--СКРЫТ--');

define('FORM_REQUIRED_INFORMATION', '* Обязательно для заполнения');

// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', 'Страницы:');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Показано <strong>%d</strong> - <strong>%d</strong> (всего <strong>%d</strong> позиций)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Показано <strong>%d</strong> - <strong>%d</strong> (всего <strong>%d</strong> отзывов)');

define('PREVNEXT_TITLE_FIRST_PAGE', 'Первая страница');
define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'предыдущая');
define('PREVNEXT_TITLE_NEXT_PAGE', 'Следующая страница');
define('PREVNEXT_TITLE_LAST_PAGE', 'Последняя страница');
define('PREVNEXT_TITLE_PAGE_NO', 'Страница %d');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Предыдущие %d страниц');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Следующие %d страниц');
define('PREVNEXT_BUTTON_FIRST', 'ПЕРВАЯ');
define('PREVNEXT_BUTTON_PREV', 'Предыдущая');
define('PREVNEXT_BUTTON_NEXT', 'Следующая');
define('PREVNEXT_BUTTON_LAST', 'ПОСЛЕДНЯЯ');

define('IMAGE_BUTTON_ADD_ADDRESS', 'Добавить адрес');
define('IMAGE_BUTTON_BACK', 'Назад');
define('IMAGE_BUTTON_BUY_NOW', 'Купить сейчас');
define('IMAGE_BUTTON_CHANGE_ADDRESS', 'Изменить адрес');
define('IMAGE_BUTTON_CHECKOUT', 'Оформить заказ');
define('IMAGE_BUTTON_CONFIRM_ORDER', 'Подтвердить Заказ');
define('IMAGE_BUTTON_CONTINUE', 'Продолжить');
define('IMAGE_BUTTON_DELETE', 'Удалить');
define('IMAGE_BUTTON_LOGIN', 'Войти');
define('IMAGE_BUTTON_IN_CART', 'Добавить в Корзину');
define('IMAGE_BUTTON_REVIEWS', 'Отзывы');
define('IMAGE_BUTTON_SEARCH', 'Искать');
define('IMAGE_BUTTON_UPDATE', 'Обновить');
define('IMAGE_BUTTON_WRITE_REVIEW', 'Написать отзыв');

define('SMALL_IMAGE_BUTTON_DELETE', 'Удалить');
define('SMALL_IMAGE_BUTTON_EDIT', 'Изменить');
define('SMALL_IMAGE_BUTTON_VIEW', 'Смотреть');
define('SMALL_IMAGE_BUTTON_BUY', 'Купить');

define('ICON_ARROW_RIGHT', 'Перейти');

define('TEXT_SORT_PRODUCTS', 'Сортировка товаров ');
define('TEXT_DESCENDINGLY', 'по убыванию');
define('TEXT_ASCENDINGLY', 'по возрастанию');
define('TEXT_BY', ' по ');

define('TEXT_NO_REVIEWS', 'К настоящему времени нет отзывов, Вы можете стать первым.');

define('TEXT_UNKNOWN_TAX_RATE', 'Налоговая ставка неизвестна');

define('TEXT_CCVAL_ERROR_INVALID_DATE', 'Вы указали неверную дату истечения срока действия кредитной карточки.<br>Попробуйте ещё раз.');
define('TEXT_CCVAL_ERROR_INVALID_NUMBER', 'Вы указали неверный номер кредитной карточки.<br>Попробуйте ещё раз.');
define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', 'Первые цифры Вашей кредитной карточки: %s<br>Если Вы указали номер своей кредитной карточки правильно, сообщаем Вам, что мы не принимаем к оплате данный тип кредитных карточек.<br>Если Вы указали номер кредитной карточки неверно, попробуйте ещё раз.');

// category views
define('TEXT_VIEW', 'Вид: ');
define('TEXT_VIEW_LIST', ' Списком');
define('TEXT_VIEW_GRID', ' Плиткой');

// search placeholder
define('TEXT_SEARCH_PLACEHOLDER','Искать');

// message for required inputs
define('FORM_REQUIRED_INFORMATION', '<span class="fa fa-asterisk inputRequirement"></span> Обязательная информация');
define('FORM_REQUIRED_INPUT', '<span><span class="fa fa-asterisk form-control-feedback inputRequirement"></span></span>');

// reviews
define('REVIEWS_TEXT_RATED', 'Голосовало %s <cite title="%s" itemprop="author">%s</cite>');
define('REVIEWS_TEXT_AVERAGE', 'Средняя оценка на основе <span itemprop="ratingCount">%s</span> отзывов %s');
define('REVIEWS_TEXT_TITLE', 'Что говорят покупатели...');

// grid/list
define('TEXT_SORT_BY', 'Сортировать по ');
// moved from index
define('TABLE_HEADING_IMAGE', '');
define('TABLE_HEADING_MODEL', 'Модели');
define('TABLE_HEADING_PRODUCTS', 'Наименованию');
define('TABLE_HEADING_MANUFACTURER', 'Производителю');
define('TABLE_HEADING_QUANTITY', 'Количеству');
define('TABLE_HEADING_PRICE', 'Цене');
define('TABLE_HEADING_WEIGHT', 'Весу');
define('TABLE_HEADING_BUY_NOW', 'Купить');
define('TABLE_HEADING_LATEST_ADDED', 'Последние добавленные товары');

// product notifications
define('PRODUCT_SUBSCRIBED', '%s добавлен в список Оповещений');
define('PRODUCT_UNSUBSCRIBED', '%s удалён из списка Оповещений');
define('PRODUCT_ADDED', '%s добавлен в корзину');
define('PRODUCT_REMOVED', '%s удалён из корзины');

// bootstrap helper
define('MODULE_CONTENT_BOOTSTRAP_ROW_DESCRIPTION', '');
