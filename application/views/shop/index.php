
<h3 class='text-center'>精選推薦商品</h3>


<div class="row">
    <?php foreach($items as $item): ?>
        <div class='col-sm-4 item-thumb'>
            <div class='item-image-box'>
                <img src='/upload/<?php echo $item->image ?>' class='item-image'>
            </div>
            <p><?php echo $item->name ?></p>
            <p><?php echo $item->description ?></p>
        </div>
    <?php endforeach; ?>
</div>

<style>
    .item-thumb{
        text-align: center;
        height: 400px;
        overflow: hidden;
    }
    
    .item-image-box{
        height: 300px;
        overflow: hidden;
    }

</style>
