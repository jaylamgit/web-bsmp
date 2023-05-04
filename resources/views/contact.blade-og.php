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
        <section class="clean-block clean-form dark" style="padding-bottom: 20px;">
            <div class="container" style="padding-top: 20px;">
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
                                </div><iframe allowfullscreen="" frameborder="0" loading="lazy" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCZiwKQOkGZtHvFo7qMbFW8nYkVVfsmUuA&amp;q=1116+College+St%2C+Toronto+ON%2C+M6H+1B6&amp;zoom=16" width="100%" height="400"></iframe>
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
