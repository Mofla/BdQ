<div class="row">
    <div class="col-sm-12 col-md-4 well text-center">
        <h1>Gestion des utilisateurs</h1>
        <ul class="list-group">
            <?= $this->Html->link('<li class="list-group-item btn btn-default">'.__('Liste').'</li>',['controller' => 'Users','action' => 'index'],['escape' => false]) ?>
        </ul>
    </div>

    <div class="col-sm-12 col-md-4 well text-center">
        <h1>Gestion des Produits</h1>
        <ul class="list-group">
            <?= $this->Html->link('<li class="list-group-item btn btn-default">'.__('Liste').'</li>',['controller' => 'Products','action' => 'index'],['escape' => false]) ?>
            <?= $this->Html->link('<li class="list-group-item btn btn-default">'.__('Ajouter').'</li>',['controller' => 'Products','action' => 'add'],['escape' => false]) ?>
            <?= $this->Html->link('<li class="list-group-item btn btn-default">'.__('Produits du jour').'</li>',['controller' => 'Products','action' => 'daily'],['escape' => false]) ?>
        </ul>
    </div>

    <div class="col-sm-12 col-md-4 well text-center">
        <h1>Gestion des Commandes</h1>
        <ul class="list-group">

        </ul>
    </div>
</div>

<?= $this->Html->script('scripts') ?>
<script>
    $(document).ready(sameHeight('.well'));
</script>