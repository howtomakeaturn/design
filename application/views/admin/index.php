<a href='/admin/logout' class='pull-right'>Logout</a>
<hr/>
<?php foreach($items as $item): ?>
    <p><?php echo $item->name ?></p>
    <?php echo button_to('btn btn-danger', '/admin/delete', ['id'=>$item->id], 'delete', '確定？') ?>
    <hr/>
<?php endforeach; ?>

