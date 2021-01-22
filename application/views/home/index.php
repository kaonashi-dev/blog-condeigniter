<div id="post">
    <div class="col-12 mx-auto mb-3">
        <div class="card">
            <div class="card-header p-2">
                Crea una publicaciòn
            </div>
            <div class="card-body">
                <form @submit.prevent="create()" autocomplete="off">
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
                            <button class="btn btn-primary" type="submit">PUBLICAR</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--  -->
    <div v-for="post in posts" class="col-10 mt-2 mx-auto">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-10">
                        <h3>{{post.title}}</h3>
                    </div>
                    <div class="col 2">
                        {{post.user}}
                    </div>
                </div>
                <p>
                    {{post.content}}
                </p>
            </div>
        </div>
    </div>
    <div v-if="!posts.length" class="col-12 text-center">
        <p class="text-danger">No nay publicaiones</p>
    </div>
</div>



<!--  -->
<script src="<?php echo VUE . 'post.js' ?>"></script>