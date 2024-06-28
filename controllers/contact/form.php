<!-- Contact Form Section -->
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color: #000; box-shadow: 10px 10px 15px #0F0; color: #FFF;">
                <div class="card-header text-center">
                    <h2>Contact Us</h2>
                </div>
                <div class="card-body">
                    <form id="contactForm" action="config/php/contact_process.php" method="post">
                        <div class="form-group">
                            <label for="name" class="form_title">Name</label>
                            <input type="text" class="form-control form_input" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form_title">Email</label>
                            <input type="email" class="form-control form_input" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="subject" class="form_title">Subject</label>
                            <input type="text" class="form-control form_input" id="subject" name="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="message" class="form_title">Message</label>
                            <textarea class="form-control form_input" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-outline-primary btn-lg btn-block" style="width: 100%; margin-top: 10px; cursor: crosshair;">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>