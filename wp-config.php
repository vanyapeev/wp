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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         ':HP#&2={y%oeLbd(gE!cZg.#xHPK/>3C$FK:pzA`<rjk@SHR{]H/oVp4LchbJ:}!');
define('SECURE_AUTH_KEY',  'Fn+p4C@aCDxzhzVY[b)aIw0WJj/fe[iADi:*X-Le/{xs2%Gl1zSIM>*<}J2uT5u]');
define('LOGGED_IN_KEY',    '6~zccr@Xf{HqDXCW&HhV]Hn1INO1`%fVlQtVdWupKK1>k+IL9A[7B1HA&.e~xwx3');
define('NONCE_KEY',        '%/28TeGofmW?sgY=J3~=1ETCD33da,Hr-<<vRk<QXb|1&=3r@^__X:kP}Rl(3jh=');
define('AUTH_SALT',        'W=RgUf;fZT&,9.jy$u%vbU|+#aN.|XvW<ad1_F~gs;Y*2(w~ryp)yQ4=uUUTV0*1');
define('SECURE_AUTH_SALT', '!#yhul%I]>?Mdfu@Rah8VyTzbF_qZ7}[3|N#0=;2Qhe}n|?)MBdXc6,,^s8pi+&N');
define('LOGGED_IN_SALT',   'ODcE(YMa$5dSC($4Wi LJ_LF+5k-7UTI^7$HaBdmnG2~uIP8-YzY;t:fE*#-W9lo');
define('NONCE_SALT',       'H$o~_P^c)t%b-j0f]mk+b-Ek,ajf6khK_?jW.~#j 8a0.HAoO|rc8:}yEMT8G6c>');

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
