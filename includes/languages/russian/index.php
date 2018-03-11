<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2007 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Добро пожаловать в ' . STORE_NAME);

define('TABLE_HEADING_NEW_PRODUCTS', 'Новинки %s');

define('TEXT_NO_PRODUCTS', 'Нет ни одного товара в этой категории.');
define('TEXT_NUMBER_OF_PRODUCTS', 'Количество товара: ');
define('TEXT_SHOW', '<b>Смотреть:</b>');
define('TEXT_BUY', 'Купить \'');
define('TEXT_NOW', '\' сейчас');
define('TEXT_ALL_CATEGORIES', 'Все категории');
define('TEXT_ALL_MANUFACTURERS', 'Все производители');

// seo
if ( ($category_depth == 'top') && (!isset($_GET['manufacturers_id'])) ) {
  define('META_SEO_TITLE', 'Заголовок главной страницы');
  define('META_SEO_DESCRIPTION', 'Мета-Описание главной страницы');
  /*
  keywords are USELESS unless you are selling into China and want to be listed in Baidu Search Engine
  */
  define('META_SEO_KEYWORDS', 'Мета-Ключевые главной страницы');
}