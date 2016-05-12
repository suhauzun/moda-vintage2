/* global angular */
(function() {
  
  'use strict';

  var app = angular.module('bitpazari');
  

  app.controller('MainCtrl', function MainCtrl() {
    var vm = this;
    // funcation assignment
    vm.onSubmit = onSubmit;
    vm.allProducts = allProducts;
   
  

    // function definition
    function allProducts() {
     return {"products":[{"id":1,"name":"shoes","tags":["ayakkabı","kırmızı","rugan"]},{"id":2,"name":"shoes","tags":["ayakkabı","kırmızı","rugan"]}]};
    }
  });

})();