<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <!-- boostrap css -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" />

    <!-- css style -->
    <link rel="stylesheet" href="/css/style.css" />


</head>

<body>
    <!--navbar class -->
    <?= $this->include('layout/navbar'); ?>
    <?= $this->include('layout/header'); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- content -->
                <?= $this->renderSection('content'); ?>
            </div>
            <div class="col-md-4">
                <!-- widget -->
                <?= $this->include('layout/judulPost'); ?>
            </div>
        </div>
    </div>


    <!-- footer class -->
    <?= $this->include('layout/footer'); ?>

    <!-- Jquery dan Bootsrap JS -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>

</body>

</html>