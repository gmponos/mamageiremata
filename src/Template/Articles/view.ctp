<div class="row">
    <div class="col-lg-2 col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading"><?= __('Actions') ?></div>
                <ul class="list-group">
                    <li class="list-group-item"><?= $this->Html->link(__('Edit Article'), ['action' => 'edit', $article->id]) ?> </li>
                    <li class="list-group-item"><?= $this->Form->postLink(__('Delete Article'), ['action' => 'delete', $article->id], ['confirm' => __('Are you sure you want to delete # {0}?', $article->id)]) ?> </li>
                    <li class="list-group-item"><?= $this->Html->link(__('List Articles'), ['action' => 'index']) ?> </li>
                    <li class="list-group-item"><?= $this->Html->link(__('New Article'), ['action' => 'add']) ?> </li>
                                        <li class="list-group-item"><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
                    <li class="list-group-item"><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
                                    </ul>
            </div>
        </div>
    <div class="articles col-lg-10 col-md-9">
        <h4><?= h($article->title) ?></h4>
        <div class="panel panel-default">
            <div class="panel-body">
                

                <div class="row">
                                <div class="col-lg-6">
                                                <h6 class="small"><?= __('User') ?></h6>
                        <p><?= $article->has('user') ? $this->Html->link($article->user->id, ['controller' => 'Users', 'action' => 'view', $article->user->id]) : '' ?></p>
                                                                <h6 class="small"><?= __('Title') ?></h6>
                        <p><?= h($article->title) ?></p>
                                                    </div>
                                                    <div class="col-lg-2">
                                        <h6 class="small"><?= __('Id') ?></h6>
                        <p><?= $this->Number->format($article->id) ?></p>
                                    </div>
                                                    <div class="col-lg-2">
                                        <h6 class="small"><?= __('Created') ?></h6>
                        <p><?= h($article->created) ?></p>
                                        <h6 class="small"><?= __('Modified') ?></h6>
                        <p><?= h($article->modified) ?></p>
                                    </div>
                                                </div>
                            </div>
        </div>
    </div>
</div>

