<h1>Cheese</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Description</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($post['Post']['name'],
array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
        </td>
        <td><?php echo $post['Post']['description']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>