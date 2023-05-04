{{-- load header --}}
@include('page-header')
<body>
	{{-- load nav --}}
	@include('page-nav')
	<main class="page service-page">
        <section class="clean-block clean-services dark" style="text-align: center;margin-top: 90px;padding-bottom: 0;background: rgb(255,255,255);">
            <div class="container py-4 py-xl-5" style="position: static;padding-bottom: 24px !important;">
                <h4 style="font-weight: bold;color: rgb(24,37,144);">SMP Beard Micropigmentation </h4>
                <div class="row gy-4 gy-md-0">
                    <div class="col">
                        <p>A beard is seen as an expression of masculinity. But not every man is blessed with strong beard growth, and not every beard grows evenly. Sometimes gaps can appear in a man’s facial hair due to illness or acne scars, for example.</p>
                    </div>
                </div>
                <section class="clean-block clean-info dark" style="border-radius: 8px;padding-bottom: 20px;">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6" style="padding-top: 12px;">
                                <h4 style="color: rgb(24,37,144);font-weight: bold;">Beard Micropigmentation</h4>
                                <h5 style="color: rgb(108, 117, 125);font-weight: bold;">For the full and even facial hair look</h5>
                                <p>A man’s beard starts to grow slowly during puberty. It’s impossible to predict whether it will end up being thick and full or not. It can be many years until a beard finally achieves its ultimate shape and maximum potential growth. </p>
                                <p>Beard thickness can increase over time, but it can also decrease. For many men, hair loss in the beard is very distressing. After all, a healthy-looking, dapper beard is on trend right now, and even serves as a status symbol. </p>
                                <p>In rare cases, circular bald patches can appear in a man’s beard. This can be quite upsetting. These patches can be caused by acne scars, for example, or in some cases by alopecia barbae. </p>
                            </div>
                            <div class="col-md-6"><img class="img-thumbnail" alt="Beard Micropigmentation" src="{{ asset('/static/img/blade-smp-beard-micropigmentation-maint.jpg') }}" style="border-radius: 8px;">
                                <div class="getting-started-info"></div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
        <section class="clean-block clean-services dark" style="text-align: center;margin-top: 20px;padding-bottom: 20px;background: rgb(255,255,255);">
            <div class="container" style="border-radius: 8px;align-items: center;border: 5px solid rgb(24,37,144);">
                <div class="row">
                    <div class="col-md-12" style="background: rgb(24,37,144);margin-bottom: 12px;">
                        <h4 style="color: rgb(255,255,255);padding-top: 5px;padding-bottom: 5px;font-weight: bold;">How Does Beard Micropigmentation Work?</h4>
                    </div>
                </div>
                <div class="row" style="align-items: center;">
                    <div class="col-md-12 col-lg-12 col-xxl-12">
                        <p>Beard micropigmentation uses the same method as scalp micropigmentation for alopecia on the top of the head. Over the course of several sessions, pigments are applied into your skin to simulate the appearance of full, even hair growth. Once the treatment is complete, it will look like you have a full, close-shaven beard.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="clean-block clean-services dark" style="text-align: center;margin-top: 20px;padding-bottom: 20px;background: rgb(255,255,255);">
            <div class="container" style="border-radius: 8px;align-items: center;background: linear-gradient(0deg, rgb(108, 117, 125), white 32%);border: 5px solid rgb(24,37,144);">
                <div class="row">
                    <div class="col-md-12" style="background: rgb(24,37,144);margin-bottom: 12px;">
                        <h4 style="color: rgb(255,255,255);padding-top: 5px;padding-bottom: 5px;font-weight: bold;">How SMP helps with Beards</h4>
                    </div>
                </div>
                <div class="row" style="align-items: center;">
                    <div class="col-md-12">
                        <p style="width: 100%;">An electrical needle device similar to a tattoo machine (but not the same) is used to make tiny punctures on the surface of the skin and inject pigments into them. Once healed, these little dot-like incisions look like hair follicles that are just emerging from the skin. </p>
                        <p>The dots are dispersed over the area which needs densifying. If there are actual hairs in the area, the dots are “drawn” between them.</p>
                        <p>The pigments are injected relatively shallow into the skin, which is what differentiates this treatment from traditional tattooing. Another difference is the fact that beard micropigmentation uses a pigment formula, not a tattoo ink, designed specifically to imitate the look of natural hair follicles.</p><a href="https://bladebeauty.ca/booking/" target="_blank"><button class="btn btn-danger" type="button" style="padding-top: 12px;padding-right: 18px;padding-bottom: 12px;padding-left: 18px;font-size: 18px;margin-top: 30px;margin-bottom: 30px;">Book an Appointment Today</button></a>
                    </div>
                </div>
            </div>
            <section class="clean-block clean-services dark" style="text-align: center;margin-top: 20px;padding-bottom: 20px;background: rgb(255,255,255);">
                <div class="container" style="border-radius: 8px;align-items: center;border: 5px solid rgb(24,37,144);">
                    <div class="row">
                        <div class="col-md-12" style="background: rgb(24,37,144);margin-bottom: 12px;">
                            <h4 style="color: rgb(255,255,255);padding-top: 5px;padding-bottom: 5px;font-weight: bold;">What’s the Treatment Like?</h4>
                        </div>
                    </div>
                    <div class="row" style="align-items: center;">
                        <div class="col-md-12 col-lg-12 col-xxl-12">
                            <p>Beard micropigmentation is done over a series of several micropigmentation sessions. There’s a healing process after each session, after which the color loses some of its initial intensity, so it’s built-up gradually for a realistic result.</p>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </main>
@include('page-footer')
@include('page-footer-js')
</body>
</html>
