<a href='/admin'>Back</a>
<hr/>
<form action='/admin/update' method='post' enctype="multipart/form-data">
    <?php hidden('id', $work->id) ?>
    <p>連結網址<i>（請使用英文字母、數字、與減號）</i></p>
    <input type='text' name='ol_url' value='<?php echo $work->url ?>' class='form-control' required />
    <p>連結名稱<i>（隨你打）</i></p>
    <input type='text' name='ol_name' value='<?php echo $work->name ?>' class='form-control' required />
    <p>作品</p>
    <input type="file" name='ol_image' class='form-control' />
    <img src='/upload/<?php echo $work->image ?>' class='thumbnail' />
    <hr/>
    <p><input type='submit' value='update' /></p>
</form>
