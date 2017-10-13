import VueRouter from 'vue-router'

let routes = [
	{
		path: '/',
		name: 'user',
		component: require('./components/User.vue')
	},
	{
		path: '/artikel',
		name: 'artikel',
		component: require('./components/Artikel.vue')
	},
	{
		path: '/artikel/show',
		name: 'show',
		component: require('./components/Show.vue')
	}
]

export default new VueRouter({
	routes,
	linkActiveClass: 'active'
})