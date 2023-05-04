{{-- load header --}}
@include('page-header')
<body>
	{{-- load nav --}}
	@include('page-nav')
    <main class="page contact-us-page">
        <section class="clean-block clean-services dark" style="text-align: center;margin-top: 90px;padding-bottom: 0;background: rgb(255,255,255);">
            <div class="container py-4 py-xl-5" style="position: static;">
                <h4 style="font-weight: bold;color: rgb(24,37,144);">Contact Blade Scalp Micropigmentation </h4>
                <div class="row gy-4 gy-md-0">
                    <div class="col">
                        <p>Any questions or comments about bladeSMP? Use the form below to send us a message.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="clean-block clean-services dark" style="text-align: center;margin-top: 20px;padding-bottom: 20px;background: rgb(255,255,255);">
            <div class="container" style="align-items: center;padding-bottom: 20px;border-radius: 8px;border: 5px solid rgb(24,37,144);">
                <div class="row">
                    <div class="col-md-12" style="background: rgb(24,37,144);margin-bottom: 12px;">
                        <h4 style="color: rgb(255,255,255);padding-top: 5px;padding-bottom: 5px;font-weight: bold;">Send bladeSMP A Message</h4>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                               
		<!-- Success message -->
       		 @if(Session::has('success'))
            		<div class="alert alert-success">
                	{{Session::get('success')}}
            		</div>
		@elseif(Session::has('errors'))
            		<div class="alert alert-danger">
				Oops! There are a few errors...
            		</div>
		@endif
                @if(Session::missing('success'))
			@include('contact-form')
		@endif
            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<section class="clean-block clean-services dark" style="text-align: center;margin-top: 20px;padding-bottom: 20px;background: rgb(255,255,255);">
            <div class="container" style="border-radius: 8px;align-items: center;padding-bottom: 20px;border: 5px solid rgb(24,37,144);">
                <div class="row">
                    <div class="col-md-12" style="background: rgb(24,37,144);margin-bottom: 12px;">
                        <h4 style="color: rgb(255,255,255);padding-top: 5px;padding-bottom: 5px;font-weight: bold;">Call bladeSMP</h4>
                    </div>
                    <div class="col"><a class="link-danger" href="tel:1-416-531-0111" style="font-weight: bold;">1-416-531-0111</a></div>
                </div>
            </div>
        </section>
	{{-- Google Maps --}}
        <section class="clean-block clean-services dark" style="text-align: center;margin-top: 20px;padding-bottom: 20px;background: rgb(255,255,255);">
            <div class="container" style="align-items: center;padding-bottom: 20px;border-radius: 8px;border: 5px solid rgb(24,37,144);">
                <div class="row">
                    <div class="col-md-12" style="background: rgb(24,37,144);margin-bottom: 12px;">
                        <h4 style="color: rgb(255,255,255);padding-top: 5px;padding-bottom: 5px;font-weight: bold;">bladeSMP Location</h4>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <p class="text-muted"><strong>1116 College Street, Toronto ON, M6H 1B6</strong></p>
                                    </div>
                                </div><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11547.136775197323!2d-79.4330165!3d43.6526581!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b35c75bc27a2d%3A0x4ef6e6781efb80b7!2sBlade%20Beauty%20Boutique!5e0!3m2!1sen!2sca!4v1681504818878!5m2!1sen!2sca" width="100%" height="400" allowtransparency=""style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
	{{-- Google Maps --}}
    </main>

@include('page-footer')
@include('page-footer-js')

</body>
</html>
