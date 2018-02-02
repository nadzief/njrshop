<div id="content">
    <?php foreach ($datahowtopay as $howtopay) { ?>
    <div class="bs-acc">
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: darkturquoise;">
                  <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"> 
                     <button type="submit" class="btn btn-default" style="width: 1030px; border-radius: 0px;"> <?php echo $howtopay->judul1; ?> 
                     </button>
                  </a>
                  </h4>
                </div>
                
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body" style="background-color: darkturquoise;">
                        <p>
                            <?php echo $howtopay->isi1; ?></p>
                        <p>
                           Toko Pusat Kami : 
                        </p>
                        <p>
                            <div id="map"> </div>
                        </p>
                    </div>
                </div>

            </div>
            
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: darkturquoise;">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"> <button type="submit" class="btn btn-default" style="width: 1030px; border-radius: 0px;"> <?php echo $howtopay->judul2; ?> </button></a>
                </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body" style="background-color: darkturquoise;">
                        <p>
                            <?php echo $howtopay->isi2; ?></p>
                        <?php foreach ($datanorek as $norek) { ?>
                        <p> Bank yang bekerja sama dengan NJr - Shop: </p>
                        <p>
                            <table class="table table-responsive">
                                <tr>
                                    <td> <b> Bank </b> </td>
                                    <td> <b> No. Rek </b> </td>
                                    <td> <b> Atas Nama </b> </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $norek->bank1; ?> </td>
                                    <td>
                                        <?php echo $norek->no_rek1; ?> </td>
                                    <td>
                                        <?php echo $norek->an1; ?> </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $norek->bank2; ?> </td>
                                    <td>
                                        <?php echo $norek->no_rek2; ?> </td>
                                    <td>
                                        <?php echo $norek->an2; ?> </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $norek->bank3; ?> </td>
                                    <td>
                                        <?php echo $norek->no_rek3; ?> </td>
                                    <td>
                                        <?php echo $norek->an3; ?> </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $norek->bank4; ?> </td>
                                    <td>
                                        <?php echo $norek->no_rek4; ?> </td>
                                    <td>
                                        <?php echo $norek->an4; ?> </td>
                                </tr>

                            </table>
                        </p>

                  <?php } ?>

               </div>
            </div>
         </div>
      </div>
   </div>
</div>
                    

<?php } ?>
<style type="text/css">
    .bs-acc {
        margin: 20px;
    }
    #map {
        height: 300px;
        width: 100%;
    }
</style>
<script>
    function initMap() {
        var uluru = {
            lat: -6.204701,
            lng: 106.789689
        };
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 13,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbuLesUraXOKRo0cRY06ihmTOojTu_ex8&callback=initMap">
</script>