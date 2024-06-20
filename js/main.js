console.log('sono collegato');

const { createApp } = Vue;
createApp({
    data() {
        return {
            //salvo url della chiamata in una variabile
            urlApiMusic: 'http://localhost/php-dischi-json/server.php',
            //array vuoto dove salvare la risposta api
            cd: [],
        };
    },
    methods: {
        //funzione per chiamata axios
        getApi() {
            axios.get(this.urlApiMusic).then((response) => {
                //il mio array vuoto = a la risposta api
                this.cd = response.data;
            });
        },
    },
    //invocare la funzione
    created() {
        this.getApi();
    },
}).mount('#app');