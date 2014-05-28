<h1>Add Cheese</h1>
<?php
echo $this->Form->create('cheese');
echo $this->Form->input('name');
echo $this->Form->input('description', array('rows' => '3'));
echo $this->Form->end('Save Post');
?>