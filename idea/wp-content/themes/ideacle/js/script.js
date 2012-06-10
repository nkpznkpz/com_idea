/* Author: codingz

*/

window.AppMain = Backbone.Router.extend({
  routes: {
    "":             "home",
	"!/home":       "home",
    "!/:pageName":  "page",
    "!/search/:query/p:page": 'search'
  },

  initialize: function() {
 
  },

  

  page: function(pageName) {
	$(".ideacle-page").hide();
	if(pageName == "we"){
			
	}else if(pageName == "contect"){
		
		
	}
	console.log("Page name ");
  },

  home: function() {
	$(".ideacle-page").hide();
	$("#page-home").show();
	$(window).scrollTop();
  }

});

$(function(){
	$(".logo").click(function(){
		window.App.home();
	});
	window.App = new AppMain();	
	Backbone.history.start();	
});