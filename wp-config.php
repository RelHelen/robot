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
define( 'DB_NAME', 'db_robot' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         ',E_O{>dsEC{4A~X#ner5kS=|NE=J>7(a^8GT%]V:gZ;M5D^KVfG!3$bNo=GMsLxc' );
define( 'SECURE_AUTH_KEY',  'DQ)ahzuGAZO&/:u2}y7w5^LeWx<Ky1a^R1oXNRI-V7YQmySV*nlpND_#ybIxao@ ' );
define( 'LOGGED_IN_KEY',    'Hk4p[27Z-1a*<Aom>+-^xwHh77}fK<D{@WGd`B}N4M=m9 )CVX6{]Zn^S~g%vzt}' );
define( 'NONCE_KEY',        '-y,>%ZrGpmTm[JKX=[aM07Ldp?g8JszU$c<#=!dy6HL]RijbVBDwY/+xvnh}tH3k' );
define( 'AUTH_SALT',        ';hRnEY%hZT,^o^WD $us;(u@;D{=e1+|Y&-2=7F&K/N*3!|69(Qt J#U^foRoN,v' );
define( 'SECURE_AUTH_SALT', 'X>TkExsM`8[oh$|YT(n}c7MX!L2)U08xj[97F~!1}YGsYa-eANE~8QJ$3Ja:BVr[' );
define( 'LOGGED_IN_SALT',   'A})$G@Hl$V9|c;g#,*481Lo8nD]|>U4 2aGSfJl1OI867J(OyrpO^S2?A4tH0sC`' );
define( 'NONCE_SALT',       'WTwxb{lcTp$>__YIY&$UPF41h wxSaa=#o|,5w2n89Yz)2={.#R<Xu?`W<GQK@y<' );

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
