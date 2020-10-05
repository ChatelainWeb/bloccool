<html>
 <head>
  <title>RisiFight</title>
  <style>
	body {
		margin : 0
	}
  #cdb span {
    width: 60px;
    height: 60px;
	float: left;
	background-size: cover;
  }

  #cdb span img {
  	width: 100%;
  	height: auto;
  }

  #cdb span.r .imgr {
    display: block;
  }

   #cdb span.r .imgl {
    display: none;
  }
  
  #cdb span.l .imgl {
    display: block;
  }

   #cdb span.l .imgr {
    display: none;
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
	 <?php 

	 for ($i = 1; $i <= 10; $i++) {
	    echo '<span class="r" data-numero="'.$i.'">
	    	<img class="imgr" src="https://image.noelshack.com/fichiers/2016/24/1466366197-risitas10.png"/>
	    	<img class="imgl" src="https://image.noelshack.com/fichiers/2017/19/1494361873-luckylarry.png"/>
	    </span>';
	}

	?>
</div>
 </body>
</html>
