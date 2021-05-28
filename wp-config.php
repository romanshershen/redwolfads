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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'redwolfads' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'mysql' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'mysql' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'O{qh3h|.KLd3S&T}D.(HxAyIEv&_Y!U`3T,?@M{CzZv]1R~YiXtV^oL${Wh-;um%' );
define( 'SECURE_AUTH_KEY',  'p)1IAKnJm>nT<B>hI},d~&lh3n#p%U6A`{Y,}Q||B6>88!h9hm[3>vagWzauA=9{' );
define( 'LOGGED_IN_KEY',    'MoGQ;nDMayN+5]@VRGsXY`q)&_C1PX!D.>tX5AspJGNX&;G+oO6M6O6,+|CFH<$v' );
define( 'NONCE_KEY',        'zi[iMGv3pkI=&LtTKCGA9w^RTHKcF]G!~mU[A)w35{|pE| $A4 [ib|2aFpMdepU' );
define( 'AUTH_SALT',        'S%Kv)M@|kNuG0J+,:AK5eL:v6_*pLu{O6k[]tz[.N-#vFpzukbava?Pfq`XGq&*M' );
define( 'SECURE_AUTH_SALT', '!IuaN]3 +#r@$F2nuJ&avN-2aSV[? hlNJ&ymJcH|Ot/BT,9YV>ZSUY@Lm5o]ntV' );
define( 'LOGGED_IN_SALT',   'q1*(i)f&78)Q%b//;ui$pL6utqR#YFOYYqC#!RF)g)XG9wjB}hYT65kgQ>Gt{/N]' );
define( 'NONCE_SALT',       'GH+|(!`#zr~BL7IodWyg}DSICGo+<zBhf+C:IsMFcu_V<%dpJ= %e ^<Xo`S^x9O' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
