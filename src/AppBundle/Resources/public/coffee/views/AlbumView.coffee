define( [ 'App', 'marionette', 'models/Album', 'text!templates/albums.html'],
    ( App, Marionette, Album, template) ->
        Marionette.ItemView.extend( {
            model: Album,
            tagName: 'div',
            template: (model) ->
                _.template(template)(
                    albums : model
                );
        });
);