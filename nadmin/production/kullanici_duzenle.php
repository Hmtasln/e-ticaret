<? 

include "header.php";
$kulanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_id=:id");
$kulanicisor->execute(array(

'id'=>$_GET['kullanici_id']
));
$say=$kulanicisor->rowCount();
$kullanicicek=$kulanicisor->fetch(PDO::FETCH_ASSOC);
?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Kullanıcı Ayarları <small>
                        <?if (@$_GET['durum']=="ok"){?>

                          <b style="color: green"> İşelem Başarılı</b>

                        <?} elseif (@$_GET['durum']=="no") { ?>
                         <b style="color: red"> İşelem Başarısız</b>
                        <?}else{?>
                            İşlem Durumu
                          <?}?>
                    </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ad Soyad <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="kullanici_adsoyad" value="<?echo $kullanicicek ['kullanici_adsoyad'];?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kullanıcı Adı <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="kullanıcı_ad" value="<?echo $kullanicicek ['kullanici_ad'];?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                     
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">E-mail <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" value="<?echo $kullanicicek ['kullanici_mail'];?>" name="kullanici_mail" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Telefon <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" value="<?echo $kullanicicek ['kullanici_gsm'];?>" name="kullanici_gsm" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Şifreniz <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" id="first-name" required="required" value="<?echo $kullanicicek ['kullanici_password'];?>" name="kullanici_password" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Durum <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <select id="kullanici_durum" name="kullanici_durum" class="form-control">
                            
                            <option value="0" <?=$kullanicicek ['kullanici_durum']=='1'? 'select=""' :''; ?>>Aktif</option>  
                            <option value="0" <?=$kullanicicek ['kullanici_durum']=='0'? 'select=""' :''; ?>>Pasif</option> 
                          


                         </select>
                        </div>
                      </div>
                    <input type="hidden" id="first-name" required="required" value="<?echo $kullanicicek ['kullanici_id'];?>" name="kullanici_id">
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                         
                          <button type="submit" name="kullaniciduzenle" class="btn btn-success">Güncelle</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

            

            

            


            
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?
        include 'footer.php';
        ?>