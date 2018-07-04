
<section id="contact">
    <div class="container">
        <div class="section-header">
            <h2>Contact Us</h2>
            <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>

        <div class="row contact-info">

            <div class="col-md-4">
                <div class="contact-address">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>Adress</h3>
                    <address>A108 Adam Street, NY 535022, USA</address>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-phone">
                    <i class="fas fa-phone"></i>
                    <h3>Telefon nummer</h3>
                    <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-email">
                    <i class="far fa-envelope"></i>
                    <h3>Email</h3>
                    <p><a href="mailto:info@example.com">info@example.com</a></p>
                </div>
            </div>

        </div>
    </div>
    <div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div>

</section>
<style>
    #contact {
        padding: 30px 0;
    }

    #contact .contact-info {
        margin-bottom: 20px;
        text-align: center;
    }

    #contact .contact-info i {
        font-size: 48px;
        display: inline-block;
        margin-bottom: 10px;
        color: #ff0000;
    }

    #contact .contact-info address, #contact .contact-info p {
        margin-bottom: 0;
        color: #000;
    }

    #contact .contact-info h3 {
        font-size: 18px;
        margin-bottom: 15px;
        font-weight: bold;
        text-transform: uppercase;
        color: #999;
    }

    #contact .contact-info a {
        color: #000;
    }

    #contact .contact-info a:hover {
        color: #50d8af;
    }

    #contact .contact-address, #contact .contact-phone, #contact .contact-email {
        margin-bottom: 20px;
    }

    @media (min-width: 768px) {
        #contact .contact-address, #contact .contact-phone, #contact .contact-email {
            padding: 20px 0;
        }
    }

    @media (min-width: 768px) {
        #contact .contact-phone {
            border-left: 1px solid #ddd;
            border-right: 1px solid #ddd;
        }
    }

    #contact #google-map {
        height: 290px;
        margin-bottom: 20px;
    }

    @media (max-width: 576px) {
        #contact #google-map {
            margin-top: 20px;
        }
    }
    .section-header{
        text-align: center;
    }

</style>
