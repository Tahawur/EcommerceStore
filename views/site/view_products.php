<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="col-lg-4">
<?php
foreach($model as $rec){
	$image=$rec->product_image;
	$price=$rec->product_price;
echo "
<div class='panel-group'>
<div class='panel panel-success'>
<div class='panel-heading'>
$rec->product_title
</div>
<div class='panel-body'>
<img src='http://localhost/basic/web/images/$image'/>
</div>
<div class='panel-footer'>
Price:&nbsp$price
</div>
</div>
</div>
";
}
?>
</div>