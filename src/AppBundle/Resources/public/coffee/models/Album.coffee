define(["jquery", "backbone"],
    ($, Backbone) ->
        Backbone.Model.extend({
            urlRoot: 'api/albums'
            defaults:
                id: '55'
                name: '674'
            initialize: ->
                console.log("AlbumModel")

        });
);