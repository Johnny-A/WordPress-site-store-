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
define('DB_NAME', 'wpsite.ru');

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
define('AUTH_KEY',         'M}N,=<S.g(3?UlKVo_yxAy2[D-!/mxQReQt:7+f~L>Z|:L>[ZKqrY]wkmNSW0vLB');
define('SECURE_AUTH_KEY',  '?{VFnb^dbH*%Ow1<%f]h_M,yFi9gB)*J/q[N,$)=, f!>ktfp6Lu%o 4%~8L-@dH');
define('LOGGED_IN_KEY',    '0s+Jr2=<TaFS 1JdiJolDao#Tl0JV+X Y6`1a[z4`@v$sSl4u.v@q_(rL?]V;!Fn');
define('NONCE_KEY',        '7+QfC>n4o@`OUql7 ^ >Rl:ejm B@TBy!pQttkfCCpcv+<g(L&CcU!Xv}2ZKkwy=');
define('AUTH_SALT',        'er-@-=vwuHdY6L]n)cz3H}%1G}r9r}vbqKT0p|&L }]hEa,A;jD|u[|;Qk$JR>9A');
define('SECURE_AUTH_SALT', '{zr>7VtQ7U/g^QTleQM1)_9z3 AkRSik0.5L623nNPW/S9fvN/1P%]k]}6`DYd6:');
define('LOGGED_IN_SALT',   'Zp^?+?Pr`eJwAgZu!q6tp}OcM9yKwjrpPnK2&)IiI+.t9Ag(pmX<7Hw2a)QQ U+3');
define('NONCE_SALT',       'Ik0P),Og_:.R<9B#BLy2S>U>% Im)Ll),@JyKczgX:@zHuB|+agzbl0GZ`?T^9|O');

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
