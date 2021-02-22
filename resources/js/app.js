new Vue({
    el: '#app',
    methods: {
        login() {
            location.href = '/dashboard';
        },

        ticketDetail(id) {
            location.href = '/ticket/' + id;
        },
    }
});