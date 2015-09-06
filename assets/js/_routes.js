var tanyadongLoginApp = angular.module('tanyadongLoginApp', ['ngRoute']);

    // configure our routes
    tanyadongLoginApp.config(function($routeProvider) {

        $routeProvider

            .when('/', {
                templateUrl : 'login/get_view_login',
                controller  : 'mainController'
            })

            // route for the about page
            .when('/signup', {
                templateUrl : 'login/get_view_signup',
                controller  : 'signupController'
            })

            // route for the contact page
            .when('/contact', {
                templateUrl : 'pages/contact.html',
                controller  : 'contactController'
            });
    });    