<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.1.5/angular.min.js"></script>
    <script src="https://rawgithub.com/arunisrael/angularjs-geolocation/master/dist/angularjs-geolocation.min.js"></script>
</head>
<body ng-app="myApp">
    <div ng-controller="mainCtrl">
      <p>Your location is: {{coords}}</p>
    </div>
  </body>
  <script>
    (function(angular){
  'use strict';
// Code goes here

var myApp = angular.module('myApp',['geolocation']);
myApp.controller('mainCtrl', function ($scope,geolocation) {
    $scope.coords = geolocation.getLocation().then(function(data){
      return {lat:data.coords.latitude, long:data.coords.longitude};
    });
});

 })(window.angular);
  </script>
</html>