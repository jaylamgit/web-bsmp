{{-- load header --}}
@include('page-header')
<body>
	{{-- load nav --}}
	@include('page-nav')
	<main class="page landing-page">
        <section class="text-center clean-block clean-info dark" style="padding-bottom: 20px;background: rgb(246, 246, 246);">
            <div class="container">
                <div class="block-heading" style="margin-bottom: 20px;">
                    <section></section>
                </div>
                <div style="height: 600px;background: url(&quot;{{ asset('/static/img/blade-smp-home-ashley.jpg') }}&quot;) center / cover;border-radius: 8px;"></div>

                <section class="clean-block clean-services dark" style="text-align: center;margin-top: 20px;padding-bottom: 20px;background: rgb(246,246,246);">
                    <div class="container" style="border-radius: 8px;align-items: center;border: 5px solid rgb(24,37,144);">
                        <div class="row">
                            <div class="col-md-12" style="background: rgb(24,37,144);border-radius: 0;">
                                <h4 style="color: rgb(255,255,255);padding-top: 5px;padding-bottom: 5px;font-weight: bold;">Blade Scalp Micropigmentation</h4>
                            </div>
                        </div>
                        <div class="row" style="align-items: center;">
                            <div class="col-md-6 col-xxl-12" style="vertical-align: middle;width: 100%;border-radius: 0;">
                                <h5 style="font-weight: bold;color: rgb(24,37,144);margin-top: 18px;">Scalp Micropigmentation (SMP), or Hair Tattoo, is an Innovative Non-Invasive Solution to Hair Loss Problems.</h5>
                                <p>SMP is the procedure of creating follicle replications using specialized tools and techniques to deposit organic pigment into the scalp. While the process does use a procedure similar to tattooing, it’s important to note, these 2 methods are very different, SMP does requires the skill of a specifically trained SMP artist. </p>
                                <p class="text-muted" style="font-weight: bold;">SMP can produce results for both men and women and will increase your confidence with long-lasting results. </p>
                                <p style="--bs-danger: #dc3545;--bs-danger-rgb: 220,53,69;--bs-primary: #dc3545;--bs-primary-rgb: 220,53,69;">The procedure is typically completed in three to four session and is the only hair loss remedy/hair loss solution with a guaranteed result. It is also the most cost-effective treatment when compared to hair transplants, hair units, and PRP treatments.&nbsp;</p>
                                <p class="text-muted" style="font-weight: bold;">SMP also requires NO DOWNTIME. </p><a href="https://bladebeauty.ca/booking/" target="_blank"><button class="btn btn-danger" type="button" style="padding-top: 12px;padding-right: 18px;padding-bottom: 12px;padding-left: 18px;font-size: 18px;margin-bottom: 18px;">Book An Appointment Today</button></a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>





        <section class="clean-block clean-services dark" style="text-align: center;margin-top: 20px;padding-bottom: 20px;background: rgb(246, 246, 246);padding-top: 30px;">
            <div class="container" style="border-radius: 8px;align-items: center;border: 5px solid rgb(24,37,144);">
                <div class="row">
                    <div class="col-md-12" style="background: rgb(24,37,144);border-radius: 0;margin-bottom: 12px;">
                        <h4 style="color: rgb(255,255,255);padding-top: 5px;padding-bottom: 5px;font-weight: bold;">SMP FAQ</h4>
                    </div>
                </div>
                <div class="row" style="align-items: center;">
                    <div class="col-md-12 col-lg-12 col-xxl-12" style="padding-bottom: 20px;">
                        <p class="fw-bold text-muted">Frequently Asked Questions About Scalp Micropigmentation</p>
                        <div class="accordion" role="tablist" id="accordion-1">
                            <div class="accordion-item">
                                <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-1" aria-expanded="false" aria-controls="accordion-1 .item-1">How many treatments are required?&nbsp;</button></h2>
                                <div class="accordion-collapse collapse item-1" role="tabpanel" data-bs-parent="#accordion-1">
                                    <div class="accordion-body">
                                        <p class="mb-0">2 to 3 treatments are typically required based on hair loss or density</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-2" aria-expanded="false" aria-controls="accordion-1 .item-2">Does scalp micropigmentation fade?</button></h2>
                                <div class="accordion-collapse collapse item-2" role="tabpanel" data-bs-parent="#accordion-1">
                                    <div class="accordion-body">
                                        <p class="mb-0">Yes, scalp micropigmentation does fade over 4 – 6 years &amp; if desired a touch up is required.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-3" aria-expanded="false" aria-controls="accordion-1 .item-3">Can women get SMP?</button></h2>
                                <div class="accordion-collapse collapse item-3" role="tabpanel" data-bs-parent="#accordion-1">
                                    <div class="accordion-body">
                                        <p class="mb-0">Of course! SMP reduces the appearance of bald spots &amp; thinning hair. It creates a 3D effect which gives the hair an appearance of density &amp; fuller hair.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-4" aria-expanded="false" aria-controls="accordion-1 .item-4"> Is this the same thing as transplant surgery?</button></h2>
                                <div class="accordion-collapse collapse item-4" role="tabpanel" data-bs-parent="#accordion-1">
                                    <div class="accordion-body">
                                        <p class="mb-0">No, this is a cosmetic tattoo procedure that gives the illusion of tiny hair follicles that enhances thinning balding hairlines.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-5" aria-expanded="false" aria-controls="accordion-1 .item-5">What are the side effects of Scalp Micropigmentation?</button></h2>
                                <div class="accordion-collapse collapse item-5" role="tabpanel" data-bs-parent="#accordion-1">
                                    <div class="accordion-body">
                                        <p class="mb-0">Because this is a cosmetic tattoo there are typically no side effects.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




    </main>	
@include('page-footer')
@include('page-footer-js')
</body>
</html>
