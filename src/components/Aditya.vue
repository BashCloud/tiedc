<template>
  <div class="initiatives">
      <div class="inner">
          <h1>
              {{msg}}
          </h1>
          <h4>
            {{msg1}}  
          </h4>
      </div>
          <div>
				<!--BOX1-->
				<div class="col-xs-4 service-box animated fadeIn visible" >
				<!--icon-->
				<a class="service-icon" href="#" target="_blank">
				<i>
					<img src="../assets/rocket.png" class="iconi">
				</i>
				</a>
				<p class="service-header light white">PROTOTHON</p>
				</div>
				<div class="fade top in"
					style="top: -3px;
							left:281px;
							">
					
				</div>
				
				<div class="col-xs-4 service-box animated fadeIn visible" 
				>
				<!--icon-->
				<a class="service-icon" href="#" target="_blank">
				<i>
					<img src="../assets/idea.png" class="iconi">
				</i>
				</a>
				<p class="service-header light white">Weekend Hike</p>
				</div>
				<div class="fade top in"
					style="top: -3px;
							left:281px;
							" 
                            >
					
				</div>
				<div class="col-xs-4 service-box animated fadeIn visible" 
				>
				<!--icon-->
				<a class="service-icon" href="#" target="_blank">
				<i>
					<img src="../assets/businessmen-having-a-group-conference.png" class="iconi">
				</i>
				</a>
				<p class="service-header light white">Entrepreneurial Discussions</p>
				</div>
				<div class="fade top in"
					style="top: -3px;
							left:281px;"
							>
					
				</div>
			</div>
      </div>

  
</template>

<script>
export default {
    name: 'Aditya',
    data(){
        return{
            msg: "Our Initiatives",
            msg1: "We at Technology Incubation and Entrepreneurship Development Cell, JUIT Waknaghat believe that entrepreneurship is the key to \n India’s development. To fulfill this vision, we have conceptualized; successfully implemented various initiatives to help students, young entrepreneurs;\n professionals in their entrepreneurial journey."
        }
    }

}
</script>

<style>
h1,h4{
    font-weight: normal;
    font-family: "Open Sans", sans-serif;
    color: azure;
}
h4{
    padding: 50px;
    font-weight: lighter;
}
h1{
    padding: 20px;
}
.initiatives{
	background: linear-gradient(to top, #434343, #000000);
}
.visible{
    visibility: visible;
}
.animated{
    animation-duration: 1s;
    animation-fill-mode: both;
}
.col-xs-4{
    width: 33.333333%;
    display: inline-block;
}
.fadeIn{
    animation-name: fadeIn;
}

</style>
