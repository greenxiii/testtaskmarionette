define(['jquery', 'backbone', 'marionette', 'underscore', 'layouts/RootLayoutView', 'models/Album', 'models/Albums', 'views/AlbumView'],
    ($, Backbone, Marionette, _, RootLayoutView, Album, Albums, AlbumView) ->
        App = new Backbone.Marionette.Application();
        Album = undefined
        Albums = undefined
        AlbumView = undefined

        App.rootLayout = new RootLayoutView({
            regions: {
                mainRegion:"#main"
            }
        });

        App.on('start', (options) ->

            if (Backbone.history)
            	Backbone.history.start();
        );

        App;
    );