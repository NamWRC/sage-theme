<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use App\Services\Queries;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        $title = "";
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            $title = get_the_archive_title();
        }
        if (is_search()) {
            $title = sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            $title = __('Not Found', 'sage');
        }
        if (empty($title)) {
            $title = get_the_title();
        }
        return $title;
    }

    public static function getLogo()
    {
        $logo = get_field('ns_header_logo', ACF_OPTION);
        $url = ($logo && $logo['url']) ? $logo['url'] : TEMPLATE_ASSETS_URL . '/images/logo.svg';
        $alt = ($logo && $logo['alt']) ? $logo['alt'] : 'logo';
        $href = home_url();
        return compact('url', 'alt', 'href');
    }

    public static function getLastSvg()
    {
        $last = get_field('ns_header_last', ACF_OPTION);
        $url = ($last && $last['url']) ? $last['url'] : TEMPLATE_ASSETS_URL . '/images/last/logo.svg';
        $alt = ($last && $last['alt']) ? $last['alt'] : 'last';
        return compact('url', 'alt');
    }

    public static function getBanner()
    {
        $banner = get_field('ns_header_banner', ACF_OPTION);
        $url = ($banner && $banner['url']) ? $banner['url'] : TEMPLATE_ASSETS_URL . '/images/banner/banner.png';
        $alt = ($banner && $banner['alt']) ? $banner['alt'] : 'banner';
        $href = home_url();
        return compact('url', 'alt', 'href');
    }

    public static function getIcon()
    {
        $icon = get_field('ns_header_icon', ACF_OPTION);
        $machine = ($icon && $icon['machine']) ? $icon['machine'] : TEMPLATE_ASSETS_URL . '/images/icon/machine.svg';
        $box = ($icon && $icon['box']) ? $icon['box'] : TEMPLATE_ASSETS_URL . '/images/icon/box.svg';
        $house = ($icon && $icon['house']) ? $icon['house'] : TEMPLATE_ASSETS_URL . '/images/icon/house.svg';
        $dotarrow = ($icon && $icon['dotarrow']) ? $icon['dotarrow'] : TEMPLATE_ASSETS_URL . '/images/icon/dotarrow.svg';
        $alt = ($icon && $icon['alt']) ? $icon['alt'] : 'icon';
        return compact('machine', 'box', 'house', 'dotarrow', 'alt');
    }

    public static function getBgBanner()
    {
        $bgbanner = get_field('ns_header_bgbanner', ACF_OPTION);
        $url = ($bgbanner && $bgbanner['url']) ? $bgbanner['url'] : TEMPLATE_ASSETS_URL . '/images/banner/bgbanner.png';
        $alt = ($bgbanner && $bgbanner['alt']) ? $bgbanner['alt'] : 'bgbanner';
        $href = home_url();
        return compact('url', 'alt', 'href');
    }

    public static function getItemBanner()
    {
        $itemBanner = get_field('ns_header_itemBanner', ACF_OPTION);
        $url = ($itemBanner && $itemBanner['url']) ? $itemBanner['url'] : TEMPLATE_ASSETS_URL . '/images/last/itembanner.png';
        $alt = ($itemBanner && $itemBanner['alt']) ? $itemBanner['alt'] : 'itemBanner';
        $href = home_url();
        return compact('url', 'alt', 'href');
    }

    public static function getIlu()
    {
        $ilu = get_field('ns_header_ilu', ACF_OPTION);
        $url = ($ilu && $ilu['url']) ? $ilu['url'] : TEMPLATE_ASSETS_URL . '/images/ilu/ilu.png';
        $alt = ($ilu && $ilu['alt']) ? $ilu['alt'] : 'ilu';
        $href = home_url();
        return compact('url', 'alt', 'href');
    }

    public static function getCerti()
    {
        $certi = get_field('ns_header_certi', ACF_OPTION);
        $aperity = ($certi && $certi['aperity']) ? $certi['aperity'] : TEMPLATE_ASSETS_URL . '/images/certi/aperity.png';
        $cba = ($certi && $certi['cba']) ? $certi['cba'] : TEMPLATE_ASSETS_URL . '/images/certi/cba.png';
        $moder = ($certi && $certi['moder']) ? $certi['moder'] : TEMPLATE_ASSETS_URL . '/images/certi/moder.png';
        $porvi = ($certi && $certi['porvi']) ? $certi['porvi'] : TEMPLATE_ASSETS_URL . '/images/certi/porvi.png';
        $salsify = ($certi && $certi['salsify']) ? $certi['salsify'] : TEMPLATE_ASSETS_URL . '/images/certi/salsify.png';
        $untappd = ($certi && $certi['untappd']) ? $certi['untappd'] : TEMPLATE_ASSETS_URL . '/images/certi/untappd.png';
        $alt = ($certi && $certi['alt']) ? $certi['alt'] : 'certi';
        return compact('aperity', 'cba', 'moder', 'porvi', 'salsify', 'untappd', 'alt');
    }

    public static function getTrust()
    {
        $trust = get_field('ns_header_trust', ACF_OPTION);
        $tt = ($trust && $trust['tt']) ? $trust['tt'] : TEMPLATE_ASSETS_URL . '/images/trust/2t.png';
        $ab = ($trust && $trust['ab']) ? $trust['ab'] : TEMPLATE_ASSETS_URL . '/images/trust/ab.png';
        $apb = ($trust && $trust['apb']) ? $trust['apb'] : TEMPLATE_ASSETS_URL . '/images/trust/apb.png';
        $er = ($trust && $trust['er']) ? $trust['er'] : TEMPLATE_ASSETS_URL . '/images/trust/er.png';
        $fs = ($trust && $trust['fs']) ? $trust['fs'] : TEMPLATE_ASSETS_URL . '/images/trust/fs.png';
        $wp = ($trust && $trust['wp']) ? $trust['wp'] : TEMPLATE_ASSETS_URL . '/images/trust/wp.png';
        $alt = ($trust && $trust['alt']) ? $trust['alt'] : 'certi';
        return compact('tt', 'ab', 'apb', 'er', 'fs', 'wp', 'alt');
    }

    public static function getFooterImg()
    {
        $footerImg = get_field('ns_header_footerImg', ACF_OPTION);
        $bg = ($footerImg && $footerImg['bg']) ? $footerImg['bg'] : TEMPLATE_ASSETS_URL . '/images/footer/bgfooter.png';
        $logo = ($footerImg && $footerImg['logo']) ? $footerImg['logo'] : TEMPLATE_ASSETS_URL . '/images/footer/logo.png';
        $fb = ($footerImg && $footerImg['fb']) ? $footerImg['fb'] : TEMPLATE_ASSETS_URL . '/images/footer/fb.svg';
        $ig = ($footerImg && $footerImg['ig']) ? $footerImg['ig'] : TEMPLATE_ASSETS_URL . '/images/footer/ig.svg';
        $li = ($footerImg && $footerImg['li']) ? $footerImg['li'] : TEMPLATE_ASSETS_URL . '/images/footer/li.svg';
        $tw = ($footerImg && $footerImg['tw']) ? $footerImg['tw'] : TEMPLATE_ASSETS_URL . '/images/footer/tw.svg';
        $yt = ($footerImg && $footerImg['yt']) ? $footerImg['yt'] : TEMPLATE_ASSETS_URL . '/images/footer/yt.svg';
        $alt = ($footerImg && $footerImg['alt']) ? $footerImg['alt'] : 'certi';
        return compact('bg', 'logo', 'fb', 'ig', 'li', 'tw', 'yt', 'alt');
    }

    public static function getType()
    {
        $type = get_field('ns_header_type', ACF_OPTION);
        $type1 = ($type && $type['type1']) ? $type['type1'] : TEMPLATE_ASSETS_URL . '/images/type/type1.svg';
        $type2 = ($type && $type['type2']) ? $type['type2'] : TEMPLATE_ASSETS_URL . '/images/type/type2.svg';
        $type3 = ($type && $type['type3']) ? $type['type3'] : TEMPLATE_ASSETS_URL . '/images/type/type3.svg';
        $alt = ($type && $type['alt']) ? $type['alt'] : 'type';
        return compact('type1', 'type2', 'type3', 'alt');
    }

    public static function getFooterAddress()
    {
        return get_field('ns_footer_address', ACF_OPTION);
    }

    public static function getCopyRight()
    {
        return get_field('ns_copyright', ACF_OPTION);
    }

    public static function getTrackingCode($position = '')
    {
        if ($position) {
            switch ($position) {
                case 'in_head':
                    $code = get_field('ns_tracking_head', ACF_OPTION);
                    break;
                case 'after_open_body':
                    $code = get_field('ns_tracking_after_body', ACF_OPTION);
                    break;
                case 'before_close_body':
                    $code = get_field('ns_tracking_before_body', ACF_OPTION);
                    break;
                default:
                    $code = '';
                    break;
            }
            return $code;
        }
        return '';
    }

    public static function getFavicon()
    {
        $favicon = get_field('ns_favicon', ACF_OPTION);
        return $favicon ? $favicon : '';
    }

    public static function getAppleIcon()
    {
        $icon = get_field('ns_apple_touch_icon', ACF_OPTION);
        return $icon ? $icon : '';
    }
    /**
     * Get content 404.
     *
     * @return string
     */
    public static function getContent404()
    {
        return Queries::getOptionField('ns_404_page_content');
    }

    /**
     * Get Main Menu
     */
    public static function getMainNav()
    {
        $location = 'primary_navigation';
        if (has_nav_menu($location)) {
            return wp_nav_menu(array(
                THEME_LOCATION => $location,
                CONTAINER => false,
                DEPTH => 2,
                WALKER => new \App\Services\Nav\C8ThemeHeaderMenu(),
                'menu_class' => 'main-menu-ul navbar-nav list-none flex mb-0 p-0 text-white flex-col text-inherit
                lg:flex-row lg:justify-end',
                ECHO_TEXT => false,
            ));
        } else {
            return '';
        }
    }
    /**
     * Get Footer Menu
     */
    public static function getFooterNav()
    {
        $location = 'footer_navigation';
        if (has_nav_menu($location)) {
            return wp_nav_menu(array(
                THEME_LOCATION => $location,
                ITEMS_WRAP => '%3$s',
                CONTAINER => false,
                DEPTH => 2,
                WALKER => new \App\Services\Nav\C8ThemeFooterMenu(),
                ECHO_TEXT => false,
            ));
        } else {
            return '';
        }
    }
}
