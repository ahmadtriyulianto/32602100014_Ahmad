<?= $this->extends('layout/template'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Ini yang selalu ada</h1>
                <p>Ini dia orangnya</p>
            </div>
        </div>
    </div>
</body>
</html>

<?= $this->endSection(); ?>