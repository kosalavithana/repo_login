<html>
    <head>
        <title>Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    </head>
    <body style="background-image:url(http://imgak.mmtcdn.com/mi8/images/homebg/hlp_in_bg_20150106.jpg)">
        <div class="container-fluid">
            <div class="row" style="height: 100px" >
                <div class="col-md-10">

                </div>
                <div class="col-md-1 lead" style="color: white">
                    
                    <!--$config['base_url'] = 'http://localhost/kosala_mvc_pro/login';-->
                    <?php /* var_dump(base_url());die();*/?> 
                    <a href="<?= base_url();?>home/newuser/"><i class="fa fa-user">new user</i></a>
                    <!--<a href="http://localhost/kosala_mvc_pro/login/home/newuser/"><i class="fa fa-user">new user</i></a>-->
                    <!--<a href="http://kbtpl.com/kosala/login/home/newuser/"><i class="fa fa-user">new user</i></a>-->
                </div>
                <div class="col-md-1 lead" style="color: white">
                    <!--<a href="http://kbtpl.com/kosala/login/home/login/"><i class="fa fa-sign-in">Log In</i></a>-->
                    <!--<a href="http://localhost/kosala_mvc_pro/login/home/login/"><i class="fa fa-sign-in">Log In</i></a>-->
                    <a href="<?=  base_url();?>home/login/"><i class="fa fa-sign-in">Log In</i></a>
                </div>
            </div> 
        </div>
    </body>
</html>

