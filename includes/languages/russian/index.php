<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2007 osCommerce

  Released under the GNU General Public License
*/

define('TEXT_MAIN', '<font color="#f0000"><b>' . PROJECT_VERSION . ' русская версия</b></font>.<br>Перевод - <b><a href=mailto:orders@kypi.ru><font color="blue">Александр Меновщиков</font></b></a><br>Мodified by <a href="http://www.eshop-master.com" target="_blank"><b>eShop-Master.com</b></a> и <a href="http://ecommerce-service.com" target="_blank"><b>eCommerce-Service.com</b></a>');
define('TABLE_HEADING_NEW_PRODUCTS', 'Новинки %s');
define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Ожидается');
define('TABLE_HEADING_DATE_EXPECTED', 'Дата поступления');
define('HEADING_TITLE', 'Добро пожаловать в ' . STORE_NAME);

define('TEXT_NO_PRODUCTS', 'Нет ни одного товара в этой категории.');
define('TEXT_NUMBER_OF_PRODUCTS', 'Количество товара: ');
define('TEXT_SHOW', '<b>Смотреть:</b>');
define('TEXT_BUY', 'Купить \'');
define('TEXT_NOW', '\' сейчас');
define('TEXT_ALL_CATEGORIES', 'Все категории');
define('TEXT_ALL_MANUFACTURERS', 'Все производители');

// seo
if ( ($category_depth == 'top') && (!isset($HTTP_GET_VARS['manufacturers_id'])) ) {
  define('META_SEO_TITLE', 'Заголовок главной страницы');
  define('META_SEO_DESCRIPTION', 'Мета-Описание главной страницы');
  /*
  keywords are USELESS unless you are selling into China and want to be listed in Baidu Search Engine
  */
  define('META_SEO_KEYWORDS', 'Мета-Ключевые главной страницы');
}