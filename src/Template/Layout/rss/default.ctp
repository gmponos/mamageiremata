<?php
if (!isset($channel)):
<<<<<<< HEAD
    $channel = array();
=======
    $channel = [];
>>>>>>> cakephp/master
endif;
if (!isset($channel['title'])):
    $channel['title'] = $this->fetch('title');
endif;

echo $this->Rss->document(
    $this->Rss->channel(
        [], $channel, $this->fetch('content')
    )
);
?>
