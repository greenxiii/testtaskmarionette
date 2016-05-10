define(['App', 'backbone', 'marionette', 'views/AlbumsView', 'views/AlbumView', 'views/AlbumItemsView'],
    (App, Backbone, Marionette, AlbumsView, AlbumView, AlbumItemsView) ->
	    Backbone.Marionette.Controller.extend({
	        index: -> 
	            App.rootLayout.mainRegion.show(new AlbumsView());
	        albums: ->
	        	App.rootLayout.mainRegion.show(new AlbumsView());
	        album: (id) -> 
	            App.rootLayout.mainRegion.show(new AlbumItemsView(id: id));
	    });
);