adminapp.controller('dashboardCtrl',['$scope','$http','apiurl',function($scope,$http,apiurl) {
	
	console.log("welcome to dashboardCtrl");

}]);

// Manage Brand controller

adminapp.controller('ManageBrandCtrl',['$scope','$http','apiurl',function($scope,$http,apiurl) {
	
	console.log("welcome to ManageBrandCtrl");

// Getting brand details from database

	function brand_details()
	{
	 	$http.post(apiurl+'brand/view_brand').then(function(response){
	 		console.log(response.data);	 		
	 		$scope.brand_details = response.data;
	 		/*setTimeout(function(){
			 	$('#brandTalble').DataTable();
			 },300);*/
		},function(response){
			console.log("service error");
		});
		}
	brand_details();

// adding dynamic row for adding brand datas

	$scope.addBrandRow = function()
	{	
		$scope.editbrand = -1;
		$scope.brand_details.push({'brand_id':0,'brand_name':''});
	}

// add brand
	
	$scope.addBrand = function(brandname)
	{		
		var data = {'brandname' : brandname };
	 	$http.post(apiurl+'brand/add_brand', data).then(function(response){ 	
	 		console.log(response.data);
	 		
	 		if(response.data == '1')
	 		{
	 			notify('top', 'center', 'fa fa-comments', 'inverse');
	 			brand_details();
	 		}
	 		else if(response.data == '2')
	 		{
	 			alert('Operation Failed. Try Again..!');
	 		}
	 		else if(response.data == '3')
	 		{
	 			alert('Brand Name Already Exist...!');
	 		}
		},function(response){
			console.log("service error");
		});
	}

// removing brand row from the table

	$scope.deleteBrandRow = function(row)
	{		
		$scope.brand_details.splice($scope.brand_details.indexOf(row), 1);

	}

// edit  brand details 

	$scope.editBrand = function(position)
	{	
		$scope.editbrand = position;
		
	}

// cancel update button

	$scope.cancelBrandUpdate = function()
	{	
		$scope.editbrand = -1;
	}

// update brand 

	$scope.updateBrand = function(brandName,brandId)
	{	
		var data = {'brandname':brandName,'brandid':brandId}
	 	$http.post(apiurl+'brand/update_brand', data).then(function(response){
			
	 		if(response.data == '1')
	 		{			 	
				$scope.editbrand = -1;	
				brand_details();
				notify('top', 'center', 'fa fa-comments', 'inverse');	 	
	 		}
	 		else if(response.data == '2')
	 		{			 			
	 			alert('Operation Failed. Try Again..!');
	 		}
	 		else if(response.data == '3')
	 		{
	 			alert('Brand Name Already Exist...!');
	 		}
			
		},function(response){
			console.log("service error");

		});
	}

}]);

// Manage drug controller

adminapp.controller('ManageDrugCtrl',['$scope','$http','apiurl',function($scope,$http,apiurl) {
	
	console.log("welcome to ManageDrugCtrl");

// view all drug from the database 

	function drugDetails()
	{
		$http.post(apiurl+'product/view_product').then(function(response){
	 		console.log(response.data);	 		
	 		$scope.drugDetails = response.data;
	 		/*setTimeout(function(){
			 	$('#drugTalble').DataTable();
			 },300);*/	 		
		},function(response){
					var data = "service error";

		});
	}
	drugDetails();

// view all drug from the database 

	function brand_details()
	{
	 	$http.post(apiurl+'brand/view_brand').then(function(response){
	 		console.log(response.data);	 		
	 		$scope.brand_details = response.data;	 		
		},function(response){
			console.log("service error");
		});
		}
	brand_details();

	// adding dynamic row for adding drug datas

	$scope.addDrugRow = function()
	{	
		$scope.editdrug = -1;
		$scope.drugDetails.push({'product_id':0,'brand_name':'','product_name':''});
	}

	// removing drug row from the table

	$scope.deleteDrugRow = function(row)
	{		
		$scope.drugDetails.splice($scope.drugDetails.indexOf(row), 1);

	}

	// edit  brand details 

	$scope.editDrug = function(position,brandId)
	{	
		$scope.editdrug = position;
		$scope.BrandId = brandId;
		
	}

	// cancel update button

	$scope.cancelDrugUpdate = function()
	{	
		$scope.editdrug = -1;
	}

	// add Drug
	
	$scope.addDrug = function(brandId,drugName)
	{

		var data = {'brandid' : brandId,'productname': drugName};
		console.log(data);
	 	$http.post(apiurl+'product/add_product', data).then(function(response){ 	
	 		console.log(response.data);
	 		
	 		if(response.data == '1')
	 		{
	 			var message = "The Item has been added into your Inventory Successfully";
	 			notify('top', 'center', 'fa fa-comments', 'inverse',message);
	 			drugDetails();
	 		}
	 		else if(response.data == '2')
	 		{
	 			//alert('Operation Failed. Try Again..!');
	 			var message = "Operation Failed. Try Again..!";
	 			notify('top', 'center', 'fa fa-comments', 'inverse',message);
	 		}
	 		else if(response.data == '3')
	 		{
	 			//alert('Drug Already Exist...!');
	 			var message = "This Item already in your Inventory..! Try something different..! ";
	 			notify('top', 'center', 'fa fa-comments', 'inverse',message);
	 		}
		},function(response){
			console.log("service error");
		});
	}

	// update Drug 

	$scope.updateDrug = function(productId,brandId,drugName)
	{	
		var product_data = {'brandid' : brandId ,'productid' :productId, 'productname' : drugName }
	 	$http.post(apiurl+'product/update_product', product_data).then(function(response){
 		console.log(response.data);
	 		if(response.data == '1')
	 		{
	 			$scope.editdrug = -1;	
				brand_details(); 						
	 			var message = "The Item has been Edited into your Inventory Successfully";
	 			notify('top', 'center', 'fa fa-comments', 'inverse',message);	 			
	 		}
	 		else if(response.data == '2')
	 		{
	 			var message = "Operation Failed. Try Again..!";
	 			notify('top', 'center', 'fa fa-comments', 'inverse',message);
	 		}
	 		else if(response.data == '3')
	 		{
	 			var message = "This Item already in your Inventory..! Try something different..! ";
	 			notify('top', 'center', 'fa fa-comments', 'inverse',message);
	 		}
		},function(response){
			console.log("service error");

		});
	}

}]);

// Add Stock controller
adminapp.controller('addStockCtrl',['$scope','$http','apiurl',function($scope,$http,apiurl) {

	console.log("welcome to add stock controller");
	$scope.stockData = [{'id':0}];
//  seller details 
	function viewseller()
	{
		$http.post(apiurl+'Seller/view_seller').then(function(response){
			$scope.selleritems = response.data;
			console.log(response.data);
			
		},function(response){
			console.log("service error");
		});
	}
	viewseller();

// drug details
	function drugDetails()
	{
		$http.post(apiurl+'product/allDrugDetails').then(function(response){
			$scope.drugDetails = response.data;
			console.log(response.data);
			
		},function(response){
			console.log("service error");
		});
	}
	drugDetails();

// add dynamic row for adding stock 
	$scope.addStockRow = function(row)
	{
		$scope.stockData.push({'id':row});
		$("#mainTab"+row).click(); // for scrolling to next item
	}

// delete dynamic stock row

	$scope.deleteStockRow = function(row)
	{
		$scope.stockData.splice(row, 1);
		$("#mainTab"+row).click(); // for scrolling to previous item
	}
		
}]);