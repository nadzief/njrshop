<div id="content">

    <div class="row" style="border: 0px solid; width: 680px; height: 500px; margin-left: 200px;">

        <?php foreach ($datakontak as $kontak) { ?>
        <h2 align="center"> <?php echo $kontak->judul; ?> </h2>
        <div class="garis" style="border: 1px solid;"> </div>
        <br>
        <p style=" text-align: justify;"> Hubungi Kami :
            <p style=" text-align: justify;"> <span class="glyphicon glyphicon-earphone"></span> :
                <?php echo $kontak->telp; ?> |
                <?php echo $kontak->telp2; ?> </p>
            <p style=" text-align: justify;"> <span class="glyphicon glyphicon-globe"></span> :
                <?php echo $kontak->situs; ?> </p>
            <p style=" text-align: justify;"> <span class="glyphicon glyphicon-envelope"></span> :
                <?php echo $kontak->email; ?> </p>
            <p style=" text-align: justify;"> <span class="glyphicon glyphicon-map-marker"></span> :
                <?php echo $kontak->alamat; ?> </p>
            <p>
                <div id="map"> </div>
            </p>
            <?php } ?>
        </p>
    </div>
</div>
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
<style>
    #map {
        height: 400px;
        width: 100%;
    }
</style>