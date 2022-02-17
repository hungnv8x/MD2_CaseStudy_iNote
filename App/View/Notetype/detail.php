<?php
include_once "App/View/Layout/nav.php";
?>
<table border="1">
    <tr>
        <td>Name</td>
        <td><?php echo $noteType->name ?></td>
    </tr>
    <tr>
        <td>Description</td>
        <td><?php echo $noteType->description ?></td>
    </tr>
</table>
