<?

include "header.php";

$sorgucek=$db->prepare("SELECT * FROM slider");
$sorgucek->execute();

?>

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">

            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Slider Ayarları
                                <small>
                                    <? if (@$_GET['durum'] == "ok") { ?>

                                        <b style="color: green"> İşelem Başarılı</b>

                                    <? } elseif (@$_GET['durum'] == "no") { ?>
                                        <b style="color: red"> İşelem Başarısız</b>
                                    <? } else { ?>
                                        İşlem Durumu
                                    <? } ?>
                                </small>
                            </h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-expanded="false"><i class="fa fa-wrench"></i></a>
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
                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>

                   <td><center><a href="#menuekle"><button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#menuekle"
                    style="font-size: 16px;float: left;font-weight: bold;">Menu Ekle</button></a></center></td>
                   
                </tr>
                <tr>
                  <th>Menu adı</th>
                  <th>Url</th>
                  <th>Üst Menü</th>
                  <th>Sıra</th>
                  <th>Detay</th>
                  <th>SeoUrl</th>
                  <th>Durum</th>
                  <th>Düzenle</th>
                </tr>
              </thead>

              <tbody>

                <?php

                while($slidersorgu=$sorgucek->fetch(PDO::FETCH_ASSOC)) {

                
                  ?>

              
                <tr>
                  <td><?php echo $slidersorgu['slider_ad'] ?></td>
                  <td><?php echo $slidersorgu['slider_url'] ?></td>
                  <td><?php echo $slidersorgu['slider_resim'] ?></td>
                  <td><?php echo $slidersorgu['slider_sira'] ?></td>
                  <td><?php echo $slidersorgu['slider_aciklama'] ?></td>
                  <td> <?php echo $slidersorgu['slider_durum']=='1' ?"Aktif" :'Pasif' ?></td>
<input type="hidden" id="first-name" required="required" value="<?echo $$slidersorgu ['meu_id'];?>" name="meu_id">
                 <td><center><a href="menuduzenle.php?meu_id=<?=$$slidersorgu['meu_id']?>"><button class="btn btn-primary btn-xs">Düzenle</button></a></center></td>
                 
                </tr>
      
          

                <?php  }
 
                 
                ?>


              </tbody>
            </table>


            <div class="modal" id=menuekle>

                <div class="modal-dialog ">
                    <div class="modal-content">
                        <div class="modal-body">
                            <form action="../netting/islem.php" method="POST" id="form2" enctype="multipart/form-data" data-parsley-validate
                                  class="form-horizontal form-label-left">

                                <div class="form-group">

                                    <div class="col-md-12 col-sm-6 col-xs-12">
                                        <input type="text" id="" required="required" placeholder="Slider Başlık" name="slider_ad" value=""
                                               class="form-control col-md-7 col-xs-12">
                                    </div>

                                </div>

                        

                        <div class="form-group">

                            <div class="col-md-12 col-sm-6 col-xs-12">
                                <input type="text" id="slider_url"  placeholder="Slider Link" name="slider_url" value=""
                                       class="form-control col-md-7 col-xs-12">
                            </div>

                        </div>
                        <div class="form-group">

                            <div class="col-md-12 col-sm-6 col-xs-12">
                                <input type="file" id="slider_resim" required="required" placeholder="Slider Görsel" name="slider_resim"
                                       class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                         <div class="form-group">

                            <div class="col-md-12 col-sm-6 col-xs-12">
                                <input type="text" id="slider_aciklama"  placeholder="Slider Açıklama" name="slider_aciklama" value=""
                                       class="form-control col-md-7 col-xs-12">
                            </div>

                        </div>

                          <div class="form-group">

                            <div class="col-md-12 col-sm-6 col-xs-12">
                                <input type="text" id="slider_sira"  placeholder="Sıra" name="slider_sira" value=""
                                       class="form-control col-md-7 col-xs-12">
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="checkbox" id="slider_durum" name="slider_durum" checked="checked"
                                       class="form-control col-md-2 col-xs-12 " style="width: auto;">
                                <label for="slider_durum" class="slider_durum"
                                       style="margin-top: 10px;margin-left: 10px;">Aktif</label>
                                <script type="text/javascript">
                                    $(document).ready(function () {
                                        var checkBox = $("#slider_durum");

                                        checkBox.click(function () {
                                            checkBox = ($("#slider_durum").is(':checked')) ? 1 : 0;


                                            var text = $(".slider_durum");


                                            if (checkBox < 1) {
                                                text.html("Pasif");
                                            } else {
                                                text.html("Aktif");
                                            }
                                        });
                                    });
                                </script>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 ">
                              
                                <button type="submit" name="sliderkaydet" class="btn btn-success">Güncelle</button>
                            </div>

                        </div>
                        </form>
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