define( [ 'App', 'marionette', 'models/Album', 'text!templates/albums.html'],
    ( App, Marionette, Album, template) ->
        Marionette.ItemView.extend( {
            # template: _.template(template),
            model: new Album,
            template: (model) ->
                console.log(model)
                _.template(template)(
                    albums : model
                );
            initialize: () ->
                console.log("AlbumView");
                @model.fetch
                    success: (response) ->
                        _.each response.toJSON(), (albums) ->
                            console.log 'Successfully GOT albums with data: ' + albums
                    error: ->
                        console.log 'Failed to get albumss!'
            events: {

            }
        });
);