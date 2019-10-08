<?
ob_start();
session_start();
include 'baglan.php';
include 'function.php';


if(isset($_POST ['admingiris']))
{
	$Kullanici_mail=$_POST['kullanici_mail'];
	$Kullanici_ad=$_POST['kullanici_ad'];
	$Kullanici_password=md5($_POST['kullanici_password']);

	$kullanicisor=$db->prepare("SELECT * FROM kullanici WHERE kullanici_mail=:mail  or kullanici_ad=:kulad and kullanici_password=:password and  kullanici_yetki=:yetki");
	$kullanicisor->execute(array(

		'mail'=>$Kullanici_mail,
		'kulad'=>$Kullanici_ad,
		'password'=>$Kullanici_password,
		'yetki'=>5
	));
	$say=$kullanicisor->rowCount();

	if($say==1)
	{

		$_SESSION['kullanici_mail']=$Kullanici_mail;
		$_SESSION['kullanici_ad']=$Kullanici_ad;

		header("location:../production/index.php");
		exit;
	}else{
		header("location:../production/login.php?durum=no");
		exit;

	}



}

if(isset($_POST ['genelayarkaydet']))
{

	$ayarkaydet=$db->prepare("UPDATE ayar SET

		ayar_title=:ayar_title,
		ayar_description=:ayar_description,
		ayar_keywords=:ayar_keywords,
		ayar_author=:ayar_author
		WHERE ayar_id=0

		");

	$uptade=$ayarkaydet->execute(array(
		'ayar_title'=> $_POST['ayar_title'],
		'ayar_description'=> $_POST['ayar_description'],
		'ayar_keywords'=> $_POST['ayar_keywords'],
		'ayar_author'=> $_POST['ayar_author']

	));
	if($uptade) {

		header("location:../production/genel-ayar.php?durum=ok");

	} else {

		header("location:../production/genel-ayar.php?durum=no");

	}

}



if(isset($_POST ['iletisimayarkaydet']))
{

	$ayarkaydet=$db->prepare("UPDATE ayar SET

		ayar_tel=:ayar_tel,
		ayar_gsm=:ayar_gsm,
		ayar_faks=:ayar_faks,
		ayar_mail=:ayar_mail,
		ayar_il=:ayar_il,
		ayar_ilce=:ayar_ilce,
		ayar_adres=:ayar_adres,
		ayar_mesai=:ayar_mesai
		WHERE ayar_id=0

		");

	$uptade=$ayarkaydet->execute(array(
		'ayar_tel'=> $_POST['ayar_tel'],
		'ayar_gsm'=> $_POST['ayar_gsm'],
		'ayar_faks'=> $_POST['ayar_faks'],
		'ayar_mail'=> $_POST['ayar_mail'],
		'ayar_il'=> $_POST['ayar_il'],
		'ayar_ilce'=> $_POST['ayar_ilce'],
		'ayar_adres'=> $_POST['ayar_adres'],
		'ayar_mesai'=> $_POST['ayar_mesai']

	));
	if($uptade) {

		header("location:../production/iletisim-ayarlar.php?durum=ok");

	} else {

		header("location:../production/iletisim-ayarlar.php?durum=no");

	}

}



if(isset($_POST ['apiayarkaydet']))
{

	$ayarkaydet=$db->prepare("UPDATE ayar SET

		ayar_analystic=:ayar_analystic,
		ayar_maps=:ayar_maps,
		ayar_canlidestek=:ayar_canlidestek
		WHERE ayar_id=0

		");

	$uptade=$ayarkaydet->execute(array(
		'ayar_analystic'=> $_POST['ayar_analystic'],
		'ayar_maps'=> $_POST['ayar_maps'],
		'ayar_canlidestek'=> $_POST['ayar_canlidestek']


	));
	if($uptade) {

		header("location:../production/api-ayarlar.php?durum=ok");

	} else {

		header("location:../production/api-ayarlar.php?durum=no");

	}

}



if(isset($_POST ['sosyalayarkaydet']))
{

	$ayarkaydet=$db->prepare("UPDATE ayar SET

		ayar_facebook=:ayar_facebook,
		ayar_twitter=:ayar_twitter,
		ayar_google=:ayar_google,
		ayar_youtube=:ayar_youtube
		WHERE ayar_id=0

		");

	$uptade=$ayarkaydet->execute(array(
		'ayar_facebook'=> $_POST['ayar_facebook'],
		'ayar_twitter'=> $_POST['ayar_twitter'],
		'ayar_google'=> $_POST['ayar_google'],
		'ayar_youtube'=> $_POST['ayar_youtube']


	));
	if($uptade) {

		header("location:../production/sosyal-ayarlar.php?durum=ok");

	} else {

		header("location:../production/sosyal-ayarlar.php?durum=no");

	}

}


if(isset($_POST ['mailayarkaydet']))
{

	$ayarkaydet=$db->prepare("UPDATE ayar SET

		ayar_smtphsot=:ayar_smtphsot,
		ayar_smtppassword=:ayar_smtppassword,
		ayar_smtpport=:ayar_smtpport,
		ayar_bakım=:ayar_bakım
		WHERE ayar_id=0

		");

	$uptade=$ayarkaydet->execute(array(
		'ayar_smtphsot'=> $_POST['ayar_smtphsot'],
		'ayar_smtppassword'=> $_POST['ayar_smtppassword'],
		'ayar_smtpport'=> $_POST['ayar_smtpport'],
		'ayar_bakım'=> $_POST['ayar_bakım']


	));
	if($uptade) {

		header("location:../production/mail-ayarlar.php?durum=ok");

	} else {

		header("location:../production/mail-ayarlar.php?durum=no");

	}

}


if(isset($_POST ['hakkimizdarkaydet']))
{

	$ayarkaydet=$db->prepare("UPDATE hakkimizda SET

		hakkimida_baslik=:hakkimida_baslik,
		hakkimida_icerik=:hakkimida_icerik,
		hakkimida_video=:hakkimida_video,
		hakkimida_misyon=:hakkimida_misyon,
		hakkimida_vizyon=:hakkimida_vizyon
		WHERE hakkimizda_id=0

		");

	$uptade=$ayarkaydet->execute(array(
		'hakkimida_baslik'=> $_POST['hakkimida_baslik'],
		'hakkimida_icerik'=> $_POST['hakkimida_icerik'],
		'hakkimida_video'=> $_POST['hakkimida_video'],
		'hakkimida_misyon'=> $_POST['hakkimida_misyon'],
		'hakkimida_vizyon'=> $_POST['hakkimida_vizyon']


	));
	if($uptade) {

		header("location:../production/hakkimizda.php?durum=ok");

	} else {

		header("location:../production/hakkimizda.php?durum=no");

	}

}

if(isset($_POST ['kullaniciduzenle']))
{
	$kullanici_id=$_POST['kullanici_id'];
	$ayarkaydet=$db->prepare("UPDATE  kullanici SET

		kullanici_adsoyad=:kullanici_adsoyad,
		kullanici_ad=:kullanici_ad,
		kullanici_mail=:kullanici_mail,
		kullanici_gsm=:kullanici_gsm,
		kullanici_password=:kullanici_password,
		kullanici_durum=:kullanici_durum
		WHERE kullanici_id={$_POST['kullanici_id']}

		");

	$uptade=$ayarkaydet->execute(array(
		'kullanici_adsoyad'=> $_POST['kullanici_adsoyad'],
		'kullanici_ad'=> $_POST['kullanici_ad'],
		'kullanici_mail'=> $_POST['kullanici_mail'],
		'kullanici_password'=> $_POST['kullanici_password'],
		'kullanici_gsm'=> $_POST['kullanici_gsm'],
		'kullanici_durum'=> $_POST['kullanici_durum']

	));
	if($uptade) {

		header("location:../production/kullanici_duzenle.php?kullanici_id=$kullanici_id&durum=ok");

	} else {

		header("location:../production/kullanici_duzenle.php?kullanici_id=$kullanici_id&durum=no");

	}

}
if($_GET['kullanicisil']=="ok"){

	$sil=$db->prepare("DELETE from kullanici where kullanici_id=:id");
	$kontrol=$sil->execute(array(

		'id'=> $_GET['kullanici_id']
	));

	if($kontrol){

		header("location:../production/kullanicilar.php?durum=ok");

	}else{

		header("location:../production/kullanicilar.php?durum=no");

	}

}


if(isset($_POST ['menukaydet']))
{

	$ayarkaydet=$db->prepare("INSERT INTO menu SET

		menu_ad=:menu_ad,
		menu_url=:menu_url,
		menu_durum=:menu_durum,
		menu_detay=:menu_detay



		");

	
	$uptade=$ayarkaydet->execute(array(
		'menu_ad'=> $_POST['menu_ad'],
		'menu_url'=> permalink($_POST['menu_url']),
		'menu_durum'=> $_POST['menu_durum'],
		'menu_detay'=> $_POST['menu_detay']



	));

	if($uptade) {

		header("location:../production/menuayar.php?durum=ok");

	} else {

		header("location:../production/menuayar.php?durum=no");

	}

}


if(isset($_POST ['menuduzenle']))
{
	$menu_id=$_POST['meu_id'];
	$ayarkaydet=$db->prepare("UPDATE  menu SET

		menu_ad=:menu_ad,
		menu_url=:menu_url,
		menu_durum=:menu_durum,
		menu_ust=:menu_ust,
		menu_sira=:menu_sira,
		farkli_url=:farkli_url,
		menu_detay=:menu_detay
		WHERE meu_id={$_POST['meu_id']}

		");


	$uptade=$ayarkaydet->execute(array(
		'menu_ad'=> $_POST['menu_ad'],
		'menu_url'=> permalink($_POST['menu_url']),
		'menu_durum'=> $_POST['menu_durum'],
		'menu_ust'=> $_POST['menu_ust'],
		'menu_detay'=> $_POST['menu_detay'],
		'farkli_url'=> $_POST['farkli_url'],
		'menu_sira'=> $_POST['menu_sira']


	));

	if($uptade) {

		header("location:../production/menuduzenle.php?meu_id=$menu_id&durum=ok");

	} else {

		header("location:../production/menuduzenle.php?meu_id=$menu_id&durum=no");

	}

}

if(isset($_POST ['sliderkaydet']))
{

	if ($_FILES["slider_resim"]["error"] > 0)
	{
		echo "Error: " . $_FILES["slider_resim"]["error"] . "<br />";
	}



	$dosyayol2 = "../nadmin/production/images/slider";
	$dosyayol = "../production/images/slider";
	@$dosyaadtmp = $_FILES["slider_resim"]["tmp_name"];
	@$dosyaad = basename( $_FILES["slider_resim"]["name"]);

	$uploadOk = 1;



//@move_uploaded_file($dosyaadtmp, $dosyayol."/".$dosyaad);

	if (move_uploaded_file($dosyaadtmp, $dosyayol."/".$dosyaad))
	{
		echo "oldu..";
	}else{
		echo "olmadı...!";
	}


	$slider_id=$_POST['slider_id'];
	$ayarkaydet=$db->prepare("INSERT INTO slider SET

		slider_ad=:slider_ad,
		slider_resim=:slider_resim,
		slider_url=:slider_url,
		slider_sira=:slider_sira,
		slider_durum=:slider_durum,
		slider_aciklama=:slider_aciklama



		");

	
	$uptade=$ayarkaydet->execute(array(
		'slider_ad'=> $_POST['slider_ad'],
		'slider_resim'=> $dosyayol2."/".$dosyaad,
		'slider_sira'=> $_POST['slider_sira'],
		'slider_url'=> $_POST['slider_url'],
		'slider_durum'=> $_POST['slider_durum'],
		'slider_aciklama'=> $_POST['slider_aciklama']

	));
	if($uptade) {

		header("location:../production/sliderayarlar.php?slider_id=$slider_id&durum=ok");

	} else {

		header("location:../production/sliderayarlar.php?slider_id=$slider_id&durum=no");

	}
}
?>
