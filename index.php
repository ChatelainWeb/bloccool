<html>
  <head>
    <style>
		body {
			margin : 0
		}
      #tete {
        width: 60px;
        height: 60px;
		float: left;
		background-size: cover;
      }

      #tete.r {
        background-image: url("risitas.jpg");
      }
	  
	  #tete.l {
        background-image: url("larry.jpg");
      }
	  
	  .risiside {
		  width: 50%;
		  float: left;
	  }
	  
	  .larryside {
		  width: 50%;
		  float: left;
	  }
	  
	  #cdb {
		  width : 1920px;
	  }

    </style>
  </head>
  <body>
  
	<div id="cdb">
		<div class="risiside">
		<?php
			$risita = 1;
			while ($risita <= 256)
			{
				echo '<div id="tete" class="r" data-numero="'.$risita.'"></div>';
				$risita++;
			}
		?>
		</div>
		
		<div class="larryside">
		<?php
			$larry = 257;
			while ($larry <= 512)
			{
				echo '<div id="tete" class="l" data-numero="'.$larry.'"></div>';
				$larry++;
			}
		?>
		</div>
	</div>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.2.0/socket.io.js"></script>
    <script>
      var socket = io();
      var el = document.getElementById('server-time');

      socket.on('time', function(timeString) {
        el.innerHTML = 'Server time: ' + timeString;
      });


      $('#tete').click(function () {
		  socket.emit('change', { numero: $(this).data("numero") });
      });

      socket.on('changeclass', function(lenumero) {
        /*$( "#bloc" ).addClass( "vert" );*/
		console.log(lenumero);
      });


    </script>
  </body>
</html>
