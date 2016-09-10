#
# * SQL Localization script - Add ru language and set it as default languages
# * @package Installer
# * @access private
# * @copyright Copyright 2004-2009 Andrew Berezin eCommerce-Service.com
# * @copyright Copyright 2003-2009 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @Localization: Andrew Berezin http://ecommerce-service.com
# * @version $Id: mysql_01_ru.sql 1.3.8a 17.12.2007 11:21 AndrewBerezin $

# Add Russian language
INSERT INTO languages VALUES (NULL,'Russian','ru','icon.gif','russian',1);
SET @languages_ru_id:=last_insert_id();
UPDATE languages SET sort_order=@languages_ru_id WHERE languages_id=1;
UPDATE configuration SET configuration_value='ru' WHERE configuration_key='DEFAULT_LANGUAGE';
UPDATE `configuration` SET `configuration_value`='176' WHERE `configuration_key`='STORE_COUNTRY';
