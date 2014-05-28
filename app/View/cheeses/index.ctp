<h1>Cheese</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Description</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($cheeses as $cheese): ?>
    <tr>
        <td><?php echo $cheese['cheese']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($cheese['cheese']['name'],
array('controller' => 'cheeses', 'action' => 'view', $cheese['cheese']['id'])); ?>
        </td>
        <td><?php echo $cheese['cheese']['description']; ?></td>
                <td>

            <?php
                echo $this->Html->link(
                    'Edit',
                    array('action' => 'edit', $cheese['cheese']['id'])
                );
            ?>
                        <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $cheese['cheese']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($cheese); ?>
</table>

<?php echo $this->Html->link(
    'Add Cheese',
    array('controller' => 'cheeses', 'action' => 'add')
); ?>

