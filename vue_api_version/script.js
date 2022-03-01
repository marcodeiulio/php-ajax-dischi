console.log('Vue OK!', Vue);

Vue.config.devtools = true;

const app = new Vue({
	el: '#root',
	data: {
		albums: [],
	},
	methods: {
	},
	mounted() {
		{
			axios.get('http://localhost:8888/php-ajax-dischi/vue_api_version/api/api_dischi.php').then(res => {
				this.albums = res.data;
				console.log(this.albums);
			}).catch(err => { console.log(err) });
		}
	}
})