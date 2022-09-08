<?php

define('KRATOS_VERSION','0.4.4');
if ( ! function_exists( 'get_cravatar_url' ) ) {
    /**
     *替换Gravatar头像为Cravatar头像
     * @param string $url
     * @return string
     */
    function get_cravatar_url( $url ) {
        $sources = array(
            'www.gravatar.com',
            '0.gravatar.com',
            '1.gravatar.com',
            '2.gravatar.com',
            'secure.gravatar.com',
            'cn.gravatar.com'
        );
        return str_replace( $sources, 'cravatar.cn', $url );
    }
    add_filter( 'um_user_avatar_url_filter', 'get_cravatar_url', 1 );
    add_filter( 'bp_gravatar_url', 'get_cravatar_url', 1 );
    add_filter( 'get_avatar_url', 'get_cravatar_url', 1 );
}
require_once(get_template_directory().'/inc/core.php');
require_once(get_template_directory().'/inc/shortcode.php');
require_once(get_template_directory().'/inc/imgcfg.php');
require_once(get_template_directory().'/inc/post.php');
require_once(get_template_directory().'/inc/ua.php');
require_once(get_template_directory().'/inc/widgets.php');
require_once(get_template_directory().'/inc/smtp.php');
require_once(get_template_directory().'/inc/logincfg.php');
require_once(get_template_directory().'/inc/avatars.php');