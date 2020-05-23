<template>
    <div class="codeist-mt-10 mb-5 container text-left">
        <h1><strong>Looking for a Job?</strong></h1>

        <div class="mt-3 row">
           <div class="col-md-2 mt-3 mb-5 ml-3 mr-4 codeist-card">
               <img src="js/job1.svg" class="set-img" alt="Image 1">
               <p class="mt-2">Browse jobs by technology</p>
           </div>

            <div class="col-md-2 mt-3 ml-3 mr-4 mb-5  codeist-card">
               <img src="js/job2.svg" class="set-img" alt="Image 2">
               <p class="mt-2">Browse jobs by salary</p>
           </div>

            <div class="col-md-2 mt-3 ml-3 mr-4 mb-5  codeist-card">
               <img src="js/job3.svg" class="set-img" alt="Image 3">
               <p class="mt-2">Browse jobs by visa sponsorship</p>
           </div>

            <div class="col-md-2 ml-3 mt-3 mr-4 mb-5  codeist-card">
               <img src="js/job5.svg" class="set-img" alt="Image 4">
               <p class="mt-2">Browse remote friendly jobs</p>
           </div>
         <button><a href="/job" class="btn btn-codeist-porpu mb-3 ml-3">View all jobs</a></button>
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
    /* text-align: left; */
}

.codeist-card{
    background: #fff !important;
    box-shadow: 1px 2px 8px rgba(0,0,0,0.5);
    border-top-left-radius: 10px !important;
    border-top-right-radius: 10px !important;
    border-bottom-left-radius: 10px !important;
    border-bottom-right-radius: 10px !important;
}
.set-img{
    width: 50px;
    float: inline-start;
    margin-right: 10px;
}
</style>