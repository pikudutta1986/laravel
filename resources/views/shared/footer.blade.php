<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 column-1">
                <div class="logo-container">
                    <a href="/"><img src="/images/logo.png" alt="{{ config('app.name') }}" /></a>
                </div>
                <h4>Address:</h4>
                <p>Street address of the office.</p>
                <p>City: city of the office.</p>
                <p>State name - 12345</p>
                <p>Phone - (555)-555-5555</p>
            </div>
            <div class="col-md-4 column-2">
                <h4>Useful links:</h4>
                <ul class="footer-menu">
                    <li><a href="/used-cars">Used Cars</a></li>
                    <li><a href="/dealers">Dealers</a></li>
                    <li><a href="/contact-us">Contact Us</a></li>
                    <li><a href="/terms">Terms</a></li>
                    <li><a href="/privacy">Policy</a></li>
                </ul>
            </div>
            <div class="col-md-4 column-3">
                <h4>Subscribe Newsletter:</h4>
                <form action="" method="post">
                    <input type="email" class="form-control email-input" required name="email" placeholder="Type your email here" />
                    <input type="submit" class="subscribe-button site-secondary-button" value="Subscribe" />
                </form>
                <p class="copyright">Car Sales &copy; 2024. All rights reserved.</p>
            </div>
        </div>
    </dov>
</footer>

<script>
	$(document).ready(function(){
		$(".car-carousel").owlCarousel({
			loop: true,
			autoplay: false,
			mouseDrag: true,
			touchDrag: true,
			pullDrag: true,
			dots: false,
			responsive: {
				0: {
					items: 1
				},
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
			},
			nav: true,
            navText: ['<', '>']
		});

        $(".brand-carousel").owlCarousel({
			loop: true,
			autoplay: true,
			mouseDrag: true,
			touchDrag: true,
			pullDrag: true,
			dots: false,
			responsive: {
				0: {
					items: 3
				},
                600:{
                    items:5
                },
                1000:{
                    items:7
                }
			},
			nav: true,
            navText: ['<', '>']
		});
	});
</script>
</body>
</html>