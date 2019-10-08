<?include "header.php";


$hakkimizdasor=$db->prepare("SELECT * FROM hakkimizda where hakkimizda_id=:id");
$hakkimizdasor->execute(array(

'id'=>0
));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);

 ?>
<!DOCTYPE html>
	<!-- <div class="container">
		<ul class="small-menu">
			<li><a href="" class="myacc">My Account</a></li>
			<li><a href="" class="myshop">Shopping Chart</a></li>
			<li><a href="" class="mycheck">Checkout</a></li>
		</ul>
		<div class="clearfix"></div>
		<div class="lines"></div>
	</div> <!--small-nav -->

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-title-wrap">
					<div class="page-title-inner">
					<div class="row">
						<div class="col-md-4">

							<div class="bigtitle">Hakkımızda</div>
						</div>

					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9"><!--Main content-->
        <div class="title-bg">
					<div class="title">Tanıtım Videosu</div>
				</div>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/<?echo $hakkimizdacek['hakkimida_video']?>" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>

				<div class="title-bg">
					<div class="title"><?echo $hakkimizdacek['hakkimida_baslik']?></div>
				</div>
				<div class="page-content">
          <p>
					<?echo $hakkimizdacek['hakkimida_icerik']?>
        </p>
				</div>
        <div class="title-bg">
        <div class="title">Misyon</div>
      </div>
      <blockquote><?echo $hakkimizdacek['hakkimida_misyon']?>   </blockquote>
      <div class="title-bg">
        <div class="title">Vizyon</div>
      </div>
        <blockquote><?echo $hakkimizdacek['hakkimida_vizyon']?>   </blockquote>
			</div>
      <!---sidebar-->
      <?include'sidebar.php' ?>
			<!--sidebar-->
		</div>
		<div class="spacer"></div>
	</div>
<?include "footer.php";  ?>
