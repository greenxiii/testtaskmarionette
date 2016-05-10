define( [ 'App', 'marionette', 'text!templates/empty.html'],
    ( App, Marionette, template) ->
        Marionette.ItemView.extend( {
            template: _.template(template),
            tagName: 'div',
        });
);