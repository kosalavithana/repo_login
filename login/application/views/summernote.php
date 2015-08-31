<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<script src="//code.jquery.com/jquery-1.9.1.js"></script> 
  <!-- include libraries BS3 -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" />
<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
 
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.min.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/theme/blackboard.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/theme/monokai.min.css">
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/mode/xml/xml.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/2.36.0/formatting.min.js"></script>
  
<!-- include summernote css/js-->
<link href="include/summernote.css"  rel="stylesheet"></link>
<script src="include/summernote.js"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 500
        });
    });
</script>
<head>
    <title>Editor Summernote</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>

<body>
    <div class="container">
            <div class="row">
                <?php echo $error;?>
                <?php echo form_open_multipart('upload/do_upload');?>
                <!--<form class="span12" id="postForm" action="/whateveryouwant.php" method="POST" enctype="multipart/form-data" >-->
                    <fieldset>
                        <legend>MyCodde.Blogspot.com Editor</legend>
                        <p class="container">
                            <textarea class="input-block-level" id="summernote" name="content" rows="18">
                            </textarea>
                        </p>
                    </fieldset>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
    </div>
</body>
</html>