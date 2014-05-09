angular.module("unbottled", ["firebase"])
  .factory("WaterInfo", ["$firebase", function($firebase) {
    var ref = new Firebase("https://unbottled.firebaseio.com");
    return $firebase(ref);
     }])
  .factory("OrgInfo", ["$firebase", function($firebase) {
    var ref = new Firebase("https://unbottled.firebaseio.com/orgInfo");
    return $firebase(ref);
     }])
  .controller ("UnbottledController", ["$scope", "WaterInfo", "OrgInfo",
    function($scope, WaterInfo, OrgInfo) {
      // Get types & ratings.
      $scope.WaterInfos = WaterInfo;
      $scope.OrgInfos = OrgInfo;
        // Add it via $add on the service. 
    }
  ]);

