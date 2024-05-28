<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', '******************' );

/** Имя пользователя базы данных */
define( 'DB_USER', '******************' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '**********' );

/** Имя сервера базы данных */
define( 'DB_HOST', '********.mysql.tools' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'oH/p4.}dz/E_!cu<{!p[m3O+h|O1f#%p0F6J]JI.qfDG%%pK$|}6^U5x>pxWpgKt' );
define( 'SECURE_AUTH_KEY',  '0h$%Apk~v>4n[lt :=&/2oaEEG#R54W4X:yB[33[QgA`yF}kwz.Qv1Lb{U.=mAzJ' );
define( 'LOGGED_IN_KEY',    'k@b[6Tf4!:V8HJo)Q>o%+R{DmRivr)T&kzV3|3hS@ W Q:K{t!|}BKH0!-_/J%@r' );
define( 'NONCE_KEY',        '0E i;h34A7pa&aYR9vEXRpp)>{j]}L8ck)g=|@:d+mrSR;!u[?*B|<2y5sRg}MK%' );
define( 'AUTH_SALT',        'ZtytDfqV]QZ&3xJLHH@p;,/g tR3N12(BZjvB+hq*#_E=W3=>Wck4%FmJl=9Q@wH' );
define( 'SECURE_AUTH_SALT', '-Ihkr=ll_BtAj80!3dYc+vVN,&azI04$[Buw_apK4)6OxJE?E!maX)-{+SUvp&b|' );
define( 'LOGGED_IN_SALT',   '~dvv.bD@j}3,vO;q%r2<+Zf#~n]FNBQU>=HRA%?5fqpu@UA]P=&m8g]lBdfZIh<X' );
define( 'NONCE_SALT',       'jdP k!?Je02%e!u%?MWey9+wkM7mI+.Pr#}qfgTUO4Z6m<&IhAr*H7%ST`Qu=cRg' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
