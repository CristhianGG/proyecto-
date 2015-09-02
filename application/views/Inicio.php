<html>
      <head>
	   <title> <?php echo ""; ?> </title>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/Inicio.css')?>">
	  
	  </head>
	  
   <body>
	
   <div id="contenedor">
        <div id= "encabezado">
         	<img src="<?php echo base_url ('img/logo.jpg')?>" id="logo"/>
            <div id="msuper">
				<ul>
					<li>
						<a href="<?php echo site_url ('index.php/Comida/Novedades')?> " target="marco"> 
						<img src="<?php echo base_url ('img/home.png')?>" width="30px" height="30px"/> 
						</a>
											
					
						</li>
					<li>
					
						<a href="<?php echo site_url('index.php/Comida/Menu')?>" target="marco"> Menu</a>
					</li>
					<li>
						<a href="<?php echo site_url('index.php/Comida/Ubicacion')?>" target="marco"> Ubicacion</a>
					</li>
					<li>
						<a href="<?php echo site_url('index.php/Comida/Delivery') ?>"target="marco"> Delivery</a>
					</li>
				</ul>
				
			</div>
		</div>
		
        <div id="cuerpo">
             <iframe name="marco" id="ifra" src="<?php echo site_url('index.php/Comida/Novedades')?>"> 
			 
			 </iframe>
			 </div>
        <div id="pie">
         Gracias por visitarnos ! Visitanos a nuestro local <br>
		 La Rioja Capital 
		 Pratica Final Alumno: Cristhian Guzman 
		 
		 
		  
		 </div>
   </div>
        

    </body>
</html>
