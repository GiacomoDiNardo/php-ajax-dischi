new Vue({
    el: "#app",
    data: {
        listaDischi: []
    },

    mounted() {
        axios.get("disc_api.php")
            .then(resp => {
                this.listaDischi = resp.data;
            })
    }
})