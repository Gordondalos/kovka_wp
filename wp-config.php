<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'kovka');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '_`ihH:Pj|s|:kt,2-51J.VD;k~WfIb/V3eEuWXdt1Xblr#O#qp62sJ`y*ItecogZ');
define('SECURE_AUTH_KEY',  '(P@RDw6i*7P&KcJrA=;F2Bb*??Yklvk0d2DzL|.VpRrv;&P$S_*.au+|VM1e|s^g');
define('LOGGED_IN_KEY',    '1I^o]iMv9 QE-|vi?n=_!&T{ |fq4c+*rtE=5(qBBsET5(5 :Ha@YS, af`FcYP3');
define('NONCE_KEY',        '@P<=e+bicEYvVrOU8vn2*OGM-.-]#lE[5WUlW6.SVA-.T[|};0Fh5x`VbOi-TL[+');
define('AUTH_SALT',        '}tdSQ,VpetK%+n^=&|(O?jNIqSxnv(kd{Tnxtvu!ew2u5,d)4.LHbu(1sx{Uyu<h');
define('SECURE_AUTH_SALT', 'nSNL!+Ue#&jzAUa?X6`R;v-0 >}#g|Y-~4VUc|%piI EQK#~92$cYkND&jr3r)g.');
define('LOGGED_IN_SALT',   'JvN$S1]VZJ)ek`aT`j;nVC]TzeY>bNmFwt#7S5ZH(yjtKl&5KG[479[cmn 8IC?:');
define('NONCE_SALT',       '7#a$!rkHH:|Vy+z!,a k?Z=4>iz+X:LCKT/vw;~)S~d=m-15m/k.O SU[nKY7[$!');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
