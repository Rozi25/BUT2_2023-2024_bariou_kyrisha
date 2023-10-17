<h2><?php echo $title ?> </h2>
<ul>
<?php foreach($studentlist as $student):?>
<?php echo "<li > ".$student['student_id'].". ".$student['lastname']." </li >";?>
<?php endforeach ?>
</ul>
