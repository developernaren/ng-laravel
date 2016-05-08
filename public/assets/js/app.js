angular.module( 'LaravelNg',['ngRoute'] )
    .config(function($routeProvider, $locationProvider) {
        $routeProvider

            .when('/asdasda', {
                templateUrl: 'detail.html',
                controller: 'ListCtrl'
            }).
        otherwise({
            redirectTo: '/'
        });

        // configure html5 to get links working on jsfiddle
        //$locationProvider.html5Mode(true);
    })
    .controller('ListCtrl', ['Product',  ListCtrl ])
    .controller( 'DetailCtrl', [ 'Product', ProductCtrl ])
    .factory('Product',[ '$q', '$http', Product]);




function ProductCtrl() {

    alert("hello");


}


function ListCtrl( Product ) {


    var that = this;

    that.name = "Narendra";

    Product.getProduct().then( function( res ) {

        that.products = res;
    })


    this.getDetail = function( slug ) {

        Product.getDetail( slug).then( function( res ) {

            console.log(  res );
        });
    }




}

function Product( $q, $http ) {

    var products = {};

    products.getProduct = getProduct;

    products.getDetail = getProductDetail;


    return products;


    function getProduct() {

        return $q( function( resolve, reject ) {

            $http.get('api/product').success( function( res ) {

                resolve( res );
            })
        });
    }


    function getProductDetail( slug ) {

        return $q( function( resolve, reject ) {

            $http.get('api/product/' + slug ).success( function( res ) {

                resolve( res );
            })
        });
    }

}