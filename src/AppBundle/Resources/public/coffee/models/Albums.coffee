define(["jquery", "backbone", "models/Album"],
    ($, Backbone, Album) ->
        Backbone.Collection.extend({
            model: Album,
            url: 'api/albums',
            initialize: ->
                @fetch
                    success: (response) ->
                        _.each response.toJSON(), (albums) ->
                            console.log 'Successfully GOT albums with data: ' + albums
                    error: ->
                        console.log 'Failed to get albumss!'
        });
);