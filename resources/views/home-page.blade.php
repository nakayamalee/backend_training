@extends('template.template')

@section('css')
    <link rel="stylesheet" href="./css/home_page.css">
@endsection

@section('title')
    home-page
@endsection

@section('main')
    <main>
        <!-- carousel -->
        <section>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach ($banners as $banner)
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->index}}" @if ($loop->first)class="active" @endif></li>
                    @endforeach
                </ol>
                <div class="carousel-inner bg-secondary">
                    @foreach ($banners as $banner)
                        <div class="carousel-item @if ($loop->first)active @endif">
                            <img src="{{ $banner->img_path }}" style="opacity: {{ $banner->img_opacity }};" class="d-block w-100" alt="...">
                        </div>
                    @endforeach
                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>
        </section>

        <!-- first part -->
        <section class="px-5">
            <div class="firstRwd my-5 w-100 d-flex justify-content-center">
                <div class="topContent">
                    <p class="text-center text-dark">Raw Denim Heirloom Man Braid</p>
                    <p class="text-center">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy.
                        Gastropub indxgo juice poutine, ramps microdosing banh mi pug.</p>
                </div>
            </div>
            <!-- 3 Cards -->
            <div class="d-flex flex-wrap py-5 cards justify-content-center">
                @foreach ($newses as $news)
                    <div class="card col-12 col-md-4 border-0" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="d-flex justify-content-center">
                                @if ($news->img == null || $news->img == '')
                                    <div class="no-img">
                                        {{ mb_substr($news->title, 0, 1, 'utf-8') }}
                                    </div>
                                @else
                                    <img src="{{ $news->img }}" style="width: 80px;height:80px; border-radius: 50%;"
                                        alt="">
                                @endif
                            </h5>
                            <h6 class="card-title mb-2 text-muted text-center">{{ $news->title }}</h6>
                            <p class="card-text text-center">{{ $news->content }}</p>
                            <a href="#" class="card-link">
                                <p class="text-center">Learn More <i class="fa-solid fa-arrow-right"></i></p>
                            </a>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex w-100 px-4 py-2">
                    <button class="btn btn-primary bg-custom text-white mx-auto">Button</button>
                </div>
            </div>
        </section>
        <!-- grid -->
        <section class="px-5">
            <div class="d-flex flex-wrap my-5">
                <h3 class="col-12 col-lg-4 p-0">Master Cleanse Reliac Heirloom</h3>
                <div class="col-12 col-lg-8 mt-3 mt-lg-0 p-0">Whatever cardigan tote bag tumblr hexagon brooklyn
                    asymmetrical
                    gentrify, subway tile poke farm-to-table.
                    Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom.</div>
            </div>
            <div class="gridPart">
                <div class="part1 d-flex justify-content-center align-items-center">500x300</div>
                <div class="part2 d-flex justify-content-center align-items-center">501x301</div>
                <div class="part3 d-flex justify-content-center align-items-center">601x361</div>
                <div class="part4 d-flex justify-content-center align-items-center">600x360</div>
                <div class="part5 d-flex justify-content-center align-items-center">502x302</div>
                <div class="part6 d-flex justify-content-center align-items-center">503x303</div>
            </div>
        </section>
        <!-- pricing -->
        <section class="pricing">
            <h2 class="text-center mt-5">Pricing</h2>
            <p class="text-center mb-5">Banh mi cornhole echo park skateboard authentic crucifix neutra tilde lyft biodiesel
                artisan direct trade mumblecore 3 wolf moon twee</p>
            <form action="#">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Plan</th>
                            <th scope="col">Speed</th>
                            <th scope="col">Storage</th>
                            <th scope="col">Price</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><label for="caseStart">start</label></td>
                            <td>5 Mb/s</td>
                            <td>15 GB</td>
                            <td>Free</td>
                            <td><input type="radio" name="case" id="caseStart"></td>
                        </tr>
                        <tr>
                            <td><label for="casePro">Pro</label></td>
                            <td>25 Mb/s</td>
                            <td>25 GB</td>
                            <td>$24</td>
                            <td><input type="radio" name="case" id="casePro"></td>
                        </tr>
                        <tr>
                            <td><label for="caseBusiness">Business</label></td>
                            <td>36 Mb/s</td>
                            <td>40 GB</td>
                            <td>$50</td>
                            <td><input type="radio" name="case" id="caseBusiness"></td>
                        </tr>
                        <tr>
                            <td><label for="caseExclusive">Exclusive</label></td>
                            <td>48 Mb/s</td>
                            <td>120 GB</td>
                            <td>$72</td>
                            <td><input type="radio" name="case" id="caseExclusive"></td>
                        </tr>
                    </tbody>
                </table>
                <div class="pricingLink d-flex align-items-center justify-content-between">
                    <a href="#" class="card-link">
                        <p class="text-center m-0">Learn More <i class="fa-solid fa-arrow-right"></i></p>
                    </a>
                    <button class="btn btn-primary bg-primary text-white px-4 py-2">Button</button>
                </div>
            </form>
        </section>
        <!-- 4 cards -->
        <section class="px-5">
            <div class="d-flex flex-wrap my-5">
                <h3 class="col-12 col-lg-6 p-0"><span class="fourCardsTitle position-relative">Pitchfork Kickstarter
                        Taxidermy</span></h3>
                <div class="col-12 col-lg-6 mt-3 mt-lg-0 p-0">Whatever cardigan tote bag tumblr hexagon brooklyn
                    asymmetrical
                    gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep
                    jianbing
                    selfies heirloom prism food truck ugh squid celiac humblebrag.</div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
                <div class="col">
                    <div class="card p-3 bg-light border-0 w-100 rounded mt-0" style="width: 18rem;">
                        <img src="https://dummyimage.com/720x400" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-subtitle text-custom">SUBTITLE</h6>
                            <h5 class="card-title">Chichen Itza</h5>
                            <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery
                                hexagon disrupt
                                edison bulbche.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card p-3 bg-light border-0 w-100 rounded mt-3 mt-md-0" style="width: 18rem;">
                        <img src="https://dummyimage.com/721x401" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-subtitle text-custom">SUBTITLE</h6>
                            <h5 class="card-title">Colosseum Roma</h5>
                            <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery
                                hexagon disrupt
                                edison bulbche.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card p-3 bg-light border-0 w-100 rounded mt-3 mt-lg-0" style="width: 18rem;">
                        <img src="https://dummyimage.com/722x402" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-subtitle text-custom">SUBTITLE</h6>
                            <h5 class="card-title">Great Pyramid of Giza</h5>
                            <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery
                                hexagon disrupt
                                edison bulbche.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card p-3 bg-light border-0 w-100 rounded mt-3 mt-lg-0" style="width: 18rem;">
                        <img src="https://dummyimage.com/723x403" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-subtitle text-custom">SUBTITLE</h6>
                            <h5 class="card-title">San Francisco</h5>
                            <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery
                                hexagon disrupt
                                edison bulbche.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- col 3 cards -->
        <section>
            <div class="d-flex flex-column align-items-center w-100 flex-wrap py-5 colCards">
                <div class="card col-12 col-md-8 border-0">
                    <div class="card-body d-flex flex-column flex-md-row">
                        <div class="d-flex justify-content-center align-items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-10 h-10 mr-md-5" viewBox="0 0 24 24">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                            </svg>
                        </div>
                        <div class="d-flex flex-column text-center text-md-left">
                            <h6 class="card-title mb-2 text-muted mt-3 ">Shooting Stars</h6>
                            <p class="card-text">Blue bottle crucifix vinyl post-ironic four dollar toast vegan
                                taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
                            <p><a href="#" class="card-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </p>
                        </div>
                    </div>
                    <hr class="w-100">
                </div>
                <div class="card col-12 col-md-8 border-0">
                    <div class="card-body d-flex flex-column flex-md-row-reverse">
                        <div class=" d-flex justify-content-center align-items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-10 h-10 ml-md-5" viewBox="0 0 24 24">
                                <circle cx="6" cy="6" r="3"></circle>
                                <circle cx="6" cy="18" r="3"></circle>
                                <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                            </svg>
                        </div>
                        <div class="d-flex flex-column text-center text-md-left">
                            <h6 class="card-title mb-2 text-muted mt-3">The Catalyzer</h6>
                            <p class="card-text">Blue bottle crucifix vinyl post-ironic four dollar toast vegan
                                taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
                            <p><a href="#" class="card-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </p>
                        </div>
                    </div>
                    <hr class="w-100">
                </div>
                <div class="card col-12 col-md-8 border-0">
                    <div class="card-body d-flex flex-column flex-md-row">
                        <div class="d-flex justify-content-center align-items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-10 h-10 mr-md-5" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <div class="d-flex flex-column text-center text-md-left">
                            <h6 class="card-title mb-2 text-muted mt-3">Neptune</h6>
                            <p class="card-text">Blue bottle crucifix vinyl post-ironic four dollar toast vegan
                                taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
                            <p><a href="#" class="card-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary bg-custom text-white px-4 py-2 mx-auto mt-5">Button</button>
            </div>
        </section>
        <!-- introduce -->
        <section class="px-5 container-md pl-md-0 pl-lg-3">
            <div class="d-flex flex-column">
                <div class="d-flex flex-column flex-md-row align-items-center  px-0">
                    <img src="https://dummyimage.com/400x400" class="w-100" alt="..."
                        style="max-height: 450px;max-width: 450px;">
                    <form action="">
                        <div class="card-body ">
                            <p class="card-subtitle">BRAND NAME</p>
                            <h3 class="card-title">The Catcher in the Rye</h3>
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex mr-3">
                                    <div class="star bg-custom"></div>
                                    <div class="star bg-custom"></div>
                                    <div class="star bg-custom"></div>
                                    <div class="star bg-custom"></div>
                                    <div class="star bg-custom noStar"></div>
                                </div>
                                <div class="text-center pr-3 mr-3 border-right">
                                    4 Reviews
                                </div>
                                <div class="d-flex">
                                    <i class="fa-brands fa-facebook-f mr-2 text-secondary"></i>
                                    <i class="fa-brands fa-twitter mr-2 text-secondary"></i>
                                    <i class="fa-solid fa-comment mr-2 text-secondary"></i>
                                </div>
                            </div>
                            <p>Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha taximy chia
                                microdosing tilde
                                DIY. XOXO fam indxgo juiceramps cornhole raw denim forage brooklyn. Everyday carry +1 seitan
                                poutine
                                tumeric. Gastropub blue bottle austin listicle pour-over, neutra jean shorts keytar banjo
                                tattooed umami
                                cardigan.</p>
                            <div class="d-flex align-items-center">
                                Color
                                <label for="colorWhite">
                                    <div class="border border-dark bg-white rounded-circle mx-2"
                                        style="width: 1.5rem;height: 1.5rem;">
                                    </div>
                                </label>
                                <input type="checkbox" id="colorWhite" name="color" class="d-none">
                                <label for="colorWhite">
                                    <div class="border border-dark bg-dark rounded-circle mr-2"
                                        style="width: 1.5rem;height: 1.5rem;">
                                    </div>
                                </label>
                                <input type="checkbox" id="colorBlack" name="color" class="d-none">
                                <label for="colorWhite">
                                    <div class="border border-dark bg-custom rounded-circle mr-5"
                                        style="width: 1.5rem;height: 1.5rem;">
                                    </div>
                                </label>
                                <input type="checkbox" id="colorPurple" name="color" class="d-none">
                                Size
                                <select class="custom-select ml-3" id="inputGroupSelect01" style="width: 5rem;">
                                    <option value="SM" selected>SM</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                </select>
                            </div>
                            <hr class="w-100">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="m-0">$58.00</h5>
                                <div class="d-flex align-items-center">
                                    <button class="btn btn-primary bg-custom text-white px-4 py-2 mr-3">Button</button>
                                    <div class="rounded-circle d-flex align-items-center justify-content-center"
                                        style="background-color: #e5e7eb; width: 1.5rem;height: 1.5rem;">
                                        <i class="fa-solid fa-heart" style="color: #6b7280;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </section>
        <!-- 8 cards -->
        <section class="px-5 my-5">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
                    <div class="col mt-5">
                        <div class="card border-0">
                            <img src="https://dummyimage.com/420x260" alt="...">
                            <div class="card-body px-0">
                                <p class="card-subtitle">CATEGORY</p>
                                <p class="card-title">The Catalyzer</p>
                                <p class="card-text">$16.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-5">
                        <div class="card border-0">
                            <img src="https://dummyimage.com/421x261" alt="...">
                            <div class="card-body px-0">
                                <p class="card-subtitle">CATEGORY</p>
                                <p class="card-title">Shooting Stars</p>
                                <p class="card-text">$21.15</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-5">
                        <div class="card border-0">
                            <img src="https://dummyimage.com/422x262" alt="...">
                            <div class="card-body px-0">
                                <p class="card-subtitle">CATEGORY</p>
                                <p class="card-title">Neptune</p>
                                <p class="card-text">$12.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-5">
                        <div class="card border-0">
                            <img src="https://dummyimage.com/423x263" alt="...">
                            <div class="card-body px-0">
                                <p class="card-subtitle">CATEGORY</p>
                                <p class="card-title">The 400 Blows</p>
                                <p class="card-text">$18.40</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-5">
                        <div class="card border-0">
                            <img src="https://dummyimage.com/424x264" alt="...">
                            <div class="card-body px-0">
                                <p class="card-subtitle">CATEGORY</p>
                                <p class="card-title">The Catalyzer</p>
                                <p class="card-text">$16.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-5">
                        <div class="card border-0">
                            <img src="https://dummyimage.com/425x265" alt="...">
                            <div class="card-body px-0">
                                <p class="card-subtitle">CATEGORY</p>
                                <p class="card-title">Shooting Stars</p>
                                <p class="card-text">$21.15</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-5">
                        <div class="card border-0">
                            <img src="https://dummyimage.com/427x267" alt="...">
                            <div class="card-body px-0">
                                <p class="card-subtitle">CATEGORY</p>
                                <p class="card-title">Neptune</p>
                                <p class="card-text">$12.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-5">
                        <div class="card border-0">
                            <img src="https://dummyimage.com/428x268" alt="...">
                            <div class="card-body px-0">
                                <p class="card-subtitle">CATEGORY</p>
                                <p class="card-title">The 400 Blows</p>
                                <p class="card-text">$18.40</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- map -->
        <section class="w-100">
            <div id="map" class="col">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3641.4409935777453!2d120.659369015415!3d24.12114638042789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693d750627a6b7%3A0xbcfe6bac3289fc4!2z5pW45L2N5pa55aGK5pyJ6ZmQ5YWs5Y-4!5e0!3m2!1szh-TW!2stw!4v1654747118374!5m2!1szh-TW!2stw"
                    style="border:0; width: 100%; height: 100%;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="plate p-5 d-flex flex-column">
                    <h3>Feed back</h3>
                    <h4 class="text-secondary">Post-ironic portland shabby chic echo park, banjo fashion axe</h4>
                    <label for="">
                        <h5>Email</h5>
                    </label>
                    <input type="text" class="mt-n3" style="height: 2rem;">
                    <label for="Message">
                        <h5>Message</h5>
                    </label>
                    <textarea id="Message" class="mt-n3" name="story" rows="5" cols="33"> </textarea>
                    <button class="btn bg-custom text-light" type="submit">Button</button>
                    <p>Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p>
                </div>
            </div>
        </section>
    </main>
@endsection
