<?php
include '../includes/header02.php';
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
                        <div class="table-responsive" id="tabla_personal">
                        
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
                   
                    <div class="form-floating mb-3">
                        <input type="text" id="cedula" class="form-control letra_fondo text-uppercase" placeholder="Numero de Cedula"   minlength="0" maxlength="16" required>
                        <label for="floatingInput" class="letra_fondo">Numero de Cedula    (incluya "-")</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" id="p_nombre" class="form-control letra_fondo" placeholder="Primer Nombre" minlength="0" maxlength="15" required>
                        <label for="floatingInput" class="letra_fondo">Primer Nombre</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" id="s_nombre" class="form-control letra_fondo" placeholder="Segundo Nombre" minlength="0" maxlength="15">
                        <label for="floatingInput" class="letra_fondo">Segundo Nombre</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" id="p_apellido" class="form-control letra_fondo" placeholder="Primer Apellido" minlength="0" maxlength="15" required>
                        <label for="floatingInput" class="letra_fondo">Primer apellido</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" id="s_apellido" class="form-control letra_fondo" placeholder="Segundo Apellido" minlength="0" maxlength="15">
                        <label for="floatingInput" class="letra_fondo">Segundo apellido</label>
                    </div>

                     <div class="form-group letra_fondo mb-3">
                        <label for="fecha" class="form-label letra_fondo"> Fecha de Nacimiento</label>
                        <input type="date" id="fecha_nac" class="form-control letra_fondo" required id="fecha" max="2004-01-01" min="1957-01-01">
                    </div>
                    <div class="letra_fondo mb-3">
                        <select class="form-select form-control letra_fondo"  id="sexo" required>
                                <option selected disabled value="">Sexo</option>
                                <option value="1" class="letra_fondo">Masculino</option>
                                <option value="2" class="letra_fondo" >Femenino</option>
                        </select>
                     </div> 
                     
                     <div class="letra_fondo mb-3" id="cargo"> </div>
                  
                    <div class="form-floating letra_fondo mb-3">
                        <input type="text" id="telefono" class="form-control letra_fondo" placeholder="Numero Telefonico +505" pattern="^\d{8}" minlength="0" maxlength="8" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"   required>
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

                    <!-- <div class="form-group letra_fondo mb-3">
                        <label for="fecha" class="form-label letra_fondo"> Fecha de Nacimiento</label>
                        <input type="date" id="fecha_nacu" class="form-control letra_fondo" required id="fecha">
                    </div> -->

                    <!-- <div class="letra_fondo mb-3">
                        <select class="form-select form-control letra_fondo" required>
                                                <option selected disabled value="">Sexo</option>
                                                <option value="1" class="letra_fondo">Masculino</option>
                                                <option value="2" class="letra_fondo" >Femenino</option>
                        </select>
                     </div> -->
           
                     <div class="letra_fondo mb-3">
                        <select class="form-select form-control letra_fondo" required>
                                                <option selected disabled value="">Cargo</option>
                                                <option value="1" class="letra_fondo">Masculino</option>
                                                <option value="2" class="letra_fondo" >Femenino</option>
                        </select>
                     </div>

                   

<!-- 
                    <div class="form-floating letra_fondo mb-3">
                                            <input type="text" id="telefonou" class="form-control letra_fondo" placeholder="Numero Telefonico +505" minlength="0" maxlength="8" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required>
                        <label for="floatingInput" class="letra_fondo">Numero Telefonico +505</label>
                    </div>
                    <div class="form-floating letra_fondo col-sm-12 mt-3">
                                            <textarea class="form-control limitar_area" placeholder=" ¿Cuál es el impacto del resultado? " id="direcciou" maxlength="300" required></textarea>
                                            <label for="floatingTextarea"> Dirección </label>
                                          
                                        </div> -->
            




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
<script type="text/javascript">
    $(document).ready(function(){

        $('#tabla_personal').load('../componentes/tabla_personal.php');
    });

</script>

<script type="text/javascript">
   
   $(document).ready(function(){
  
    $('#guardar').click(function(){
        cedula=$('#cedula').val();
        p_nombre=$('#p_nombre').val();
        s_nombre=$('#s_nombre').val();
        p_apellido=$('#p_apellido').val();
        s_apellido=$('#s_apellido').val();
        telefono=$('#telefono').val();
        direccion=$('#direccion').val();

        /*variable para guardar fecha*/
        let fecha_nac=$('#fecha_nac').val();

        /*Ubicando el select del cargo*/ 
        let select_cargo = document.getElementById('select_cargo');

        /*Obteniendo el valor de la opcion de cargo*/
        let value_cargo = select_cargo.value;


        /*Ubicando el select de sexo*/
        let select_sexo = document.getElementById('sexo');

        /*Obteniendo el valor de la opcion de sexo*/
        let value_sexo = select_sexo.value; 
        
     

        /*El siguiente codigo es un alert para comprobar los valores de los input*/
        //    alert(
        //     "Cedula: "+ cedula+"\n"+
        //     "P_nombre: "+ p_nombre+"\n"+
        //     "S_nombre: "+ s_nombre+"\n"+
        //     "P_apellido: "+ p_apellido+"\n"+
        //     "S_apellido: "+ s_apellido+"\n"+
        //     "Sexo: "+ value_sexo+"\n"+
        //     "La fecha es: "+  fecha_nac + "\n"+
        //     "Telefono: "+  telefono + "\n"+
        //     "Direccion: "+  direccion + "\n"+
        //     "Cargo: "+ value_cargo
        //     );

        agregar_personal(cedula, p_nombre, s_nombre, p_apellido, s_apellido, fecha_nac, value_sexo, telefono, direccion, value_cargo);
    });
   });
</script>






<?php
include '../includes/footer02.php';
?>

