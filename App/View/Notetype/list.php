<?php include_once "App/View/Layout/nav.php" ?>
<h4 style="text-align: center">NoteType list</h4>
<a type="button" class="btn btn-success mb-3" href="index.php?page=notetype-create">Create</a>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php if (!empty($noteTypes)) : ?>
        <?php foreach ($noteTypes as $key => $noteType): ?>
            <tr>
                <th scope="row"><?php echo $key + 1 ?></th>
                <td><?php echo $noteType->name ?></td>
                <td><?php echo $noteType->description ?></td>
                <td>
                    <a type="button" class="btn btn-success"
                       href="index.php?page=notetype-edit&id=<?php echo $noteType->id ?>">Edit</a>
                    <a type="button" class="btn btn-info"
                       href="index.php?page=notetype-detail&id=<?php echo $noteType->id ?>">Detail</a>
                    <a type="button" class="btn btn-danger"
                       href="index.php?page=notetype-delete&id=<?php echo $noteType->id ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="3">Chưa có dữ liệu, hãy tạo mới ngay đi</td>
        </tr>
    <?php endif; ?>
    </tbody>
</table>
