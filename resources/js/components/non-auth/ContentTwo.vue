<template>
<div class="container-fluid second-content mt-5">
    <div class="scd">
        <h1 class="text-center"><strong>Learn and grow with Codeist</strong></h1>
    </div>
    <div class="row mt-5">
        <div class="col-md-3">
            <img src="js/imgOne.svg" class="w-70 mb-3" alt="Image 1">
            <h4 class="card-title">Write the script of the future.</h4>
            <p class="card-text">Get your coding questions answered to learn, build, and level up whether you’re beginning with JavaScript or a React professional.</p>

        </div> 
        <div class="col-md-3">
        <img src="js/imgTwo.svg" class="w-70 mb-3" alt="Image 2">
        <h4 class="card-title">Support open source.</h4>
        <p class="card-text">
            Reach users of your project by following tags, answering newcomer questions, and empowering experts in the community. Read the curl project creator’s story.</p>
        </div>
        <div class="col-md-3">
        <img src="js/img3.svg" class="w-70 mb-3" alt="Image 3">
        <h4 class="card-title">Acquire and share knowledge.</h4>
        <p class="card-text">
            Answer questions and gain insights from an audience of developers using your technology on Codeist.
        </p>
        </div>
        <div class="col-md-3">
        <img src="js/imgFour.svg" class="w-70 mb-3" alt="Image 4">
        <h4 class="card-title">Find career opportunities.</h4>
        <p class="card-text">
            Create a profile that shows off your expertise and credentials to help you make your next move. Start your Developer Story.</p>
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

</style>

