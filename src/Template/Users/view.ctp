<div class="row">
    <div class="col-lg-2 col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading"><?= __('Actions') ?></div>
            <ul class="list-group">
                <li class="list-group-item"><?= $this->Html->link(__('Edit User'), [
                        'action' => 'edit', $user->id,
                    ]) ?> </li>
                <li class="list-group-item"><?= $this->Form->postLink(__('Delete User'), [
                        'action' => 'delete', $user->id,
                    ], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('List Articles'), [
                        'controller' => 'Articles', 'action' => 'index',
                    ]) ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('New Article'), [
                        'controller' => 'Articles', 'action' => 'add',
                    ]) ?> </li>
            </ul>
        </div>
    </div>
    <div class="users col-lg-10 col-md-9">
        <h4><?= h($user->id) ?></h4>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <h6 class="small"><?= __('Username') ?></h6>
                        <p><?= h($user->username) ?></p>
                        <h6 class="small"><?= __('Password') ?></h6>
                        <p><?= h($user->password) ?></p>
                        <h6 class="small"><?= __('Email') ?></h6>
                        <p><?= h($user->email) ?></p>
                    </div>
                    <div class="col-lg-2">
                        <h6 class="small"><?= __('Id') ?></h6>
                        <p><?= $this->Number->format($user->id) ?></p>
                    </div>
                    <div class="col-lg-2">
                        <h6 class="small"><?= __('Created') ?></h6>
                        <p><?= h($user->created) ?></p>
                        <h6 class="small"><?= __('Modified') ?></h6>
                        <p><?= h($user->modified) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="related row">
    <div class="col-lg-12">
        <h4><?= __('Related Articles') ?></h4>
        <?php if (!empty($user->articles)): ?>
            <table class="table table-hover table-striped table-bordered small">
                <thead>
                    <tr>
                        <th><?= __('Id') ?></th>
                        <th><?= __('User Id') ?></th>
                        <th><?= __('Title') ?></th>
                        <th><?= __('Body') ?></th>
                        <th><?= __('Created') ?></th>
                        <th><?= __('Modified') ?></th>
                        <th><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <?php foreach ($user->articles as $articles): ?>
                <tbody>
                    <tr>
                        <td><?= h($articles->id) ?></td>
                        <td><?= h($articles->user_id) ?></td>
                        <td><?= h($articles->title) ?></td>
                        <td><?= h($articles->body) ?></td>
                        <td><?= h($articles->created) ?></td>
                        <td><?= h($articles->modified) ?></td>
                        <td>
                            <?= $this->Html->link(__('View'), [
                                'controller' => 'Articles', 'action' => 'view', $articles->id,
                            ]) ?>

                            <?= $this->Html->link(__('Edit'), [
                                'controller' => 'Articles', 'action' => 'edit', $articles->id,
                            ]) ?>

                            <?= $this->Form->postLink(__('Delete'), [
                                'controller' => 'Articles', 'action' => 'delete', $articles->id,
                            ], ['confirm' => __('Are you sure you want to delete # {0}?', $articles->id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</div>
