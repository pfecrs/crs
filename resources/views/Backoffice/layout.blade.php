<!DOCTYPE html>
<html lang="en">
@include('Backoffice.inc.head')
<body>
    @include('Backoffice.inc.loader')
    @include('Backoffice.inc.navbar')
    @include('Backoffice.inc.navbar2')
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>
        @include('Backoffice.inc.sidebar')
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="row layout-top-spacing">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
                        <div class="widget widget-content-area br-4">
                            <div class="widget-one">

                                <h6>Kick Start you new project with ease!</h6>

                                <p class="mb-0 mt-3" style="color: #888ea8;">With CORK starter kit, you can begin your work without any hassle. The starter page is highly optimized which gives you freedom to start with minimal code and add only the desired components and plugins required for your project.</p>

                            </div>
                        </div>
                    </div>
    


                </div>

            </div>
      
        </div>
        </div>
        @include('Backoffice.inc.scripts')
    </body>
    </html>