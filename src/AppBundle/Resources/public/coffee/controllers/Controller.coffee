define(['App', 'backbone', 'marionette', 'views/AlbumsView', 'views/AlbumView', 'models/Albums', 'models/Album'],
    (App, Backbone, Marionette, AlbumsView, AlbumView, Albums, Album) ->
	    Backbone.Marionette.Controller.extend({
	        index: -> 
	            App.rootLayout.mainRegion.show(new AlbumsView());
	        albums: ->
	        	App.rootLayout.mainRegion.show(new AlbumsView());
	        album: (id) -> 
	            App.rootLayout.mainRegion.show(new AlbumView());
	    });
);