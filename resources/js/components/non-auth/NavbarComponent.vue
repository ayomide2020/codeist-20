<template>
    <nav class="navbar shadow-sm navbar-expand-lg navbar-light bg-white p-3 sticky-top">
       <div class="container">
            <a class="navbar-brand text-dark" href="/">Codeist</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item active mr-5">
                    <a class="nav-link text-white" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mr-5">
                    <a class="nav-link" href="/login">Sign In</a>
                </li>
                <li class="nav-item mr-5">
                    <a class="nav-link" href="/register">Sign Up</a>
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

.bg-white{
    background: #fff;;
}
</style>
