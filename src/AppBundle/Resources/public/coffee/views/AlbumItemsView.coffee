define( [ 'App', 'marionette', 'models/AlbumItems', 'views/AlbumItemView', 'views/EmptyAlbumView'],
    ( App, Marionette, AlbumItems, AlbumItemView, EmptyAlbumView) ->
        Backbone.Marionette.CollectionView.extend({
            tagName: 'div'
            childView: AlbumItemView
            emptyView: EmptyAlbumView
            collection: new AlbumItems()
            className: 'album_container'
        	initialize: (options) ->
        		@collection.fetch
                    url: "api/album/#{options.id}"
                    success: (response) ->
                        _.each response.toJSON(), (albums) ->
                            console.log 'Successfully GOT albums with data: ' + albums
                    error: ->
                        console.log 'Failed to get albumss!'
        });
);