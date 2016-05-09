define(['App', 'backbone', 'marionette', 'views/AlbumsView', 'views/AlbumView', 'views/HeaderView', 'models/Albums'],
    (App, Backbone, Marionette, AlbumsView, AlbumView, HeaderView, Albums) ->
	    Backbone.Marionette.Controller.extend({
	        initialize: (options) ->
	            App.rootLayout.headerRegion.show(new HeaderView());
	        #// gets mapped to in AppRouter's appRoutes
	        index: -> 
	            App.rootLayout.mainRegion.show(new AlbumsView());
	        albums: ->
	        	App.rootLayout.mainRegion.show(new AlbumsView({collection: new Albums}));
	        album: (id) -> 
	            App.rootLayout.mainRegion.show(new AlbumView(id:1));
	    });
);