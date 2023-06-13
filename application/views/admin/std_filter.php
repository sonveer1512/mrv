<?php
foreach ($studentinfo as $value) {
?>

    <tr class="item">
        <td><?php echo $value['serial_no']; ?></td>
        <td><?php echo $value['created_at'] ?></td>
        <td><?php echo $value['name'] ?></td>
        <td><?php echo $value['class']?> </td>
        <td><?php echo $value['fathername']?> </td>
        <td><?php echo $value['mothername'] ?> </td>
        <td><?php echo $value['telno'] ?></td>
        <td><?php echo $value['address'] ?> </td>
        <td>
            <a href="<?= base_url() ?>admin/editformdata/<?= $value['id'] ?>"><i class="fas fa-eye"></i></a>
            <a href="<?= base_url() ?>admin/editform/<?= $value['id'] ?>"><i class="	fas fa-pencil-alt"></i></a>
        </td>
    </tr>

<?php
}
?>