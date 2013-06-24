<?php
/**
 * Layouts with Views - A simple layout and view rendering engine built on PHP.
 *
 * @package  Layouts with Views
 * @version  1.1.0
 * @author   Tommy Marshall <tommy.marshall@viget.com>
 * @link     http://viget.com
 */

/*
|----------------------------------------------------------------
| Setup
|----------------------------------------------------------------
*/

$app_dir = dirname(__FILE__) . '/';

$config = include $app_dir.'config/config.php';
$config['app_dir'] = $app_dir;
$config['base_dir'] = ltrim(dirname($_SERVER['SCRIPT_NAME']), '/').'/';

include $app_dir.'system/LayoutsWithViews.php';
$app = new LayoutsWithViews( $config );

/*
|----------------------------------------------------------------
| Render the View inside the Layout
|----------------------------------------------------------------
*/

$app->display($_GET['view']);
