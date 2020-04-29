<template>

    <div class="container-fluid p-2 jumbotron mt-5 text-center">
        <div class="container pt-5"><h2 class="display-grid mt-3 font-weight-bold">For businesses, by developers</h2></div>

        <div class="container"><p class="lead mt-5 mb-3">Our mission is to help developers write the script of the future. This means helping you find and hire skilled developers for your business and providing them the tools they need to share knowledge and work effectively.</p></div>



    <div class="container-fluid gap p-1  row mt-5  justify-content-center">

        <div class="card col-md-8 m-0 mt-3 container col-sm-6 col-xs-6 col-lg-4 p-0">
            <div class="container">
                <div class="card-body m-0 row             justify-content-center p-4">
                    <div class="col-sm-5 col-md-5 p-0">
                        <img src="js/find-candidate2.svg" class="img-set" alt="Image 1">
                    </div>

                    <div class="col-sm-7 col-md-7 m-auto p-0">
                        <p class="card-text mt-3">
                            Quickly find and share internal knowledge with <span class="txt">Private Q&A</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>


            <div class="card col-md-8 m-0 mt-3 container-fluid col-sm-6 col-xs-6 col-lg-4 p-0">
                <div class="container">
                <div class="card-body m-0 row justify-content-center p-4">
                    <div class="col-sm-5 col-md-5 p-0">
                        <img src="js/private-questions1.svg" class="img-set" alt="Image 1">
                    </div>

                    <div class="col-sm-7 col-md-7 p-0">
                        <p class="card-text mt-3">
                            Find the perfect candidate for your growing technical team with <span class="txt">Talent solutions</span>
                        </p>
                    </div>
                </div>
            </div>
            </div>


            <div class="card col-md-8 m-0 mt-3 container-fluid col-sm-6 col-xs-6 col-lg-4 p-0">
                <div class="container">
                <div class="card-body m-0 row justify-content-center p-4">
                    <div class="col-sm-5 col-md-5 p-0">
                        <img src="js/accelerate3.svg" class="img-set" alt="Image 1">
                    </div>

                    <div class="col-sm-7 col-md-7 p-0">
                        <p class="card-text mt-3">
                            Accelerate the discovery of your products or services through our <span class="txt">Advertising platform</span>
                        </p>
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
<style scoped>

.txt{
    color: #ffbe54;
}
.gap{
    margin-bottom: 100px;
}

.set-image{
    width:auto;
    height:auto;
    max-width: 150px;
    max-height: 150px;
}
.img-set{
    width: 100px;
    float: left;
}

/*
.lead{
    padding-left: 400px;
    padding-right: 400px;
    text-align:center;
}
.card-deck{
    padding-left: 100px;
    padding-right: 100px;
    margin-bottom: 50px;
}*/
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
