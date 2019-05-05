<?php
/**
 * Entry point script:
 *
 * @category YupeScript
 * @package  YupeCMS
 * @author   Yupe Team <team@yupe.ru>
 * @license  https://github.com/yupe/yupe/blob/master/LICENSE BSD
 * @link     http://yupe.ru
 **/

/**
 * @link    http://www.yiiframework.ru/doc/guide/ru/basics.entry
 */

if (!ini_get('date.timezone')) {
    date_default_timezone_set('Europe/Moscow');
}

// Setting internal encoding to UTF-8.
if (!ini_get('mbstring.internal_encoding')) {
    @ini_set("mbstring.internal_encoding", 'UTF-8');
    mb_internal_encoding('UTF-8');
}

define('DB_PATH', __DIR__ . '/../config/db.php');
define('MAIL_SETTINGS', __DIR__ . '/../config/mail.php');
define('EXCHANGER_SETTINGS', __DIR__ . '/../config/placeholder.php');

// Comment next two lines on production
define('YII_DEBUG', true);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);

require __DIR__ . '/../base/vendor/yiisoft/yii/framework/yii.php';

$base = require __DIR__ . '/../base/protected/config/main.php';

$confManager = new yupe\components\ConfigManager();
$confManager->sentEnv(\yupe\components\ConfigManager::ENV_WEB);

require __DIR__ . '/../base/vendor/autoload.php';

Yii::createWebApplication($confManager->merge($base))->run();
