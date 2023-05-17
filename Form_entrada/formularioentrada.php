<!-- CODE PHP -->
<?php
include("enviodatos.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <!-- LINK CSS -->
    <link rel="stylesheet" href="/estiloformulario.css">
    <!-- LINK SWEETALERT -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- LINK JAVASCRIPT -->
    <script src="/sistema/Form_entrada/alert.js"></script>
    <!-- LINK BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>



<body>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Formulario de Bootstrap</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container">
            <h2 style="text-align: center;">Ingreso</h2>
            <hr>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="campo1" class="form-label">Campo 1</label>
                                    <input type="text" class="form-control" id="campo1" placeholder="Campo 1">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="campo2" class="form-label">Campo 2</label>
                                    <input type="text" class="form-control" id="campo2" placeholder="Campo 2">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="campo3" class="form-label">Campo 3</label>
                                    <input type="text" class="form-control" id="campo3" placeholder="Campo 3">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="campo4" class="form-label">Campo 4</label>
                                    <input type="text" class="form-control" id="campo4" placeholder="Campo 4">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="campo5" class="form-label">Campo 5</label>
                                    <input type="text" class="form-control" id="campo5" placeholder="Campo 5">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="campo6" class="form-label">Campo 6</label>
                                    <input type="text" class="form-control" id="campo6" placeholder="Campo 6">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="campo7" class="form-label">Campo 7</label>
                                    <input type="text" class="form-control" id="campo7" placeholder="Campo 7">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="campo8" class="form-label">Campo 8</label>
                                    <input type="text" class="form-control" id="campo8" placeholder="Campo 8">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>


    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
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