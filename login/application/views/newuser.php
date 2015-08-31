
<html>
    <head>
        <title>create user</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <script>
            $(function () {
                $("#create").click(function () {
                    var username = $("#name").val();
                    var pw = $("#pw").val();
                    $("#user").hide();

                    if (username === "" || pw === "") {
                        if (username === "" && pw === "") {
                            $("#err_name").html('Please enter user name').show();
                            $("#err_pw").html('Please enter password').show();
                        }
                        else if (username === "") {
                            $("#err_name").html('Please enter user name').show();
                            $("#err_pw").hide();
                        } else if (pw === "") {
                            $("#err_pw").html('Please enter password').show();
                            $("#err_name").hide();
                        }
                        return false;
                    } else {
                        $("#err_pw").hide();
                        $("#err_name").hide();
                    }
                    var data = $('#form_ajax').serialize();
                    $.ajax({
                        //base url : http://localhost/kosala_mvc_pro/login/
                        //../home/newuser/
                        type: "POST",
//                        url: 'user_create/check_user',
                        url: 'http://localhost/kosala_mvc_pro/login/user_create/check_user',
//                        url: 'http://www.kbtpl.com/kosala/login/user_create/check_user',
                        data: data,
                        dataType: "json",
                        success: function (result) {
                            alert(result);
                            if (result === true) {//user not create create
                                $("#user").html('user already exist.').show();
                            } else {// user create successs
                                $("#user").html('user created.').show();
                            }
                        }
                    });
                    return false;
                });
            });
        </script>
    </head>
    <body>
        <?php echo validation_errors(); ?>
        <?php echo form_open('', array("id" => "form_ajax")); ?>
        <div class="container-fluid">
            <div class="row" style="height: 100px">
                <p class="well text-left"><b>Create new user</b>
                    <span class="pull-right">
                        <!--<a href="http://kbtpl.com/kosala/login/home/index/"><i class="fa fa-home">home</i></a>-->
                        <a href="<?= base_url(); ?>home/index/"><i class="fa fa-home">home</i></a>
                        <!--<a href="http://localhost/kosala_mvc_pro/login/home/index/"><i class="fa fa-home">home</i></a>-->
                        <!--<a href="http://kbtpl.com/kosala/login/home/login/"><i class="fa fa-sign-in">Log in</i></a>-->
                        <a href="<?= base_url(); ?>home/login/"><i class="fa fa-sign-in">Log in</i></a>
                        <!--<a href="http://localhost/kosala_mvc_pro/login/home/login/"><i class="fa fa-sign-in">Log in</i></a>-->
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

                    </div>
                </div>
<!--                <div class="form-group row">
                    <label class="control-lable col-md-2 lead" for="username" >Email :</label>
                    <div class="col-md-7">
                        <input id="email" type="text" class="form-control" name="email" placeholder="" />
                    </div>
                    <div hidden="" id="err_name" class="col-md-3">

                    </div>
                </div>-->
                <div class="form-group row">
                    <label class="control-lable col-md-2 lead" for="pw" >Password :</label>
                    <div class="col-md-7">
                        <input type="password" class="form-control" id="pw" name="pw" placeholder="password" />
                    </div>
                    <div id="err_pw" hidden="" class="col-md-3">

                    </div>
                </div>
<!--                <div class="form-group row">
                    <label class="control-lable col-md-2 lead" for="username" >Password Confirm :</label>
                    <div class="col-md-7">
                        <input id="pwconf" type="password" class="form-control" name="pwconf" placeholder="" />
                    </div>
                    <div hidden="" id="err_name" class="col-md-3">

                    </div>
                </div>-->
                <div class="row">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-5">
                        <button id="create" type="submit" name="submit" class="btn btn-default" >Create user</button>
                    </div>
                    <div hidden="" id="user" class="col-md-5">
                        <p>User already created</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">

            </div>
        </div>
        <!--</form>-->
        <?php echo form_close(); ?>
    </body>
</html>