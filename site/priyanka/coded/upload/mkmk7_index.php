<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>

<head>
<script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
<script>
function personController($scope) {
    //alert($scope.toSource());
    $scope.firstName = "John";
    $scope.lastName = "Doe";
}
</script>
</head>

<body>

<div ng-app="">
<p>Input something in the input box:</p>
<p>Name: <input type="text" ng-model="name" value="John"></p>
<p>Name: <input type="text" ng-model="name_11" value="John"></p>
<p ng-bind="name"></p>
<p ng-bind="name_11"></p>
<p>My first expression {{5+5}}</p>
<div ng-app="" ng-controller="personController">

First Name: <input type="text" ng-model="firstName"><br>
Last Name: <input type="text" ng-model="lastName"><br>
<br>
Full Name: {{firstName + " " + lastName}}
<div ng-app="" ng-init="quantity=1;cost=5">

<p>Total in dollar: {{ quantity * cost }}</p>

</div>
</div>
</div>

</body>
</html>
