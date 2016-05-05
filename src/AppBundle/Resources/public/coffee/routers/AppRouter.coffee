define(['marionette', 'controllers/Controller'], (Marionette, Controller) ->
   Marionette.AppRouter.extend({
       # //"index" must be a method in AppRouter's controller
       appRoutes: {
           "": "index"
       }
   });
);