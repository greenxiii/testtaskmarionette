define( [ 'App', 'marionette', 'models/Albums', 'views/AlbumView', 'text!templates/albums.html'],
    ( App, Marionette, Albums, AlbumView, template) ->
        Backbone.Marionette.CollectionView.extend({
            tagName: 'divv',
            childView: new AlbumView
            initialize: ->
                console.log("CollectionView")
        });
);