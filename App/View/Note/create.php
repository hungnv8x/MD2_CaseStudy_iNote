<form method="post">
    <div class="form-group">
        <label for="title">Title</label>
        <input name="title" type="text" class="form-control" id="title" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="description">Content</label>
        <input name="content" type="text" class="form-control" id="description">
    </div>
    <div class="form-group">
        <label for="Note-type">NoteType</label>
        <select name="note_type_id" id="" class="form-control">
            <?php if (isset($noteTypes)) {
                foreach ($noteTypes as $noteType): ?>
                    <option value="<?php echo $noteType->id?>"><?php echo $noteType->name ?></option>
                <?php endforeach;
            } ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>