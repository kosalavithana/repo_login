<?php ?>
<html>
    <head>
        <title>login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <script>
            $(function () {
                $("#log").click(function () {
                    var username = $("#name").val();
                    var pw = $("#pw").val();

                    if (username === "" || pw === "") {
                        if (username === "") {
                            $("#err_pw").hide();
                            $("#err_name").show();
                        }
                        if (pw === "") {
                            $("#err_name").hide();
                            $("#err_pw").show();
                        }
                        if (username === "" && pw === "") {
                            $("#err_name").show();
                            $("#err_pw").show();
                        }
                        return false;
                    } else {
                        $("#err_name").hide();
                        $("#err_pw").hide();
                    }
                    var data = $("#form_login_ajax").serialize();
                    $.ajax({
                        type: "POST",
                        url: '<?= base_url(); ?>login_cntrl/user_login',
//                        url: 'http://localhost/kosala_mvc_pro/login/login_cntrl/user_login',
//                        url: 'http://kbtpl.com/kosala/login/login_cntrl/user_login',
                        data: data,
                        dataType: "json",
                        success: function (data) {
                            if (data === true) {//user available
                                alert(data);
                                window.location.href = 'http://kbtpl.com/kosala/login/home/welcomehome';
                                return true;
                            } else {//user not available
                                alert(data);
                            }

                        }
                    });
                    return false;

                });
            });
        </script>
    </head>
    <body>
        <?php echo form_open('', array("id" => "form_login_ajax")); ?>
        <div class="container-fluid">
            <div class="row" style="height: 100px">
                <p class="well text-center"><b><strong>Log in</strong></b>
                    <span class="pull-right">
                        <!--<a href="http://kbtpl.com/kosala/login/home/index/"><i class="fa fa-home">home</i></a>-->
                        <a href="<?= base_url();?>home/index/"><i class="fa fa-home">home</i></a>
                        <!--<a href="http://localhost/kosala_mvc_pro/login/home/index/"><i class="fa fa-home">home</i></a>-->

                    </span></p>
            </div>
            <div class="col-md-2">

            </div>
            <div class="col-md-8">
                <div class="form-group row">
                    <label class="control-lable col-md-2 lead" for="username" >User name :</label>
                    <div class="col-md-7">
                        <input id="name" type="text" class="form-control" name="name" placeholder="username" />
                    </div>
                    <div hidden="" id="err_name" class="col-md-3">
                        <p>user name can not be empty</p>

                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-lable col-md-2 lead" for="pw" >Password :</label>
                    <div class="col-md-7">
                        <input type="password" class="form-control" id="pw" name="pw" placeholder="password" />
                    </div>
                    <div id="err_pw" hidden="" class="col-md-3">
                        <p>password can not be empty</p>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-5">
                        <button id="log" type="submit" name="submit" class="btn btn-default" >Log in</button>
                    </div>
                    <div hidden="" id="user" class="col-md-5">

                    </div>
                </div>
            </div>
            <div class="col-md-2">

            </div>
        </div>
    </form>
</body>
</html>