const registerForm = {
  data() {
    return {
      name: '',
      username: '',
      email: '',
      pass: '',
    };
  },
  methods: { 
    register() {
        const data = new FormData();
        data.append('name', this.name);
        data.append('username', this.username);
        data.append('email', this.email);
        data.append('pass', this.pass);
        axios.post(`${ URL }auth/register`, data)
        .then(res => console.log(res))
        .catch(err => console.error(err))
    },
  },
};

Vue.createApp(registerForm).mount("#registerForm");
