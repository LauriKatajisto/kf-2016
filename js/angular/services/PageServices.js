var pageServices = angular.module('pageServices', ['ngResource']);

pageServices.factory('Post', ['$resource', function($resource){
    
	return $resource('proxy.php', {}, {
		query: {method:'GET', params:{postId:'posts'}, isArray:true}
    });
  
}]);