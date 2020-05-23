    <template>
    <div class="container-fluid p-0">
    <footer class="container-fluid p-0 footer-section">
        <div class="container-fluid p-0">
            <div class="footer-cta pt-5 pb-5 all-cta">
                <div class="container-fluid row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span>Lagos, Nigeria.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span>07010059231</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span>mail@info.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content container-fluid pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="#"><img src="https://res.cloudinary.com/oluwatobi/image/upload/v1587328895/codeist/hero_vc2d4d.svg" class="img-fluid" alt="logo"></a>
                            </div>
                            <div class="footer-text">
                                <p>Get your coding questions answered to learn, build, and level up whether you’re beginning with JavaScript or a React professional. </p>
                            </div>
                            
                            <div class="footer-social-icon">
                                <span>Follow us</span>
                                <a href="#" target="_blank"
                                class="btn btn-outline-primary"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                <a href="#" target="_blank" class="btn btn-outline-info"><i class="fab fa-twitter twitter-bg"></i></a>
                                <a href="#" target="_blank" class="btn btn-outline-info"><i class="fab fa-google-plus-g google-bg"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href="/">Home</a></li>
                                <!-- <li><a href="#">Profile</a></li> -->
                                <li><a href="/canvas">Article World</a></li>
                                <!-- <li><a href="#">portfolio</a></li> -->
                                <!-- <li><a href="#">Contact</a></li> -->
                                <li><a href="/tag">Tags</a></li>
                                <li><a href="/question">Questions</a></li>
                                <li><a href="/job">Jobs</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Subscribe</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="text" placeholder="Email Address">
                                    <button><i class="fab fa-telegram-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2020, All Right Reserved <a href="/">Codeist</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </div>
</template>

<script>
export default {
    mounted() {
            console.log('Component mounted test.')
    },   
    data:() => ({
      url: window.location.href,
    }),
}
</script>

<style scoped>
ul {
    margin: 0px;
    padding: 0px;
}
.footer-section {
  background: #fff !important;
  position: relative;
}
/* .footer-cta {
  border-bottom: 2px solid #6C63FF;
  margin-bottom: 3px;
} */

.all-cta{
    text-align: center;
}
.single-cta i {
  color: #6263ff;
  font-size: 20px;
  float: none;
  margin-left: 10px;
}
.cta-text {
  padding-left: 15px;
  display: inline-block;
  margin-bottom: 20px;
}
.cta-text h4 {
  color: #000;
  font-size: 20px;
  font-weight: 700;
}
.cta-text span {
  color: #6263ff;
  font-size: 15px;
}
.footer-content {
  background-color: #242729;
  position:relative;
  z-index: 2;
}
.footer-pattern img {
  position: absolute;
  top: 0;
  left: 0;
  height: 100px;
  background-size: cover;
  background-position: 100% 100%;
}
.footer-logo {
  margin-bottom: 30px;
}
.footer-logo img {
    max-width: 150px;
}
.footer-widget{
  padding-left: 20px;
  padding-right: 20px;
}
.footer-text p {
  margin-bottom: 7px;
  font-size: 14px;
  color: #fff;
  line-height: 28px;
}
.footer-social-icon span {
  color: #fff;
  display: block;
  font-size: 20px;
  font-weight: 700;
  font-family: sans-serif;
  margin-bottom: 10px;
}
.footer-social-icon a {
  color: black;
  font-size: 16px;
  margin-right: 15px;
}
.footer-social-icon i {
  height: 40px;
  width: 40px;
  text-align: center;
  line-height: 38px;
  border-radius: 50%;
}
.facebook-bg{
  background: #fff;
}
.twitter-bg{
  background: #fff;
}
.google-bg{
  background: #fff;
}
.footer-widget-heading h3 {
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 40px;
  position: relative;
}
.footer-widget-heading h3::before {
  content: "";
  position: absolute;
  left: 0;
  bottom: -15px;
  height: 2px;
  width: 50px;
  background: #ffbe54;
}
.footer-widget ul li {
  /* display: inline-block; */
  width: 50%;
  margin-bottom: 12px;
  float: left;
}
.footer-widget ul li a:hover{
  color: #ffbe54;
}
.footer-widget ul li a {
  color: #fff;
  text-transform: capitalize;
}
.subscribe-form {
  position: relative;
  overflow: hidden;
  margin-top: 20px;
}
.subscribe-form input {
  width: 100%;
  padding: 14px 28px;
  background: #2E2E2E;
  border: 1px solid #2E2E2E;
  color: #fff;
}
.subscribe-form button {
    position: absolute;
    right: 0;
    background: #6263ff;
    padding: 13px 20px;
    border: 1px solid #6263ff;
    top: 0;
}
.subscribe-form button i {
  color: #fff;
  font-size: 22px;
  transform: rotate(-6deg);
}
.copyright-area{
  background: #000;
  padding: 25px 0;
}
.copyright-text p {
  font-size: 14px;
  color: #6263ff;
}
.copyright-text p a{
  color: #ffbe54;
  margin-left: 10px;
}
</style>