<?php 
//include('autoload/autoload.php');
//$conn=$GLOBALS['newFactory']->test("modelUser");
$conn=factory::test("modelUser");
?>
<form action="http://localhost/ecommerce/updateUserForm" method="post">
    <input type="hidden" name="id">
    <input type="text" name="name" >
    <input type="text" name="family">
    <input type="text" name="phonNumber">

    <button type="submit">SEND</button>
</form>