<? 

include "header.php";

?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Sosyal Ayarlar <small>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Facebook <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="ayar_title" value="<?echo $ayarcek 
                          ['ayar_facebook'];?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                     
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tiwitter <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="ayar_twitter" value="<?echo $ayarcek 
                          ['ayar_twitter'];?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Googel <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="ayar_google" value="<?echo $ayarcek 
                          ['ayar_google'];?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Youtube <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="ayar_youtube" value="<?echo $ayarcek 
                          ['ayar_youtube'];?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                    
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                         
                          <button type="submit" name="sosyalayarkaydet" class="btn btn-success">Güncelle</button>
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