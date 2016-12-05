<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Orders Product'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ordersProducts index large-9 medium-8 columns content">
    <h3><?= __('Orders Products') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('order_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantity') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ordersProducts as $ordersProduct): ?>
            <tr>
                <td><?= $this->Number->format($ordersProduct->id) ?></td>
                <td><?= $ordersProduct->has('order') ? $this->Html->link($ordersProduct->order->id, ['controller' => 'Orders', 'action' => 'view', $ordersProduct->order->id]) : '' ?></td>
                <td><?= $ordersProduct->has('product') ? $this->Html->link($ordersProduct->product->name, ['controller' => 'Products', 'action' => 'view', $ordersProduct->product->id]) : '' ?></td>
                <td><?= $this->Number->format($ordersProduct->quantity) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ordersProduct->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ordersProduct->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ordersProduct->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordersProduct->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
