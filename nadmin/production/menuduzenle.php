<? 

include "header.php";
$menusor=$db->prepare("SELECT * FROM menu where meu_id=:id");
$menusor->execute(array(

'id'=>$_GET['meu_id']
));
$say=$menusor->rowCount();
$menucek=$menusor->fetch(PDO::FETCH_ASSOC);
?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Menu Düzenle <small>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menu Başlık <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="menu_ad"  name="menu_ad" value="<?echo $menucek ['menu_ad'];?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                     
                          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Farklı Url <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="farkli_url"  value="<?echo $menucek ['farkli_url'];?>" name="farkli_url" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menu Url <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="menu_url"  value="<?echo $menucek ['menu_url'];?>" name="menu_url" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ust Menu <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="menu_ust"  value="<?echo $menucek ['menu_ust'];?>" name="menu_ust" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menu Sıra <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="menu_sira"  value="<?echo $menucek ['menu_sira'];?>" name="menu_sira" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Durum <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <select id="menu_durum" name="menu_durum" class="form-control">
                            
                            <option value="1" <?=$menucek ['menu_durum']=='1'? 'select=""' :''; ?>>Aktif</option>  
                            <option value="0" <?=$menucek ['menu_durum']=='0'? 'select=""' :''; ?>>Pasif</option> 
                          


                         </select>
                        </div>
                      </div>
                      <div class="form-group" style="left: 25%;position: relative;">
                        
                        <div class="col-md-6 col-sm-12 col-xs-12">
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
                    <input type="hidden" id="first-name" required="required" value="<?=$menucek ['meu_id'];?>" name="meu_id">
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                         
                          <button type="submit" name="menuduzenle" class="btn btn-success">Güncelle</button>
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