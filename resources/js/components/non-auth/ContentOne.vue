<template>
    <div class="codeist-mt-10 mb-5 container text-center">
        <div><h2 class="display-grid mt-3">For Developers, by Developers</h2></div>
        <div><p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ab magnam labore quibusdam facilis culpa temporibus. In ratione, nostrum harum labore excepturi corporis provident rem vel. Corrupti veniam dolore voluptate?</p></div>
        
        <div class="mt-4 row justify-content-between">
           <div class="col-md-3 mt-5 mb-4 codeist-card">
               <img src="https://res.cloudinary.com/oluwatobi/image/upload/v1587328895/codeist/hero_vc2d4d.svg" class="w-100" alt="Image 1">
               <h2 class="mt-3">Heading here</h2>
               <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quae impedit numquam aspernatur voluptatem excepturi enim non eveniet.</p>
               <a href="#" class="btn btn-codeist-porpu mb-4">Button</a>
           </div>

            <div class="col-md-3 mt-2 codeist-card">
               <img src="https://res.cloudinary.com/oluwatobi/image/upload/v1587328895/codeist/hero_vc2d4d.svg" class="w-100" alt="Image 1">
               <h2 class="mt-3">Heading here</h2>
               <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quae impedit numquam aspernatur voluptatem excepturi enim non eveniet.</p>
               <a href="#" class="btn btn-codeist-porpu mb-4">Button</a>
           </div>

            <div class="col-md-3 mt-5 codeist-card">
               <img src="https://res.cloudinary.com/oluwatobi/image/upload/v1587328895/codeist/hero_vc2d4d.svg" class="w-100" alt="Image 1">
               <h2 class="mt-3">Heading here</h2>
               <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quae impedit numquam aspernatur voluptatem excepturi enim non eveniet!</p>
               <a href="#" class="btn btn-codeist-porpu mb-4">Button</a>
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

<style scoped>
.codeist-mt-10{
    margin-top: 10%;
    font-family: serif;
    font-size: 17px;
}

.codeist-card{
    background: #fff !important;
    box-shadow: 1px 2px 8px rgba(0,0,0,0.5);
}

.display-grid{
  position: relative;
}

.display-grid:after {
  content: "";
  position: absolute;
  border-top: 7px solid #ffbe54;
  left: 45%;
  bottom: -20px;
  width: 5%;
  height: 0px;
}

</style>
