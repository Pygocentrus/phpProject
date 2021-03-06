<div ng-app="myApp">
	<section class="section titleG">
	<div class="container">
			<div class="row">
				<h2>Generator</h2>
				<div class="separate"></div>
			</div>
	</div>
	<section>



	<section class="section choose-data">
		<div class="container">
			<div class="row">
				<div class="number"><p>1</p></div>
				<div class="title-data">
					<h3>Choose your type of data</h3>
					<p class="text-info">Data generated</p>
				</div>
			</div>
			<div class="row list-datas" id="myTab">
				<a href="#users" class="btn-data active">Users</a>
				<a href="#posts" class="btn-data">Posts</a>
				<a href="#contents" class="btn-data">Content</a>
				<a href="#images" class="btn-data">Images</a>
			</div>
		</div>
	</section>




		<!-- Tab panes -->
		<div class="tab-content">
		  <!-- Users -->
		  <div class="tab-pane active" id="users" ng-controller="UserCtrl">
		  	<p>

		        <div ng-include src="view.getView()"></div>
		    </p>
		  </div>

		  <!-- Posts -->
		  <div class="tab-pane" id="posts" ng-controller="PostCtrl">
		  	<p>
		        <div ng-include src="view.getView()"></div>
		    </p>
		  </div>

		  <!-- Contents -->
		  <div class="tab-pane" id="contents" ng-controller="ContentCtrl">
		  	<p>
		        <div ng-include src="view.getView()"></div>
		    </p>
		  </div>

		  <!-- Images -->
		  <div class="tab-pane" id="images" ng-controller="ImagesCtrl">
		  	<p>
		        <div ng-include src="view.getView()"></div>
		    </p
		  </div>

		</div>





