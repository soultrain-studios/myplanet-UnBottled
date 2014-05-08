angular.module("Fundraisers", [])
  .factory("ChatService", function() {
    var ref = new Firebase("https://unbottled.firebaseio.com/Fundraisers");
    return {
      getMessages: function() {
        var messages = [];
        ref.on("child_added", function(snapshot) {
          messages.push(snapshot.val());
        });
        return messages;
      },
      addMessage: function(message) {
        ref.push(message);
      }
    }
  })
  .controller("ChatController", ["$scope", "ChatService",
    function($scope, service) {
      $scope.user = "Guest " + Math.round(Math.random()*101);
      $scope.messages = service.getMessages();
      $scope.addMessage = function() {
        service.addMessage({from: $scope.user, content: $scope.message});
        $scope.message = "";
      };
    }
  ]);