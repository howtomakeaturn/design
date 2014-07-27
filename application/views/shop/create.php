<form action='/shop/inject' method='post' enctype="multipart/form-data">
    <p>Name</p>
    <input type='text' name='ol_name' class='form-control' required />
    <p>Description</p>
    <textarea name='ol_description' class='form-control' rows=15 required /></textarea>
    <p>Picture</p>
    <input type="file" name='ol_image' class='form-control' required />
    <hr/>
    <p><input type='submit' value='Create' /></p>
</form>
