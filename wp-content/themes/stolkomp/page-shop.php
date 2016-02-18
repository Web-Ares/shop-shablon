<?php
/**
 * Template Name: Page Shop
 */
get_header(); ?>


<section id='main'>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">

                <div class="filter-bar">
                    <div class="half">

                        <div class="sort-wrap pull-right">
                            <label for="sort-by">Sort by: </label>
                            <select name="sort-by" id="sort-by" class="chosen-select">
                                <option value="default">Default</option>
                                <option value="price-asc">Price Asc</option>
                                <option value="price-desc">Price Desc</option>
                                <option value="Size">Size</option>
                            </select>
                        </div>
                    </div>
                    <div class="half">
                        <div class="range-wrap custom-range pull-left">
                            <label for="range-price">Price filter: </label>
                            <input id="range-price" type="text" class="col-sm-8 col-md-7 col-xs-6 range-slider" value="" data-slider-value="[0,150]" />
                        </div>
                        <button class="btn btn-default btn-sm custom-button pull-right">Clear</button>
                    </div>
                </div>

                <div class="main-bottom">
                    <div class="half text-left">
                        <div class="page-counter pull-left">
                            <div class="type-selector">
                                <span>View as: </span>
                                <button class="btn btn-default custom-button no-border"><i class="icon-th-large"></i></button>
                                <button class="btn btn-default custom-button no-border"><i class="icon-align-justify"></i></button>
                            </div>
                        </div>
                        <div class="show-wrap pull-right text-left">
                            <label for="show-no">Sort by: </label>
                            <select name="show-no" id="show-no" class="chosen-select">
                                <option value="default">15</option>
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="30">30</option>
                            </select>
                        </div>
                    </div>
                    <div class="half text-right">
                        <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <article class="category-article category-grid col-sm-4">
                        <figure>
                            <img src="img/product01.jpg" alt=""/>
                            <div class="figure-overlay">

                                <div class="excerpt">
                                    <p>
                                        Sed sapien sed eros dignissimvehicula hendrerit at tellus. Nunc mollis magna ac felis tempor, vel malesuada dui tristique.
                                    </p>
                                </div>
                                <button class="btn btn-default custom-button">Add to Bag</button>
                                <a href="#"><span class="wrap-icon"><i class='glyphicon glyphicon-heart'></i></span></a>
                                <a href="#"><span class="wrap-icon"><i class='glyphicon glyphicon-ok'></i></span></a>
                            </div>
                        </figure>
                        <div class="figcaption">
                            <button class="color-selector">
                                <span class="real-color">Color</span>
                            </button>
                            <button class="color-selector" >
                                <span class="real-color" style="border-color: #d9d9d9; background-color: #3f3f3f">Color</span>
                            </button>
                        </div>
                        <div class="text">
                            <h2><a href="product.html">Black and white dust sweater dress</a></h2>
                            <div class="price">
                                <span class="new-price">$187.00</span>
                            </div>
                        </div>
                    </article>
                    <article class="category-article category-grid col-sm-4">
                        <figure>
                            <div class="corner-sign red">Sale</div>
                            <img src="img/product02.jpg" alt=""/>
                            <div class="figure-overlay">

                                <div class="excerpt">
                                    <p>
                                        Sed sapien sed eros dignissimvehicula hendrerit at tellus. Nunc mollis magna ac felis tempor, vel malesuada dui tristique.
                                    </p>
                                </div>
                                <button class="btn btn-default custom-button">Add to Bag</button>
                                <a href="#"><span class="wrap-icon"><i class='glyphicon glyphicon-heart'></i></span></a>
                                <a href="#"><span class="wrap-icon"><i class='glyphicon glyphicon-ok'></i></span></a>
                            </div>
                        </figure>
                        <div class="figcaption">

                        </div>
                        <div class="text">
                            <h2><a href="product.html">Pale pink and black buttoned dress</a></h2>
                            <div class="price">
                                <span class="old-price">$250.00</span>
                                <span class="new-price">$201.00</span>
                            </div>
                        </div>
                    </article>
                    <article class="category-article category-grid col-sm-4">
                        <figure>
                            <img src="img/product03.jpg" alt=""/>
                            <div class="figure-overlay">

                                <div class="excerpt">
                                    <p>
                                        Sed sapien sed eros dignissimvehicula hendrerit at tellus. Nunc mollis magna ac felis tempor, vel malesuada dui tristique.
                                    </p>
                                </div>
                                <button class="btn btn-default custom-button">Add to Bag</button>
                                <a href="#"><span class="wrap-icon"><i class='glyphicon glyphicon-heart'></i></span></a>
                                <a href="#"><span class="wrap-icon"><i class='glyphicon glyphicon-ok'></i></span></a>
                            </div>
                        </figure>
                        <div class="figcaption">
                            <button class="color-selector">
                                <span class="real-color" style="border-color: white; background-color: #eedbd9">Color</span>
                            </button>
                            <button class="color-selector" >
                                <span class="real-color" style="border-color: #d9d9d9; background-color: #3f3f3f">Color</span>
                            </button>
                        </div>
                        <div class="text">
                            <h2><a href="product.html">Black puplum waist-tie kududress</a></h2>
                            <div class="price">
                                <span class="new-price">$305.00</span>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="row">
                    <article class="category-article category-grid col-sm-4">
                        <figure>
                            <img src="img/product04.jpg" alt=""/>
                            <div class="figure-overlay">

                                <div class="excerpt">
                                    <p>
                                        Sed sapien sed eros dignissimvehicula hendrerit at tellus. Nunc mollis magna ac felis tempor, vel malesuada dui tristique.
                                    </p>
                                </div>
                                <button class="btn btn-default custom-button">Add to Bag</button>
                                <a href="#"><span class="wrap-icon"><i class='glyphicon glyphicon-heart'></i></span></a>
                                <a href="#"><span class="wrap-icon"><i class='glyphicon glyphicon-ok'></i></span></a>
                            </div>
                        </figure>
                        <div class="figcaption">
                            <button class="color-selector">
                                <span class="real-color" style="border-color: #f8d7da; background-color: #db3546">Color</span>
                            </button>
                            <button class="color-selector" >
                                <span class="real-color" style="border-color: #e9e9e9; background-color: #908f8f">Color</span>
                            </button>
                            <button class="color-selector" >
                                <span class="real-color" style="border-color: #d9d9d9; background-color: #3f3f3f">Color</span>
                            </button>
                        </div>
                        <div class="text">
                            <h2><a href="product.html">Navy colorblocked leather zip knit dress</a></h2>
                            <div class="price">
                                <span class="new-price">$154.00</span>
                            </div>
                        </div>
                    </article>
                    <article class="category-article category-grid col-sm-4">
                        <figure>
                            <img src="img/product05.jpg" alt=""/>
                            <div class="figure-overlay">

                                <div class="excerpt">
                                    <p>
                                        Sed sapien sed eros dignissimvehicula hendrerit at tellus. Nunc mollis magna ac felis tempor, vel malesuada dui tristique.
                                    </p>
                                </div>
                                <button class="btn btn-default custom-button">Add to Bag</button>
                                <a href="#"><span class="wrap-icon"><i class='glyphicon glyphicon-heart'></i></span></a>
                                <a href="#"><span class="wrap-icon"><i class='glyphicon glyphicon-ok'></i></span></a>
                            </div>
                        </figure>
                        <div class="figcaption">

                        </div>
                        <div class="text">
                            <h2><a href="product.html">White linen sheer dress</a></h2>
                            <div class="price">
                                <span class="new-price">$87.00</span>
                            </div>
                        </div>
                    </article>
                    <article class="category-article category-grid col-sm-4">
                        <figure>
                            <div class="corner-sign">New</div>
                            <img src="img/product06.jpg" alt=""/>
                            <div class="figure-overlay">

                                <div class="excerpt">
                                    <p>
                                        Sed sapien sed eros dignissimvehicula hendrerit at tellus. Nunc mollis magna ac felis tempor, vel malesuada dui tristique.
                                    </p>
                                </div>
                                <button class="btn btn-default custom-button">Add to Bag</button>
                                <a href="#"><span class="wrap-icon"><i class='glyphicon glyphicon-heart'></i></span></a>
                                <a href="#"><span class="wrap-icon"><i class='glyphicon glyphicon-ok'></i></span></a>
                            </div>
                        </figure>
                        <div class="figcaption">
                            <button class="color-selector">
                                <span class="real-color">Color</span>
                            </button>
                            <button class="color-selector" >
                                <span class="real-color" style="border-color: #d9d9d9; background-color: #3f3f3f">Color</span>
                            </button>
                        </div>
                        <div class="text">
                            <h2><a href="product.html">White linen sheer dress</a></h2>
                            <div class="price">
                                <span class="old-price">$300.00</span>
                                <span class="new-price">$247.00</span>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="row">
                    <article class="category-article category-grid col-sm-4">
                        <figure>
                            <div class="corner-sign red">-50%</div>
                            <img src="img/product04.jpg" alt=""/>
                            <div class="figure-overlay">


                                <div class="excerpt">
                                    <p>
                                        Sed sapien sed eros dignissimvehicula hendrerit at tellus. Nunc mollis magna ac felis tempor, vel malesuada dui tristique.
                                    </p>
                                </div>
                                <button class="btn btn-default custom-button">Add to Bag</button>
                                <a href="#"><span class="wrap-icon"><i class='glyphicon glyphicon-heart'></i></span></a>
                                <a href="#"><span class="wrap-icon"><i class='glyphicon glyphicon-ok'></i></span></a>
                            </div>
                        </figure>
                        <div class="figcaption">
                            <button class="color-selector">
                                <span class="real-color" style="border-color: #f8d7da; background-color: #db3546">Color</span>
                            </button>
                            <button class="color-selector" >
                                <span class="real-color" style="border-color: #e9e9e9; background-color: #908f8f">Color</span>
                            </button>
                            <button class="color-selector" >
                                <span class="real-color" style="border-color: #d9d9d9; background-color: #3f3f3f">Color</span>
                            </button>
                        </div>
                        <div class="text">
                            <h2><a href="product.html">Navy colorblocked leather zip knit dress</a></h2>
                            <div class="price">
                                <span class="new-price">$154.00</span>
                            </div>
                        </div>
                    </article>
                    <article class="category-article category-grid col-sm-4">
                        <figure>
                            <img src="img/product03.jpg" alt=""/>
                            <div class="figure-overlay">

                                <div class="excerpt">
                                    <p>
                                        Sed sapien sed eros dignissimvehicula hendrerit at tellus. Nunc mollis magna ac felis tempor, vel malesuada dui tristique.
                                    </p>
                                </div>
                                <button class="btn btn-default custom-button">Add to Bag</button>
                                <a href="#"><span class="wrap-icon"><i class='glyphicon glyphicon-heart'></i></span></a>
                                <a href="#"><span class="wrap-icon"><i class='glyphicon glyphicon-ok'></i></span></a>
                            </div>
                        </figure>
                        <div class="figcaption">

                        </div>
                        <div class="text">
                            <h2><a href="product.html">White linen sheer dress</a></h2>
                            <div class="price">
                                <span class="new-price">$87.00</span>
                            </div>
                        </div>
                    </article>
                    <article class="category-article category-grid col-sm-4">
                        <figure>
                            <img src="img/product06.jpg" alt=""/>
                            <div class="figure-overlay">

                                <div class="excerpt">
                                    <p>
                                        Sed sapien sed eros dignissimvehicula hendrerit at tellus. Nunc mollis magna ac felis tempor, vel malesuada dui tristique.
                                    </p>
                                </div>
                                <button class="btn btn-default custom-button">Add to Bag</button>
                                <a href="#"><span class="wrap-icon"><i class='glyphicon glyphicon-heart'></i></span></a>
                                <a href="#"><span class="wrap-icon"><i class='glyphicon glyphicon-ok'></i></span></a>
                            </div>
                        </figure>
                        <div class="figcaption">
                            <button class="color-selector">
                                <span class="real-color">Color</span>
                            </button>
                            <button class="color-selector" >
                                <span class="real-color" style="border-color: #d9d9d9; background-color: #3f3f3f">Color</span>
                            </button>
                        </div>
                        <div class="text">
                            <h2><a href="product.html">White linen sheer dress</a></h2>
                            <div class="price">
                                <span class="old-price">$300.00</span>
                                <span class="new-price">$247.00</span>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="row">
                    <article class="category-article category-grid col-sm-4">
                        <figure>
                            <img src="img/product01.jpg" alt=""/>
                            <div class="figure-overlay">

                                <div class="excerpt">
                                    <p>
                                        Sed sapien sed eros dignissimvehicula hendrerit at tellus. Nunc mollis magna ac felis tempor, vel malesuada dui tristique.
                                    </p>
                                </div>
                                <button class="btn btn-default custom-button">Add to Bag</button>
                                <a href="#"><span class="wrap-icon"><i class='glyphicon glyphicon-heart'></i></span></a>
                                <a href="#"><span class="wrap-icon"><i class='glyphicon glyphicon-ok'></i></span></a>
                            </div>
                        </figure>
                        <div class="figcaption">
                            <button class="color-selector">
                                <span class="real-color" style="border-color: #f8d7da; background-color: #db3546">Color</span>
                            </button>
                            <button class="color-selector" >
                                <span class="real-color" style="border-color: #e9e9e9; background-color: #908f8f">Color</span>
                            </button>
                            <button class="color-selector" >
                                <span class="real-color" style="border-color: #d9d9d9; background-color: #3f3f3f">Color</span>
                            </button>
                        </div>
                        <div class="text">
                            <h2><a href="product.html">Navy colorblocked leather zip knit dress</a></h2>
                            <div class="price">
                                <span class="new-price">$154.00</span>
                            </div>
                        </div>
                    </article>
                    <article class="category-article category-grid col-sm-4">
                        <figure>
                            <img src="img/product02.jpg" alt=""/>
                            <div class="figure-overlay">

                                <div class="excerpt">
                                    <p>
                                        Sed sapien sed eros dignissimvehicula hendrerit at tellus. Nunc mollis magna ac felis tempor, vel malesuada dui tristique.
                                    </p>
                                </div>
                                <button class="btn btn-default custom-button">Add to Bag</button>
                                <a href="#"><span class="wrap-icon"><i class='glyphicon glyphicon-heart'></i></span></a>
                                <a href="#"><span class="wrap-icon"><i class='glyphicon glyphicon-ok'></i></span></a>
                            </div>
                        </figure>
                        <div class="figcaption">

                        </div>
                        <div class="text">
                            <h2><a href="product.html">White linen sheer dress</a></h2>
                            <div class="price">
                                <span class="new-price">$87.00</span>
                            </div>
                        </div>
                    </article>
                    <article class="category-article category-grid col-sm-4">
                        <figure>
                            <div class="corner-sign">Out of Stock</div>
                            <img src="img/product05.jpg" alt=""/>
                            <div class="figure-overlay">

                                <div class="excerpt">
                                    <p>
                                        Sed sapien sed eros dignissimvehicula hendrerit at tellus. Nunc mollis magna ac felis tempor, vel malesuada dui tristique.
                                    </p>
                                </div>
                                <button class="btn btn-default custom-button">Add to Bag</button>
                                <a href="#"><span class="wrap-icon"><i class='glyphicon glyphicon-heart'></i></span></a>
                                <a href="#"><span class="wrap-icon"><i class='glyphicon glyphicon-ok'></i></span></a>
                            </div>
                        </figure>
                        <div class="figcaption">
                            <button class="color-selector">
                                <span class="real-color">Color</span>
                            </button>
                            <button class="color-selector" >
                                <span class="real-color" style="border-color: #d9d9d9; background-color: #3f3f3f">Color</span>
                            </button>
                        </div>
                        <div class="text">
                            <h2><a href="product.html">White linen sheer dress</a></h2>
                            <div class="price">
                                <span class="old-price">$300.00</span>
                                <span class="new-price">$247.00</span>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="row">
                    <article class="category-article category-grid col-sm-4">
                        <figure>
                            <img src="img/product04.jpg" alt=""/>
                            <div class="figure-overlay">

                                <div class="excerpt">
                                    <p>
                                        Sed sapien sed eros dignissimvehicula hendrerit at tellus. Nunc mollis magna ac felis tempor, vel malesuada dui tristique.
                                    </p>
                                </div>
                                <button class="btn btn-default custom-button">Add to Bag</button>
                                <a href="#"><span class="wrap-icon"><i class='glyphicon glyphicon-heart'></i></span></a>
                                <a href="#"><span class="wrap-icon"><i class='glyphicon glyphicon-ok'></i></span></a>
                            </div>
                        </figure>
                        <div class="figcaption">
                            <button class="color-selector">
                                <span class="real-color" style="border-color: #f8d7da; background-color: #db3546">Color</span>
                            </button>
                            <button class="color-selector" >
                                <span class="real-color" style="border-color: #e9e9e9; background-color: #908f8f">Color</span>
                            </button>
                            <button class="color-selector" >
                                <span class="real-color" style="border-color: #d9d9d9; background-color: #3f3f3f">Color</span>
                            </button>
                        </div>
                        <div class="text">
                            <h2><a href="product.html">Navy colorblocked leather zip knit dress</a></h2>
                            <div class="price">
                                <span class="new-price">$154.00</span>
                            </div>
                        </div>
                    </article>
                    <article class="category-article category-grid col-sm-4">
                        <figure>
                            <img src="img/product02.jpg" alt=""/>
                            <div class="figure-overlay">

                                <div class="excerpt">
                                    <p>
                                        Sed sapien sed eros dignissimvehicula hendrerit at tellus. Nunc mollis magna ac felis tempor, vel malesuada dui tristique.
                                    </p>
                                </div>
                                <button class="btn btn-default custom-button">Add to Bag</button>
                                <a href="#"><span class="wrap-icon"><i class='glyphicon glyphicon-heart'></i></span></a>
                                <a href="#"><span class="wrap-icon"><i class='glyphicon glyphicon-ok'></i></span></a>
                            </div>
                        </figure>
                        <div class="figcaption">

                        </div>
                        <div class="text">
                            <h2><a href="#">White linen sheer dress</a></h2>
                            <div class="price">
                                <span class="new-price">$87.00</span>
                            </div>
                        </div>
                    </article>
                    <article class="category-article category-grid col-sm-4">
                        <figure>
                            <img src="img/product03.jpg" alt=""/>
                            <div class="figure-overlay">

                                <div class="excerpt">
                                    <p>
                                        Sed sapien sed eros dignissimvehicula hendrerit at tellus. Nunc mollis magna ac felis tempor, vel malesuada dui tristique.
                                    </p>
                                </div>
                                <button class="btn btn-default custom-button">Add to Bag</button>
                                <a href="#"><span class="wrap-icon"><i class='glyphicon glyphicon-heart'></i></span></a>
                                <a href="#"><span class="wrap-icon"><i class='glyphicon glyphicon-ok'></i></span></a>
                            </div>
                        </figure>
                        <div class="figcaption">
                            <button class="color-selector">
                                <span class="real-color">Color</span>
                            </button>
                            <button class="color-selector" >
                                <span class="real-color" style="border-color: #d9d9d9; background-color: #3f3f3f">Color</span>
                            </button>
                        </div>
                        <div class="text">
                            <h2><a href="product.html">White linen sheer dress</a></h2>
                            <div class="price">
                                <span class="old-price">$300.00</span>
                                <span class="new-price">$247.00</span>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="main-bottom">
                    <div class="half text-left">
                        <div class="page-counter pull-left"> Page 1 of 8 total </div>
                        <div class="show-wrap pull-right text-left">
                            <label for="show-no-bottom">Sort by: </label>
                            <select name="show-no" id="show-no-bottom" class="chosen-select">
                                <option value="default">15</option>
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="30">30</option>
                            </select>
                        </div>
                    </div>
                    <div class="half text-right">
                        <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <aside class="col-sm-4">
                <div class="widget">
                    <div class="widget-title">
                        <h2>Categories</h2>
                    </div>
                    <div class="widget-content">
                        <div class="accordion">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                Woman
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <ul>
                                                <li><a href="#">Clothing</a></li>
                                                <li>
                                                    <a href="#">Shoes</a>
                                                    <ul>
                                                        <li><a href="#">Casual shoes</a></li>
                                                        <li><a href="#">Formal shoes</a></li>
                                                        <li><a href="#">Sandals</a></li>
                                                        <li><a href="#">Boots</a></li>
                                                        <li><a href="#">Slippers</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Accessories</a></li>
                                                <li><a href="#">Sportwear</a></li>
                                                <li><a href="#">Maternity</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                Men
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <li><a href="#">Clothing</a></li>
                                                <li><a href="#">Shoes</a></li>
                                                <li><a href="#">Accessories</a></li>
                                                <li><a href="#">Sportwear</a></li>
                                                <li><a href="#">Maternity</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                Girls
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <li><a href="#">Clothing</a></li>
                                                <li><a href="#">Shoes</a></li>
                                                <li><a href="#">Accessories</a></li>
                                                <li><a href="#">Sportwear</a></li>
                                                <li><a href="#">Maternity</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                                                Boys
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <li><a href="#">Clothing</a></li>
                                                <li><a href="#">Shoes</a></li>
                                                <li><a href="#">Accessories</a></li>
                                                <li><a href="#">Sportwear</a></li>
                                                <li><a href="#">Maternity</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget">
                    <div class="widget-content">
                        <div class="accordion accordion-second">
                            <div class="panel-group" id="accordion-color">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-color" href="#collapse-color">
                                                <span class="border">Color Filter</span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse-color" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <div class="custom-checkbox half-size">
                                                <input id="check1" type="checkbox" name="check" value="check1">
                                                <label for="check1">Black</label>
                                            </div>
                                            <div class="custom-checkbox half-size">
                                                <input id="check2" type="checkbox" name="check" value="check1">
                                                <label for="check2">Blue</label>
                                            </div>
                                            <div class="custom-checkbox half-size">
                                                <input id="check3" type="checkbox" name="check" value="check1">
                                                <label for="check3">Cream</label>
                                            </div>
                                            <div class="custom-checkbox half-size">
                                                <input id="check4" type="checkbox" name="check" value="check1">
                                                <label for="check4">Gold</label>
                                            </div>
                                            <div class="custom-checkbox half-size">
                                                <input id="check5" type="checkbox" name="check" value="check1">
                                                <label for="check5">Green</label>
                                            </div>
                                            <div class="custom-checkbox half-size">
                                                <input id="check6" type="checkbox" name="check" value="check1">
                                                <label for="check6">Grey</label>
                                            </div>
                                            <div class="custom-checkbox half-size">
                                                <input id="check7" type="checkbox" name="check" value="check1">
                                                <label for="check7">Lemon</label>
                                            </div>
                                            <div class="custom-checkbox half-size">
                                                <input id="check8" type="checkbox" name="check" value="check1">
                                                <label for="check8">Mint</label>
                                            </div>
                                            <div class="custom-checkbox half-size">
                                                <input id="check9" type="checkbox" name="check" value="check1">
                                                <label for="check9">Mocha</label>
                                            </div>
                                            <div class="custom-checkbox half-size">
                                                <input id="check10" type="checkbox" name="check" value="check1">
                                                <label for="check10">Orange</label>
                                            </div>
                                            <div class="custom-checkbox half-size">
                                                <input id="check11" type="checkbox" name="check" value="check1">
                                                <label for="check11">Peach</label>
                                            </div>
                                            <div class="custom-checkbox half-size">
                                                <input id="check12" type="checkbox" name="check" value="check1">
                                                <label for="check12">Pink</label>
                                            </div>
                                            <div class="custom-checkbox half-size">
                                                <input id="check13" type="checkbox" name="check" value="check1">
                                                <label for="check13">Purple</label>
                                            </div>
                                            <div class="custom-checkbox half-size">
                                                <input id="check14" type="checkbox" name="check" value="check1">
                                                <label for="check14">Red</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget">
                    <div class="widget-content">
                        <div class="accordion accordion-second">
                            <div class="panel-group" id="accordion-size">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-size" href="#collapse-size">
                                                <span class="border">Size Filter</span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse-size" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="custom-checkbox half-size">
                                                <input id="check-size1" type="checkbox" name="check" value="check1">
                                                <label for="check-size1">6</label>
                                            </div>
                                            <div class="custom-checkbox half-size">
                                                <input id="check-size2" type="checkbox" name="check" value="check1">
                                                <label for="check-size2">8</label>
                                            </div>
                                            <div class="custom-checkbox half-size">
                                                <input id="check-size3" type="checkbox" name="check" value="check1">
                                                <label for="check-size3">10</label>
                                            </div>
                                            <div class="custom-checkbox half-size">
                                                <input id="check-size4" type="checkbox" name="check" value="check1">
                                                <label for="check-size4">12</label>
                                            </div>
                                            <div class="custom-checkbox half-size">
                                                <input id="check-size5" type="checkbox" name="check" value="check1">
                                                <label for="check-size5">14</label>
                                            </div>
                                            <div class="custom-checkbox half-size">
                                                <input id="check-size6" type="checkbox" name="check" value="check1">
                                                <label for="check-size6">16</label>
                                            </div>
                                            <div class="custom-checkbox half-size">
                                                <input id="check-size7" type="checkbox" name="check" value="check1">
                                                <label for="check-size7">L</label>
                                            </div>
                                            <div class="custom-checkbox half-size">
                                                <input id="check-size8" type="checkbox" name="check" value="check1">
                                                <label for="check-size8">M</label>
                                            </div>
                                            <div class="custom-checkbox half-size">
                                                <input id="check-size9" type="checkbox" name="check" value="check1">
                                                <label for="check-size9">S</label>
                                            </div>
                                            <div class="custom-checkbox half-size">
                                                <input id="check-size10" type="checkbox" name="check" value="check1">
                                                <label for="check-size10">XL</label>
                                            </div>
                                            <div class="custom-checkbox half-size">
                                                <input id="check-size11" type="checkbox" name="check" value="check1">
                                                <label for="check-size11">XS</label>
                                            </div>
                                            <div class="custom-checkbox half-size">
                                                <input id="check-size12" type="checkbox" name="check" value="check1">
                                                <label for="check-size6">ML</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget">
                    <div class="widget-title">
                        <h2>Featured</h2>
                        <div class="slider-controls featured-slider-controls">
                            <button class="next"><i class="glyphicon glyphicon-chevron-left"></i></button>
                            <button class="prev"><i class="glyphicon glyphicon-chevron-right"></i></button>
                        </div>
                    </div>
                    <div class="widget-content">
                        <div class="featured-slider flexslider">
                            <ul class="slides">
                                <li>
                                    <div class="favorite-item">
                                        <a href="#">
                                            <figure>

                                                <img src="img/product01.jpg" alt=""/>
                                            </figure>
                                            <div class="favorite-text">
                                                <h2>Black puplum waist-tie kudu dress</h2>
                                                <span class="price">$478.00</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="favorite-item">
                                        <a href="#">
                                            <figure>
                                                <div class="corner-sign red">-50%</div>
                                                <img src="img/product02.jpg" alt=""/>
                                            </figure>
                                            <div class="favorite-text">
                                                <h2>Pale pink and black buttoned dress</h2>
                                                <span class="old-price">$250.00</span>
                                                <span class="price">$180.00</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="favorite-item">
                                        <a href="#">
                                            <figure>
                                                <div class="corner-sign">new</div>
                                                <img src="img/product03.jpg" alt=""/>
                                            </figure>
                                            <div class="favorite-text">
                                                <h2>Pale pink and black buttoned dress</h2>
                                                <span class="old-price">$250.00</span>
                                                <span class="price">$180.00</span>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="favorite-item">
                                        <a href="#">
                                            <figure>
                                                <img src="img/product01.jpg" alt=""/>
                                            </figure>
                                            <div class="favorite-text">
                                                <h2>Black puplum waist-tie kudu dress</h2>
                                                <span class="price">$478.00</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="favorite-item">
                                        <a href="#">
                                            <figure>
                                                <img src="img/product02.jpg" alt=""/>
                                            </figure>
                                            <div class="favorite-text">
                                                <h2>Pale pink and black buttoned dress</h2>
                                                <span class="old-price">$250.00</span>
                                                <span class="price">$180.00</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="favorite-item">
                                        <a href="#">
                                            <figure>
                                                <img src="img/product03.jpg" alt=""/>
                                            </figure>
                                            <div class="favorite-text">
                                                <h2>Pale pink and black buttoned dress</h2>
                                                <span class="old-price">$250.00</span>
                                                <span class="price">$180.00</span>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="widget">
                    <div class="widget-content">
                        <div class="promo-slider flexslider">
                            <ul class="slides">
                                <li>
                                    <div class="promo-item">
                                        <figure>
                                            <img src="img/promo01.jpg" alt=""/>
                                            <figcaption>
                                                <h3><a href="#">Our New <br /> Arrivals</a></h3>
                                                <div class="separator"></div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </li>
                                <li>
                                    <div class="promo-item">
                                        <figure>
                                            <img src="img/promo02.jpg" alt=""/>
                                            <figcaption>
                                                <h3><a href="#">Sale</a></h3>
                                                <h4>Many items</h4>
                                                <div class="separator"></div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </li>
                                <li>
                                    <div class="promo-item">
                                        <figure>
                                            <img src="img/promo03.jpg" alt=""/>
                                            <figcaption>
                                                <h3><a href="#"><span class="red">Free</span> <br /> <span class="grey">Shipping</span></a></h3>
                                                <div class="separator"></div>
                                                <h4><a href="#"><span class="black"></span>On All Orders!</a></h4>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>


<?php get_footer();
?>
