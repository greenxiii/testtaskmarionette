define(["jquery", "backbone", "models/Album"],
    ($, Backbone, Album) ->
        Backbone.Collection.extend({
            model: Album
            url: "api/album/0"
        });
);