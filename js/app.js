var App = Vue.extend({});
var postList = Vue.extend({
	template:"<h1>hello world</h1>";
});

var router = new VueRouter();
router.map({
	'/':{
		component: postList
	}
});

router.start(App, '#app');

