<div class="row">
    <div class="col-lg-2 col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading"><?= __('Actions') ?></div>
            <ul class="list-group">
                <li class="list-group-item"><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
                                <li class="list-group-item"><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?></li>
                            </ul>
        </div>
    </div>
    <div class="col-lg-10 col-md-9">
        <table class="table table-hover table-striped table-bordered small">
            <thead>
            <tr>
                                <th><?= $this->Paginator->sort('id') ?></th>
                                <th><?= $this->Paginator->sort('username') ?></th>
                                <th><?= $this->Paginator->sort('password') ?></th>
                                <th><?= $this->Paginator->sort('email') ?></th>
                                <th><?= $this->Paginator->sort('created') ?></th>
                                <th><?= $this->Paginator->sort('modified') ?></th>
                                <th><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                                <td><?= $this->Number->format($user->id) ?></td>
                                <td><?= h($user->username) ?></td>
                                <td><?= h($user->password) ?></td>
                                <td><?= h($user->email) ?></td>
                                <td><?= h($user->created) ?></td>
                                <td><?= h($user->modified) ?></td>
                                <td>
                    <?= $this->Html->link('', ['action' => 'view', $user->id], ['icon' => ['class' => 'fa fa-search fa-fw fa-2x']]); ?>
                    <?= $this->Html->link('', ['action' => 'edit', $user->id], ['icon' => ['class' => 'fa fa-pencil fa-fw fa-2x']]); ?>
                    <?= $this->Form->postLink('', ['action' => 'delete', $user->id], [
                            'icon' => ['class' => 'fa fa-times fa-fw fa-2x text-danger'],
                            'confirm' => __('Are you sure you want to delete # {0}?', $user->id)
                        ]);
                    ?>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <div class="paginator">
            <?= $this->element('CakeBootstrap.pagination') ?>
            <?= $this->element('CakeBootstrap.paging') ?>
        </div>
    </div>
</div>