{{-- load header --}}
@include('page-header')
<body>
	{{-- load nav --}}
	@include('page-nav')
	<main class="page">
        <section class="clean-block clean-services dark" style="text-align: center;margin-top: 90px;padding-bottom: 0;background: rgb(255,255,255);">
            <div class="container py-4 py-xl-5" style="position: static;">
                <h1 style="font-weight: bold;color: rgb(24,37,144);">404 PAGE NOT FOUND</h1>
                <div class="row gy-4 gy-md-0">
                    <div class="col">
                        <p>Oops this page does not exist. Click below to return home.</p>
                    </div>
                </div><a href="https://bladesmp.ca"><button class="btn btn-danger" type="button" style="padding-top: 12px;padding-right: 18px;padding-bottom: 12px;padding-left: 18px;font-size: 18px;margin-bottom: 18px;">Blade SMP Home Page</button></a>
            </div>
        </section>
    </main>
@include('page-footer')
@include('page-footer-js')
</body>
</html>
