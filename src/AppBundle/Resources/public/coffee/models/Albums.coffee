define(["jquery", "backbone", "models/Album"],
    ($, Backbone, Album) ->
        Albums = Backbone.Collection.extend({
            model: new Album,
            url: 'api/albums',
        });
);