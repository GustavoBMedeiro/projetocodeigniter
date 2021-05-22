<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?= $this->renderSection('styles')?>
    <link rel="stylesheet" href="<?= site_url('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?= site_url('assets/css/all.min.css')?>">

    <title><?= $titulo ?? 'Tarefas'?></title>
</head>
<body>
    <?= $this->renderSection('content')?>

    <script src="<?= site_url('assets/js/all.min.js')?>"></script>
    <script src="<?= site_url('assets/js/sweetalert.min.js')?>"></script>
    <?= $this->renderSection('scripts')?>
</body>
</html>