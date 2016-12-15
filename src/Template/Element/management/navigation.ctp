<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                Home
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Dashboard</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><?= $this->Html->link(__('Articles'), ['controller' => 'articles', 'action' => 'index']); ?></li>
                <li><?= $this->Html->link(__('Menus'), ['controller' => 'menus', 'action' => 'index']); ?></li>
            </ul>
        </div>
    </div>
</nav>
