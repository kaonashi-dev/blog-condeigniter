const post = {
    data() {
        return {
            title: "",
            content: "",
            posts: []
        };
    },
    methods: {
        create() {
            const data = new FormData();
            data.append('title', this.title);
            data.append('content', this.content);
            //
            axios.post(`${URL}post/create`, data)
                .then(res => {
                    if (res.data.status) {
                        console.log('todo va bien');
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 2000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                        })
                        Toast.fire({
                            icon: 'success',
                            title: res.data.msg
                        })
                        this.title = '';
                        this.content = '';
                        this.post = [];
                        this.getAll();
                    } else {
                        Swal.fire(
                            'Verifica la informaciòn',
                            res.data.msg,
                            'info'
                        )
                    }
                })
                .catch(err => console.error(err));
        },
        getAll() {
            axios.get(`${URL}post/get-all`)
                .then(res => {
                    this.posts = res.data;
                })
                .catch(err => console.log(err))
        },
        deletePost(id) {
            const data = new FormData();
            data.append('post', id);
            axios.post(`${URL}post/delete`, data)
                .then(res => {
                    console.log(res);
                    if (res.data.status) {
                        this.post = [];
                        this.getAll();
                    }
                })
                .catch(err => console.log(err));
        }
    },
    mounted() {
        this.getAll();
    }
};

Vue.createApp(post).mount("#post");