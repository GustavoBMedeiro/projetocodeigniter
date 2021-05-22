<?= $this->extend('layout/layout')?>

<?= $this->section('scripts')?>
    <script>
    </script>
<?= $this->endSection()?>


<?= $this->section('main') ?>

    <h1>Pagina home do site</h1>
    <a href="<?= site_url('contatos') ?>">Contatos page</a>
    <a href="<?= site_url('produtos/novo') ?>">Cadastrar Produto</a>
    hora: <?= date('d-m-Y', $data) ?>

<?= $this->endSection() ?>


<?= $this->section('styles')?>
    <style>
        h1{
            background-color: red;
            color: white;
        }
    </style>
<?= $this->endSection()?>
