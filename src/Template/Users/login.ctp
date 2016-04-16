<div class="container">
    <div class="well">
        <?= $this->Flash->render() ?>
        <?= $this->Flash->render('auth') ?>
        <?= __('Please enter your username and password') ?>
        <?= $this->Form->create() ?>
        <div class="row">
            <div class="col-sm-3 text-right">
                <?= $this->Form->label('username'); ?>
            </div>
            <div class="col-sm-9">
                <?= $this->Form->input('username', ['label' => false]) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 text-right">
                <?= $this->Form->label('password'); ?>
            </div>
            <div class="col-sm-9">
                <?= $this->Form->input('password', ['label' => false]) ?>
            </div>
        </div>
        <?= $this->Form->btnSubmit(__('Login')); ?>
        <?= $this->Form->end() ?>
    </div>
</div>
