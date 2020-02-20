<?php
$json = file_get_contents("http://rdapi.herokuapp.com/category/read.php");

$data = json_decode($json,true);
$list = $data['records'];


?>

<h1>Product Categories </h1>

<table border="1px">
    <tr>
        <td>Category ID</td>
        <td>Category Name></td>
    </tr>
<?php
foreach($list as $value){
    ?>
    <tr>
        <td><?php echo $value['category_name'];?></td>
        <td><?php echo $value['category_id'];?></td>
    </tr>
<?php
}
?>
</table>
