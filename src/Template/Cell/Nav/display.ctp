<div class="row">
    <div class="nav-logs">
        <?php if ($isConnected): ?>
            <?= $this->Html->image('avatars/40x40/' . $user->read('Auth.User.picture_url'), ['class' => 'img-responsive img-circle pull-left']) ?>
        <?php endif; ?>

        <ul class="list-inline text-right button-group">
            <?php if ($isConnected): ?>
                <!-- mobile devices -->
                <div class="hidden-md hidden-lg">
                    <li class="btn btn-logs"><?= $this->Html->link('<span class="glyphicon glyphicon-user"></span>', ['controller' => 'Users', 'action' => 'view', $user->read('Auth.User.id'), toUrl($user->read('Auth.User.username')),'prefix' => false],['escape' => false,'title' => __('Mon profil')]) ?></li>
                    <li class="btn btn-logs"><?= $this->Html->link('<span class="glyphicon glyphicon-shopping-cart"></span>',['action' => '#','prefix' => false],['escape' => false,'title' => __('Mon panier')]) ?></li>
                    <li class="btn btn-logs"><?= $this->Html->link('<span class="glyphicon glyphicon-log-out"></span>', ['controller' => 'Users', 'action' => 'logout','prefix' => false],['escape' => false,'title' => __('Se déconnecter')]) ?></li>
                </div>
                <!-- computer -->
                <div class="hidden-xs hidden-sm">
                    <li class="btn btn-logs">
                        <span class="glyphicon glyphicon-th-list"></span> <?= $this->Html->link(__('Administration'),['controller' => 'Users','action' => 'home','prefix' => 'admin']) ?>
                    </li>
                    <li class="btn btn-logs"><span
                            class="glyphicon glyphicon-user"></span> <?= $this->Html->link(__('Mon profil'), ['controller' => 'Users', 'action' => 'view', $user->read('Auth.User.id'), toUrl($user->read('Auth.User.username')),'prefix' => false]) ?>
                    </li>
                    <li class="btn btn-logs"><span
                            class="glyphicon glyphicon-shopping-cart"></span> Panier
                    </li>
                    <li class="btn btn-logs"><span
                            class="glyphicon glyphicon-log-out"></span> <?= $this->Html->link(__('Se déconnecter'), ['controller' => 'Users', 'action' => 'logout','prefix' => false]) ?>
                    </li>
                </div>
            <?php else: ?>
                <li class="btn btn-logs"><span
                        class="glyphicon glyphicon-log-in"></span> <?= $this->Html->link(__('Se connecter'), ['controller' => 'Users', 'action' => 'login','prefix' => false]) ?>
                </li>
            <?php endif; ?>
        </ul>
    </div>
    <!-- mobile -->
    <!-- computer -->
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav nav-md">
                    <li><?= $this->Html->link(__('Accueil'), ['controller' => 'Products', 'action' => 'home', 'prefix' => false]) ?></li>
                    <li><?= $this->Html->link(__('Nos Produits'), ['controller' => 'Products', 'action' => 'liste', 'prefix' => false]) ?></li>
                    <li><a href="#">Nous Contacter</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<?php if ($isConnected): ?>
    <div class="row shopping-cart collapse pull-right">

    </div>
<?php endif; ?>