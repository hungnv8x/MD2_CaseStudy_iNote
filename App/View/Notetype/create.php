<?php include_once "App/View/Layout/nav.php" ?>
<h4 style="text-align: center">Create NoteType</h4>
<form method="post">
    <div class="form-group">
        <label for="title">Name</label>
        <input name="name" type="text" class="form-control" id="title" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="description">description</label>
        <input name="description" type="text" class="form-control" id="description">
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>