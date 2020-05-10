<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-color px-4 sticky-top">
       <div class="container-fluid px-5">
           <!-- <a class="navbar-brand text-dark" href="/"><img src="canvas/favicon.ico" width="150" height="150" alt="favicon"></a> -->

            <a class="navbar-brand text-dark" href="/">
                <img src="https://res.cloudinary.com/oluwatobi/image/upload/v1588016930/codeist/LogoSample_ByTailorBrands_1_bhqryu.jpg" width="150" height="150" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item active mr-5">
                    <a class="nav-link text-white" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mr-5">
                    <a class="nav-link text-white" href="/login">Sign In</a>
                </li>
                <li class="nav-item mr-5">
                    <a class="nav-link text-white" href="/register">Sign Up</a>
                </li>
                </ul>
            </div>
       </div>
    </nav>
</template>

<script>
    export default {
        mounted() {
            console.log('NavBar Component mounted.')
        }
    }
</script>

<style scoped>
.active{
    background-color: #ffbe54 !important;
    border-top-left-radius: 20px !important;
    border-top-right-radius: 20px !important;
    border-bottom-left-radius: 20px !important;
    border-bottom-right-radius: 20px !important;
    padding-left: 20px;
    padding-right: 20px;
}

.bg-color{
    background: #6c63ff;
}
</style>
