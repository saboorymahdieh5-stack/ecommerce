<?php 

$id=$GLOBALS['urlArray'][3];
// $modelFooter=factory::factory("footer");
$integer=(int)$id;
$result=footer::find($integer);
// while($footer=$result->fetch_assoc()){   ?>
<div>
<div>
    <?php echo $result['id'];?>
</div>
<div>
    <?php echo $result['nameDesigner'];?>
</div>
<div>
    <?php echo $result['phonNumber'];?>
</div>
<div>
    <?php echo $result['description'];?>
</div>
<?php 
// }
?>
</div>