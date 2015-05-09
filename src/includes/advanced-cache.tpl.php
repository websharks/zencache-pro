<?php
/**
 * Advanced cache stub.
 *
 * @since 150422 Rewrite.
 */
namespace WebSharks\ZenCache\Pro;

if (!defined('WPINC')) {
    exit('Do NOT access this file directly: '.basename(__FILE__));
}
if (!defined('ZENCACHE_PLUGIN_FILE')) {
    /*
     * Plugin file path.
     *
     * @since 140725 Reorganizing class members.
     *
     * @var string Absolute server path to QC plugin file.
     */
    define('ZENCACHE_PLUGIN_FILE', '%%ZENCACHE_PLUGIN_FILE%%');
}
require_once dirname(ZENCACHE_PLUGIN_FILE).'/src/includes/stub.php';
require_once dirname(ZENCACHE_PLUGIN_FILE).'/src/includes/constants/nc-debug.php';
require_once dirname(ZENCACHE_PLUGIN_FILE).'/src/includes/functions/wp-cache-postload.php';

AdvancedCacheBackCompat::quickCacheConstants();
AdvancedCacheBackCompat::qcRequestVars();

if (!defined('ZENCACHE_PRO')) {
    /*
     * ZenCache Pro flag.
     *
     * @since 140422 First documented version.
     *
     * @var string|integer|boolean A boolean-ish value; e.g. `1` or `0`.
     */
    define('ZENCACHE_PRO', true);
}
if (!defined('ZENCACHE_ENABLE')) {
    /*
     * Is ZenCache enabled?
     *
     * @since 140422 First documented version.
     *
     * @var string|integer|boolean A boolean-ish value; e.g. `1` or `0`.
     */
    define('ZENCACHE_ENABLE', '%%ZENCACHE_ENABLE%%');
}
if (!defined('ZENCACHE_DEBUGGING_ENABLE')) {
    /*
     * Is ZenCache debugging enabled?
     *
     * @since 140422 First documented version.
     *
     * @var string|integer|boolean A boolean-ish value; e.g. `1` or `0`.
     */
    define('ZENCACHE_DEBUGGING_ENABLE', '%%ZENCACHE_DEBUGGING_ENABLE%%');
}
if (!defined('ZENCACHE_ALLOW_BROWSER_CACHE')) {
    /*
     * Allow browsers to cache each document?
     *
     * @since 140422 First documented version.
     *
     * @var string|integer|boolean A boolean-ish value; e.g. `1` or `0`.
     *
     * @note If this is a `FALSE` (or an empty) value; ZenCache will send no-cache headers.
     *    If `TRUE`, ZenCache will NOT send no-cache headers.
     */
    define('ZENCACHE_ALLOW_BROWSER_CACHE', '%%ZENCACHE_ALLOW_BROWSER_CACHE%%');
}
if (!defined('ZENCACHE_GET_REQUESTS')) {
    /*
     * Cache `$_GET` requests w/ a query string?
     *
     * @since 140422 First documented version.
     *
     * @var string|integer|boolean A boolean-ish value; e.g. `1` or `0`.
     */
    define('ZENCACHE_GET_REQUESTS', '%%ZENCACHE_GET_REQUESTS%%');
}
if (!defined('ZENCACHE_CACHE_404_REQUESTS')) {
    /*
     * Cache 404 errors?
     *
     * @since 140422 First documented version.
     *
     * @var string|integer|boolean A boolean-ish value; e.g. `1` or `0`.
     */
    define('ZENCACHE_CACHE_404_REQUESTS', '%%ZENCACHE_CACHE_404_REQUESTS%%');
}
if (!defined('ZENCACHE_FEEDS_ENABLE')) {
    /*
     * Cache XML/RSS/Atom feeds?
     *
     * @since 140422 First documented version.
     *
     * @var string|integer|boolean A boolean-ish value; e.g. `1` or `0`.
     */
    define('ZENCACHE_FEEDS_ENABLE', '%%ZENCACHE_FEEDS_ENABLE%%');
}
if (!defined('ZENCACHE_WHEN_LOGGED_IN')) {
    /*
     * Cache logged-in users?
     *
     * @since 140422 First documented version.
     *
     * @var string|integer|boolean A boolean-ish value; e.g. `1` or `0`; or `postload`.
     */
    define('ZENCACHE_WHEN_LOGGED_IN', '%%ZENCACHE_WHEN_LOGGED_IN%%');
}
if (!defined('ZENCACHE_DIR')) {
    /*
     * Directory used to store cache files; relative to `WP_CONTENT_DIR`.
     *
     * @since 140422 First documented version.
     *
     * @var string Absolute server directory path.
     */
    define('ZENCACHE_DIR', WP_CONTENT_DIR.'/'.'%%ZENCACHE_DIR%%');
}
if (!defined('ZENCACHE_MAX_AGE')) {
    /*
     * Cache expiration time.
     *
     * @since 140422 First documented version.
     *
     * @var string Anything compatible with PHP's {@link \strtotime()}.
     */
    define('ZENCACHE_MAX_AGE', '%%ZENCACHE_MAX_AGE%%');
}
if (!defined('ZENCACHE_EXCLUDE_URIS')) {
    /*
     * URI exclusions.
     *
     * @since 140422 First documented version.
     *
     * @var string A regular expression; else an empty string.
     */
    define('ZENCACHE_EXCLUDE_URIS', '%%ZENCACHE_EXCLUDE_URIS%%');
}
if (!defined('ZENCACHE_EXCLUDE_REFS')) {
    /*
     * HTTP referrer exclusions.
     *
     * @since 140422 First documented version.
     *
     * @var string A regular expression; else an empty string.
     */
    define('ZENCACHE_EXCLUDE_REFS', '%%ZENCACHE_EXCLUDE_REFS%%');
}
if (!defined('ZENCACHE_EXCLUDE_AGENTS')) {
    /*
     * HTTP user-agent exclusions.
     *
     * @since 140422 First documented version.
     *
     * @var string A regular expression; else an empty string.
     */
    define('ZENCACHE_EXCLUDE_AGENTS', '%%ZENCACHE_EXCLUDE_AGENTS%%');
}
if (!defined('ZENCACHE_VERSION_SALT')) {
    /*
     * Version salt.
     *
     * @since 140422 First documented version.
     *
     * @var mixed Any scalar value; e.g. string, integer, boolean;
     *    or a PHP expression that results in a scalar value.
     */
    define('ZENCACHE_VERSION_SALT', '%%ZENCACHE_VERSION_SALT%%');
}
if (!defined('ZENCACHE_404_CACHE_FILENAME')) {
    /*
     * 404 file name (if applicable).
     *
     * @since 140422 First documented version.
     *
     * @var string A unique file name that will not conflict with real paths.
     *    This should NOT include the extension; basename only please.
     */
    define('ZENCACHE_404_CACHE_FILENAME', '----404----');
}
if (!defined('ZENCACHE_HTMLC_ENABLE')) {
    /*
     * Enable HTML compressor?
     *
     * @since 140422 First documented version.
     *
     * @var string|integer|boolean A boolean-ish value; e.g. `1` or `0`.
     */
    define('ZENCACHE_HTMLC_ENABLE', '%%ZENCACHE_HTMLC_ENABLE%%');
}
if (!defined('ZENCACHE_HTMLC_CSS_EXCLUSIONS')) {
    /*
     * CSS exclusions for the HTML compressor.
     *
     * @since 140422 First documented version.
     *
     * @var string A regular expression; else an empty string.
     */
    define('ZENCACHE_HTMLC_CSS_EXCLUSIONS', '%%ZENCACHE_HTMLC_CSS_EXCLUSIONS%%');
}
if (!defined('ZENCACHE_HTMLC_JS_EXCLUSIONS')) {
    /*
     * JS exclusions for the HTML compressor.
     *
     * @since 140422 First documented version.
     *
     * @var string A regular expression; else an empty string.
     */
    define('ZENCACHE_HTMLC_JS_EXCLUSIONS', '%%ZENCACHE_HTMLC_JS_EXCLUSIONS%%');
}
if (!defined('ZENCACHE_HTMLC_CACHE_EXPIRATION_TIME')) {
    /*
     * Cache expiration time for the HTML compressor.
     *
     * @since 140422 First documented version.
     *
     * @var string Anything compatible with PHP's {@link \strtotime()}.
     */
    define('ZENCACHE_HTMLC_CACHE_EXPIRATION_TIME', '%%ZENCACHE_HTMLC_CACHE_EXPIRATION_TIME%%');
}
if (!defined('ZENCACHE_HTMLC_CACHE_DIR_PUBLIC')) {
    /*
     * Public cache directory for the HTML compressor.
     *
     * @since 140422 First documented version.
     *
     * @var string Absolute server directory path.
     */
    define('ZENCACHE_HTMLC_CACHE_DIR_PUBLIC', WP_CONTENT_DIR.'/'.'%%ZENCACHE_HTMLC_CACHE_DIR_PUBLIC%%');
}
if (!defined('ZENCACHE_HTMLC_CACHE_DIR_PRIVATE')) {
    /*
     * Private cache directory for the HTML compressor.
     *
     * @since 140422 First documented version.
     *
     * @var string Absolute server directory path.
     */
    define('ZENCACHE_HTMLC_CACHE_DIR_PRIVATE', WP_CONTENT_DIR.'/'.'%%ZENCACHE_HTMLC_CACHE_DIR_PRIVATE%%');
}
if (!defined('ZENCACHE_HTMLC_COMPRESS_COMBINE_HEAD_BODY_CSS')) {
    /*
     * Compress/combine `<head>` and `<body>` CSS?
     *
     * @since 140422 First documented version.
     *
     * @var string|integer|boolean A boolean-ish value; e.g. `1` or `0`.
     */
    define('ZENCACHE_HTMLC_COMPRESS_COMBINE_HEAD_BODY_CSS', '%%ZENCACHE_HTMLC_COMPRESS_COMBINE_HEAD_BODY_CSS%%');
}
if (!defined('ZENCACHE_HTMLC_COMPRESS_COMBINE_HEAD_JS')) {
    /*
     * Compress/combine `<head>` JS?
     *
     * @since 140422 First documented version.
     *
     * @var string|integer|boolean A boolean-ish value; e.g. `1` or `0`.
     */
    define('ZENCACHE_HTMLC_COMPRESS_COMBINE_HEAD_JS', '%%ZENCACHE_HTMLC_COMPRESS_COMBINE_HEAD_JS%%');
}
if (!defined('ZENCACHE_HTMLC_COMPRESS_COMBINE_FOOTER_JS')) {
    /*
     * Compress/combine `<!--footer-scripts-->`?
     *
     * @since 140422 First documented version.
     *
     * @var string|integer|boolean A boolean-ish value; e.g. `1` or `0`.
     */
    define('ZENCACHE_HTMLC_COMPRESS_COMBINE_FOOTER_JS', '%%ZENCACHE_HTMLC_COMPRESS_COMBINE_FOOTER_JS%%');
}
if (!defined('ZENCACHE_HTMLC_COMPRESS_COMBINE_REMOTE_CSS_JS')) {
    /*
     * Compress/combine remotely hosted CSS/JS files?
     *
     * @since 140422 First documented version.
     *
     * @var string|integer|boolean A boolean-ish value; e.g. `1` or `0`.
     */
    define('ZENCACHE_HTMLC_COMPRESS_COMBINE_REMOTE_CSS_JS', '%%ZENCACHE_HTMLC_COMPRESS_COMBINE_REMOTE_CSS_JS%%');
}
if (!defined('ZENCACHE_HTMLC_COMPRESS_INLINE_JS_CODE')) {
    /*
     * Compress inline `<script>` tags?
     *
     * @since 140422 First documented version.
     *
     * @var string|integer|boolean A boolean-ish value; e.g. `1` or `0`.
     */
    define('ZENCACHE_HTMLC_COMPRESS_INLINE_JS_CODE', '%%ZENCACHE_HTMLC_COMPRESS_INLINE_JS_CODE%%');
}
if (!defined('ZENCACHE_HTMLC_COMPRESS_CSS_CODE')) {
    /*
     * Compress CSS code after combining files?
     *
     * @since 140422 First documented version.
     *
     * @var string|integer|boolean A boolean-ish value; e.g. `1` or `0`.
     */
    define('ZENCACHE_HTMLC_COMPRESS_CSS_CODE', '%%ZENCACHE_HTMLC_COMPRESS_CSS_CODE%%');
}
if (!defined('ZENCACHE_HTMLC_COMPRESS_JS_CODE')) {
    /*
     * Compress JS code after combining files?
     *
     * @since 140422 First documented version.
     *
     * @var string|integer|boolean A boolean-ish value; e.g. `1` or `0`.
     */
    define('ZENCACHE_HTMLC_COMPRESS_JS_CODE', '%%ZENCACHE_HTMLC_COMPRESS_JS_CODE%%');
}
if (!defined('ZENCACHE_HTMLC_COMPRESS_HTML_CODE')) {
    /*
     * Compress the resulting HTML code?
     *
     * @since 140422 First documented version.
     *
     * @var string|integer|boolean A boolean-ish value; e.g. `1` or `0`.
     */
    define('ZENCACHE_HTMLC_COMPRESS_HTML_CODE', '%%ZENCACHE_HTMLC_COMPRESS_HTML_CODE%%');
}
$GLOBALS[GLOBAL_NS.'_advanced_cache']  = new AdvancedCache();
$GLOBALS[GLOBAL_NS.'__advanced_cache'] = &$GLOBALS[GLOBAL_NS.'_advanced_cache'];
if (!isset($GLOBALS['quick_cache__advanced_cache'])) {
    $GLOBALS['quick_cache__advanced_cache'] = &$GLOBALS[GLOBAL_NS.'_advanced_cache'];
}
