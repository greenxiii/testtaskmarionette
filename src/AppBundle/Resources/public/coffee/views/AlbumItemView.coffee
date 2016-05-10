define( [ 'App', 'marionette', 'models/AlbumItem', 'text!templates/albumitems.html'],
    ( App, Marionette, AlbumItem, template) ->
        Marionette.ItemView.extend( {
            model: AlbumItem
            tagName: 'div'
            className: 'album_item_img'
            template: (model) ->
                _.template(template)(
                    albums : model
                );
        });
);