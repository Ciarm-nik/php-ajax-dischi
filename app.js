const app = new Vue ({
    el:"#app",
    data: {
        listDisc: [],
    },
    methods: {
        fetchData(){
            axios.get("database.php")
            .then(resp=> {
                    this.listDisc = resp.data;
                }
            );
        }
    },
    mounted() {
       this.fetchData();
    },
})