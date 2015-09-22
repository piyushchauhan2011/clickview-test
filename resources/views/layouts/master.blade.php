<!-- Stored in resources/views/layouts/master.blade.php -->

<html ng-app="app">
    <head>
        <title>ClickView Test - @yield('title')</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.6/angular.min.js" charset="utf-8"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.10.1/lodash.min.js" charset="utf-8"></script>
    </head>
    <body>
        @section('navbar')
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">
                ClickView Contact Form
              </a>
            </div>
          </div>
        </nav>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>

    <script type="text/javascript">
      var app = angular.module('app', []);
      angular.module('app').config(['$interpolateProvider', function ($interpolateProvider) {
        $interpolateProvider.startSymbol('[[');
        $interpolateProvider.endSymbol(']]');
      }]);
      angular.module('app').controller('ContactsController', ['$scope', '$http', function($scope, $http) {
        $http.get('/contacts')
          .then(function(contacts) {
            $scope.cts = contacts.data;
          });
        $scope.contact = {
          role: ''
        };
        $scope.submitContactForm = function() {
          console.log($scope.contact);
          $http.post('/contacts', $scope.contact)
            .then(function(response) {
              console.log(response);
              $scope.cts.push(response.data);
              $scope.contact = {};
            })
            .catch(function(errors) {
              console.log(errors);
              $scope.errors = errors.data;
            });
        };
        $scope.deleteContact = function(contact) {
          $http.delete('/contacts/' + contact.id)
            .then(function(response) {
              console.log(response);
              var tmpContact = response.data;
              _.remove($scope.cts, function(ct) {
                return ct.id === tmpContact.id;
              });
            })
            .catch(function(response) {
              alert('some error occurred');
            });
        }
      }]);
    </script>
</html>
