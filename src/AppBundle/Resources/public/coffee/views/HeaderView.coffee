define([ 'marionette', 'text!templates/header.html'],
    (Marionette, template) ->
        # // ItemView provides some default rendering logic
	    Marionette.ItemView.extend({
            template: _.template(template)
        });
);