//Subscription Nav Bar
//angular.module('tabsDemoDynamicHeight', ['ngMaterial']);



angular
  .module('radioDemo1', ['ngMaterial'])
  .controller('AppCtrl', function($scope) {

    $scope.data = {
      group1 : 'Banana',
      group2 : '2',
      group3 : 'avatar-1'
    };

    $scope.avatarData = [{
        id: "avatars:svg-1",
        title: 'avatar 1',
        value: 'avatar-1'
      },{
        id: "avatars:svg-2",
        title: 'avatar 2',
        value: 'avatar-2'
      },{
        id: "avatars:svg-3",
        title: 'avatar 3',
        value: 'avatar-3'
    }];

    $scope.radioData = [
      { label: '1', value: 1 },
      { label: '2', value: 2 },
      { label: '3', value: '3', isDisabled: true },
      { label: '4', value: '4' }
    ];

    $scope.submit = function() {
      alert('submit');
    };

    $scope.addItem = function() {
      var r = Math.ceil(Math.random() * 1000);
      $scope.radioData.push({ label: r, value: r });
    };

    $scope.removeItem = function() {
      $scope.radioData.pop();
    };

  })
  .config(function($mdIconProvider) {
    $mdIconProvider.iconSet("avatars", 'icons/avatar-icons.svg',128);
  });
  
 
  
  
  angular
  .module('MyApp',['ngMaterial', 'ngMessages', 'material.svgAssetsCache'])
  .controller('ContactController', function($scope, $filter) {
    var self = this;

    self.contacts = [{
      'id': 1,
      'fullName': 'Maria Guadalupe',
      'lastName': 'Guadalupe',
      'title': "CEO, Found"
    }, {
      'id': 2,
      'fullName': 'Gabriel Garca Marquz',
      'lastName': 'Marquz',
      'title': "VP Sales & Marketing"
    }, {
      'id': 3,
      'fullName': 'Miguel de Cervantes',
      'lastName': 'Cervantes',
      'title': "Manager, Operations"
    }, {
      'id': 4,
      'fullName': 'Pacorro de Castel',
      'lastName': 'Castel',
      'title': "Security"
    }];
    self.selectedId = 2;
    self.selectedUser = function() {
      return $filter('filter')(self.contacts, { id: self.selectedId })[0].lastName;
    }
  });
  
  
  
  
  /***BUY & TRial***/
  
  
angular
  .module('MyApp',['ngMaterial', 'ngMessages', 'material.svgAssetsCache'])
  .controller('AppCtrl', function($scope) {

    $scope.data = {
      group1 : 'Banana',
      group2 : '2',
      group3 : 'avatar-1'
    };

    $scope.avatarData = [{
        id: "avatars:svg-1",
        title: 'avatar 1',
        value: 'avatar-1'
      },{
        id: "avatars:svg-2",
        title: 'avatar 2',
        value: 'avatar-2'
      },{
        id: "avatars:svg-3",
        title: 'avatar 3',
        value: 'avatar-3'
    }];

    $scope.radioData = [
      { label: '1', value: 1 },
      { label: '2', value: 2 },
      { label: '3', value: '3', isDisabled: true },
      { label: '4', value: '4' }
    ];


    $scope.submit = function() {
      alert('submit');
    };

    $scope.addItem = function() {
      var r = Math.ceil(Math.random() * 1000);
      $scope.radioData.push({ label: r, value: r });
    };

    $scope.removeItem = function() {
      $scope.radioData.pop();
    };

  })
  .config(function($mdIconProvider) {
    $mdIconProvider.iconSet("avatars", 'icons/avatar-icons.svg',128);
  });


  
/***Dialog***/

