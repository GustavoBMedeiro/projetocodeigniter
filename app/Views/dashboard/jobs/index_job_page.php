<?= $this->extend('layout/job_layout') ?>

<?= $this->section('content') ?>
<main class="container">
    <div class="row mr-sm-4">
        <div class="col-sm-6 justify-content-sm-center offset-2 mr-md-4">
            <a class="btn btn-success" id="novo" href="<?= site_url('tarefas/novo') ?>">
                <i class="fas fa-check"></i>NOVA TAREFA
            </a>
        </div>
    </div>

    <div class="row  justify-content-md-center ">
        <div class="col-sm-8 mr-sm-3">
            <?php if(!empty(session()->getFlashData('success'))):?>
                <div class="alert alert-success">
                    <span class="fas fa-check"></span> <?= session()->getFlashData('success')?>
                </div>
            <?php endif;?>

            <table class="table table-striped ">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center">Título</th>
                        <th class="text-center">Descrição</th>
                        <th class="text-center">Inicio</th>
                        <th class="text-center">Final</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>

                <tbody>
                   
                </tbody>
            </table>
        </div>
    </div>

</main>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
    <script>
        const alert = document.getElementsByClassName('alert')[0]; 
        setTimeout(() => {
                if(alert != undefined){
                    alert.style.display = 'none';
                }
        }, 5000);

        const button = document.getElementById('novo');
        button.addEventListener('click', function(event){
            event.preventDefault();
            urlButton = button.href;
            swal({
                'title': 'Tem certeza?',
                'text': 'para confirma clique em OK',
                buttons: ['Cancelar', 'OK'],
                icon: "info",
                timer: 5000
            }).then((foiConfirmado) => {
                if(foiConfirmado){
                    window.location.href = urlButton;
                }else{
                    return;
                }
            });
        });
    </script>
<?= $this->endSection() ?>

<?= $this->section('styles') ?>

<?= $this->endSection() ?>