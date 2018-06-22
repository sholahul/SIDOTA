<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap template 3.3.7-->
        <link href="<?=base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        
        <!-- fonts googlelapis online -->
        <link href='http://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!-- Our Styles -->
        <link href="<?=base_url('assets/vendor/own_admin.css')?>" rel="stylesheet">
        <script src="<?=base_url('assets/vendor/admin.js')?>" type="text/javascript" charset="utf-8" async defer></script>
        <link href="//code.ionicframework.com/nightly/css/ionic.css" rel="stylesheet">
        <script src="//code.ionicframework.com/nightly/js/ionic.bundle.js"></script>
        <link href="<?=base_url('assets/vendor/style_input.css')?>" rel="stylesheet">
            <script>
            function filter(input){
                var hex = /[^a-z0-9]/gi;
                input.value = input.value.replace(hex,"");
            }
            function femail(input){
                var hex = /[^a-z0-9@._]/gi;
                input.value = input.value.replace(hex,"");
            }
            function fnohp(input){
                var hex = /[^0-9]/gi;
                input.value = input.value.replace(hex,"");
            }
            function fchar(input){
                var hex = /[^a-z ]/gi;
                input.value = input.value.replace(hex,"");
            }
            
            function RestrictSpace() {
                if (event.keyCode == 32) {
                    return false;
                }
            }
        </script>
    </head>
    <body>
        <div class="footer">
            <div class="footer-inner">
                <div class="footer-content">
                    <span>
                        Dazzle &copy; 2018
                    </span>
                    &nbsp; &nbsp;
                    <span class="action-buttons">
                        <a href="#">
                            <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                        </a>
                        <a href="#">
                            <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
                        </a>
                        <a href="#">
                            <i class="ace-icon fa fa-rss-square orange bigger-150"></i>
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </body>
</html>