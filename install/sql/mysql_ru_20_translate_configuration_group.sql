#
# * SQL Localization script - Translate configuration_group table
# * @package Installer
# * @access private
# * @copyright Copyright 2004-2009 Andrew Berezin eCommerce-Service.com
# * @copyright Copyright 2003-2009 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @Localization: Andrew Berezin  eCommerce-Service.com
# * @version $Id: mysql_20_translate_configuration_group.sql 1.3.8a 17.12.2007 11:05 AndrewBerezin $

UPDATE configuration_group SET configuration_group_title = 'Магазин', configuration_group_description = 'Основные настройки магазина' WHERE configuration_group_id = 1;
UPDATE configuration_group SET configuration_group_title = 'Минимальные значения', configuration_group_description = 'Минимальные значения функций и данных' WHERE configuration_group_id = 2;
UPDATE configuration_group SET configuration_group_title = 'Максимальные значения', configuration_group_description = 'Максимальные значения функций и данных' WHERE configuration_group_id = 3;
UPDATE configuration_group SET configuration_group_title = 'Картинки', configuration_group_description = 'Настройки картинок' WHERE configuration_group_id = 4;
UPDATE configuration_group SET configuration_group_title = 'Данные покупателя', configuration_group_description = 'Настройка формы регистрации' WHERE configuration_group_id = 5;
UPDATE configuration_group SET configuration_group_title = 'Установленные модули', configuration_group_description = 'Скрытые опции' WHERE  configuration_group_id = 6;
UPDATE configuration_group SET configuration_group_title = 'Доставка/Упаковка', configuration_group_description = 'Настройка опци доставки и упаковки' WHERE configuration_group_id = 7;
UPDATE configuration_group SET configuration_group_title = 'Вывод товара', configuration_group_description = 'Настройка вывода товара' WHERE configuration_group_id = 8;
UPDATE configuration_group SET configuration_group_title = 'Склад', configuration_group_description = 'Настройка склада' WHERE configuration_group_id = 9;
UPDATE configuration_group SET configuration_group_title = 'Логи', configuration_group_description = 'Настройка логов' WHERE configuration_group_id = 10;
UPDATE configuration_group SET configuration_group_title = 'Кэш', configuration_group_description = 'Настройка кэша' WHERE configuration_group_id = 11;
UPDATE configuration_group SET configuration_group_title = 'Настройка E-Mail', configuration_group_description = 'Настройка E-Mail' WHERE configuration_group_id = 12;
UPDATE configuration_group SET configuration_group_title = 'Скачивание', configuration_group_description = 'Настройка скачиваемых товаров' WHERE configuration_group_id = 13;
UPDATE configuration_group SET configuration_group_title = 'GZip Компрессия', configuration_group_description = 'Настройка GZip компрессии' WHERE configuration_group_id = 14;
UPDATE configuration_group SET configuration_group_title = 'Сессии', configuration_group_description = 'Session options' WHERE configuration_group_id = 15;
