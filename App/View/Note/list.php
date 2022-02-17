<?php include_once "App/View/Layout/nav.php"?>
<h4 style="text-align: center">Note list</h4>
<a type="button" class="btn btn-success mb-3" href="index.php?page=note-create">Create</a>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Content</th>
        <th scope="col">NoteType</th>
        <th scope="col" >Action</th>
    </tr>
    </thead>
    <tbody>
        <?php if(!empty($notes)) : ?>
         <?php foreach ($notes as $key => $note): ?>
            <tr>
                <th scope="row"><?php echo $key + 1?></th>
                <td><?php echo $note->title?></td>
                <td><?php echo $note->content?></td>
                <td><?php echo $note->name?></td>
                <td>
                    <a type="button" class="btn btn-success" href="index.php?page=note-edit&id=<?php echo $note->id ?>">Edit</a>
                    <a type="button" class="btn btn-info" href="index.php?page=note-detail&id=<?php echo $note->id ?>">Detail</a>
                    <a onclick="return confirm('Are you sure?')" type="button" class="btn btn-danger" href="index.php?page=note-delete&id=<?php echo $note->id ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3">Chưa có Note nào cả, Hãy tạo note ngay và luôn</td>
            </tr>
    <?php endif; ?>
    </tbody>
</table>

