<?php

/**
 * @Filename index.php
 * @Language PHP
 * @Datetime 2018年10月9日 上午9:28:47
 *
 * @author yangyang hi@168linux.cn
 *
 */
require_once '../autoload.php';

// echo "此文件是测试文件，部署时请以此目录为WEB根目录";

$phpword = new \PhpOffice\PhpWord\PhpWord();

$section = $phpword->addSection();

$phpword->addNumberingStyle('multilevel', array(
    'type' => 'multilevel',
    'levels' => array(
        array(
            'format' => 'decimal',
            'text' => '%1.',
            'left' => 360,
            'hanging' => 360,
            'tabPos' => 360
        ),
        array(
            'format' => 'decimal',
            'text' => '%1.%2.',
            'left' => 720,
            'hanging' => 360,
            'tabPos' => 720
        ),
        array(
            'format' => 'decimal',
            'text' => '%1.%2.%3',
            'left' => 720,
            'hanging' => 360,
            'tabPos' => 720
        ),
        array(
            'format' => 'decimal',
            'text' => '%1.%2.%3.%4',
            'left' => 720,
            'hanging' => 360,
            'tabPos' => 720
        )
    )
));
$section->addListItem('List Item I', 0, null, 'multilevel');
$section->addListItem('List Item I.a', 1, null, 'multilevel');
$section->addListItem('List Item I.b', 1, null, 'multilevel');
$section->addListItem('List Item I.b', 1, null, 'multilevel');
$section->addListItem('List Item I.b', 2, null, 'multilevel');
$section->addListItem('List Item I.b', 2, null, 'multilevel');
$section->addListItem('List Item I.b', 2, null, 'multilevel');
$section->addListItem('List Item I.b', 3, null, 'multilevel');
$section->addListItem('List Item I.b', 3, null, 'multilevel');
$section->addListItem('List Item I.b', 3, null, 'multilevel');
$section->addListItem('List Item II', 0, null, 'multilevel');
$section->addListItem('List Item I.b', 0, null, 'multilevel');
$section->addListItem('List Item I.b', 1, null, 'multilevel');
$section->addListItem('List Item I.b', 1, null, 'multilevel');
$section->addListItem('List Item I.b', 2, null, 'multilevel');
$section->addListItem('List Item I.b', 3, null, 'multilevel');
$section->addListItem('List Item I.b', 2, null, 'multilevel');

$section->addText("helloworld",[],['lineHeight'=>\PhpOffice\PhpWord\Shared\Converter::]);
$obj = \PhpOffice\PhpWord\IOFactory::createWriter($phpword, "Word2007");
$obj->save("text.docx");