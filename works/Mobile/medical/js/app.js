var adminapp = angular.module('adminapp',['ngRoute']);

adminapp.config(['$routeProvider',function($routeProvider){
	$routeProvider.
            when('/', {
                templateUrl: 'partials/dashboard.html',
                controller: 'dashboardCtrl'
            }).   
            when('/ManageBrand', {
                templateUrl: 'partials/ManageBrand.html',
                controller: 'ManageBrandCtrl'
            }).
            when('/ManageDrug', {
                templateUrl: 'partials/ManageDrug.html',
                controller: 'ManageDrugCtrl'
            }). 
            when('/AddInventory', {
                templateUrl: 'partials/addStock.html',
                controller: 'addStockCtrl'
            }).               
            otherwise({
            	redirectTo:'/'
            });
}]);
	