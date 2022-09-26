const app = new Vue({
    title:'PHP api',
    el:'#app',

    data: {
        movies:[],
    },

    methods: {
        fetchMovies(){
            axios
            .get('http://localhost:8888/php-oop-1/bonus/movies.php')
            .then((res)=> {
                console.log(res)
                const {response} = res.data
                this.movies = response
            })
        },
    },
    created(){
        this.fetchMovies();
    }
});