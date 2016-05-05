define(['jquery', 'backbone', 'marionette', 'underscore', 'layouts/RootLayoutView'],
    ($, Backbone, Marionette, _, RootLayoutView) ->
        App = new Backbone.Marionette.Application();

        App.rootLayout = new RootLayoutView({
            regions: {
                headerRegion:"#global-header",
                mainRegion:"#main"
            }
        });

        isMobile = () ->
            ua = (navigator.userAgent || navigator.vendor || window.opera);
            (/iPhone|iPod|iPad|Android|BlackBerry|Opera Mini|IEMobile/).test(ua);

        App.static = {};

        App.static.mobile = isMobile();

        App.on('start', (options) ->
            if (Backbone.history)
            	Backbone.history.start();
        );

        App;
    );