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
                .then((res) => {
                    console.log(res.data);
                    if (res.data.status == 'success') {
                        Swal.fire(
                            res.data.msg,
                            '',
                            'success'
                        )
                    } else {
                        Swal.fire(
                            'Verifica la informaciòn',
                            res.data.msg,
                            'error'
                        )
                    }
                })
                .catch((err) => console.error(err));
        },
    },
};

Vue.createApp(loginForm).mount("#loginForm");