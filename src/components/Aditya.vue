<template>
  <div class="initiatives">
      <div class="inner">
          <h1>
              {{msg}}
          </h1>
          <h4>
            {{msg1}}  
          </h4>
          <div class="service-box animated fadeIn visible col-xs-4">
                Hello!!!
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
    float: left;
}
.fadeIn{
    animation-name: fadeIn;
}
</style>
