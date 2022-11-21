</main>
<br><br><br>
 <footer class="text-center text-lg-start text-white fondo">
        <div class="container p-4 pb-0">
            <section class="p-3 pt-0">
                <div class="row d-flex align-items-center">
                    <div class="col-md-7 text-center text-md-start">
                        <div class="p-3">
                            © 2022 Copyright SICOPLAD
                        </div>
                    </div>
                    <!-- <div class="col-md-7 text-center text-md-start">
                        <div class="p-3">
                          <img src="../images/uni.png" alt="" class="logo">
                        </div>
                    </div> -->
                </div>
            </section>
        </div>
    </footer>





    <script>
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>

</body>
</html>


