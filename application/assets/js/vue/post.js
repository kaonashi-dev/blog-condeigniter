const post = {
    data() {
        return {
            title: "",
            content: "",
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
                    console.log(res.data);
                    if (res.data.status) {
                        console.log('todo va bien');
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
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
    },
};

Vue.createApp(post).mount("#post");