<form action="/gallery/save" method="post" enctype="multipart/form-data">
    @csrf
<input type="file" name="image">
<input type="text" name="category_id">
<input type="text" name="title">
<input type="submit">
</form>