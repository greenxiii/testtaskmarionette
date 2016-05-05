define(['App', 'backbone', 'marionette', 'views/WelcomeView', 'views/HeaderView'],
    (App, Backbone, Marionette, WelcomeView, HeaderView) ->
	    Backbone.Marionette.Controller.extend({
	        initialize: (options) ->
	            App.rootLayout.headerRegion.show(new HeaderView());
	        #// gets mapped to in AppRouter's appRoutes
	        index: -> 
	            App.rootLayout.mainRegion.show(new WelcomeView());
	    });
);