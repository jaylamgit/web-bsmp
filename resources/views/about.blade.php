{{-- load header --}}
@include('page-header')
<body>
	{{-- load nav --}}
	@include('page-nav')
	<main class="page">
        <section class="clean-block clean-services dark" style="text-align: center;margin-top: 90px;padding-bottom: 0;background: rgb(255,255,255);">
            <div class="container py-4 py-xl-5" style="position: static;">
                <h4 style="font-weight: bold;color: rgb(24,37,144);">About Blade Scalp Micropigmentation </h4>
                <div class="row gy-4 gy-md-0">
                    <div class="col">
                        <p>Blade is a beautiful boutique located downtown Toronto with a welcoming, fun &amp; personable environment. Request of private studio time can be accommodated for your SMP service at no extra cost. Treat blade like your home during your  with your personal TV with Netflix &amp; YouTube at your fingertips.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="clean-block about-us" style="padding-bottom: 50px;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-lg-4">
                        <div class="card text-center clean-card"><img class="card-img-top w-100 d-block" src="{{ asset('/static/img/blade-ashley-clark-about-us.jpg') }}" alt="BladeSMP Ashely Clark">
                            <div class="card-body info">
                                <h4 class="card-title" style="color: rgb(24,37,144);">Ashley Clark</h4>
                                <p class="card-text">Ashley has extensive knowledge about skin care, colour theory, and aesthetic &amp; now specializes in the art of Scalp Micropigmentation (SMP)</p>
                                <div class="icons"><a href="https://www.instagram.com/outlinersinc/"><i class="icon-social-instagram" style="color: rgb(24,37,144);font-weight: bold;font-size: 25px;"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card text-center clean-card"><img class="card-img-top w-100 d-block" alt="BladeSMP Jade Blade" src="{{ asset('/static/img/jade-blade-about-us.jpg') }}">
                            <div class="card-body info">
                                <h4 class="card-title" style="color: rgb(24,37,144);">Jade Blade</h4>
                                <p class="card-text">Jade has worked in the beauty industry for over a decade. She established Blade Beauty Boutique in 2020 working with only the best technicians.</p>
                                <div class="icons"><a href="https://www.instagram.com/bladebeautyboutique/"><i class="icon-social-instagram" style="color: rgb(24,37,144);font-weight: bold;font-size: 25px;"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
    <section class="clean-block clean-services dark" style="text-align: center;margin-top: 20px;padding-bottom: 20px;background: rgb(255,255,255);">
        <div class="container" style="border-radius: 8px;align-items: center;background: linear-gradient(0deg, rgb(108, 117, 125), white 32%);border: 5px solid rgb(24,37,144);">
            <div class="row">
                <div class="col-md-12" style="background: rgb(24,37,144);border-radius: 0;margin-bottom: 12px;">
                    <h4 style="color: rgb(255,255,255);padding-top: 5px;padding-bottom: 5px;font-weight: bold;">Meet our SMP Artist</h4>
                </div>
            </div>
            <div class="row" style="align-items: center;">
                <div class="col-md-12">
                    <p style="width: 100%;">Ashley Clark is a multi-talented beautician who boasts over 20 years of diverse experience in the Medical Sap &amp; Beauty industry. Ashley has dedicated thousands of hours in client s and with her long list of credentials, extensive knowledge about skin care, colour theory, and aesthetic, she has successfully completed various certifications, and now specializes in the art of Scalp Micropigmentation (SMP). Ashley has always been extremely passionate about beauty and helping others improve their self-esteem and boost their confidence by enhancing their features and bringing symmetry and balance to their appearance. Her clients always compliment her on her positive attitude and witty personality, but most of all, her patience and perfectionism when it comes to Scalp Micropigmentation.&nbsp;Ashley works with both men and women and has a keen eye for colour matching and detail. She is able to create a flawless and undetectable hairline that blends in with the existing hair. </p>
                    <p>Ashley is available and open to take on new clients. The shop is in Toronto but is open to travel to meet clients with an additional travel surcharge.&nbsp;</p><a href="https://bladebeauty.ca/booking/" target="_blank"><button class="btn btn-danger" type="button" style="padding-top: 12px;padding-right: 18px;padding-bottom: 12px;padding-left: 18px;font-size: 18px;margin-top: 30px;margin-bottom: 30px;margin-right: 10px;text-align: center;"><i class="icon-calendar" style="font-size: 20px;"></i>Book Online</button></a><a href="tel:1-416-531-0111"><button class="btn btn-danger" type="button" style="padding-top: 12px;padding-right: 18px;padding-bottom: 12px;padding-left: 18px;font-size: 18px;margin-top: 30px;margin-bottom: 30px;text-align: center;"><i class="icon-screen-smartphone" style="font-size: 20px;"></i>1-416-531-0111</button></a>
                </div>
            </div>
        </div>
	</section>
	<section class="clean-block clean-services dark" style="text-align: center;margin-top: 10px;padding-bottom: 20px;background: rgb(255,255,255);">
            <div class="container" style="border-radius: 8px;align-items: center;border: 5px solid rgb(24,37,144);">
                <div class="row">
                    <div class="col-md-12" style="background: rgb(24,37,144);">
                        <h4 style="color: rgb(255,255,255);padding-top: 5px;padding-bottom: 5px;font-weight: bold;">Welcome to bladeSMP</h4>
                    </div>
                    <div class="col">
                    	<p style="margin-bottom: 0px;margin-top: 20px">Blade is a beautiful boutique located downtown Toronto with a welcoming, fun &amp; personable environment. When it comes to hair restoration, blades scalp micropigmentation artist Ashley, has the reputation of being the the aboslute best at this painfree procedure.</p>
                        <section class="py-4 py-xl-5">
							<div ID="blade-smp-room" data-nanogallery2='{
							"itemsBaseURL": "https://bladesmp.ca/static/gallery/",
							"thumbnailWidth": "auto",
							"thumbnailHeight": "300",
							"thumbnailBorderVertical": 0,
							"thumbnailBorderHorizontal": 4,
							"colorScheme": {
							  "thumbnail": {
								"borderColor": "rgba(255,255,255,1)"
							  }
							},
							"thumbnailLabel": {
							  "position": "overImageOnBottom",
							  "display": false
							},
							"thumbnailHoverEffect2": "imageScaleIn80",
							"thumbnailAlignment": "center",
							"thumbnailOpenImage": true
						  }'>
						  	<a href="about-gal-10.jpg" data-ngthumb="about-gal-10.jpg" data-ngdesc="">Blade SMP Room</a>
							<a href="about-gal-03.jpg" data-ngthumb="about-gal-03.jpg" data-ngdesc="">Blade SMP Room</a>	
						  	<a href="about-gal-01.jpg" data-ngthumb="about-gal-01.jpg" data-ngdesc="">Blade SMP Room</a>
						  	<a href="about-gal-02.jpg" data-ngthumb="about-gal-02.jpg" data-ngdesc="">Blade SMP Room</a>
						  	<a href="about-gal-04.jpg" data-ngthumb="about-gal-04.jpg" data-ngdesc="">Blade SMP Room</a>
						  	<a href="about-gal-09.jpg" data-ngthumb="about-gal-09.jpg" data-ngdesc="">Blade SMP Room</a>
							<a href="about-gal-05.jpg" data-ngthumb="about-gal-05.jpg" data-ngdesc="">Blade SMP Room</a>
						  	<a href="about-gal-06.jpg" data-ngthumb="about-gal-06.jpg" data-ngdesc="">Blade SMP Room</a>
						  	<a href="about-gal-07.jpg" data-ngthumb="about-gal-07.jpg" data-ngdesc="">Blade SMP Room</a>
						  	<a href="about-gal-08.jpg" data-ngthumb="about-gal-08.jpg" data-ngdesc="">Blade SMP Room</a>
    					  </div>  
                       </section>
                    </div>
                </div>
            </div>
		</section>
		<section class="clean-block clean-services dark" style="text-align: center;margin-top: 20px;padding-bottom: 20px;background: rgb(255,255,255);">
            <div class="container" style="border-radius: 8px;align-items: center;border: 5px solid rgb(24,37,144);">
                <div class="row">
                    <div class="col-md-12" style="background: rgb(24,37,144);margin-bottom: 12px;">
                        <h4 style="color: rgb(255,255,255);padding-top: 5px;padding-bottom: 5px;font-weight: bold;">What To Expect</h4>
                    </div>
                </div>
                <div class="row" style="align-items: center;">
                    <div class="col-md-12 col-lg-12 col-xxl-12">
                        <p>SMP is typically done in three &ndash; four sessions (appointments) as it is a layering process with each session serving its purpose.</p>
                        <p>The first session is usually the longest and typically takes 3 to 5 hours. This  is where we will design your hairline, determine your pigment colour and set a base laying the foundation of replicated hair follicles.The second session typically takes 2 to 4 hours. This is where we will begin to add density and blend the SMP into your existing hair for a natural look. We can also make any adjustments to the hairline that may be required.The third session typically takes 1 to 3 hours. On this  we will tie up any loose ends to make sure that your SMP blends seamless and is undetectable with a 3D effect.</p>
                        <p class="text-muted"><strong>We do recognize that each patient is uniquely different. From the shape of your hairline to the specific blending of pigments and needles, we custom-tailor each hair loss. After each session, our practitioner will provide you with aftercare to take home and instructions to follow.</strong></p>
                    </div>
                </div>
            </div>
        </section>
		</main>
@include('page-footer')
@include('page-footer-js')
</body>
</html>
