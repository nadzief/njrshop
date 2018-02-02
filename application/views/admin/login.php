<!DOCTYPE html>
<html>

<head>
    <title>
        <?php echo $judul; ?> </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/admin/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
</head>

<body style="background-color: slategray;">
    <div class="container" style="margin-top: 40px;">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4> <b> Login Admin </b> </h4>
                    </div>
                    <div class="panel-body">
                        <form id="loginform" role="form" method="POST" action="<?php echo site_url().'login/cekLogin_admin'; ?>">
                            <fieldset>
                                <div class="row">
                                    <div class="center-block">
                                        <img class="profile-img" src="https:////ssl.gstatic.com/accounts/ui/avatar_2x.png" alt="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-10 col-md-offset-1">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <i class="input-group-addon"><i class="fa fa-user"></i>
                                                </i>
                                                <input class="form-control" placeholder="Username" name="username" id="username" type="text" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <i class="input-group-addon"><i class="fa fa-lock"></i></i>
                                                <input class="form-control" placeholder="Password" name="password" id="password" type="password" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-tw btn-block"> <i class="fa fa-sign-in"> </i> </button>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="panel-footer">
                        Copyrights &copy; NJr Shop Company Music &reg; Reserved &trade;
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>