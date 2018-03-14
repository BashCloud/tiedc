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
    
    /* display: inline-block; */
}
.fadeIn{
    animation-name: fadeIn;
}
.light{
    font-weight: 100;
}
.white{
    color:white;
}
.service-icon{
    display:block;
		width:140px;
		height: 140px;
		position: relative;
		background: whitesmoke;
		border-radius:12px;
		border:2px solid #ffffff;
		z-index: 3;
		margin:0 auto;
		-webkit-transition: all 0.3s;
		-moz-transition: all 0.3s;
		transition: all 0.3s;
}
.iconi{
   width: 72px;
   margin-top: 36px;
}
img{
    vertical-align: middle;
    border: 0;
}
.service-box{
    text-align: center;
    margin: 50px auto 0;
    cursor: context-menu;
}
.service-header {
    margin-top: 30px;
    font-size: 18px;
}
.h-desc{
    font-size: 15px;
    font-weight: 100;
    text-align: center;
    margin: 20px auto;
    max-width: 900px;
    line-height: 20px;
}
.container{
    width: 100%;
    height: auto;
    padding: 0;
    margin: 0;
}
.inner{
    width: 100%;
    height: auto;
    max-width: 1170px;
    position: relative;
    margin: 0 auto;
    padding: 75px 0;
    text-align: center;
}

</style>
