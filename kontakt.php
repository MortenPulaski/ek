<?php require_once('./layout/header.php'); ?>

<!-- Kontakt-->
<header class="kontakt">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h2 class="text-warning font-weight-bold">Kontakt</h2>
                <hr class="divider" />
                <p class="text-warning">Bereit, Ihr neues Projekt mit uns zu starten?<br> Schreiben Sie uns eine
                    Nachricht und wir kontaktieren Sie, sobald wie möglich!</p><hr>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
            <div class="col-lg-6">
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" type="text" placeholder="Enter your name..."
                            data-sb-validations="required" />
                        <label for="name">Name und Vorname</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">Namen eingeben!</div>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="email" placeholder="name@example.com"
                            data-sb-validations="required,email" />
                        <label for="email">Email Adresse</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">Email Adresse eingeben!</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email Adresse nicht gülitg!</div>
                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="phone" type="tel" placeholder="(02509) 456-7890"
                            data-sb-validations="required" />
                        <label for="phone">Telefonnummer</label>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">Telefonnummer eingeben!</div>
                    </div>
                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..."
                            style="height: 10rem" data-sb-validations="required"></textarea>
                        <label for="message">Nachricht</label>
                        <div class="invalid-feedback" data-sb-feedback="message:required">Nachricht eingeben!</div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a
                                href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">Error sending message!</div>
                    </div>
                    <!-- Submit Button-->
                    <div class="d-grid"><button class="text-black-50 btn btn-primary btn-xl disabled" id="submitButton"
                        type="submit">Senden</button><hr>
                    </div>
                </form>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-4 text-center mb-5 mb-lg-0">
                <i class="bi-phone fs-2 mb-3 text-muted"></i>
                <div>+49 (2509) 123-4567</div>
            </div>
        </div>
    </div>
</header>
<?php require_once('./layout/footer.php'); ?>