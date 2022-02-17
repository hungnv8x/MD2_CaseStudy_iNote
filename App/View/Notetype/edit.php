<form method="post">
    <div class="form-group">
        <label for="title">Name</label>
        <input name="name" type="text" class="form-control" id="title" aria-describedby="emailHelp" value="<?php echo $noteType->name?>">
    </div>
    <div class="form-group">
        <label for="description">Content</label>
        <input name="description" type="text" class="form-control" id="description" value="<?php echo $noteType->description?>">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
