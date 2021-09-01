<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=admin.extrafields.first
[END_COT_EXT]
==================== */

/**
 * Menu Generator for Cotonti CMF
 *
 * @author esclkm, http://www.littledev.ru, Kalnov Alexey <kalnovalexey@yandex.ru>
 * @copyright (c) 2008-2011 esclkm http://www.littledev.ru, 2011-2021 Lily Software https://lily-software.com (ex. Portal30 Studio)
 */

defined('COT_CODE') or die('Wrong URL');

$extra_whitelist[$db_menugenerator] = array(
    'name' => $db_menugenerator,
    'caption' => cot::$L['Plugin'].' Menu Generator',
    'code' => 'menugenerator',
    'type' => 'plug',
    'help' => '',
);
