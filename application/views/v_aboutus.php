
<div id="content">

    <div class="row" style="border: 0px solid; width: 680px; height: 500px; margin-left: 200px;">
        <?php foreach ($dataaboutus as $aboutus) { ?>
        <h1 align="center"> <?php echo $aboutus->judul; ?> </h1>
        <div class="garis" style="border: 1px solid;"></div>
        <br>
        <p style=" text-align: justify;">
            <?php echo $aboutus->isi; ?> </p>
        <p style=" text-align: justify;"> Visi : </p>
        <p style=" text-align: justify;">
            <?php echo $aboutus->visi; ?> </p>
        <p style=" text-align: justify;"> Misi : </p>
        <p style=" text-align: justify;">
            <?php echo $aboutus->misi; ?> </p>
        <p style=" text-align: justify;">
            <?php echo $aboutus->misi2; ?> </p>
        <?php } ?>
</div>
</div>
 