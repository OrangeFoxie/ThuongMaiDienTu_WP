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
define( 'DB_NAME', 'db_thuongmaidientu' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '<J(b=N;Rl,2l[Ir:m>g&8&=.4v$lI38Wp([jaWHo<Vf8j8A8Zw[JV_tawwS]1P[H' );
define( 'SECURE_AUTH_KEY',  '?EGRN=FZz:9 ?@qg<(H9e&jU2@Enca#t3{j5]PNQ|lk`f!sR&n<F^Dw:nIZW!eI-' );
define( 'LOGGED_IN_KEY',    '$I>;f.i96+*JEc]{a3|,N8LBAvCG`vgpsbmL*J<,21iV4qrYs,W*M0$#p+!I&F{4' );
define( 'NONCE_KEY',        'Do,DH{?z/-[xHqH#O`9zU}HU5>id!m2_85T,P@RI`uBrV84=QpI+1fLcdx0~/Qh@' );
define( 'AUTH_SALT',        'YZH@Z2+F3;v9^M|L>-cQS+Ly?X<8ayK*NE6SEI#hD0CY/rs}^j<L@ TS6~9L4!q!' );
define( 'SECURE_AUTH_SALT', 'B }Z3}}Adm(&e#qhg4,tCe:$Z,(Z6L>q(9nD0S|>-SFHHT-{I;l~,0%=8UzwT%e%' );
define( 'LOGGED_IN_SALT',   'V6#Phe1qr_ao_jY#OUv8a0,pQxU|3bQ>.Knftl,i{0xcyJ5RwPt7Qj6-=NDc!B2{' );
define( 'NONCE_SALT',       'z3[Q<Te?2Py}zAo_>A.rG6OvK7~ki<vbhIpp*yeB&lbtG93LJz4qLIzAY@]`,aQ8' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'db_';

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
