<div class="row">
    <div class="nav-logs">
        <?php if ($isConnected): ?>
            <?= $this->Html->image('avatars/40x40/'.$user->read('Auth.User.picture_url'),['class' => 'img-responsive img-circle pull-left']) ?>
        <?php endif; ?>

        <ul class="list-inline text-right button-group">
            <?php if ($isConnected): ?>
                <li class="btn btn-logs"><span
                        class="glyphicon glyphicon-user"></span> <?= $this->Html->link(__('Mon profil'), ['controller' => 'Users', 'action' => 'view', $user->read('Auth.User.id'), toUrl($user->read('Auth.User.username'))]) ?>
                </li>
                <li class="btn btn-logs"><span
                        class="glyphicon glyphicon-log-out"></span> <?= $this->Html->link(__('Se déconnecter'), ['controller' => 'Users', 'action' => 'logout']) ?>
                </li>
            <?php else: ?>
                <li class="btn btn-logs"><span
                        class="glyphicon glyphicon-log-in"></span> <?= $this->Html->link(__('Se connecter'), ['controller' => 'Users', 'action' => 'login']) ?>
                </li>
            <?php endif; ?>
        </ul>
    </div>
    <!-- mobile -->

    <!-- computer -->
    <nav class="navbar navbar-default navbar-static-top hidden-xs hidden-sm">
        <div class="container-fluid">
            <div class="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><?= $this->Html->link(__('Accueil'),['controller' => 'Products','action' => 'home','prefix' => false]) ?></li>
                    <li><?= $this->Html->link(__('Nos Produits'),['controller' => 'Products','action' => 'liste','prefix' => false]) ?></li>
                    <li><a href="#">Nous Contacter</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>