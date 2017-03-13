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

                    window.addEventListener('scroll', function () {
                        if (MyAbout.scrollTimer) {
                            clearTimeout(MyAbout.scrollTimer);   // clear any previous pending timer
                        }
                        MyAbout.scrollTimer = setTimeout(MyAbout.handleScroll, 22);   // set new timer
                    });

                     // app.routeElem.innerHTML = '<p>This JavaScript content overrides the static content for this view.</p>';
                },
                'aboutInit': function() {

                    window.MyAbout = {}; // global Object container
                    MyAbout.scrollTimer       = null;
                    MyAbout.aboutElement      = document.getElementById('about');
                    MyAbout.aboutElement.classList.add('scroll-colors-enabled','_1_lw');

                    MyAbout.setHeights        = function () {
                        this.aboutHeight      = this.aboutElement.scrollHeight;
                        this.headHeight       = document.querySelectorAll('#about .header-spacer')[0].scrollHeight;
                        this.screenHeight     = window.innerHeight;
                        this.adjustedHeight   = this.aboutHeight - this.headHeight - ( this.screenHeight / 2 );
                    }; 
                    MyAbout.changeClasses     = function ( element , string ) {
                        element.classList.remove('_1_lw', '_2_uw', '_3_jh', '_4_cc', '_5_me');
                        element.classList.add( string );
                    };
                    MyAbout.scrollTracker     = function ( event ) {
                        if ( MyAbout.scrollQuery( 0, 0.13 )) {
                          MyAbout.changeClasses(MyAbout.aboutElement, '_1_lw');
                        }
                        if ( MyAbout.scrollQuery( 0.131, 0.34 )) {
                          MyAbout.changeClasses(MyAbout.aboutElement, '_2_uw');
                        }
                        if ( MyAbout.scrollQuery( 0.341, 0.57 )) {
                          MyAbout.changeClasses(MyAbout.aboutElement, '_3_jh');
                        }
                        if ( MyAbout.scrollQuery( 0.571 , 0.79 )) {
                          MyAbout.changeClasses(MyAbout.aboutElement, '_4_cc');
                        }
                        if ( MyAbout.scrollQuery( 0.791, 1 )) {
                          MyAbout.changeClasses(MyAbout.aboutElement, '_5_me');
                        }
                    };
                    MyAbout.scrollQuery       = function ( int1, int2 ) {
                        if (
                            ( window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0 ) >= ( MyAbout.adjustedHeight * int1 ) &&
                            ( window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0 ) < ( MyAbout.adjustedHeight * int2 )
                         ) {
                            return true;
                        } else {
                            return false;
                        }
                    };
                    MyAbout.handleScroll      = function () {
                        console.log('scroll');
                        window.MyAbout.scrollTracker();
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