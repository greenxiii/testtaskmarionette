define(["jquery", "backbone"],
    ($, Backbone) ->
        Model = Backbone.Model.extend({
            initialize: () ->
                console.log("Model init")
            defaults:
                name: ''
                src: ''

        });
);