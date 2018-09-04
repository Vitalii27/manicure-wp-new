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
define('DB_NAME', 'manicure');

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
define('AUTH_KEY',         'eJGb_:+-xX<UvL;eMro+gilv(PEHZ.FSfk+Nin<!)0e%RN$U@vKyK-:Wsy;vXN< ');
define('SECURE_AUTH_KEY',  '*0`wf8C xh=`vS%L0uEp=[``$,+C<t3HWt++Jp9Qu1?&X@E<!R^%X3Qbg#^Vw<W#');
define('LOGGED_IN_KEY',    'VSN/=2SnjjP9<@&yp2D.9f*vI+H!j9ZE,3Y(eGGMf*U77|EV!p-_lWIDR@?(dOU,');
define('NONCE_KEY',        'UP~b <#|l>=,ji<ICSiEU7V3^(pUn!4rEB),,P[f^G1H&%ZxTI*[x_[pWh&L7;ZR');
define('AUTH_SALT',        'vl1H_<I6O6~_W/GaGG~V0 BokWgX?&Xuu]~)W;_@n^JcV3ib)Z8u|NB.oC{M7MrH');
define('SECURE_AUTH_SALT', 'L`0jTeegW[~SDf-O&Lx7&ag5KB2t6wTyaCsxr}8MiwY9.%fw.L|67Y{B36^4*fSw');
define('LOGGED_IN_SALT',   'serl} `nshHY?l+f-knT<c>XG bHG+4N$[ pX~8o3bVQ0SuZl3}Z|^[3y)L*p264');
define('NONCE_SALT',       '.&p3~v9UqLjd_olrgpo,y:eD1s[!C8Q*5R%#N)@*XFk(Z5h~cyBwb8IALpN (9T;');

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
