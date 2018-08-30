    <?php 

  file_put_contents("time.php", time()."\nEND"); 

  ?>
  <html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="stylesheet" type="text/css" href="includes/bootstrap-3.3.7/dist/css/bootstrap.min.css">
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="includes/bootstrap-3.3.7/dist/css/bootstrap.css">
    <link rel="stylesheet" href="includes/bootstrap-3.3.7/dist/css/bootstrap-theme.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    

  <pre><div id="lastonline"></div>lastonline :</pre>


  <pre><div id="status"></div>Estatus :</pre>


  <pre><div id="stage"></div>stage :</pre>

  <pre><div id="valorP"></div>valorP :</pre>



  <script src="https://code.jquery.com/jquery-3.1.0.min.js" type="text/javascript"></script>
   


  <script type="text/javascript">
   
  $(function() {
   
      getStatus();
   
  });

  $(function() {
   
      getOnline();
   
  });

  $(function() {
   
      getLocal();
   
  });

   



  function getStatus() {
   
      $('div#status').load('show_output.php');
      setTimeout("getStatus()",3000);
   
  }

  function getOnline() {
   
      $('div#lastonline').load('lastonline.php');
      setTimeout("getOnline()",3000);
   
  }

  function getLocal() {
   
      $('div#localfiles').load('list.php');
      $('div#valorP').load('p.php');
      setTimeout("getLocal()",3000);
   
  }
   
  </script>
   

  <form action="cmd.php" method="post">
  Command: <input type="text" name="cmd" id="cmd"><br>
  Spec command: <input type="text" name="spec" id="spec"><br>
  </form>


  <script type = "text/javascript" language = "javascript">
           $(document).ready(function() {
        
              $("#driver").click(function(event){
          
                 $.post("cmd.php",{ 

                  cmd: $("#cmd").val(),spec: $("#spec").val()

                },

                    function(data) {
                      
                       $('#stage').html(data);
                    }
                 );
            
              });
          
           });
        </script>
     </head>
    
     <body>
    
        <input type = "button" id = "driver" value = "Enviar" />

     </body>
  <font size="1" color="red">Warning! If spec command is specified, all others are forced null</font>
  <pre>files on server:</pre>
  <pre><div id="localfiles"></div></pre>






  </html>



