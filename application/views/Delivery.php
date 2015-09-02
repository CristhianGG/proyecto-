<html>
      <head>
	   <title> <?php echo ""; ?> </title>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/ubicacion.css')?>">
	  
	  </head>
	  
   <body>
	
   <div id="delivery">
   
   
   			<div id="izq">
			    <fieldset>
			        <legend>
							Panel de login 
							
			        </legend>
					<?= form_open ('index.php/Comida/login')?>
					<label>Usuario:</label>
					<input type="text" name="usuario" />
					<br />
					<label> Clave;</label>
					<input type="text" name="clave" />
					 <br />
					 <input type="submit" name="enviar" value="login"/>
					</form>
			    </fieldset>
					
			</div>
      
            <div id="der">
			  
			  <fieldset>
			  <legend>
			  
			  Registrarse para Acceder a los servicio
			  </legend>
			  <?= form_open('index.php/Comida/registro')?>
			  <label> Nombre: </label>
			    <input type="text" name="Nombre"/>
			  <label> Apellido:</label>
			    <input type="text" name="Apellido"/>
			  <label> Direccion;: </label>
			    <input type="text" name="Direccion"/>
			  <label> Telefono: </label>
			    <input type="text" name="Telefono"/>
			  <!--<label> Whatsap: </label>
			  <input type="text" name="whatsap"/>-->
			  <label> Facebook: </label>
			  <input type="text" name="Facebook"/>
			  
			 <input type="submit" name="registrar" value="registrar">
			 
			  
			  
			  
			  
			  </form>
			  
			  
			  
			  
			  </fieldset>
			   
			
			</div>
      
 
 
 
 
 
      
   </div>
        

    </body>
</html>