<?php

include 'header.php';

//Belirli veriyi seçme işlemi
$menusor=$db->prepare("SELECT * FROM menu");
$menusor->execute();


?>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Menu Listeleme <small>,

              <?php

                if($_GET){
              if ($_GET['durum']=="ok") {?>

              <b style="color:green;">İşlem Başarılı...</b>

              <?php } elseif ($_GET['durum']=="no") {?>

              <b style="color:red;">İşlem Başarısız...</b>

              <?php }
}

              ?>


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


            <!-- Div İçerik Başlangıç -->
 
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

                while($menucek=$menusor->fetch(PDO::FETCH_ASSOC)) {

                
                  ?>

              
                <tr>
                  <td><?php echo $menucek['menu_ad'] ?></td>
                  <td><?php echo $menucek['menu_url'] ?></td>
                  <td><?php echo $menucek['menu_ust'] ?></td>
                  <td><?php echo $menucek['menu_sira'] ?></td>
                  <td><?php echo $menucek['menu_detay'] ?></td>
                  <td><?php echo $menucek['farkli_url'] ?></td>
                  <td> <?php echo $menucek['menu_durum']=='1' ?"Aktif" :'Pasif' ?></td>
<input type="hidden" id="first-name" required="required" value="<?echo $menucek ['meu_id'];?>" name="meu_id">
                 <td><center><a href="menuduzenle.php?meu_id=<?=$menucek['meu_id']?>"><button class="btn btn-primary btn-xs">Düzenle</button></a></center></td>
                 
                </tr>
      
          

                <?php  }
 
                 
                ?>


              </tbody>
            </table>


            <!-- Div İçerik Bitişi -->


          </div>
        </div>
      </div>
    </div>

<div class="modal" id=menuekle>

   <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-body">
 <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <input type="text" id="menu_ad" required="required" name="menu_ad" placeholder="Menu Başlık" value="<?echo $menucek ['menu_ad'];?>"
                           class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <textarea type="text" id="editor1"  name="menu_detay" placeholder="Detay" class="form-control ckeditor col-md-7 col-xs-12"> <?echo $menucek ['menu_detay'];?>

                          </textarea>
                        </div>
                      </div>
                      <script type="text/javascript">
                        CKEDITOR.replace('editor1',
                        {
                            filebrowserBrowseUrl:'ckfinder/ckfinder.html',
                            filebrowserImageBrowseurl:'ckfinder/ckfinder.html?type=images',
                            fileborwserUploadurl:'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                            forcePasteAsPlainText:true



                        });

                      </script>

                     

                      <div class="form-group">
                       
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <input type="text" id="menu_url"  placeholder="Url" value="<?echo $menucek ['menu_url'];?>" name="menu_url" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <script type="text/javascript">
                        var yazi=$("#menu_ad");
                          yazi.change(function(){
                             $('#menu_url').val(yazi.val());
                          });


                      </script>
                      <div class="form-group">
                        
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <input type="text" id="first-name"  placeholder="Ust menu" value="<?echo $menucek ['menu_ust'];?>" name="menu_ust" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="row">
                      <div class="col-md-6 col-sm-12 col-xs-12">
                          <input type="checkbox" id="menu_durum" name="menu_durum"  checked="checked" class="form-control col-md-2 col-xs-12 " style="width: auto;">
                          <label for="menu_durum" class="menudurum" style="margin-top: 10px;margin-left: 10px;">Aktif</label>
                                    <script type="text/javascript">
                                  $(document).ready(function(){
                                 var checkBox=$("#menu_durum") ; 
                                 
                                checkBox.click(function(){
                                  checkBox = ( $("#menu_durum").is(':checked') ) ? 1 : 0; 
                                 
                                
                                  var text=$(".menudurum");

                                
                                if (checkBox < 1){
                                  text.html("Pasif");
                                } else {
                                 text.html("Aktif");
                                }
                                }); 
                              });
                                    

                                    </script>
                        </div>
                    

                      
                     
                        <div class="col-md-6 col-sm-12 col-xs-12 ">

                          <button type="submit" name="menukaydet" class="btn btn-success">Güncelle</button>
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

<?php include 'footer.php'; ?>
