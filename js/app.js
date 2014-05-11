angular.module("unbottled", ["firebase"])
  .factory("WaterInfo", ["$firebase", function($firebase) {
    var ref = new Firebase("https://unbottled1.firebaseio.com/");
    return $firebase(ref);
     }])
  .controller ("UnbottledController", ["$scope","$sce", "WaterInfo",
    function($scope, $sce, WaterInfo) {
      $scope.WaterInfos = WaterInfo;
      $scope.to_trusted = function(WaterInfo){
      return $sce.trustAsHtml(WaterInfo)
      }
    }
  ]);
// 
