app.controller('myCtrl', function($scope) {
  $scope.year = (function() {
    var date = new Date();
    return date.getFullYear();
  })();
});
