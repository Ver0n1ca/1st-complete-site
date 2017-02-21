@extends('layouts.app')

@section('content')
<!-- home begin  -->
<h1 class="text-center main-heading"><span class="color-gray">Yellow</span></h1>
<h1 class="text-center main-heading"><span class="color-high">Sub</span><span class="color-gray">marine</span></h1><br>
    <div class="col-md-10 opacity-7 col-md-offset-1 col-xs-12 col-sm-12 padding min-height" style="white-space: normal;box-shadow: #777 0px 0px 20px" id="home">
        
        <p class="text-center text-capitalize"><span class="big">This</span> is a personal website of Vivi. Designed to share my stories, experiences and thoughts with others. Wish you have a good time visiting this little website:)</p>
        <h1 class="in-main-heading color-high text-shadow-gray text-center">Related links <span class="glyphicon glyphicon-link small" aria-hidden="true"></span></h1><br>
        <a href="http://blog.herstorybegins.com" style="padding-left: 43%;"><img src="images/logo.png"></a>
        <a href="http://www.herstorybegins.com" style="padding-left: 2%;"><img src="images/logo2.png"></a>
        <br><br><br><br><br>
    </div>
<!-- home end -->

<!--about begin  -->
    <div class="col-md-10 opacity-7 col-md-offset-1 col-xs-12 col-sm-12 padding min-height" id="about">
        <h1 class="text-center main-heading"><span class="color-high">About</span> me</h1>
        <p class="text-center"><span class="big">A</span> student in Beijing. Set up this website just for fun.</p>
        <h1 class="color-high main-heading text-center bit-small">-My <span class="color-dark">skill</span>s-</h1><br><br>
                            <div class="row">
                            
                                <article class="col-md-4 col-md-offset-2">
                                    <h3 class="color-dark bold"><span class="glyphicon glyphicon-pencil skill" aria-hidden="true"></span> Painting</h3>
                                    <p class="padding-off">Painting is my favorite hobby except reading. I like oil painting and watercolour.</p>
                                </article>
                                
                                
                                <article class="col-md-4">
                                    <h3 class="color-dark bold"><span class="glyphicon glyphicon-console skill" aria-hidden="true"></span> Coding</h3>
                                    <p class="padding-off">Sometimes it is fun to write some codes. I can master C++ and also know (a little) about PHP, HTML, CSS, SQL and Python.</p>
                                </article>
                                
                            </div>
                            
                            <div class="row">
                            
                                <article class="col-md-4 col-md-offset-2">
                                    <h3 class="color-dark bold"><span class="glyphicon glyphicon-wrench skill" aria-hidden="true"></span> Security</h3>
                                    <p class="padding-off">My interest in information security developed when I participated in an competition of security. I learned about web security during and after the competition.</p>
                                </article>
                                
                                
                                <article class="col-md-4">
                                    <h3 class="color-dark bold"><span class="glyphicon glyphicon-plus skill" aria-hidden="true"></span> More</h3>
                                    <p class="padding-off">More skills coming soon :)</p>
                                </article>
                                
                            </div>
                            <br><br>
    </div>
    <!-- about end -->

    <!-- blog begin -->
    <div class="col-md-10 opacity-7 col-md-offset-1 col-xs-12 col-sm-12 padding min-height" id="blog">
        <h1 class="text-center main-heading"><span class="color-high">Blo</span>g</h1>
        <p class="text-center"><span class="big">That's</span> where I share my stories and thoughts.</p>
        <!-- Single button -->
        <center>
            <div class="btn-group">
                <button type="button" class="btn btn-lg btn-success dropdown-toggle big text-center opacity-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Vivit my Blog <span class="caret"></span>
                </button>
                <ul class="dropdown-menu big" id="menu">
                    <li><a href="/blog">Topic I</a></li>
                    <li><a href="/blog">Topic II</a></li>
                    <li><a href="/blog">Topic III</a></li>
                </ul>
            </div>
        </center>
        <br><br><br><br>
    </div>
    <!-- blog end -->

    <!-- contact begin -->
    <div class="col-md-10 opacity-7 col-md-offset-1 col-xs-12 col-sm-12 padding min-height" id="contact">
        <h1 class="text-center main-heading"><span class="color-high">Cont</span>act</h1>
        <p class="text-center"><span class="big">Glad</span> to be in touch.</p>
        <div class="contactform input-group input-group-lg col-md-4 col-md-offset-4">
        
            <div id="contactdiv"></div><br>
            <form method="post" enctype="multipart/form-data" action="contact" id="contactForm" name="myform">  
                <input type="hidden" name="_token" value="{{ csrf_token() }}">      
                <article class="input-group">
                    <span class="input-group-addon glyphicon glyphicon-user" id="sizing-addon1"></span>
                    <input type="text" required id="name" name="name" placeholder="Username" class="form-control" aria-describedby="sizing-addon1">
                </article>
                <br>
                <article class="input-group">
                    <span class="input-group-addon glyphicon glyphicon-envelope" id="sizing-addon2"></span>
                    <input type="text" class="form-control" placeholder="Email" aria-describedby="sizing-addon2" required id="email" name="email">
                </article>
                <br>
                <article class="input-group">
                    <span class="input-group-addon glyphicon glyphicon-comment" id="sizing-addon3"></span>
                    <textarea id="msg" name="msg" class="form-control" placeholder="Message" aria-describedby="sizing-addon3" required></textarea>
                </article>
                <br>
                <center>
                    <button id="submit" name="submit" type="submit" class="btn btn-large btn btn-success">Send message</button>
                </center>
                          
                              
            </form>
        
        
        </div>
    </div>
@endsection
