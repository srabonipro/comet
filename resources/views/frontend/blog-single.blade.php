@extends('frontend.layouts.app')
@section('content')

    @include('frontend.layouts.partials.preloader')
    @include('frontend.layouts.header')
    @include('frontend.layouts.partials.page-header')




    <section>
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <article class="post-single">
                <div class="post-info">
                  <h2><a href="#">{{ $single_post->title }}</a></h2>
                  <h6 class="upper"><span>By</span><a href="#"> Admin</a><span class="dot"></span><span>28 September 2015</span><span class="dot"></span><a href="#" class="post-tag">Startups</a></h6>
                </div>
                <div class="post-media">
                  <img src="images/blog/1.jpg" alt="">
                </div>
                <div class="post-body">
                    {!! htmlspecialchars_decode($single_post->content) !!}
                </div>
              </article>
              <!-- end of article-->
              <div id="comments">
                <h5 class="upper">3 Comments</h5>
                <ul class="comments-list">
                  <li>
                    <div class="comment">
                      <div class="comment-pic">
                        <img src="images/team/1.jpg" alt="" class="img-circle">
                      </div>
                      <div class="comment-text">
                        <h5 class="upper">Jesse Pinkman</h5><span class="comment-date">Posted on 29 September at 10:41</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime distinctio et quam possimus velit dolor sunt nisi neque, harum, dolores rem incidunt, esse ipsa nam facilis eum doloremque numquam veniam.</p><a href="#" class="comment-reply">Reply</a>
                      </div>
                    </div>
                    <ul class="children">
                      <li>
                        <div class="comment">
                          <div class="comment-pic">
                            <img src="images/team/2.jpg" alt="" class="img-circle">
                          </div>
                          <div class="comment-text">
                            <h5 class="upper">Arya Stark</h5><span class="comment-date">Posted on 29 September at 10:41</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque porro quae harum dolorem exercitationem voluptas illum ipsa sed hic, cum corporis autem molestias suscipit, illo laborum, vitae, dicta ullam minus.</p><a href="#"
                            class="comment-reply">Reply</a>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <div class="comment">
                      <div class="comment-pic">
                        <img src="images/team/3.jpg" alt="" class="img-circle">
                      </div>
                      <div class="comment-text">
                        <h5 class="upper">Rust Cohle</h5><span class="comment-date">Posted on 29 September at 10:41</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deleniti sit beatae natus! Beatae velit labore, numquam excepturi, molestias reiciendis, ipsam quas iure distinctio quia, voluptate expedita autem explicabo illo.</p>
                        <a
                        href="#" class="comment-reply">Reply</a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <!-- end of comments-->
              <div id="respond">
                <h5 class="upper">Leave a comment</h5>
                <div class="comment-respond">
                  <form class="comment-form">
                    <div class="form-double">
                      <div class="form-group">
                        <input name="author" type="text" placeholder="Name" class="form-control">
                      </div>
                      <div class="form-group last">
                        <input name="email" type="text" placeholder="Email" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <textarea placeholder="Comment" class="form-control"></textarea>
                    </div>
                    <div class="form-submit text-right">
                      <button type="button" class="btn btn-color-out">Post Comment</button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end of comment form-->
            </div>
            <div class="col-md-3 col-md-offset-1">
              <div class="sidebar hidden-sm hidden-xs">
                <div class="widget">
                  <h6 class="upper">Search blog</h6>
                  <form>
                    <input type="text" placeholder="Search.." class="form-control">
                  </form>
                </div>
                <!-- end of widget        -->
                <div class="widget">
                  <h6 class="upper">Categories</h6>
                  <ul class="nav">
                    <li><a href="#">Fashion</a>
                    </li>
                    <li><a href="#">Tech</a>
                    </li>
                    <li><a href="#">Gaming</a>
                    </li>
                    <li><a href="#">Food</a>
                    </li>
                    <li><a href="#">Lifestyle</a>
                    </li>
                    <li><a href="#">Money</a>
                    </li>
                  </ul>
                </div>
                <!-- end of widget        -->
                <div class="widget">
                  <h6 class="upper">Popular Tags</h6>
                  <div class="tags clearfix"><a href="#">Design</a><a href="#">Fashion</a><a href="#">Startups</a><a href="#">Tech</a><a href="#">Web</a><a href="#">Lifestyle</a>
                  </div>
                </div>
                <!-- end of widget      -->
                <div class="widget">
                  <h6 class="upper">Latest Posts</h6>
                  <ul class="nav">
                    <li><a href="#">Checklists for Startups<i class="ti-arrow-right"></i><span>30 Sep, 2015</span></a>
                    </li>
                    <li><a href="#">The Death of Thought<i class="ti-arrow-right"></i><span>29 Sep, 2015</span></a>
                    </li>
                    <li><a href="#">Give it five minutes<i class="ti-arrow-right"></i><span>24 Sep, 2015</span></a>
                    </li>
                    <li><a href="#">Uber launches in Las Vegas<i class="ti-arrow-right"></i><span>20 Sep, 2015</span></a>
                    </li>
                    <li><a href="#">Fun with Product Hunt<i class="ti-arrow-right"></i><span>16 Sep, 2015</span></a>
                    </li>
                  </ul>
                </div>
                <!-- end of widget          -->
              </div>
              <!-- end of sidebar-->
            </div>
          </div>
          <!-- end of row-->

        </div>
      </section>







    @include('frontend.layouts.footer')
@endsection