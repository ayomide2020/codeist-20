<template>
    <div class="container-fluid hero mb-5">   
      <div class="row justify-content-center">
          <div class="col-md-6 m-auto p-0 p-xl-5">
              <div class="container mt-5 pl-5"><h5 class="mb-5 hero-heading md:hero-heading-sm">We Love People who Code</h5></div>
              <div class="container pl-5"><p class="hero-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima possimus neque necessitatibus enim facilis aspernatur praesentium dolor voluptas libero fuga nihil, vel, esse incidunt a voluptatum nostrum eaque vitae maxime?ggguguitgiouyioujkhuihinkhikhclear</p></div>
              <div class="container pl-5 pb-5"><a href="#" class="btn btn-codiest-round btn-codeist-porpu text-white">GET STARTED!</a></div>
          </div>
          <div class="col-md-6 d-lg-block d-none">
              <img src="https://res.cloudinary.com/oluwatobi/image/upload/v1587328895/codeist/hero_vc2d4d.svg" class="w-100" alt="Hero Image">
          </div>
      </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted test.')
        }
    }
</script>

<style>
/* #6C63FF */
.hero{
    background:#fff !important;
}

.btn-codeist-round{
    border-top-left-radius: 20px !important;
    border-top-right-radius: 20px !important;
    border-bottom-left-radius: 20px !important;
    border-bottom-right-radius: 20px !important;
}

.btn-codeist-sandy{
    background: #ffbe54 !important;
}

.btn-codeist-porpu{
    background: #6C63FF !important;
}

.hero-heading{
    font-family: serif;
    font-size: 3em;
    font-weight: bold;
}

.hero-heading-sm{
    font-family: serif;
    font-size: 2em;
    font-weight: bold;
}

.hero-text{
    font-size: 22px;
}
</style>
