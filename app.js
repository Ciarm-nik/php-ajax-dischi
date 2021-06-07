const app = new Vue ({
    el:"#app",
    data: {
        listDisc: [],
        genres: []
    },
    methods: {
        fetchData(){
            axios.get("server.php")
            .then(resp=> {
                    this.listDisc = resp.data;
                    console.log(this.listDisc);
                    this.listDisc.forEach(listDisc => {
                        if (!this.genres.includes(listDisc.genre)){
                            this.genres.push(listDisc.genre)
                        }
                    });
                }
            );
        },
        
    },
    mounted() {
       this.fetchData();
   
    },
})



