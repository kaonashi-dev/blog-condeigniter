const post = {
    data() {
        return {
            URL,
            title: "",
            content: "",
        };
    },
    methods: {
        get() {
            const postId = document.getElementById('post-id').value;
            axios.get(`${URL}post/get/${postId}`)
                .then(res => {
                    this.title = res.data.title;
                    this.content = res.data.content;
                })
                .catch(err => console.error(err));
        },
        update() {
            const data = new FormData();
            data.append('title', this.title);
            data.append('content', this.content);
            data.append('postId', document.getElementById('post-id').value);
            //
            axios.post(`${URL}post/edit-post`, data)
                .then(res => {
                    if (res.data.status) {
                        location.href = `${this.URL}home`
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
    mounted() {
        this.get();
    }
};

Vue.createApp(post).mount("#edit-post");