/* Author: codingz

*/

window.AppMain = Backbone.Router.extend({
  routes: {
    "":             "home",
    "!/:pageName":  "page",
    "!/search/:query/p:page": 'search'
  },

  initialize: function() {
 
  },

  

  page: function(pageName) {
//	alert(pageName);
	console.log("Page name ");
  },

  home: function() {
//	    alert("home");
  }

});

$(function(){
	window.App = new AppMain();	
	Backbone.history.start();	
});




