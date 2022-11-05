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
define('DB_NAME', 'toaster_t16aerob');

/** Имя пользователя MySQL */
define('DB_USER', 'toaster_t16aerob');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'a48d1347f');

/** Имя сервера MySQL */
define('DB_HOST', 'sqlnew.101bot.ru');

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
define('AUTH_KEY',         ';aLoCSZzk]&LOrB<U9ac5+ofx4;G^5h?Ovuvq;`VJl3L/qrJmpB_})A`8}%azMAe');
define('SECURE_AUTH_KEY',  '{Y}*]2#Ily7B|@+Y-b*I^Y&%;k=Z<Ujwjx|ZCQ?L7_Zkw+R-yf4deXeu6m*[n`jT');
define('LOGGED_IN_KEY',    '){n01ojbv&hsT )jKkpCAo{Im70FB&/kjg9h@rkiCO&nP/6.V|3,M]g[ks4.HH&v');
define('NONCE_KEY',        'b049,UuOv/SaGl_9(XFMYxbF(j&QWi4iu +sw7eO@M[xJVChCo6LjV=M{R6b;4NG');
define('AUTH_SALT',        'o%iWX#r0GD%<5ZxX*n%[%}hgKAk)2O=Xg4-M<T9v4L<ny(B%PH@AX7aI$)/:*Obw');
define('SECURE_AUTH_SALT', '(irRy)B/x>-$cIe-^AR^$d[ c2Tx,ZBIoKDfW32$3 bmm<,W_ixn>ZahVwM>p.}0');
define('LOGGED_IN_SALT',   'DBb4Y2l@,T;q7 jmFVqc+Br[o,gI!*beD9pVvr@_=*8n<11_ XyUk+hfg=pxnei{');
define('NONCE_SALT',       'y(C}{V*^LAwaETZo`W8.(~Tt1) :o94AHU11lG}*j}$$4Q3F%)bg% ?bvXboaKB|');

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

//define( 'WP_CONTENT_URL', '/assets' );
define( 'WP_DEFAULT_THEME', 'ma' );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
