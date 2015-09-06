    tanyadongLoginApp.controller('mainController', function($scope,$http) {        
        $scope.title = 'Tanyadong';
        // $http({
        //             url: 'login/test2',
        //             method: 'GET'
        //         })
        //         .success(function(data) {
        //             console.log(data);
        //             // returnData.resolve(data);
        //         })
        //         .error(function(error) {
        //             console.log(error);
        //             // returnData.reject();
        //         });
    });

    tanyadongLoginApp.controller('signupController', function($scope) {
                
    });

    tanyadongLoginApp.controller('contactController', function($scope) {
        $scope.message = 'Contact us! JK. This is just a demo.';
    });