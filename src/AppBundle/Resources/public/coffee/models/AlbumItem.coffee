define(["jquery", "backbone"],
    ($, Backbone) ->
        Backbone.Model.extend({
            urlRoot: 'api/albums'
        });
);