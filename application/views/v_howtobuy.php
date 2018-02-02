<div id="content">

    <div class="tops" style="background-color: skyblue; width: 1100px; height: 200px;">
        <div class="media-body">
            <div class="col-md-pull-7" style="margin-top: 20px;">
                <img src="<?php echo base_url(); ?>image/beli.png">
            </div>
            <div class="col-md-3" style="margin-left: 400px; margin-top: -155px;">
                <img src="<?php echo base_url(); ?>image/bayar.png">
            </div>
            <div class="col-md-pull-5" style="margin-left: 890px; margin-top: -150px;">
                <img src="<?php echo base_url(); ?>image/terima-barang.png">
            </div>
        </div>
    </div>

    <?php foreach ($datahowtobuy as $howtobuy) { ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-primary" style="border-radius: 0px; margin-top: 10px; margin-left: -300px; width: 1080px;">
                    <div class="panel-heading" style="border-radius: 0px;">
                        <h3 class="panel-title"> <?php echo $howtobuy->judul; ?> </h3>
                        <span class="pull-right">
                        <!-- Tabs -->
                        <ul class="nav panel-tabs">
                            <li class="active"><a href="#tab1" data-toggle="tab">Step 1</a></li>
                            <li><a href="#tab2" data-toggle="tab">Step 2</a></li>
                            <li><a href="#tab3" data-toggle="tab">Step 3</a></li>
                            <li><a href="#tab4" data-toggle="tab">Step 4</a></li>
                            <li><a href="#tab5" data-toggle="tab">Step 5</a></li>
                            <li><a href="#tab6" data-toggle="tab">Step 6</a></li>
                            <li><a href="#tab7" data-toggle="tab">Step 7</a></li>
                            <li><a href="#tab8" data-toggle="tab">Step 8</a></li>
                            <li><a href="#tab9" data-toggle="tab">Step 9</a></li>
                        </ul>
                    </span>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab1">
                                <h3> <?php echo $howtobuy->q1; ?> </h3>
                                <p>
                                    <?php echo $howtobuy->a1; ?>. </p>
                            </div>

                            <div class="tab-pane fade" id="tab2">
                                <h3> <?php echo $howtobuy->q2; ?> </h3>
                                <p>
                                    <?php echo $howtobuy->a2; ?>. </p>
                            </div>

                            <div class="tab-pane fade" id="tab3">
                                <h3> <?php echo $howtobuy->q3; ?> </h3>
                                <p>
                                    <?php echo $howtobuy->a3; ?>. </p>
                            </div>

                            <div class="tab-pane fade" id="tab4">
                                <h3> <?php echo $howtobuy->q4; ?> </h3>
                                <p>
                                    <?php echo $howtobuy->a4; ?>. </p>
                            </div>

                            <div class="tab-pane fade" id="tab5">
                                <h3> <?php echo $howtobuy->q5; ?> </h3>
                                <p>
                                    <?php echo $howtobuy->a5; ?>. </p>
                            </div>

                            <div class="tab-pane fade" id="tab6">
                                <h3> <?php echo $howtobuy->q6; ?> </h3>
                                <p>
                                    <?php echo $howtobuy->a6; ?>. </p>
                            </div>

                            <div class="tab-pane fade" id="tab7">
                                <h3> <?php echo $howtobuy->q7; ?> </h3>
                                <p>
                                    <?php echo $howtobuy->a7; ?>. </p>
                            </div>

                            <div class="tab-pane fade" id="tab8">
                                <h3> <?php echo $howtobuy->q8; ?> </h3>
                                <p>
                                    <?php echo $howtobuy->a8; ?>. </p>
                            </div>

                            <div class="tab-pane fade" id="tab9">
                                <h3> <?php echo $howtobuy->q9; ?> </h3>
                                <p>
                                    <?php echo $howtobuy->a9; ?>. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>