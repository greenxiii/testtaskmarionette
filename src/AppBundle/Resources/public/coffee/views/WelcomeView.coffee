define( [ 'App', 'marionette', 'models/Model', 'text!templates/welcome.html'],
    ( App, Marionette, Model, template) ->
        # //ItemView provides some default rendering logic
        Marionette.ItemView.extend( {
            # //Template HTML string
            template: _.template(template),
            model: new Model({
                mobile: App.mobile
            }),

            # // View Event Handlers
            events: {

            }
        });
);