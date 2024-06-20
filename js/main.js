console.log('sono collegato');

const { createApp } = Vue;
createApp({
    data() {
        return {
            test: 'ciao mondo',
        };
    },
}).mount('#app');