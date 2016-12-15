<div class="row">
    <div class="col-lg-2 col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading"><?= __('Actions') ?></div>
            <ul class="list-group">
                <li class="list-group-item"><?= $this->Html->link(__('New Article'), ['action' => 'add']) ?></li>
                <li class="list-group-item">
                    <?= $this->Html->link(__('List Users'), [
                        'controller' => 'Users',
                        'action' => 'index',
                    ]) ?>
                </li>
                <li class="list-group-item">
                    <?= $this->Html->link(__('New User'), [
                        'controller' => 'Users',
                        'action' => 'add',
                    ]) ?>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-lg-10 col-md-9">
        <table class="table table-hover table-striped table-bordered small">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php
                /** @var \App\Model\Entity\Article[] $articles */
                foreach ($articles as $article): ?>
                    <tr>
                        <td><?= $this->Number->format($article->id) ?></td>
                        <td>
                            <?= $article->has('user') ? $this->Html->link($article->user->id, [
                                'controller' => 'Users',
                                'action' => 'view',
                                $article->user->id,
                            ]) : '' ?>
                        </td>
                        <td><?= h($article->title) ?></td>
                        <td><?= h($article->created) ?></td>
                        <td><?= h($article->modified) ?></td>
                        <td>
                            <?= $this->Html->link('', [
                                'action' => 'view',
                                $article->id,
                            ], ['icon' => ['class' => 'fa fa-search fa-fw fa-2x']]); ?>
                            <?= $this->Html->link('', [
                                'action' => 'edit',
                                $article->id,
                            ], ['icon' => ['class' => 'fa fa-pencil fa-fw fa-2x']]); ?>
                            <?= $this->Form->postLink('', ['action' => 'delete', $article->id], [
                                'icon' => ['class' => 'fa fa-times fa-fw fa-2x text-danger'],
                                'confirm' => __('Are you sure you want to delete # {0}?', $article->id),
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
