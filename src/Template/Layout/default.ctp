<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <title>Μαμαγειρέματα. Σπιτικό μαγειρευτό φαγητό στο Αιγάλεω, Κερασούντος 23</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Σπιτικό μαγειρευτό φαγητό στο Αιγάλεω">
        <meta name="author" content="Mamageiremata Μαμαγειρέματα σπιτικό μαγειρευτό φαγητό">
        <meta name="keywords" content="Σπιτικό μαγειρευτό φαγητό αιγάλεω, Delivery, φαγητό της μαμάς, μαγειρευτό φαγητό, μαγειρευτό delivery">
        <?= $this->Html->meta('icon') ?>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/bootstrap/3.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href='https://fonts.googleapis.com/css?family=Roboto'>
        <?= $this->Html->css('style') ?>
        <?= $this->Html->script('analytics') ?>
        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
        <?= $this->element('footer'); ?>
    </body>
</html>
