const { createApp } = Vue;

createApp({
    data() {
        return {
            title: 'PHP Dischi',
            apiUrl: 'server.php',
            diskList: [],
            newAlbum: {
                title: '',
                author: '',
                year: '',
                genre: '',
                poster: ''
            }
        }
    },
    methods: {
        getApi() {
            axios.get(this.apiUrl)
                .then(result => {
                    this.diskList = result.data;
                    console.log(this.diskList);
                })
        },
        addNewAlbum() {
            const data = new FormData();
            data.append('newAlbumTitle', this.newAlbum.title);
            data.append('newAlbumAuthor', this.newAlbum.author);
            data.append('newAlbumYear', this.newAlbum.year);
            data.append('newAlbumGenre', this.newAlbum.genre);
            data.append('newAlbumPoster', this.newAlbum.poster);

            axios.post(this.apiUrl, data)
                .then(result => {
                    this.diskList = result.data;
                })
        },
        removeAlbum(index) {
            const data = new FormData();
            data.append('indexToDelete', index);
            axios.post(this.apiUrl, data)
                .then(result => {
                    this.diskList = result.data;
                })
        }
    },
    mounted() {
        this.getApi()
    }

}).mount('#app')