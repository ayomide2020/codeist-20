<template>
    <div class="container-fluid hero">

        <div class="row m-0 justify-content-center">

            <div class="mtb-5 col-xl-6 col-lg-6 col-md-12 p-2 p-xl-3 p-lg-3 p-md-5">
                <h5 class="hero-heading">We Love People who Code</h5>
                <p class="hero-text mt-xl-4 mt-lg-3 mt-md-3 mt-sm-3 mt-2">
                    We build products that empower developers and connect them to solutions that enable productivity, growth, and discovery.
                </p>
                <a href="/register" class="mt-4 px-4 py-2 px-xl-5 px-lg-5 py-xl-3 py-lg-3 btn btn-codeist-outline-porpu text-black font-weight-bold">GET STARTED!</a>
            </div>

            <div class="mtb-5 col-xl-6 col-lg-6 d-lg-block d-xl-block d-none">
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

.mtb-5{
    margin-top: 5em;
    margin-bottom: 5em;
}

.hero{
    background:#fff !important;
    /* background:red !important; */
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

.btn-codeist-outline-porpu{
    outline: 1px solid #6C63FF !important;
    border-radius: 0%;
    transition: .5s all;
    transition-timing-function: ease-in-out;
    transition-property: 'bacground', 'color', 'outline';
}

.btn-codeist-outline-porpu:hover{
    background: #6C63FF !important;
    color: #fff;
}

.hero-heading{
    font-family: 'Courier';
    font-size: 40px;
    font-weight: bold;
    margin-top: 80px;
}

.hero-text{
    font-size: 20px;
}

</style>
