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
	if(pageName == "we"){
		console.log("www");
	}else if(pageName == "contect"){
		
		
	}
	console.log("Page name ");
  },

  home: function() {
	console.log("home======");
//	$("ideacle-home").show();
	
  }

});

$(function(){
	window.App = new AppMain();	
	Backbone.history.start();	
});




