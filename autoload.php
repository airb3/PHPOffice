<?php

/**
 *@Filename	autoload.php
 *@Language	PHP
 *@Datetime	2018年10月9日 上午9:25:41
 *@Author	yangyang hi@168linux.cn
 *
 *此文件用于自动加载类库，请勿修改
 *
 **/

/**
 * 自动加载PHPWord相关类库
 */
require_once __DIR__ . '/Autoload/autoload_real.php';

return ComposerAutoloaderInit0ac28a70b5320a14aed12375806e84af::getLoader();

/**
 * 自动加载私有类库
 */
class Load
{

    public static function autoload($ClassName)
    {
        $path = str_replace('\\', '/', dirname(__FILE__) . '/' . $ClassName . '.Class.php');

        if (file_exists($path)) {
            require_once $path;
        } else {
            echo "File is Not Found.";
        }
    }
}
spl_autoload_register([
    'Load',
    'autoload'
]);