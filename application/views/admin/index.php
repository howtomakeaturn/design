<a href='/admin/create'>New</a>
<a href='/admin/logout' class='pull-right'>Logout</a>
<hr/>
<?php foreach($items as $item): ?>
    <p><?php echo $item->name ?></p>
    <hr/>
<?php endforeach; ?>

