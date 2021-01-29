<div id="edit-post">
    <div class="col-12 mx-auto mb-3">
        <div class="card">
            <div class="card-header p-2">
                Editar tu publicaciòn
            </div>
            <div class="card-body">
                <form @submit.prevent="edit()" autocomplete="off">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <input v-model="title" type="text" class="form-control" placeholder="Titulo" required>
                        </div>
                        <div class="col-12">
                            <textarea v-model="content" cols="30" rows="3" class="form-control" placeholder="Contenido" required></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col text-right">
                            <button class="btn btn-primary" type="submit">EDITAR</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--  -->
<script src="<?php echo VUE . 'edit_post.js' ?>"></script>