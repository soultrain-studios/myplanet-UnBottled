angular.module("unbottled", ["firebase"])
  .factory("WaterInfo", ["$firebase", function($firebase) {
    var ref = new Firebase("https://unbottled1.firebaseio.com/");
    return $firebase(ref);
     }])
  .controller ("UnbottledController", ["$scope", "WaterInfo",
    function($scope, WaterInfo) {
      // Get types & ratings.
      $scope.WaterInfos = WaterInfo;
        // Add it via $add on the service. 
    }
  ]);

