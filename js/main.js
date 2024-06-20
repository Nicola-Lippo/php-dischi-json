console.log('sono collegato');

const { createApp } = Vue;
createApp({
    data() {
        return {
            //salvo url della chiamata in una variabile
            urlApiMusic: 'http://localhost/php-dischi-json/server.php'
        };
    },
    methods: {
        //funzione per chiamata axios
        getApi() {
            axios.get(this.urlApiMusic).then((response) => console.log(response));
        },
    },
    //invocare la funzione
    created() {
        this.getApi();
    },
}).mount('#app');