@extends('admin.layout.app')
@section('content')
<style>
body {
  font-family: "Lato", sans-serif;
}
.sidenav {
  height: 100%;
  width: 160px;
  position:relative ;
  z-index: 1;
  top: 0;
  left: 0;
  background-color:aliceblue;
  padding-top: 20px;
  padding-bottom:291px;
  padding-left: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 12px;
  font-weight: bold;
  color: black;
  display: block;
}

.sidenav a:hover {
  color: #692b2b;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

._header{
	position: relative;
}
._body-inner {
  /*  min-height:80vh;*/
    position: relative;
}
._body-inner .sidenav {
    position: ;
  
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 10px;}
}
.field_name{
	color: black;
    font-size: small;
    font-weight: bold;
    font-family: monospace;
    margin-top:10px; 

}
.form input{
	width: 28%;
  height: 33px;

}
</style>
<main class="_main">
        <div class="_body-inner">
        	<div class="row">
        		<div class="col-md-3">
        			<div class="sidenav">
		  				<a href="#about">Add Courses</a>
					  	<a href="#services">Services</a>
					  	<a href="#clients">Clients</a>
					  	<a href="#contact">Contact</a>
					</div>
        		</div>
        		<div class="col-md-5">
        			<h4> Create Course </h4>
        			<hr>
        			 <div class="form">			        	
			        	<p class="field_name">Course Name</p><input class="fields" type="text">
                <p class="field_name">Course Price</p><input class="fields" type="text">
			        </div>
        		</div>
        	</div>
        
        </div>
       
</main>
@endsection