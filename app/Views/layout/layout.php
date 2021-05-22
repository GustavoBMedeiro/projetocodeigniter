<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- // Estilos da página. -->
    <?= $this->renderSection('styles') ?>
    <title><?= $titulo ?? 'CodeIgniter'?></title>
</head>
<body>
    Layout principal do site;
    
    <!-- //Menu de navegação do site. -->
    <?= $this->include('components/nav_bar.php')?>
    
    <!-- //Conteúdo principal do site. -->
    <?= $this->renderSection('main')?>
    
    <!-- //Footer do site. -->
    <?= $this->include('components/footer_bar.php')?>
    
    <!-- //Scripts da página -->
    <?= $this->renderSection('scripts')?>
</body>
</html>