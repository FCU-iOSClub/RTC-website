@extends("layouts.".((request()->ajax())?'axios':'app')) @section('content')
<!-- Portfolio Grid Section -->
<section class="portfolio" id="teacher">
    <div class="container">
        <h2 class="text-center">教學團隊</h2>
        <hr class="star-primary">
        <div class="row">
            <div class="col-md-6 col-xl-4 portfolio-item">
                <a class="portfolio-link" href="#xfr" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid user" src="img/a.png" alt="">
                    <p class="user-name">許芳榮 主任</p>
                </a>
            </div>
            <div class="col-md-6 col-xl-4 portfolio-item">
                <a class="portfolio-link" href="#yjq" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid user" src="img/b.png" alt="">
                    <p class="user-name">英家慶 助理教授</p>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection @section('hidden-content') @parent
<div class="portfolio-modal modal fade" id="xfr" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img class="img-fluid img-centered" src="img/portfolio/cabin.png" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by
                                <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong>
                        <a href="http://startbootstrap.com">Start Bootstrap</a>
                      </strong>
                                </li>
                                <li>Date:
                                    <strong>
                        <a href="http://startbootstrap.com">April 2014</a>
                      </strong>
                                </li>
                                <li>Service:
                                    <strong>
                        <a href="http://startbootstrap.com">Web Development</a>
                      </strong>
                                </li>
                            </ul>
                            <button class="btn btn-success" type="button" data-dismiss="modal">
                                <i class="fa fa-times"></i> Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="yjq" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img class="img-fluid img-centered" src="img/portfolio/cake.png" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by
                                <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong>
                        <a href="http://startbootstrap.com">Start Bootstrap</a>
                      </strong>
                                </li>
                                <li>Date:
                                    <strong>
                        <a href="http://startbootstrap.com">April 2014</a>
                      </strong>
                                </li>
                                <li>Service:
                                    <strong>
                        <a href="http://startbootstrap.com">Web Development</a>
                      </strong>
                                </li>
                            </ul>
                            <button class="btn btn-success" type="button" data-dismiss="modal">
                                <i class="fa fa-times"></i> Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection