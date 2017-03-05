$(document).foundation();
$(document).ready(function(){
    console.log('¸.·´¯`·.´¯`·.¸¸.·´¯`·.¸><(((º>');
});

(function() {
    var $body = document.getElementsByTagName('body')[0];
    var app = {
        // routes (i.e. views and their functionality) defined here
        'routes': {
            'splash': {
                'rendered': function() {
                    console.log('this view is "splash"');
                    // app.routeElem.innerHTML = '<p>This JavaScript content overrides the static content for this view.</p>';
                }
             },
            'about': {
                 'rendered': function() {
                     console.log('this view is "about"');
                     // app.routeElem.innerHTML = '<p>This JavaScript content overrides the static content for this view.</p>';
                 }
              },
            'portfolio': {
                'rendered': function() {
                    console.log('this view is "portfolio"');
                    // app.routeElem.innerHTML = '<p>This JavaScript content overrides the static content for this view.</p>';
                }
             },
             'contact': {
                 'rendered': function() {
                     console.log('this view is "contact"');
                     // app.routeElem.innerHTML = '<p>This JavaScript content overrides the static content for this view.</p>';
                 }
              }
        },
        // The default view is recorded here. A more advanced implementation
        // might query the DOM to define it on the fly.
        'default': 'splash',
        'routeChange': function() {
            app.routeID = location.hash.slice(1); // 'splash', 'about', etc
            app.route = app.routes[app.routeID];
            app.routeElem = document.getElementById(app.routeID);

            $body.classList = '';
            $body.classList.add( app.routeID );

            app.route.rendered();
        },
        // The function to start the app
        'init': function() {
            window.addEventListener('hashchange', function() {
                app.routeChange();
            });
            // If there is no hash in the URL, change the URL to
            // include the default view's hash.
            if (!window.location.hash) {
                window.location.hash = app.default;
            } else {
                // Execute routeChange() for the first time
                app.routeChange();
            }
        }
    };
    window.app = app;
})();

app.init();