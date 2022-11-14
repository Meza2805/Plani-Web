<?php
include '../includes/header02.php';
?>
  <form class="form-card needs-validation" novalidate onsubmit="event.preventDefault()">
                            <div class="row mt-4 mb-5">
                                <div class="text-center">
                                    <h1 class="letra_fondo"> <i class="bi bi-person-video2"></i></i> <strong> Cargo Educativo  </strong></h1>
                                </div>
                            </div>
                           


                            <caption>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#">
                                Agregrar Nuevo <i class="bi bi-person-plus-fill"></i>
                                </button>
                           </caption> 


</form>
                        <div class="table-responsive mt-4" id="cargo-remoto">
                           
                        </div>







<?php
include '../includes/footer02.php';
?>


<script type="text/javascript">
    $(document).ready(function(){

        $('#cargo-remoto').load('../componentes/tabla_cargo.php');
    });

</script>
