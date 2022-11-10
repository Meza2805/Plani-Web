<?php
include '../includes/header02.php';
require_once "../includes/conexion.php";
          
?>





<div class="row justify-content-between text-center mt-3 position-relative">

<div class="form-group  flex-column d-flex">
    <h1 class="letra_fondo"> <i class="bi bi-person-badge-fill"></i> <strong> Registro Personal Educativo</strong> </h1>
</div>

</div>
                <caption>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-agregar">
                    Agregrar Nuevo <i class="bi bi-person-plus-fill"></i>
                    </button>
           
                </caption> 
                        <div class="table-responsive">
                            <table class="table table-striped mt-4 table-primary table-hover table-bordered" id="registro">
                                <thead>
                                    <tr>
                                        <th scope="col">NO.</th>
                                        <th scope="col">CEDULA</th>
                                        <th scope="col">NOMBRE</th>
                                        <th scope="col">EDAD</th>
                                        <th scope="col">SEXO</th>
                                        <th scope="col">TELEFONO</th>
                                        <th scope="col" class="upper">DIRECCIÓN</th>
                                        <th scope="col">CARGO</th>
                                        <th scope="col">EDITAR</th>
                                        <th scope="col">ELIMINAR</th>
                                    </tr>
                                </thead>

                                <?php
                                    $sql = "call SP_Mostrar_Personal()";
                                    $resultado = mysqli_query($conexion,$sql);
                                    $contador = 1;
                                   while($ver = mysqli_fetch_row($resultado)){
                                    
                                 
                                ?>
                                <tbody >
                                    <tr>
                                        <th scope="row"><?php echo $contador ?></th>
                                        <td><?php echo $ver [0] ?></td>
                                        <td><?php echo $ver [1]?></td>
                                        <td><?php echo $ver [2]?></td>
                                        <td><?php echo $ver [3]?></td>
                                        <td><?php echo $ver [4]?></td>
                                        <td><?php echo $ver [5]?></td>
                                        <td><?php echo $ver [6]?></td>
                                        <td><button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal-editar" >
                                            <i class="bi bi-pencil text-white"></i>
                                            </button>
                                        </td>
                                        <td><button class="btn btn-danger"><i class="bi bi-trash"></i></button></td>
                                     
                                    </tr>
                            <?php
                                 $contador++;   }
                            ?>
                                  
                                </tbody>
                            </table>
                        </div>




