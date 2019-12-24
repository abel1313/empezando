<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
 
<!-- jQuery -->
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
 
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="../jQuery/showEmpresa.js" type="text/javascript"></script>
    <link rel="stylesheet" href="../Estilos/Home.css">

    <title>Empresa</title>
  </head>
  <body>
    
 <header class="">
            <nav class="navegacion">
     <ul class="menus">
                    <li><a href="Home.php">Home</a>
                        <ul class="submenus">
                          
                        
                        </ul></li> 
                        <li><a href="DatosEmpresa.php">Empresa</a>
                        <ul class="submenus">
              
                        
                        </ul></li> 
                        
                    <li><a href="Productos.php">Productos</a>
                        <ul class="submenus">
                           <li><a href="DetalleProductos.php">Detalle Producto</a></li>
                        
                        </ul></li>
                    <li><a href="Presupuesto.php">Presupuesto</a>
                        <ul class="submenus">
                          <li><a href="Obra.php">Obra</a></li>
                          <li><a href="RealizarPresupuesto.php">Realizar Presupuesto</a></li>
                     
                        </ul></li>                                                                          
                    <li><a href="Empleados.php">Empleados</a>
                        <ul class="submenus">
                       <!--      <li><a href="AgregarEmpleado.php">Agregar</a></li> -->
                       
                        </ul></li>

                            <li><a href="Proveedores.php">Proveedores</a>
                        <ul class="submenus">
                          
                        
                       
                        </ul></li>

                        <li><a href="Reportes.php">Reportes</a>
                       <!--  <ul class="submenus">
                            
                            <li><a  target="_blank" href="Exhel.php">Reportes Obra</a></li>
                     
                            <li><a  target="_blank" href="Exhel.php">Obra</a></li>
                     
                        </ul> -->

                                </li>
                                <li><a href="CerrarSesion.php">Salir</a>
                       
                        
                    </li>

                </ul>
            </nav>

       </header>  



     <button class="btn btn-primary btn-lg" id="CerrarSesion">Cerrar Sesión</button>


  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Empresa</h5>
      
      </div>
   <div class="modal-body">

					<form id="formaddEmpresa">


			 <div class="input-group input-group-sm mb-3">
 			 <div class="input-group-prepend">
 			   <span class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
			  </div>
 			 <input type="text" class="form-control" name="Nombre" aria-label="Small" aria-describedby="inputGroup-sizing-sm" maxlength="20"/>
 			</div>

			 <div class="input-group input-group-sm mb-3">
 			 <div class="input-group-prepend">
 			   <span class="input-group-text" id="inputGroup-sizing-sm">Organismo</span>
			  </div>
 			 <input type="text" class="form-control" name="Organismo" aria-label="Small" aria-describedby="inputGroup-sizing-sm" maxlength="20"/>
 			</div>

 			 <div class="input-group input-group-sm mb-3">
 			 <div class="input-group-prepend">
 			   <span class="input-group-text" id="inputGroup-sizing-sm">Tipo Estructura</span>
			  </div>
 			 <input type="text" class="form-control" name="Estructura" aria-label="Small" aria-describedby="inputGroup-sizing-sm" maxlength="20"/>
 			</div>
				

				 <div class="input-group input-group-sm mb-3">
 			 <div class="input-group-prepend">
 			   <span class="input-group-text" id="inputGroup-sizing-sm">Estado</span>
			  </div>
 			 <select class="form-control" id="exampleFormControlSelect1" name="Estado">
    		  <option>1</option>
   			   <option>2</option>
   
 		   </select>
 			</div>


 			 <div class="input-group input-group-sm mb-3">
 			 <div class="input-group-prepend">
 			   <span class="input-group-text" id="inputGroup-sizing-sm">Código Postal</span>
			  </div>
 			 <input type="text" class="form-control" name="Postal" aria-label="Small" aria-describedby="inputGroup-sizing-sm" maxlength="20" />
 			</div>

 			 <div class="input-group input-group-sm mb-3">
 			 <div class="input-group-prepend">
 			   <span class="input-group-text" id="inputGroup-sizing-sm">Resistencia de Terreno</span>
			  </div>
 			 <input type="text" class="form-control" name="Terreno" aria-label="Small" aria-describedby="inputGroup-sizing-sm" maxlength="20" /> 
 			</div>

		 <div class="input-group input-group-sm mb-3">
 			<div class="input-group-prepend">
 			   <span class="input-group-text" id="inputGroup-sizing-sm">Número Concurso</span>
			</div>
 			 <input type="text" class="form-control" name="Concurso" aria-label="Small" aria-describedby="inputGroup-sizing-sm" maxlength="20" />
 		 </div>
			
			

		<div class="input-group input-group-sm mb-3">
 			<div class="input-group-prepend">
 			   <span class="input-group-text" id="inputGroup-sizing-sm">Programa</span>
			</div>
 			 <input type="text" class="form-control" name="Programa" aria-label="Small" aria-describedby="inputGroup-sizing-sm" maxlength="20" />
 		 </div>
			

			<div class="input-group input-group-sm mb-3">
 			<div class="input-group-prepend">
 			   <span class="input-group-text" id="inputGroup-sizing-sm">Cct</span>
			</div>
 			 <input type="text" class="form-control" name="Cct" aria-label="Small" aria-describedby="inputGroup-sizing-sm" maxlength="20" />
 		 </div>
			


					</form>	


    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="addEmpresa">Agregar Empresa</button>
      </div>
    </div>
  </div>





<div class="container-fluid" id="showEmpresa">
	
<table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Organismo</th>
      <th scope="col">Tipo Estructura</th>
      <th scope="col">Estado</th>
      <th scope="col">Código Postal</th>
      <th scope="col">Resistencia Terreno</th>
      <th scope="col">Nº Concurso</th>
      <th scope="col">Programa</th>
      <th scope="col">Cct</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
<tbody>
	


</tbody>



</table>



</div>




  </body>
</html>