define( [ 'App', 'marionette', 'models/Albums', 'views/AlbumView', 'views/EmptyAlbumView'],
    ( App, Marionette, Albums, AlbumView, EmptyAlbumView) ->
        Backbone.Marionette.CollectionView.extend({
            tagName: 'div'
            childView: AlbumView
            emptyView: EmptyAlbumView
            collection: new Albums
        });
);