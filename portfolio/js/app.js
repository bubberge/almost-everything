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

                    if ( !window.MyAbout ) {
                        window.onload = app.route.aboutInit();
                    } 

                    MyAbout.setHeights();

                    window.addEventListener('scroll', function(){ 
                        console.log('scroll');
                        window.MyAbout.scrollTracker();
                    });

                     // app.routeElem.innerHTML = '<p>This JavaScript content overrides the static content for this view.</p>';
                },
                'aboutInit': function() {

                    window.MyAbout = {}; // global Object container
                    MyAbout.aboutElement      = document.querySelectorAll('#about .content')[0];

                    MyAbout.setHeights        = function () {
                        this.aboutHeight    = this.aboutElement.scrollHeight;
                        this.headHeight     = document.querySelectorAll('#about .header-spacer')[0].scrollHeight;
                        this.screenHeight   = window.innerHeight;
                        this.adjustedHeight = this.aboutHeight - this.headHeight - ( this.screenHeight / 2 );
                    }; 
                    MyAbout.clearClasses      = function ( element , string ) {
                        element.classList.remove('_1_lw', '_2_uw', '_3_jh', '_4_cc', '_5_me');
                        element.classList.add( string );
                    };
                    MyAbout.scrollTracker     = function ( event ) {
                        if ( document.body.scrollTop >= 0 && document.body.scrollTop < MyAbout.adjustedHeight * 0.13 ) {
                          MyAbout.clearClasses(MyAbout.aboutElement, '_1_lw');
                        }
                        if ( document.body.scrollTop > MyAbout.adjustedHeight * 0.131 && document.body.scrollTop < MyAbout.adjustedHeight * 0.34 ) {
                          MyAbout.clearClasses(MyAbout.aboutElement, '_2_uw');
                        }
                        if ( document.body.scrollTop > MyAbout.adjustedHeight * 0.341 && document.body.scrollTop < MyAbout.adjustedHeight * 0.57 ) {
                          MyAbout.clearClasses(MyAbout.aboutElement, '_3_jh');
                        }
                        if ( document.body.scrollTop > MyAbout.adjustedHeight * 0.58 && document.body.scrollTop < MyAbout.adjustedHeight * 0.79) {
                          MyAbout.clearClasses(MyAbout.aboutElement, '_4_cc');
                        }
                        if ( document.body.scrollTop > MyAbout.adjustedHeight * 0.80) {
                          MyAbout.clearClasses(MyAbout.aboutElement, '_5_me');
                        }
                    };
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

            // housekeeping
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