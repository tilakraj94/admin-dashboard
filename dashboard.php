<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css"/>
  <link rel="stylesheet" href="css/parsley.css"/>
  <link rel="stylesheet" href="css/morris.css"/>
  
  
</head>
   <!-- Default Bootstrap Navbar -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <i class="fa fa-home" style="font-size: 38px;margin-top:4px;" aria-hidden="true"></i>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class=""><a href="/">Home</a></li>
            
            <li class=""><a href="/">About</a></li>
            <li class=""><a href="/">Contact</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
          <li><a href="https://foodquo.com">FAQ?</a></li>
            <li><a href="/">Hello,<strong>Admin</strong></a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
    <div id="__floating_div" class="btn btn-success">
   <div id="__floating_child">
   </div>
   <span style="font-size:10px">Tap to close</span>
   </div> 
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 ">
        <div class="row img-hover">
          <div class="col-xs-6 col-sm-3">
            <center>
              <a data-toggle="modal" data-target="#myModal">
                <img src="images/postman.jpg" width="200" height="200" class="img-circle" alt="Generic placeholder thumbnail">
              </a>
            </center>
            <br>
            <center><h4 class="label label-default dashboard_labels">Send Mail</h4></center>
          </div>
          <div class="col-xs-6 col-sm-3 ">
            <center>
              <a href="">
                <img src="images/find.jpg" width="200" height="200" class="img-circle" alt="Generic placeholder thumbnail">
              </a>
            </center>
            <br>
            <center><h4 class="label label-default dashboard_labels">Find User</h4></center>
          </div>
          <div class="col-xs-6 col-sm-3 ">
            <center>
              <a href="">
                <img src="images/analysiss.jpg" width="200" height="200" class="img-circle" alt="Generic placeholder thumbnail">
              </a>
            </center>
            <br>
            <center><h4 class="label label-default dashboard_labels">Analytics</h4></center>
          </div>
          <div class="col-xs-6 col-sm-3 ">
            <center>
              <a href="">
              <img src="images/add_user.jpg" width="200" height="200" class="img-circle" alt="Generic placeholder thumbnail">
              </a>
            </center>
            <br>
            <center><h4 class="label label-default dashboard_labels">Add User</h4></center>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <fieldset>
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" name="form_modal_close" class="close" data-dismiss="modal">&times;</button>
                <center><h4 class="modal-title">Select Template</h4></center>
              </div>
              <div class="modal-body">
                <div class="row img-hover">
                  <div class="col-xs-4 col-sm-4">
                    <a class="template_selection" data-selection="leaving">
                      <img src="images/user.png" width="120px" height="120px">
                      </a>
                      <div class="caption">
                        <div class="label label-danger template_labels">Leaving Users</div>
                      </div>
                  </div>
                  <div class="col-xs-4 col-sm-4">
                    <a class="template_selection" data-selection="crying">
                      <img src="images/user.png"  width="120px" height="120px">
                      <div class="caption">
                        &nbsp;&nbsp;<div class="label label-warning template_labels">Crying Users</div>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-4 col-sm-4">
                    <a class="template_selection" data-selection="random">
                      <img src="images/user.png"  width="120px" height="120px">
                      <div class="caption">
                        <div class="label label-primary template_labels">Random Users</div>
                      </div>
                    </a>
                  </div>
                </div>
                <br>
                <div class="row img-hover">
                  <div class="col-xs-4 col-sm-4">
                    <a class="template_selection" data-selection="regular">
                      <img src="images/user.png" width="120px" height="120px">
                      <div class="caption">
                        <div class="label label-success template_labels">Regular Users</div>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-4 col-sm-4">
                    <a class="template_selection" data-selection="unsatisfied">
                      <img src="images/user.png"  width="120px" height="120px">
                      <div class="caption">
                      <div class="label label-info template_labels">Unsatisfied Users</div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <br>
              <br>
            </div>
          </fieldset>
          <fieldset>
            <div class="modal-content">
              <form data-parsley-validate method="post">
              <div class="modal-header">
                <button type="button" name="form_modal_close" class="close" data-dismiss="modal">&times;</button>
                <center><h4 id="form_modal_title" class="modal-title"></h4></center>
              </div>
              <div id="form_modal_body" class="modal-body">
                <input type="text" required="required" required placeholder="Enter the username" value="" name="name" class="txt">
                <input type="text" data-parsley-type="email" required placeholder="Enter the email ID" value="" name="email" class="txt">
                <textarea placeholder="Extra information,If any?" data-parsley-required="false" name="mess" type="text" class="txt_3"></textarea>
                <button type="button" data-color="#0000FF" class="btn btn-default btn-circle"><i class="glyphicon glyphicon-ok"></i></button>
                <button type="button" data-color="#FFFFFF" class="btn btn-primary btn-circle"></button>
                <button type="button" data-color="#008000" class="btn btn-success btn-circle"></button>
                <button type="button" data-color="#00FFFF" class="btn btn-info btn-circle"></button>
                <button type="button" data-color="#FFA500" class="btn btn-warning btn-circle"></button>
                <button type="button" data-color="#FF0000" class="btn btn-danger btn-circle"></button>
              </div>
              <div class="modal-footer">
                <button type="button" id="previous" class="btn btn-default"><i class="fa fa-angle-double-left" aria-hidden="true"></i>Previous</button>
                <button type="submit" id="form_submit" class="btn btn-default btn-success"><span id="send_button">Send</span>&nbsp;<img  style="height: 13px;display: none;" id="rolling_gif" src="images/rolling.gif"></button>
              </div>
            </form>
            </div>
          </fieldset>
          </div>
        </div>
        <!--modal end-->
      </div>
        <hr>
    </div>
    <br>
    <div class="row">
        <div class="panel panel-default">
        <div class="panel-heading"><b><i class="fa fa-line-chart" aria-hidden="true">Traffic</i></b>
        </div>
        <div class="panel-body">
          <div class="col-md-12">
              <div id="area-example" style="height: 300px;"></div>
          </div>
          <div class="col-md-12">
              <div id="line-example" style="height: 300px;"></div>
          </div>
          </div>
          </div>
        </div>
        <div class="row">
           <div class="col-md-6">
           <div class="panel panel-default">
          <div class="panel-heading"><b><i class="fa fa-pie-chart" aria-hidden="true">Pie Chart</i></b></div>
          <div class="panel-body">
              <div id="donut-example" style="height: 250px;"></div>
          </div>
          </div>
          </div>
           <div class="col-md-6">
           <div class="panel panel-default">
          <div class="panel-heading"><b><i class="fa fa-bar-chart" aria-hidden="true">Bar Chart</i></b></div>
          <div class="panel-body">
              <div id="bar-example" style="height: 250px;"></div>
          </div>
          </div>
          </div>
        </div>
  </div>


  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="parsley.min.js"></script>
  <script src="morris.js"></script>
  <script>
  $().ready(function(){
    var color_default=true;
    var color_default_button=$('.btn-circle').first();
    var selected="";
    $('fieldset:first-child').fadeIn('Slow');
    $('a.template_selection').on('click',function(e){
      e.preventDefault();
      selected=$(this).attr('data-selection');
      var parent_fieldset = $(this).parents('fieldset');
      var next_step = true;
      if (next_step) {
           parent_fieldset.fadeOut(400, function () {
             if(selected=="leaving")
             $('#form_modal_title').html('<span class="label label-danger">Leaving Users</span>');
             else if(selected=="crying")
             $('#form_modal_title').html('<span class="label label-warning">Crying Users</span>');
             else if(selected=="unsatisfied")
             $('#form_modal_title').html('<span class="label label-info">Unsatisfied Users</span>');
             else if(selected=="random")
             $('#form_modal_title').html('<span class="label label-primary">Random Users</span>');
             else if(selected=="regular")
             $('#form_modal_title').html('<span class="label label-success">Regular Users</span>');
             $(this).next().fadeIn();
           });
       }
    });

    $('#previous').on('click',function(e){
      $(this).parents('fieldset').fadeOut(400, function () {
           $(this).prev().fadeIn();
       });
    });
    $('button[name="form_modal_close"]').on('click',function(e){
      e.preventDefault();
      $('#myModal').modal('hide');
      $(color_default_button).html('');
      $('.btn-circle').first().html('<i class="glyphicon glyphicon-ok"></i>');
      $('fieldset:first-child').show();
      $('fieldset:first-child').next().hide()
    });

    $('form').on('submit',function(e){
      e.preventDefault();
      var data=$(this).serialize();
      var color=$(color_default_button).attr('data-color');
      data+='&color='+color+'&selected='+selected;

      $('#rolling_gif').fadeIn("slow");
      $('#send_button').text('Please Wait..');
      $.ajax({
        url:'backend.php',
        data:data,
        type:'POST',
        dataType:'json',
        success:function(data){
          $('#rolling_gif').fadeOut("slow");
          $('#send_button').text('Send');
          if(data.status=="success")
            show__floating_div("Mail has been sent to the user!","success");
          else if(data.status=="error")
            show__floating_div("Mail Sent failed!","danger");
        }
      });
    });

    $('.btn-circle').on('click',function(e){
      if(color_default){
        $('.btn-circle').first().html('');
        $(this).html('<i class="glyphicon glyphicon-ok"></i>');
        color_default_button=$(this);
      }else{
        $(color_default_button).html('');
        $(this).html('<i class="glyphicon glyphicon-ok"></i>');
        color_default_button=$(this);
      }
      color_default=false;
    });


    $('#__floating_div').on('click',function(){
      $('#__floating_div').hide();
    });
    
    show__floating_div=function (data,type){
      $('#__floating_child').html(data);
      if(type=="success"){
        $('#__floating_div').removeClass('btn-warning btn-danger');
          $('#__floating_div').addClass('btn-success');
      }else if(type=="warning")
      {
        $('#__floating_div').removeClass('btn-danger btn-success');
          $('#__floating_div').addClass('btn-warning');
      }else if(type=="danger"){
        $('#__floating_div').removeClass('btn-warning btn-success');
          $('#__floating_div').addClass('btn-danger');
      }
      $('#__floating_div').show();
      window.setTimeout(function(){
        $('#__floating_div').hide();
      },3000);
    };
  });
  </script>

</body>
</html>
