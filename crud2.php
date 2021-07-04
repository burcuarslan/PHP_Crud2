<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>201913709027</title>
  </head>
  <body>
    <?php
      include("baglan.php");
        if(isset($_POST["siparis_ver"]))
        {  
            $sql="INSERT INTO `201913709027` (`id`, `urun_adi`, `adet`, `birim_fiyat`, `tur`, `aciklama`) 
            VALUES (NULL, '".$_POST['urun_adi']."', '".$_POST['adet']."', '".$_POST['birim_fiyat']."', '".$_POST['tur']."', 
            '".$_POST['aciklama']."')";

            $baglanti->query($sql);
        }
        else if(isset($_POST["kaydet"]))
       {
          $sorgu="UPDATE `201913709027` SET `urun_adi` = '".$_POST['urun_adi']."',`adet` = '".$_POST['adet']."', `birim_fiyat` = '".$_POST['birim_fiyat']."', `tur` = '".$_POST['tur']."', `aciklama` = '".$_POST['aciklama']."' 
          WHERE `201913709027`.`id` = ".$_POST['kayit_no'].";";
          
          $baglanti->query($sorgu);
       }
        else if(isset($_POST["sil"]))
        {
          $sorgu="DELETE FROM `201913709027` WHERE `201913709027`.`id` = ".$_POST['kayit_no'];
          $baglanti->query($sorgu);
          
        }

        else if(isset($_POST["duzenle"]))
        {
          $sorgu="SELECT * FROM `201913709027` WHERE `id` = ".$_POST['kayit_no'];
          $sonuc=$baglanti->query($sorgu);
          $kayit=$sonuc->fetch_assoc();
          
        }
        
      ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <?php
                if(!isset($_POST["duzenle"]))
                {
              ?>
                <form action="" method="POST"> 
                    <div class="row mb-3">
                        <label for="urun_adi" class="col-sm-2 col-form-label">Ürün adı</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" name="urun_adi" >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="adet" class="col-sm-2 col-form-label">Adet</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3" name="adet">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="birim_fiyat" class="col-sm-2 col-form-label">Birim Fiyat</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3" name="birim_fiyat">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="tur">
                                Tür
                            </label>
                            <div class="col-sm-10">
                                
                                <input class="form-check-input" type="radio" name="tur" id="tur" value="toptan">
                                <label class="form-check-label" for="gridRadios1">
                                     Toptan
                                </label>
                                  
                                
                                <input class="form-check-input" type="radio" name="tur" id="tur" value="perakende">
                                <label class="form-check-label" for="gridRadios2">
                                    Perakende
                                </label>
                                                             
                            </div>
                        </div> 
                    </div>
                    <div class="mb-3">
                        <label for="aciklama" class="form-label">Açıklama:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="aciklama"></textarea>
                    </div>
                    <div class="row mb-3">
                        <label for="eposta" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                           
                            <button type="submit" class="btn btn-warning" name="siparis_ver" value="siparis_ver">Sipariş Ver</button>
                        </div>
                    </div>
                </form>
              <?php
                }
                else
                {
              ?>
              <form action="" method="POST"> 
                    <div class="row mb-3">
                        <label for="urun_adi" class="col-sm-2 col-form-label">Ürün adı</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" name="urun_adi" value="<?=$kayit["urun_adi"]?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="adet" class="col-sm-2 col-form-label">Adet</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3" name="adet" value="<?=$kayit["adet"]?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="birim_fiyat" class="col-sm-2 col-form-label">Birim Fiyat</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3" name="birim_fiyat" value="<?=$kayit["birim_fiyat"]?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="tur">
                                Tür
                            </label>
                            <div class="col-sm-10">
                                
                                <input class="form-check-input" type="radio" name="tur" id="tur" value="toptan"
                                  <?=($kayit["tur"]=="toptan")?"checked":""?>
                                >
                                <label class="form-check-label" for="gridRadios1">
                                     Toptan
                                </label>
                                  
                                
                                <input class="form-check-input" type="radio" name="tur" id="tur" value="perakende"
                                  <?=($kayit["tur"]=="perakende")?"checked":""?>
                                >
                                <label class="form-check-label" for="gridRadios2">
                                    Perakende
                                </label>
                                                             
                            </div>
                        </div> 
                    </div>
                    <div class="mb-3">
                        
                        <label for="aciklama" class="form-label">Açıklama:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="aciklama" ><?php echo $kayit["aciklama"]?></textarea>
                    </div>
                    <div class="row mb-3">
                        <label for="eposta" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <input type="hidden" name="kayit_no" value="<?=$kayit["id"]?>">
                            <button type="submit" class="btn btn-warning" name="kaydet" value="kaydet">Kaydet</button>
                        </div>
                    </div>
                </form>
              <?php
                }
              ?>  
            </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Ürün Adı</th>
                    <th scope="col">Tür</th>
                    <th scope="col">Adet</th>
                    <th scope="col">Birim Fiyatı</th>
                    <th scope="col">Toplam Fiyat</th>
                    <th scope="col">İşlem</th>
                    
                  </tr>
                 
                </thead>
                <tbody>
                  <?php
                    $sorgu="SELECT * FROM `201913709027`";
                    $sonuc=$baglanti->query($sorgu);
                    $i=0;
                    $toplam=0;
                    $toplam_adet=0;
                    $toplam_birim_fiyat=0;
                    $toplam_fiyat=0;
                    while($kayit=$sonuc->fetch_assoc())
                    {
                        $i++;
                        $toplam=$kayit["adet"]*$kayit["birim_fiyat"];
                        $toplam_adet=$toplam_adet+$kayit["adet"];
                        $toplam_birim_fiyat=$toplam_birim_fiyat+$kayit["birim_fiyat"];
                        $toplam_fiyat=$toplam_fiyat+$toplam;
                  ?>
                    <tr>
                      <th scope="row"><?=$i?></th>
                      <td><?=$kayit["urun_adi"]?></td>
                      <td><?=$kayit["tur"]?></td>
                      <td><?=$kayit["adet"]?></td>
                      <td><?=$kayit["birim_fiyat"]?></td>
                      <td><?=$toplam?></td>
                      
                      
                      <td>
                        <form action="" method="post">
                          <input type="hidden" name="kayit_no" value="<?=$kayit["id"]?>">
                          <button type="update" class="btn btn-success" name="duzenle" value="duzenle">düzenle</button>
                          <button type="submit" class="btn btn-danger" name="sil" value="sil">sil</button>
                         
                        </form>
                     
                      <?php
                        }         
                      ?>
                       </td>
                      <tfoot>
                      <td colspan="3">Toplam</td>
                      <th scope="col"><?=$toplam_adet?></th>
                      <th scope="col"><?=$toplam_birim_fiyat?></th>
                      <th scope="col"><?=$toplam_fiyat?></th>
                      </tfoot>
                    </tr>
                </tbody>
            </table>
          </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>