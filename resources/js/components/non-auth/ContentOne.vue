<template>
    <div class="codeist-mtb-10 container-fluid text-center">

        <h2 class="font-weight-bold fa-2x display-grid mt-3">For Developers, by Developers</h2>

        <h3><p class="mt-5 hero-text font-serif">Codeist is an open community for anyone that codes. We help you get answers to your toughest coding questions, share knowledge with your coworkers in private, and find your next dream job.
        </p></h3>

        <div class="mt-4 m-0 p-xl-3 p-lg-3 p-2 row justify-content-center justify-content-lg-between justify-content-md-start justify-content-sm-center">

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-10 mt-5 p-3">
                <div class="d-card codeist-card row m-0 p-0 justify-content-between">

                    <div class="col-12 p-0 m-0 col-xl-12 col-lg-12 col-md-12 col-sm-6">
                        <img src="https://res.cloudinary.com/oluwatobi/image/upload/v1587328895/codeist/hero_vc2d4d.svg" class="card-img-top" alt="Image 1">
                    </div>
                    <div class="col-12 p-0 m-0 col-xl-12 col-lg-12 col-md-12 col-sm-6">
                        <div class="card-body">
                            <h2 class="card-title mt-3">Public Q&A</h2>
                            <p class="card-text mt-3">
                                Get answers to more questions and give back by sharing your knowledge with others. Sign up for an account.    
                            </p>
                            <a href="/home" class="btn btn-codeist-porpu mb-4">Browse questions</a>
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
                            <h2 class="card-title mt-3">Browse jobs</h2>
                            <p class="card-text mt-3">
                              Find the right job through high quality listings and search for roles based on title, technology stack, salary, location, and more.  
                            </p>
                            <a href="/job" class="btn btn-codeist-orange mb-4">Find a job</a>
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
                            <h2 class="card-title mt-3">Public Q&A</h2>
                            <p class="card-text mt-3">
                                Level up with Codeist while you work. Share knowledge privately with your coworkers using our Q&A engine.
                            </p>
                            <a href="/home" class="btn btn-codeist-porpu mb-4">Try for free</a>
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
.hero-text{
    font-size: 20px;
}
.btn-codeist-orange{
    background-color: #ffbe54;
}

</style>
