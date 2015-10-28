<?php
//la pagina base che uso per mostrare una view
return "<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01//EN' 'http://www.w3.org/TR/html4/strict.dtd'>
<html>
     <head>
        <title>$pageData->title</title>
              
        $pageData->css
        $pageData->embeddedStyle
        
	<meta http-equiv='content-type' content='text/html; charset=utf-8' >
		
	<script type='text/javascript' language='javascript' src='libs/Jquery/jquery 2.0.0.min.js'></script>
	<script type='text/javascript' language='javascript' src='libs/DataTables-1.10.6/media/js/jquery.dataTables.min.js'></script>
        <script type='text/javascript' language='javascript' src='libs/bootstrap-3.3.5-dist/js/bootstrap.min.js'></script>
        
        <!-- JQuery UI datetime Picker -->
        <script type='text/javascript' language='javascript' src='libs/JQuery UI DatePicker/jquery-ui.min.js'></script>
        <link href='libs/JQuery UI DatePicker/jquery-ui.min.css' rel='stylesheet'>
        <!--file per la lingua-->
        <script type='text/javascript' src='libs/JQuery UI DatePicker/ui.datepicker-it.js' ></script>

	<!-- Bootstrap core CSS -->
        <link href='libs/bootstrap-3.3.5-dist/css/bootstrap.min.css' rel='stylesheet'>
        <!-- Bootstrap theme -->
        <link href='libs/bootstrap-3.3.5-dist/css/bootstrap-theme.min.css' rel='stylesheet'>       
        <link href='libs/DataTables-1.10.6/media/css/jquery.dataTables.min.css' rel='stylesheet'>

        <script type='text/javascript' charset='utf-8'>

	</script>
 
    </head>
    
        <body>
    <div id='wrap' >
    <div id='container' class='container-fluid'>
     
         <div class='well' id='header'>
         $pageData->header
        </div>
     
        <div class='well'id='info'>
        <div class='alert alert-info'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Attenzione!</strong> $pageData->info </div>
        </div>
        
        <div class='well' id='content'>
 

<!--form modale per LOGIN--!>
<div class='alert alert-success collapse' id='stampaEseguita1'> <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>

</div>
<!-- Trigger the modal with a button -->
  <button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#myModal1'>Login Modal</button>

  <!-- Modal -->
  <div class='modal fade in' id='myModal1' role='dialog'>
    <div class='modal-dialog'>
    
      <!-- Modal content-->
      <div class='modal-content'>
        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal'>&times;</button>
          <h4 class='modal-title'>Modal Header</h4>
        </div>
        <div class='modal-body'>
          <p>Some text in the modal.</p>
          <form class='contact1' name='contact1'>
                <label class='label label-primary' for='user_name'>Your E-mail</label><br>
                <input type='email' name='user_name' class='input-xlarge'><br>
                <label class='label label-primary' for='user_password'>Your Password</label><br>
                <input type='text' name='user_password' class='input-xlarge'><br>                             
                <input type='checkbox' name='user_rememberme' class='checkbox' value='0' />
                <label for='user_rememberme'>REMEMBER ME</label>

 <input type='hidden' name='login' value='login'><br> 
        </form>
        </div>
        <div class='modal-footer'>
               <input class='btn btn-success' type='submit' value='Send!' id='submit1'>
                <a href='#' class='btn' data-dismiss='modal'>Nah.</a>
        </div>
      </div>
      
    </div>
  </div>
<!--FINE form modale per LOGIN--!>
-------------

<div class='col-sm-12'>$pageData->otherHTML</div>
<div class='row well'> 
        <div class='col-sm-2'> $pageData->contentLeft</div>
        <div class='col-sm-9'> $pageData->contentRight</div> 
             <div class='col-sm-1'> </div>
        </div> <!--row-->    
         $pageData->scriptElements
        </div>
        
  
        <div class='well' id='footer'>
        $pageData->footer
        </div>
       
    </div> <!--container-->
   </div><!-- /wrap -->    
    </body>
</html>";
