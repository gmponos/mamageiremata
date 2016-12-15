<div class="container">
    <div class="row">
        <div class="col-lg-2 col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading"><?= __('Actions') ?></div>
                <ul class="list-group">
                    <li class="list-group-item"><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
                    <li class="list-group-item"><?= $this->Html->link(__('List Articles'), [
                            'controller' => 'Articles',
                            'action' => 'index',
                        ]) ?>
                    </li>
                    <li class="list-group-item">
                        <?= $this->Html->link(__('New Article'), [
                            'controller' => 'Articles',
                            'action' => 'add',
                        ]) ?></li>
                </ul>
            </div>
        </div>
        <div class="users form col-lg-10 col-md-9">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Add User') ?></legend>
                <?= $this->Form->input('username'); ?>
                <?= $this->Form->input('password'); ?>
                <?= $this->Form->input('email'); ?>
            </fieldset>
            <?= $this->Form->btnSubmit() ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
