/* Author: codingz

*/

window.AppMain = Backbone.Router.extend({
  routes: {
    '':                 'home',
    '#/:pageName':  'page',
    '/search/:query/p:page': 'search'
  },

  initialize: function() {
 
  },

  home: function() {
    alert("home");
  },

  page: function(pageName) {
	alert(pageName);
	console.log("Page name ");
  }

});

$(function(){
	window.App = new AppMain();	
	Backbone.history.start({pushState: true});
	window.App.home();	
});




