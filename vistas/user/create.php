<?php require_once('/xampp/htdocs/unicaes/vistas/head/head.php'); ?>



<body>

    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">

                                <h2 class="fw-bold mb-2 text-uppercase">Agregar usuario</h2>


                                <form action="store.php" method="POST" autocomplete="off">
                                <div class="form-outline form-white mb-4">
                                    <input type="text" name="username" required placeholder="Nombre de Usuario"
                                        class="form-control form-control-lg" />
                                    <label class="form-label">Nombre de usuario</label>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input type="password" name="userpass" required placeholder="Contraseña"
                                        class="form-control form-control-lg" />
                                    <label class="form-label">Contraseña </label>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input type="email" name="email" required placeholder="Emal"
                                        class="form-control form-control-lg" />
                                    <label class="form-label">Email</label>
                                </div>


                                <div class="form-outline form-white mb-4">
                                    <input type="text" name="direction" required placeholder="Dirección"
                                        class="form-control form-control-lg" />
                                    <label class="form-label">Dirección</label>
                                </div>

                                <button class="btn btn-outline-light btn-lg px-5" type="submit">Registrarse</button>

                                </form>

                            </div>

                            <div>
                                <p class="mb-0">¿Ya tienes cuenta? <a href="/unicaes/index.php"
                                        class="text-white-50 fw-bold">Inicia sesión</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>


<?php require_once('/xampp/htdocs/unicaes/vistas/head/footer.php'); ?>