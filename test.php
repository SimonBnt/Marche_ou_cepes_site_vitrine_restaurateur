<?php
require './inc/functionDb.php';

$returnedDishe = getDisheFromDb();

echo '<pre>';
var_dump($returnedDishe);
echo '</pre>';
die();


?>



<?php if (!empty($returnedDishe)): ?>

<?php foreach ($returnedDishe as $key => $dishe): ?>

<?php echo "<select name='' id='' class=''>"; ?>
<?php echo "<option  value=" . $dishe['title'] . ">"; ?>
<?php echo "</option>"; ?>
<?php echo "<option  value=" . $dishe['description'] . ">"; ?>
<?php echo "</option>"; ?>
<?php echo "</select>"; ?>

<?php endforeach; ?>

<?php endif; ?>