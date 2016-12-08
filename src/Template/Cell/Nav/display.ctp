<div class="row">
    <div class="nav-logs">
        <!-- mobile -->

        <!-- computers -->
        <ul class="hidden-xs hidden-sm list-inline text-right button-group">
            <?php if($isConnected): ?>
                <li class="btn"><?= $this->Html->link(__('Mon profil'),['controller' => 'Users','action' => 'view',$user->read('Auth.User.id'),toUrl($user->read('Auth.User.username'))]) ?></li>
                <li class="btn"><?= $this->Html->link(__('Se déconnecter'),['controller' => 'Users','action' => 'logout']) ?></li>
            <?php else: ?>
                <li><?= $this->Html->link(__('Se connecter'),['controller' => 'Users','action' => 'login']) ?></li>
            <?php endif; ?>
        </ul>
    </div>
</div>