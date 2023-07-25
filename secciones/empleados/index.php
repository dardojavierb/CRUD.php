<?php require_once("../../templates/header.php")?>
Mostrar Empleados

<div class="card">
    <div class="card-header">
        Empleados
    </div>
    <div class="card-body">
       <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th><!-- primer y segundo nombre y primer y segundo apellido -->
                    <th scope="col">Foto</th>
                    <th scope="col">CV</th>
                    <th scope="col">Puesto</th>
                    <th scope="col">Fecha de Ingreso</th>
                    <th scope="col">Acciones</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td scope="row">1</td>
                    <td>pepe carlos</td>
                    <td>imagen.jpg</td>
                    <td>cv.pdf</td>
                    <td>profesor</td>
                    <td>14/09/2000</td>
                    <td>carta | editar | eliminar</td>
                </tr>
              
            </tbody>
        </table>
       </div>
       
    </div>
   
</div>
<?php require_once("../../templates/footer.php")?> 