<div class="row justify-content-center" id="loginForm">
    <div class="col-lg-5">
        <div class="card bg-secondary shadow border-0">
            <div class="card-header bg-white">
                <div class="text-muted text-center">
                    <small>Iniciar sesiòn</small>
                </div>
            </div>
            <div class="card-body px-lg-5">
                <form @submit.prevent="login()" role="form" autocomplete="off">
                    <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input v-model="email" class="form-control" placeholder="Correo electronico" type="email" required>
                        </div>
                    </div>
                    <div class="form-group focused">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            </div>
                            <input v-model="pass" class="form-control" placeholder="Contraseña" type="password" required>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary my-4">INGRESAR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--  -->
<script src="<?php  echo VUE . 'login.js' ?>"></script>