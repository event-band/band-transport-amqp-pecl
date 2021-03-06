<?php
/**
 * This file is a part of the Event-Band project
 * @author Kirill chEbba Chebunin
 * @author Vasil coylOne Kulakov <kulakov@vasiliy.pro>
 *
 * This source file is subject to the MIT license that is bundled
 * with this package in the file LICENSE.
 */

/** @var $loader \Composer\Autoload\ClassLoader */
$loader = include __DIR__ . '/../vendor/autoload.php';
$loader->add('EventBand\Transport\PeclAmqp\Tests', __DIR__, true);