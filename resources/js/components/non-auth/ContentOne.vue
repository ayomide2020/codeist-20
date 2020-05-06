<template>
    <div class="codeist-mtb-10 container-fluid text-center">

        <h2 class="font-weight-bold fa-2x display-grid mt-3">For Developers, by Developers</h2>

        <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ab magnam labore quibusdam facilis culpa temporibus. In ratione, nostrum harum labore excepturi corporis provident rem vel. Corrupti veniam dolore voluptate?</p>

        <div class="mt-4 m-0 p-xl-3 p-lg-3 p-2 row justify-content-center justify-content-lg-between justify-content-md-start justify-content-sm-center">

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-10 mt-5 p-3">
                <div class="d-card codeist-card row m-0 p-0 justify-content-between">

                    <div class="col-12 p-0 m-0 col-xl-12 col-lg-12 col-md-12 col-sm-6">
                        <img src="https://res.cloudinary.com/oluwatobi/image/upload/v1587328895/codeist/hero_vc2d4d.svg" class="card-img-top" alt="Image 1">
                    </div>

                    <div class="col-12 p-0 m-0 col-xl-12 col-lg-12 col-md-12 col-sm-6">
                        <div class="card-body">
                            <h2 class="card-title mt-3">Heading here</h2>
                            <p class="card-text mt-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quae impedit numquam aspernatur voluptatem excepturi enim non eveniet.
                            </p>
                            <a href="#" class="btn btn-codeist-porpu mb-4">Button</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-10 mt-5 p-3">
                <div class="d-card codeist-card row m-0 p-0 justify-content-between">

                    <div class="col-12 p-0 m-0 col-xl-12 col-lg-12 col-md-12 col-sm-6">
                        <img src="https://res.cloudinary.com/oluwatobi/image/upload/v1587328895/codeist/hero_vc2d4d.svg" class="card-img-top" alt="Image 1">
                    </div>

                    <div class="col-12 p-0 m-0 col-xl-12 col-lg-12 col-md-12 col-sm-6">
                        <div class="card-body">
                            <h2 class="card-title mt-3">Heading here</h2>
                            <p class="card-text mt-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quae impedit numquam aspernatur voluptatem excepturi enim non eveniet.
                            </p>
                            <a href="#" class="btn btn-codeist-porpu mb-4">Button</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-10 mt-5 p-3">
                <div class="d-card codeist-card row m-0 p-0 justify-content-between">

                    <div class="col-12 p-0 m-0 col-xl-12 col-lg-12 col-md-12 col-sm-6">
                        <img src="https://res.cloudinary.com/oluwatobi/image/upload/v1587328895/codeist/hero_vc2d4d.svg" class="card-img-top" alt="Image 1">
                    </div>

                    <div class="col-12 p-0 m-0 col-xl-12 col-lg-12 col-md-12 col-sm-6">
                        <div class="card-body">
                            <h2 class="card-title mt-3">Heading here</h2>
                            <p class="card-text mt-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quae impedit numquam aspernatur voluptatem excepturi enim non eveniet.
                            </p>
                            <a href="#" class="btn btn-codeist-porpu mb-4">Button</a>
                        </div>
                    </div>
                </div>
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

.d-card{
    position: relative;
    display: flex;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, 0.125);
    border-radius: 0.25rem;
}

.codeist-mtb-10{
    margin-top: 10%;
    margin-bottom: 10%;
    font-family: 'Courier';
    font-size: 17px;
}

.d-card{
    font-family: 'Arial';
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
  border-top: 5px solid #ffbe54;
  left: 45%;
  bottom: -20px;
  width: 10%;
  border-radius: 10px;
  height: 0px;
}

</style>
