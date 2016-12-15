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
        <?= $this->element('management/navigation'); ?>
        <?= $this->Flash->render() ?>
        <div class="container">
            <?= $this->fetch('content') ?>
        </div>
    </body>
</html>
