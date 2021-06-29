<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <?= $this->Html->css('/theme/adminlte.min.css') ?>
    <?= $this->Html->script('/theme/jquery.min.js') ?>
    <?= $this->Html->script('/theme/bootstrap.bundle.min.js') ?>
    <?= $this->Html->script('/theme/adminlte.min.js') ?>

    <?= $this->fetch('meta') ?>
</head>

<body class="hold-transition login-page">
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
</body>

</html>