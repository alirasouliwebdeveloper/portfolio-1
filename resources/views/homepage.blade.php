@extends('site.layout.master')

@section('content')

    <!-- Start pageintro -->
    <div class="wrapper bgded overlay" style="background-image:url({{ asset('site/images/backgrounds/01.png') }});">
        <div id="pageintro" class="hoc clear">
            <!-- ######################################## -->
            <article>
                <p>Just before the party</p>
                <h3 class="heading">Varius aenean laoreet mauris</h3>
                <footer>
                    <ul class="nospace inline pushright">
                        <li><a class="btn" href="#">What a chocolate</a></li>
                        <li><a class="btn inverse" href="#">Arrows dignissim</a></li>
                    </ul>
                </footer>
            </article>
            <!-- ######################################## -->
        </div>
    </div>
    <!-- End pageintro -->
    <!-- ######################################## -->

    <!-- Start introblocks & sectiontitle -->
    <div class="wrapper row3">
        <main class="hoc container clear">
            <!-- main body -->
            <!-- ######################################## -->
            <section id="introblocks">
                <div class="sectiontitle">
                    <h6 class="heading">Tellus malesuada dignissim</h6>
                    <p>Nullam tincidunt ex vel volutpat accumsan ut lobortis metus</p>
                </div>
                <ul class="nospace btmspace-80 group">
                    <li class="one_third first">
                        <article><i class="fa fa-diamond"></i>
                            <h6 class="heading font-x1"><a href="#">Feugiat maximus nisi</a></h6>
                            <p>Sem volutpat massa sed tristique nisi sem sed est cras pulvinar augue libero&hellip;</p>
                        </article>
                    </li>
                    <li class="one_third">
                        <article><i class="fa fa-fort-awesome"></i>
                            <h6 class="heading font-x1"><a href="#">Vel imperdiet libero</a></h6>
                            <p>Condimentum id donec eu eros quis ligula sollicitudin malesuada scelerisque&hellip;</p>
                        </article>
                    </li>
                    <li class="one_third">
                        <article><i class="fa fa-forumbee"></i>
                            <h6 class="heading font-x1"><a href="#">Dui nam sed tristique</a></h6>
                            <p>Nunc sed ligula viverra egestas tincidunt accumsan porta eget lorem maecenas&hellip;</p>
                        </article>
                    </li>
                </ul>
                <p class="center"><a class="btn" href="#">Eleifend dui auctor</a></p>
            </section>
            <!-- ######################################## -->
            <hr class="btmspace-80">
            <!-- ######################################## -->
            <section>
                <div class="sectiontitle">
                    <h6 class="heading">Pulvinar enim nibh pretium</h6>
                    <p>Nulla sed tincidunt metus massa accumsan enim in leo massa</p>
                </div>
                <ul class="nospace group overview">
                    <li class="one_third">
                        <figure><a href="#"><img src="images/320x240.png" alt=""></a>
                            <figcaption>
                                <h6 class="heading">Aliquet non sapien in</h6>
                                <p>Congue suscipit nulla aliquam fermentum ac justo eu tincidunt integer.</p>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="one_third">
                        <figure><a href="#"><img src="images/320x240.png" alt=""></a>
                            <figcaption>
                                <h6 class="heading">Eleifend lacus metus</h6>
                                <p>Suscipit egestas vivamus at velit ultrices malesuada ex eu rutrum arcu.</p>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="one_third">
                        <figure><a href="#"><img src="images/320x240.png" alt=""></a>
                            <figcaption>
                                <h6 class="heading">Fusce facilisis congue</h6>
                                <p>Sapien sit amet tempor nisl mollis sed sed tristique nunc pretium mi.</p>
                            </figcaption>
                        </figure>
                    </li>
                </ul>
            </section>
            <!-- ######################################## -->
            <!-- / main body -->
            <div class="clear"></div>
        </main>
    </div>
    <!-- End introblocks & sectiontitle -->
    <!-- ######################################## -->

    <!-- Start quarter -->
    <div class="wrapper bgded overlay" style="background-image:url({{ asset('site/images/backgrounds/02.png') }});">
        <article class="hoc cta clear">
            <h6 class="three_quarter first">Gravida venenatis morbi a interdum erat id congue</h6>
            <footer class="one_quarter"><a class="btn" href="#">Neque mauris nunc &raquo;</a></footer>
        </article>
    </div>
    <!-- End quarter -->
    <!-- ######################################## -->

    <!-- Start testimonials -->
    <div class="wrapper row2">
        <section class="hoc container clear testimonials">
            <!-- ######################################## -->
            <div class="sectiontitle">
                <h6 class="heading">Efficitur posuere tellus non</h6>
                <p>Mattis turpis praesent dignissim et libero non luctus vivamus</p>
            </div>
            <ul class="nospace group btmspace-80">
                <li class="one_third first">
                    <blockquote>Imperdiet libero ac sapien facilisis ultricies aliquam gravida ligula quis commodo
                        interdum purus felis rutrum velit non tincidunt arcu orci eget nulla etiam laoreet volutpat
                        mollis mauris
                    </blockquote>
                    <figure class="clear"><img class="circle" src="{{ asset('site/images/60x60.png') }}" alt="">
                        <figcaption>
                            <h6 class="heading">John Doe</h6>
                            <em>Consultant</em></figcaption>
                    </figure>
                </li>
                <li class="one_third">
                    <blockquote>Et tellus nibh nullam sit amet mauris consequat vehicula velit non aliquam erat maecenas
                        egestas dui et velit viverra in tincidunt neque consectetur quisque metus arcu suscipit rutrum
                        euismod
                    </blockquote>
                    <figure class="clear"><img class="circle" src="{{ asset('site/images/60x60.png') }}" alt="">
                        <figcaption>
                            <h6 class="heading">Jane Doe</h6>
                            <em>Director</em></figcaption>
                    </figure>
                </li>
                <li class="one_third">
                    <blockquote>Consequat venenatis vestibulum enim phasellus id molestie mi nec vulputate massa
                        phasellus ut ligula hendrerit lobortis nibh ac laoreet sapien morbi id sagittis nulla vulputate
                        fringilla felis
                    </blockquote>
                    <figure class="clear"><img class="circle" src="{{ asset('site/images/60x60.png') }}" alt="">
                        <figcaption>
                            <h6 class="heading">June Doe</h6>
                            <em>Marketing</em></figcaption>
                    </figure>
                </li>
            </ul>
        {{-- <footer><a class="btn" href="#">View More &raquo;</a></footer> --}}
        <!-- ######################################## -->
        </section>
    </div>
    <!-- End testimonials -->
    <!-- ######################################## -->

    <!-- Start clients -->
    <div class="wrapper row3">
        <figure class="hoc container clear clients">
            <!-- ######################################## -->
            <figcaption class="sectiontitle">
                <h6 class="heading">Nullam scelerisque orci eu</h6>
                <p>Pulvinar sodales suspendisse in purus vel massa fermentum</p>
            </figcaption>
            <ul class="nospace group">
                <li class="one_quarter first"><a href="#"><img src="{{ asset('site/images/222x100.png') }}" alt=""></a>
                </li>
                <li class="one_quarter"><a href="#"><img src="{{ asset('site/images/222x100.png') }}" alt=""></a></li>
                <li class="one_quarter"><a href="#"><img src="{{ asset('site/images/222x100.png') }}" alt=""></a></li>
                <li class="one_quarter"><a href="#"><img src="{{ asset('site/images/222x100.png') }}" alt=""></a></li>
            </ul>
            <!-- ######################################## -->
        </figure>
    </div>
    <!-- End clients -->
    <!-- ######################################## -->
@stop
