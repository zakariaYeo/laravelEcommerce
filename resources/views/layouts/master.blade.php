<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v4.0.1">
        <title>@yield('title')</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/blog/">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <!-- Favicons -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
        <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
        <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
        <link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
        <link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
        <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
        <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
        <meta name="theme-color" content="#563d7c">


        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }

            / * stylelint-disable selector-list-comma-newline-after * / .blog-header {
                hauteur de ligne: 1;
                bordure inférieure: 1px solide # e5e5e5;
            }

            .blog-header-logo {
                famille de polices: "Playfair Display", Géorgie, "Times New Roman", empattement;
                taille de police: 2, 25rem;
            }

            .blog-header-logo: survoler {
                décoration de texte: aucune;
            }

            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                famille de polices: "Playfair Display", Géorgie, "Times New Roman", empattement;
            }

            .display-4 {
                taille de police: 2.5rem;
            }

            @media (min-width: 768px) {
                .display-4 {
                    taille de police: 3rem;
                }
            }

            .nav-scroller {
                position: relative;
                indice z: 2;
                hauteur: 2, 75rem;
                débordement-y: caché;
            }

            .nav-scroller .nav {
                affichage: -ms-flexbox;
                affichage: flex;
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
                rembourrage en bas: 1rem;
                margin-top: -1px;
                overflow-x: auto;
                alignement du texte: centre;
                espace blanc: nowrap;
                -webkit-overflow-scrolling: toucher;
            }

            .nav-scroller .nav-link {
                rembourrage-dessus: .75rem;
                rembourrage-bas: .75rem;
                taille de police: .875rem;
            }

            .card-img-right {
                hauteur: 100%;
                rayon de bordure: 0 3px 3px 0;
            }

            .flex-auto {
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
            }

            .h-250 {
                hauteur: 250px;
            }

            @media (min-width: 768px) {
                .h-md-250 {
                    hauteur: 250px;
                }
            }

            / * Pagination * / .blog-pagination {
                marge en bas: 4rem;
            }

            .blog-pagination>.btn {
                rayon-frontière: 2rem;
            }

            / * * Articles de blog * / .blog-post {
                marge en bas: 4rem;
            }

            .blog-post-title {
                marge en bas: .25rem;
                taille de police: 2.5rem;
            }

            .blog-post-meta {
                marge en bas: 1, 25rem;
                couleur: # 999;
            }

            / * * Bas de page * / .blog-footer {
                rembourrage: 2, 5rem 0;
                couleur: # 999;
                alignement du texte: centre;
                couleur de fond: # f9f9f9;
                border-top: .05rem solid # e5e5e5;
            }

            .blog-footer p: dernier enfant {
                marge en bas: 0;
            }

            / * stylelint-disable selector-list-comma-newline-after * / .blog-header {
                hauteur de ligne: 1;
                bordure inférieure: 1px solide # e5e5e5;
            }

            .blog-header-logo {
                famille de polices: "Playfair Display", Géorgie, "Times New Roman", empattement;
                taille de police: 2, 25rem;
            }

            .blog-header-logo: survoler {
                décoration de texte: aucune;
            }

            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                famille de polices: "Playfair Display", Géorgie, "Times New Roman", empattement;
            }

            .display-4 {
                taille de police: 2.5rem;
            }

            @media (min-width: 768px) {
                .display-4 {
                    taille de police: 3rem;
                }
            }

            .nav-scroller {
                position: relative;
                indice z: 2;
                hauteur: 2, 75rem;
                débordement-y: caché;
            }

            .nav-scroller .nav {
                affichage: -ms-flexbox;
                affichage: flex;
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
                rembourrage en bas: 1rem;
                margin-top: -1px;
                overflow-x: auto;
                alignement du texte: centre;
                espace blanc: nowrap;
                -webkit-overflow-scrolling: toucher;
            }

            .nav-scroller .nav-link {
                rembourrage-dessus: .75rem;
                rembourrage-bas: .75rem;
                taille de police: .875rem;
            }

            .card-img-right {
                hauteur: 100%;
                rayon de bordure: 0 3px 3px 0;
            }

            .flex-auto {
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
            }

            .h-250 {
                hauteur: 250px;
            }

            @media (min-width: 768px) {
                .h-md-250 {
                    hauteur: 250px;
                }
            }

            / * Pagination * / .blog-pagination {
                marge en bas: 4rem;
            }

            .blog-pagination>.btn {
                rayon-frontière: 2rem;
            }

            / * * Articles de blog * / .blog-post {
                marge en bas: 4rem;
            }

            .blog-post-title {
                marge en bas: .25rem;
                taille de police: 2.5rem;
            }

            .blog-post-meta {
                marge en bas: 1, 25rem;
                couleur: # 999;
            }

            / * * Bas de page * / .blog-footer {
                rembourrage: 2, 5rem 0;
                couleur: # 999;
                alignement du texte: centre;
                couleur de fond: # f9f9f9;
                border-top: .05rem solid # e5e5e5;
            }

            .blog-footer p: dernier enfant {
                marge en bas: 0;
            }
        </style>
        <!-- Custom styles for this template -->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <header class="blog-header py-3">
                <div class="row flex-nowrap justify-content-between align-items-center">
                    <div class="col-4 pt-1">
                        <a class="text-muted" href="{{ route('cart.index') }}">Panier <span
                                class="badge badge-pill badge-dark">{{ Cart::count() }}</span></a>
                    </div>
                    <div class="col-4 text-center">
                        <a class="blog-header-logo text-dark" href="{{ route('products.index') }}">
                            <h1>Ecommerce</h1>
                        </a>
                    </div>
                    <div class="col-4 d-flex justify-content-end align-items-center">
                        <a class="text-muted" href="#" aria-label="Search">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="mx-3" role="img" viewBox="0 0 24 24" focusable="false">
                                <title>Search</title>
                                <circle cx="10.5" cy="10.5" r="7.5" />
                                <path d="M21 21l-5.2-5.2" />
                            </svg>
                        </a>
                        <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
                    </div>
                </div>
            </header>

            <div class="nav-scroller py-1 mb-2">
                <nav class="nav d-flex justify-content-between">
                    <a class="p-2 text-muted" href="#">World</a>
                    <a class="p-2 text-muted" href="#">U.S.</a>
                    <a class="p-2 text-muted" href="#">Technology</a>
                    <a class="p-2 text-muted" href="#">Design</a>
                    <a class="p-2 text-muted" href="#">Culture</a>
                    <a class="p-2 text-muted" href="#">Business</a>
                    <a class="p-2 text-muted" href="#">Politics</a>
                    <a class="p-2 text-muted" href="#">Opinion</a>
                    <a class="p-2 text-muted" href="#">Science</a>
                    <a class="p-2 text-muted" href="#">Health</a>
                    <a class="p-2 text-muted" href="#">Style</a>
                    <a class="p-2 text-muted" href="#">Travel</a>
                </nav>
            </div>

            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            {{-- <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
                <div class="col-md-6 px-0">
                    <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
                    <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and
                        efficiently about what’s most interesting in this post’s contents.</p>
                    <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
                </div>
            </div> --}}

            <div class="row mb-2">
                @yield('content')
            </div>
        </div>

        {{-- <main role="main" class="container">
            <div class="row">
                <div class="col-md-8 blog-main">
                    <h3 class="pb-4 mb-4 font-italic border-bottom">
                        From the Firehose
                    </h3>

                    <div class="blog-post">
                        <h2 class="blog-post-title">Sample blog post</h2>
                        <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

                        <p>This blog post shows a few different types of content that’s supported and styled with
                            Bootstrap. Basic typography, images, and code are all supported.</p>
                        <hr>
                        <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur
                            ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis
                            vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet
                            fermentum.</p>
                        <blockquote>
                            <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong>
                                ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </blockquote>
                        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit
                            amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                        <h2>Heading</h2>
                        <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non
                            commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus,
                            porta ac consectetur ac, vestibulum at eros.</p>
                        <h3>Sub-heading</h3>
                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        <pre><code>Example code block</code></pre>
                        <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis
                            euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                            fermentum massa.</p>
                        <h3>Sub-heading</h3>
                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean
                            lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod.
                            Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa
                            justo sit amet risus.</p>
                        <ul>
                            <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                            <li>Donec id elit non mi porta gravida at eget metus.</li>
                            <li>Nulla vitae elit libero, a pharetra augue.</li>
                        </ul>
                        <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra
                            augue.</p>
                        <ol>
                            <li>Vestibulum id ligula porta felis euismod semper.</li>
                            <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                            </li>
                            <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
                        </ol>
                        <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.
                        </p>
                    </div><!-- /.blog-post -->

                    <div class="blog-post">
                        <h2 class="blog-post-title">Another blog post</h2>
                        <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>

                        <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur
                            ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis
                            vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet
                            fermentum.</p>
                        <blockquote>
                            <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong>
                                ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </blockquote>
                        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit
                            amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                        <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non
                            commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus,
                            porta ac consectetur ac, vestibulum at eros.</p>
                    </div><!-- /.blog-post -->

                    <div class="blog-post">
                        <h2 class="blog-post-title">New feature</h2>
                        <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>

                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean
                            lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod.
                            Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa
                            justo sit amet risus.</p>
                        <ul>
                            <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                            <li>Donec id elit non mi porta gravida at eget metus.</li>
                            <li>Nulla vitae elit libero, a pharetra augue.</li>
                        </ul>
                        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit
                            amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                        <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra
                            augue.</p>
                    </div><!-- /.blog-post -->

                    <nav class="blog-pagination">
                        <a class="btn btn-outline-primary" href="#">Older</a>
                        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1"
                            aria-disabled="true">Newer</a>
                    </nav>

                </div><!-- /.blog-main -->

                <aside class="col-md-4 blog-sidebar">
                    <div class="p-4 mb-3 bg-light rounded">
                        <h4 class="font-italic">About</h4>
                        <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur
                            purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                    </div>

                    <div class="p-4">
                        <h4 class="font-italic">Archives</h4>
                        <ol class="list-unstyled mb-0">
                            <li><a href="#">March 2014</a></li>
                            <li><a href="#">February 2014</a></li>
                            <li><a href="#">January 2014</a></li>
                            <li><a href="#">December 2013</a></li>
                            <li><a href="#">November 2013</a></li>
                            <li><a href="#">October 2013</a></li>
                            <li><a href="#">September 2013</a></li>
                            <li><a href="#">August 2013</a></li>
                            <li><a href="#">July 2013</a></li>
                            <li><a href="#">June 2013</a></li>
                            <li><a href="#">May 2013</a></li>
                            <li><a href="#">April 2013</a></li>
                        </ol>
                    </div>

                    <div class="p-4">
                        <h4 class="font-italic">Elsewhere</h4>
                        <ol class="list-unstyled">
                            <li><a href="#">GitHub</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Facebook</a></li>
                        </ol>
                    </div>
                </aside><!-- /.blog-sidebar -->

            </div><!-- /.row -->

        </main><!-- /.container --> --}}

        <footer class="row blog-footer">
            <div class="col-md-6 offset-md-3">
                <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a
                        href="https://twitter.com/mdo">@mdo</a>.</p>
                <p>
                    <a href="#">Back to top</a>
                </p>
            </div>

        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
        </script>
    </body>

</html>
