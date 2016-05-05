require.config({
    # // 3rd party script alias names (Easier to type "jquery" than "../libs/jquery/dist/jquery.min, etc")
    # // probably a good idea to keep version numbers in the file names for updates checking
    paths:{
        # // Core Libraries
        "jquery":"../../../lib/jquery/dist/jquery",
        "underscore":"../../../lib/underscore/underscore",
        "backbone":"../../../lib/backbone/backbone",
        "marionette":"../../../lib/backbone.marionette/lib/backbone.marionette",

        # // Plugins
        "backbone.validateAll":"../libs/Backbone.validateAll/src/javascripts/Backbone.validateAll",
        "text":"../../../lib/text/text",
        "backbone.wreqr" : "../libs/backbone.wreqr/lib/backbone.wreqr",
        "backbone.eventbinder" : "../libs/backbone.eventbinder/lib/amd/backbone.eventbinder",
        "backbone.babysitter" : "../libs/backbone.babysitter/lib/backbone.babysitter"
    },
    # // Sets the configuration for your third party scripts that are not AMD compatible
    shim:{
        "jquery" : {
            exports : "jQuery"
        },
        "underscore": {
            exports: "_"
        },
        "backbone":{
            "deps":["jquery", "underscore"],
            # // Exports the global window.Backbone object
            "exports":"Backbone"
        },
        # // Backbone.validateAll plugin (https://github.com/gfranko/Backbone.validateAll)
        "backbone.validateAll":["backbone"]
    }
});

# // Includes Desktop Specific JavaScript files here (or inside of your Desktop router)
require(["jquery","App", "routers/AppRouter", "controllers/Controller"], ($, App, AppRouter, Controller) ->
    $( ->
        App.appRouter = new AppRouter({
            controller:new Controller()
        });
        
        App.start();
    );

);