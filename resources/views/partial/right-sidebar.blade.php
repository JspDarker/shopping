<aside class="col-sm-4 sidebar">
    <div class="sidebox widget">
        <h3 class="widget-title">Search| Cart
            @if(Cart::count() > 0)
                <span class="text-danger total-products">{{ Cart::count() }}</span>
            @endif
        </h3>
        <form class="searchform" method="get">
            <input type="text" id="s1" name="s" value="Search something" onfocus="this.value=''" onblur="this.value='Search something'">
            <button type="submit" class="btn btn-default">Find</button>
        </form>
    </div>
    <!-- /.widget -->
    <div class="sidebox widget">
        <h3 class="widget-title">Popular Posts</h3>
        <ul class="post-list">
            <li>
                <div class="icon-overlay"> <a href="blog-post.html"><img src="hot/style/images/art/a1.jpg" alt="" /> </a> </div>
                <div class="meta">
                    <h5><a href="blog-post.html">Magna Mollis Ultricies</a></h5>
                    <em><span class="date">3th Oct 2012</span> <span class="comments"><a href="#"><i class="icon-chat-1"></i> 8</a></span></em> </div>
            </li>
            <li>
                <div class="icon-overlay"> <a href="blog-post.html"><img src="hot/style/images/art/a2.jpg" alt="" /> </a> </div>
                <div class="meta">
                    <h5><a href="blog-post.html">Ornare Nullam Risus Tellus Elit Fusce Inceptos</a></h5>
                    <em><span class="date">28th Sep 2012</span> <span class="comments"><a href="#"><i class="icon-chat-1"></i> 5</a></span></em> </div>
            </li>
            <li>
                <div class="icon-overlay"> <a href="blog-post.html"><img src="hot/style/images/art/a3.jpg" alt="" /> </a> </div>
                <div class="meta">
                    <h5><a href="blog-post.html">Euismod Nullam</a></h5>
                    <em><span class="date">15th Aug 2012</span> <span class="comments"><a href="#"><i class="icon-chat-1"></i> 9</a></span></em> </div>
            </li>
        </ul>
        <!-- /.post-list -->
    </div>
    <!-- /.widget -->

    <div class="sidebox widget">
        <h3 class="widget-title">Elsewhere</h3>
        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Integer posuere erat a ante venenatis.</p>
        <ul class="social">
            <li><a href="#"><i class="icon-s-rss"></i></a></li>
            <li><a href="#"><i class="icon-s-twitter"></i></a></li>
            <li><a href="#"><i class="icon-s-facebook"></i></a></li>
            <li><a href="#"><i class="icon-s-pinterest"></i></a></li>
            <li><a href="#"><i class="icon-s-linkedin"></i></a></li>
            <li><a href="#"><i class="icon-s-dribbble"></i></a></li>
            <li><a href="#"><i class="icon-s-flickr"></i></a></li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <!-- /.widget -->

    <div class="sidebox widget">
        <h3 class="widget-title">Categories</h3>
        <ul class="circled">
            <li><a href="#">Web Design (21)</a></li>
            <li><a href="#">Photography (19)</a></li>
            <li><a href="#">Graphic Design (16)</a></li>
            <li><a href="#">Manipulation (15)</a></li>
            <li><a href="#">Motion Graphics (12)</a></li>
        </ul>
    </div>
    <!-- /.widget -->

    <div class="sidebox widget">
        <h3 class="widget-title">Tags</h3>
        <ul class="tag-list">
            <li><a href="#" class="btn">Web</a></li>
            <li><a href="#" class="btn">Photography</a></li>
            <li><a href="#" class="btn">Illustation</a></li>
            <li><a href="#" class="btn">Fun</a></li>
            <li><a href="#" class="btn">Blog</a></li>
            <li><a href="#" class="btn">Commercial</a></li>
            <li><a href="#" class="btn">Journal</a></li>
            <li><a href="#" class="btn">Nature</a></li>
            <li><a href="#" class="btn">Still Life</a></li>
        </ul>
    </div>
    <!-- /.widget -->

    <div class="sidebox widget">
        <h3 class="widget-title">Instagram</h3>
        <div class="image-grid col3">
            <div class="items-wrapper">
                <div id="instafeed-widget" class="isotope items"></div>

                <!--/.isotope -->
            </div>
            <!--/.items-wrapper -->
        </div>
        <!--/.image-grid -->
    </div>
    <!-- /.widget -->

</aside>