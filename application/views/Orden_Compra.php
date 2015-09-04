<html>
      <head>
	   <title> <?php echo ""; ?> </title>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/Orden_compra.css')?>">
	  
	  </head>
	  
   <body>
	
   
  
      <?php 
	  		foreach ($Productos->result() as $producto)
			{
	  ?>
	          <div id="cuadro">
			  
			  <?= form_open ('index.php/Comida/orden_online')?>
			  	<img  src="#"/>
				<label>Producto: <?php echo $producto->Nombre_Producto ?> </label> 
				<br>
				
				
			 	<label>Precio: <?php echo $producto->Precio?> </label> 
				<br>
				<input  type="hidden" value="<?php echo $producto->idProducto ?>" name="Producto"/>
			  	<input type="submit" name="Comprar" value="comprar">
				 			   
			   </form>
			  </div>
		<?php
		    }
		?>	
			     
      
           
   

    </body>
</html>