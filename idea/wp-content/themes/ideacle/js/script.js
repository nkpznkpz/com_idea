/* Author: codingz

*/

var ideacle = Backbone.Router.extend({
  routes: {
    "/":                 "home",
    "#!/:pageName":  "page",
    "search/:query/p:page": "search"
  },

  home: function() {
    alert("home");
  },

  page: function(pageName) {
	alert(pageName);
  }

});

$(function(){
	Backbone.history.start({pushState: true});
	
});




