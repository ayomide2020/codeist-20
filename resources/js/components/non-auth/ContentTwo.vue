<template>
    <div class="codeist-mtb-10 container-fluid">

        <h2 class="text-center font-weight-bold fa-2x display-grid mt-3">Learn and grow with Codeist</h2>

        <div class="mt-4 m-0 p-4 row justify-content-center justify-content-lg-between justify-content-md-around justify-content-sm-center">

            <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-10 mt-5 p-2">
                <div class="de-card row m-0 p-0 justify-content-between">

                    <div class="col-12 p-0 m-0 col-xl-12 col-lg-12 col-md-12 col-sm-6">
                        <img src="js/imgOne.svg" class="card-img-top" alt="Image 1">
                    </div>

                    <div class="col-12 p-0 m-0 col-xl-12 col-lg-12 col-md-12 col-sm-6">
                        <div class="card-body px-2">
                            <h5 class="card-title mt-3">Write the script of the future.</h5>
                            <p class="card-text mt-3">
                                Get your coding questions answered to learn, build, and level up whether you’re beginning with JavaScript or a React professional.
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-10 mt-5 p-2">
                <div class="de-card row m-0 p-0 justify-content-between">

                    <div class="col-12 p-0 m-0 col-xl-12 col-lg-12 col-md-12 col-sm-6">
                        <img src="js/imgTwo.svg" class="card-img-top" alt="Image 1">
                    </div>

                    <div class="col-12 p-0 m-0 col-xl-12 col-lg-12 col-md-12 col-sm-6">
                        <div class="card-body px-2">
                            <h5 class="card-title mt-3">Support open source.</h5>
                            <p class="card-text mt-3">
                                Reach users of your project by following tags, answering newcomer questions, and empowering experts in the community. Read the curl project creator’s story.
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-10 mt-5 p-2">
                <div class="de-card row m-0 p-0 justify-content-between">

                    <div class="col-12 p-0 m-0 col-xl-12 col-lg-12 col-md-12 col-sm-6">
                        <img src="js/img3.svg" class="card-img-top" alt="Image 1">
                    </div>

                    <div class="col-12 p-0 m-0 col-xl-12 col-lg-12 col-md-12 col-sm-6">
                        <div class="card-body px-2">
                            <h5 class="card-title mt-3">Acquire and share knowledge.</h5>
                            <p class="card-text mt-3">
                                Answer questions and gain insights from an audience of developers using your technology on Codeist.
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-10 mt-5 p-2">
                <div class="de-card row m-0 p-0 justify-content-between">

                    <div class="col-12 p-0 m-0 col-xl-12 col-lg-12 col-md-12 col-sm-6">
                        <img src="js/imgFour.svg" class="card-img-top" alt="Image 1">
                    </div>

                    <div class="col-12 p-0 m-0 col-xl-12 col-lg-12 col-md-12 col-sm-6">
                        <div class="card-body px-2">
                            <h5 class="card-title mt-3">Find career opportunities.</h5>
                            <p class="card-text mt-3">
                                Create a profile that shows off your expertise and credentials to help you make your next move. Start your Developer Story.
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
.second-content{
    margin-bottom: 10px;
    padding: 50px;
    font-family: serif;
    font-size: 15px;
    background-color: #fff;
    text-align: justify;
}
.scd{
    padding-top: 50px;
    margin-bottom: 50px;
}
.card-title{
    font-weight: bold;
}

.de-card{
    position: relative;
    display: flex;
    min-width: 0;
    word-wrap: break-word;
    background-clip: border-box;
}

.de-card{
    font-family: 'Arial';
}

.card-text{
    text-align: justify;
}

.card-img-top{
    max-width: 200px;
    max-height: 200px;
    width: auto;
    height: auto;
}


</style>

