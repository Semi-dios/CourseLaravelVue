<template>
    <div>
        <section class="container">
                <div class="row">
                    <div class="col-sm-12">

                         <customHeader></customHeader>
                        <div class="form-container">
                            <div class="left-container">
                            <div class="left-inner-container">
                            <h2>Let's Chat</h2>
                            <p>Whether you have a question, want to start a project or            simply want to connect.</p>
                                <br>
                                <p>Feel free to send me a message in the contact form</p>
                            </div>
                            </div>
                            <div class="right-container">
                            <div class="right-inner-container">
                                <form action="#">
                                    <h2 class="lg-view">Contact</h2>
                            <h2 class="sm-view">Let's Chat</h2>
                                <p>* Required</p>
                                    <div class="social-container">
                                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                <input type="text" placeholder="Name *"  />
                            <input type="email" placeholder="Email *" />
                                    <input type="text" placeholder="Company" />
                                    <input type="phone" placeholder="Phone" />
                                <textarea rows="4" placeholder="Message"></textarea>
                                    <button>Submit</button>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </div>
</template>

<script>
import customHeader from "./layouts/header";
    export default {
        components:{
                customHeader
        }
    }
</script>


<style lang="scss" scoped>

</style>