<!-- Espacio para modal INICIO -->
<form action="" class="needs-validation" novalidate >
    <div class="modal fade" id="modal-agregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
         
            <div class="modal-content">
          
                <div class="modal-header">
                    <h1 class="modal-title fs-5 letra_fondo" id="exampleModalLabel">  <i class="bi bi-person-badge-fill"></i>  <strong>Registrar Personal Educativo</strong> </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 
                <div class="modal-body">
                    <!-- <label class="form-label letra_fondo"> <strong>Datos Personales</strong>  </label> -->
                    <div class="form-floating mb-3">
                        <input type="text" id="cedula" class="form-control letra_fondo" placeholder="Numero de Cedula    (incluya los guiones)" minlength="0" maxlength="16" required>
                        <label for="floatingInput" class="letra_fondo">Numero de Cedula    (incluya los guiones)</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" id="primer_nombre" class="form-control letra_fondo" placeholder="Primer Nombre" minlength="0" maxlength="15" required>
                        <label for="floatingInput" class="letra_fondo">Primer Nombre</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" id="segundo_nombre" class="form-control letra_fondo" placeholder="Segundo Nombre" minlength="0" maxlength="15">
                        <label for="floatingInput" class="letra_fondo">Segundo Nombre</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" id="primer_apellido" class="form-control letra_fondo" placeholder="Primer Apellido" minlength="0" maxlength="15" required>
                        <label for="floatingInput" class="letra_fondo">Primer apellido</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" id="segundo_apellido" class="form-control letra_fondo" placeholder="Segundo Apellido" minlength="0" maxlength="15">
                        <label for="floatingInput" class="letra_fondo">Segundo apellido</label>
                    </div>

                    <div class="form-group letra_fondo mb-3">
                        <label for="fecha" class="form-label letra_fondo"> Fecha de Nacimiento</label>
                        <input type="date" id="fecha_nac" class="form-control letra_fondo" required id="fecha">
                    </div>
                    <div class="letra_fondo mb-3">
                        <select class="form-select form-control letra_fondo" required>
                                <option selected disabled value="">Sexo</option>
                                <option value="1" class="letra_fondo">Masculino</option>
                                <option value="2" class="letra_fondo" >Femenino</option>
                        </select>
                     </div>
                     <div class="letra_fondo mb-3" id="cargo"> </div>
                  
                    <div class="form-floating letra_fondo mb-3">
                        <input type="text" id="telefono" class="form-control letra_fondo" placeholder="Numero Telefonico +505" minlength="0" maxlength="8" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required>
                        <label for="floatingInput" class="letra_fondo">Numero Telefonico +505</label>
                    </div>
                    <div class="form-floating letra_fondo col-sm-12 mt-3">
                        <textarea class="form-control limitar_area" placeholder=" ¿Cuál es el impacto del resultado? " id="direccion" maxlength="300" required></textarea>
                        <label for="floatingTextarea"> Dirección </label>
                      
                    </div>
                </div>
               
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="guardar">Guardar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>     
                </div>
              
            </div>
           
      </div>
    </div>
    </form>



    <div class="modal fade" id="modal-editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 letra_fondo" id="exampleModalLabel">  <i class="bi bi-pencil"></i> <strong>Editar Personal Educativo</strong> </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                <div class="modal-body">
                <!-- <label class="form-label letra_fondo"> <strong>Datos Personales</strong>  </label> -->
                    <div class="form-floating mb-3">
                    <input type="text" id="cedulau" class="form-control letra_fondo" placeholder="Numero de Cedula    (incluya los guiones)" minlength="0" maxlength="16" required>
                        <label for="floatingInput" class="letra_fondo">Numero de Cedula    (incluya los guiones)</label>
                    </div>

                    <div class="form-floating mb-3">
                    <input type="text" id="primer_nombreu" class="form-control letra_fondo" placeholder="Primer Nombre" minlength="0" maxlength="15" required>
                        <label for="floatingInput" class="letra_fondo">Primer Nombre</label>
                    </div>

                    <div class="form-floating mb-3">
                    <input type="text" id="segundo_nombreu" class="form-control letra_fondo" placeholder="Segundo Nombre" minlength="0" maxlength="15">
                        <label for="floatingInput" class="letra_fondo">Segundo Nombre</label>
                    </div>

                    <div class="form-floating mb-3">
                    <input type="text" id="primer_apellidou" class="form-control letra_fondo" placeholder="Primer Apellido" minlength="0" maxlength="15" required>
                        <label for="floatingInput" class="letra_fondo">Primer apellido</label>
                    </div>

                    <div class="form-floating mb-3">
                    <input type="text" id="segundo_apellidou" class="form-control letra_fondo" placeholder="Segundo Apellido" minlength="0" maxlength="15">
                        <label for="floatingInput" class="letra_fondo">Segundo apellido</label>
                    </div>

                    <div class="form-group letra_fondo mb-3">
                        <label for="fecha" class="form-label letra_fondo"> Fecha de Nacimiento</label>
                        <input type="date" id="fecha_nacu" class="form-control letra_fondo" required id="fecha">
                    </div>

                    <div class="letra_fondo mb-3">
                        <select class="form-select form-control letra_fondo" required>
                                                <option selected disabled value="">Sexo</option>
                                                <option value="1" class="letra_fondo">Masculino</option>
                                                <option value="2" class="letra_fondo" >Femenino</option>
                        </select>
                     </div>
           
                     <div class="letra_fondo mb-3">
                        <select class="form-select form-control letra_fondo" required>
                                                <option selected disabled value="">Cargo</option>
                                                <option value="1" class="letra_fondo">Masculino</option>
                                                <option value="2" class="letra_fondo" >Femenino</option>
                        </select>
                     </div>

                   


                    <div class="form-floating letra_fondo mb-3">
                                            <input type="text" id="telefonou" class="form-control letra_fondo" placeholder="Numero Telefonico +505" minlength="0" maxlength="8" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required>
                        <label for="floatingInput" class="letra_fondo">Numero Telefonico +505</label>
                    </div>
                    <div class="form-floating letra_fondo col-sm-12 mt-3">
                                            <textarea class="form-control limitar_area" placeholder=" ¿Cuál es el impacto del resultado? " id="direcciou" maxlength="300" required></textarea>
                                            <label for="floatingTextarea"> Dirección </label>
                                          
                                        </div>
            




                </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" type="submit">Guardar</button> -->

        <button type="button" class="btn btn-success">Guardar</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
      </div>
        </div>
      </div>
    </div>

<!-- Espacio para modal FIN -->


<script type="text/javascript">
    $(document).ready(function(){
        $('#guardar').click(function(){

        });
    });
</script>


<!-- para llamar a cargo -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#cargo').load('../componentes/select_cargo.php');

    });
</script>




<?php
include '../includes/footer02.php';
?>

