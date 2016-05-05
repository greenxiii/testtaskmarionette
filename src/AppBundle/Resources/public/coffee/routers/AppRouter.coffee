define(['marionette', 'controllers/Controller'], (Marionette, Controller) ->
	Marionette.AppRouter.extend(
		controller: Controller
		appRoutes:
			"": "index"
			"albums": "albums"
			"album/:id": "album"

	);
);