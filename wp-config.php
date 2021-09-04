<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'epiz_29466718_lovelypages' );

/** Username của database */
define( 'DB_USER', 'epiz_29466718' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', 'iyjOjpKLmwsVRi' );

/** Hostname của database */
define( 'DB_HOST', 'sql300.epizy.com' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'aM(XJK^aG-s?Osic?f;S?neYCV)7!x5L1,M,_t4Hvy]l4pVUn4P:4Km?Fq Ex_mb' );
define( 'SECURE_AUTH_KEY',  'hGQN,F;PN6*Znkp2|XwmU~R2&PS*L9&[4pR0ZOo,4Nb?QYR2Tbc85v0:%B-m6psd' );
define( 'LOGGED_IN_KEY',    ';i({zJj|/e! i7*rg]:N^KYZcPBAei~VE#7u>*%DQ!$><_cC; 8L 2{!m;kcH_6E' );
define( 'NONCE_KEY',        ',pfPzUH}6vq%pfy$|&xbLmC(6d8EF.:ve8Vp@5J7BNT=bwG+C@L/0LzaOmZHyUi`' );
define( 'AUTH_SALT',        ',0Insw2iM#hl_QX>Us2=&R+oy%OF2g2&=urM|;3IDItAZ#H%EiF4vLLqf;ciCKxu' );
define( 'SECURE_AUTH_SALT', '6Yl~ N#n$qlx39.X=v)Fxpk=Z`BsbKt^<2+COZSb[0N_P[:I(EJEw07h###Q.pLE' );
define( 'LOGGED_IN_SALT',   '&Ad^7}?ZT]jBfy7w=ZF{Z);>9mkh!W5j0ecJzrO:X-lT!Uew@h2|yHU$BsZAvyjI' );
define( 'NONCE_SALT',       'NPex.(OUk:S|qZ[^i=PVE:AgcW{/|(D!r:lXNx]>^#~>/Y|%5)Yp`fM=[gH*,?R5' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'tb_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
