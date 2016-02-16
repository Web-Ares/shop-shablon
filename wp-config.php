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
define('DB_NAME', 'stoliki_shop');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         't.u;jrr.~nZD4HNUZh`-_fxwJ2A0TYN-q-Yg4MtIBd4U~/9P|yWO6)g6>:;2} b+');
define('SECURE_AUTH_KEY',  '_ir;PfbcaD(a}<(o;Zr[AJ|!SG=2?[et3ZJ1jIuc:=~?1+Lo<o[k-qFKvU#z,DO+');
define('LOGGED_IN_KEY',    'zC/qmKVT@Oy(_QFk=--s*pLSc-^?WE$^6I PZP O;|jM2/{j1j_ibyQQ`iNpps1Y');
define('NONCE_KEY',        '.DM[X|%_JIuJf;}xxbmZRn2-N*-KRTo!S5n_r4/iN@1%xhEhe=+6ud:NOrNg57K$');
define('AUTH_SALT',        '{mRX~[<moe`(@PA>-dI&.fRF+pv+}r%56K|IMo6n,8/65Sdde;,s5B@/]Z/Dqyaw');
define('SECURE_AUTH_SALT', 'jcQ7J?Y%-{C&1Y+@h7cU2GcQP7F8he-s9FxCriNG+h+++8h/-b}udNA#gOk-0M#7');
define('LOGGED_IN_SALT',   'odF(cM0/dYsm?#* ]7jmYEm?sSXxF7lZ6`#<Eqs `yuaO0v(<zjYNa8pxwV(tGZ>');
define('NONCE_SALT',       'nfr2rl3`WR5x2>~hG%P~&ptKU`*/zH3B])fEoD^LXJ$vB-Pj+!m|C4|qeM(,XRO@');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'shop_';

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
