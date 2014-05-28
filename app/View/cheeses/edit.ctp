<h1>Edit Cheese</h1>
<?php
echo $this->Form->create('cheese');
echo $this->Form->input('name');
echo $this->Form->input('description', array('rows' => '3'));
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save cheese');
?>