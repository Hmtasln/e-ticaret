<?include "header.php";?>

<?$menusor=$db->prepare("SELECT * FROM menu  where meu_id=:id ");

$menusor->execute(array(
'id'=>$_GET['menu_id']

));
$say=$menusor->rowCount();
$menucek=$menusor->fetch(PDO::FETCH_ASSOC);?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
	<?=$menucek['menu_detay']?>
</div>
	</div>
</div>


<?include "footer.php";  ?>