define(['App', 'backbone', 'marionette', 'views/AlbumsView', 'views/HeaderView'],
    (App, Backbone, Marionette, AlbumsView, HeaderView) ->
	    Backbone.Marionette.Controller.extend({
	        initialize: (options) ->
	            App.rootLayout.headerRegion.show(new HeaderView());
	        #// gets mapped to in AppRouter's appRoutes
	        index: -> 
	            App.rootLayout.mainRegion.show(new AlbumsView());
	        albums: -> 
	            App.rootLayout.mainRegion.show(new AlbumsView());
	        album: (id) -> 
	        	console.log(id)
	            # App.rootLayout.mainRegion.show(new AlbumView(1));
	    });
);