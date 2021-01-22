const loginForm = {
    data() {
        return {
            email: "",
            pass: "",
        };
    },
    methods: {
        login() {
            const data = new FormData();
            data.append("email", this.email);
            data.append("pass", this.pass);
            //
            axios.post(`${URL}auth/login`, data)
                .then(res => {
                    if (res.data.status == 'success') {
                        location.href = `${URL}home`;
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

Vue.createApp(loginForm).mount("#loginForm");