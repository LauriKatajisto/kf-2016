var pageController = angular.module('pageController', []);


pageController.controller('frontPageContent', ['$scope', 'Post', function($scope, Post) {
  
	 $scope.pagecontent = Post.get({pageId: 'etusivu'}, function(post) {
		    
  	});      
}]);

pageController.controller('aboutPageContent', ['$scope', 'Post', function($scope, Post) {
  
	 $scope.pagecontent = Post.get({pageId: 'about'}, function(post) {
		    
  	});      
}]);

pageController.controller('mediaPageContent', ['$scope', 'Post', function($scope, Post) {
  
	 $scope.pagecontent = Post.get({pageId: 'media'}, function(post) {
		    
  	});      
}]);