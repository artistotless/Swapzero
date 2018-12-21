         <?php
include ($_SERVER['DOCUMENT_ROOT']."/settings/config.php");

?>

<body class="fixed-nav sticky-footer" id="page-top" style="">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav" style="">
  	  <!-- HEAD BLOCK-->
    <?php include($site_url.'blocks/head.php'); ?>
    
      <!-- MENU BLOCK-->
    <?php include($site_url.'blocks/menu.php'); ?>
    
    
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
    
        <!-- PITCH BLOCK-->
      <?php include($site_url.'blocks/pitch.php'); ?>
    
    <!-- CONTENT BLOCK-->
      <?php echo
      '
      <div class="row">
            <div class="col-xl-2 col-md-3" style="
    flex: 0 0 100%;
    max-width: 100%;
">
            	<div class="tab_nav">
                	<ul role="tablist" id="pills-tab" class="nav nav-pills">
                  <li class="nav-item">
                    <a href="#tab1" data-toggle="tab" class="tab-link active">Контент отсутствует</a>
                  </li>
                  
                  
                  
                </ul>
                </div>
            </div>
            
        </div>
      
      ';
      	?>

  <!-- LOGIN BLOCK-->
<?php include($site_url.'pages/login.php');?> 


    
    
    <!-- FOOTER BLOCK-->
    <?php include($site_url.'blocks/footer.php');?> </div>

  
    <!-- SCRIPTS BLOCK-->
   <?php include($site_url.'blocks/scripts.php'); ?>
  </div>

    <script>  
    
$("#sumstart" ).change(function () {

var sum = $( "#sumstart" ).val();

$("#sumfull" ).val(sum);


  })
</script>

</body></html>
        