<ul class="nav nav-tabs layout-tabs" role="tablist">
  <li><a href="#">開始設計</a></li>
  <li><a href="#">設計師款</a></li>
  <li><a href="#">如何設計</a></li>
</ul>
<div id="main-carousel" class="carousel slide carousel-margin" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner">

        <?php foreach($items as $index => $item): ?>
        <div class="item <?php if($index===1) echo 'active' ?>">
            <img src="/upload/<?php echo $item->image ?>">
            <div class="carousel-caption">
                <?php echo $item->name ?>
            </div>            
            
        </div>    
        <?php endforeach; ?>

    <!-- Controls -->
    <a class="left carousel-control" href="#main-carousel" data-slide="prev">
      <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#main-carousel" data-slide="next">
      <span class="icon-next"></span>
    </a>
  </div>

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
    
    .carousel-inner img{
        margin: 0 auto;
    }
    
    .layout-tabs{
        margin-bottom: 20px;
    }

</style>
