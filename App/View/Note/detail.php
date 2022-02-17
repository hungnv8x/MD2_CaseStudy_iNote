<?php
include_once "App/View/Layout/nav.php";
?>
<table border="1">
    <tr>
        <td>Title</td>
        <td><?php echo $note->title ?></td>
    </tr>
    <tr>
        <td>Content</td>
        <td><?php echo $note->content ?></td>
    </tr>
    <tr>
        <td>NoteType</td>
        <td><?php echo $note->name ?></td>
    </tr>
</table>
