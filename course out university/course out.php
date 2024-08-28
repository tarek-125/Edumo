<?php 
include_once ('../privatePhp/conn.php');
if(!isset($_SESSION)){
    session_start();
}

if(isset($_SESSION['username'])) {
    $redirect_page = "../folderhomepageaftersignup/welcomHome.php";
} else {
    $redirect_page = "../folder HomePage/welcomHome.html";
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Course Out University</title>
    <link rel="stylesheet" href="coursestyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="icon" type="image/png" href="book_13171152-removebg-preview.png"/>
</head>
<body>

    <div class="headPage">
        <div id="H1Nav">
        <div id="h1Logo">
            <img src="book_13171152-removebg-preview.png" alt="logo" class="logo">
            <h1>E<span class="hm">dum</span>o <sup>ed</sup></h1>
        </div>
        <nav>
            <a href="<?php echo $redirect_page; ?>">Home</a>
            <a href="../Content/content.php">content</a>
           
        </nav>
       </div>
        
    </div> 

    <div class="container">
        <h2 class="head">Course Out University</h2>
        
    <!--box html-->

        <div class="box-container">
            <div class="box" data-name="b1">
                <img src="html-5_919827.png" alt="">
                <h3>HTML 5</h3>
                <p>Click Here to Learn more</p>
                <button></button>
            </div>

    <!--box css--> 

            <div class="box" data-name="b2">
                <img src="css_919826.png" alt="">
                <h3>CSS 3</h3>
                <p>Click Here to Learn more</p>
                <button></button>
            </div>

    <!--box java script-->

            <div class="box" data-name="b3">
                <img src="java-script_1199124.png" alt="">
                <h3>Java Script</h3>
                <p>Click Here to Learn more</p>
                <button></button>
            </div>

    <!--box c#-->

            <div class="box" data-name="b4">
                <img src="c-sharp_6132221.png" alt="">
                <h3>C #</h3>
                <p>Click Here to Learn more</p>
                <button></button>
            </div>

    <!--box php-->

            <div class="box" data-name="b5">
                <img src="php-document_5813918.png" alt="">
                <h3>PHP</h3>
                <p>Click Here to Learn more</p>
                <button></button>
            </div>

    <!--box java-->

            <div class="box" data-name="b6">
                <img src="java_5968282.png" alt="">
                <h3>JAVA</h3>
                <p>Click Here to Learn more</p>
                <button></button>
            </div>

    <!--box react.js-->

            <div class="box" data-name="b7">
                <img src="react_8719430.png" alt="">
                <h3>React.js</h3>
                <p>Click Here to Learn more</p>
                <button></button>
            </div>

    <!--box flutter-->

            <div class="box" data-name="b8">
                <img src="icons8-flutter-240.png" alt="">
                <h3>Flutter</h3>
                <p>Click Here to Learn more</p>
                <button></button>
            </div>

    <!--box python-->

            <div class="box" data-name="b9">
                <img src="icons8-python-240.png" alt="">
                <h3>Python</h3>
                <p>Click Here to Learn more</p>
                <button></button>
            </div>

    <!--box c++-->

            <div class="box" data-name="b10">
                <img src="icons8-c-240.png" alt="">
                <h3>C ++</h3>
                <p>Click Here to Learn more</p>
                <button></button>
            </div>

    <!--box laravell-->

            <div class="box" data-name="b11">
                <img src="laravell.png" alt="">
                <h3>Laravell</h3>
                <p>Click Here to Learn more</p>
                <button></button>
            </div>

    <!--box network-->

            <div class="box" data-name="b12">
                <img src="icons8-thin-client-96.png" alt="">
                <h3>Network</h3>
                <p>Click Here to Learn more</p>
                <button></button>
            </div>
           

        </div>
    </div>

    <div class="box-preview">
<!--preview de la box html-->

        <div class="preview active" data-target="b1">

                <i class="fas fa-times"></i>
            <img src="html-5_919827.png">
            <h3>HTML(hyper text markey language)</h3>
            <div class="stars-1">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span>(4.7/5)</span>
            </div>
            <div class="information">
            <div class="content">
            <p><i class="fas fa-exclamation-triangle"></i> HTML is a great language to learn<br> for anyone interested in web development or creating websites.</p>
            <div class="conclusion"># Arent't you excited to learn this beatful new language?Come on then let'go 💪#</div>
            <span><br>view course ------></span>
            </div>
           
            <div class="resource">
                
                    <div class="profile-1">
                        <div class="image"><img src="unnamed.jpg" alt="" id="profile"></li></div>
                    <div class="info-image">
                        <ul>
                            <li><label>Name of channel:</label>Abdelrahman Gamal</li>
                            <li><label>language of course:</label>Arabic</li>
                            <button class="youtube"><a href="https://www.youtube.com/watch?v=SMRzDOgtyQA&list=PLknwEmKsW8OtLRQPTLms79499meY2D6ij">view</a></button>
                        </ul>
                    </div>
                    </div>

                   <div class="profile-2">
                    <div class="image"><img src="channels4_profile.jpg" alt="" id="profile"></li></div>
                    <div class="info-image">
                        <ul>
                            <li><label>Name of channel:</label>Simplilearn</li>
                            <li><label>language of course:</label>English</li>
                            <button class="youtube"><a href="https://youtu.be/Y2LIDLmfWho">view</a></button>
                        </ul>
                    </div>
                   </div>
            </div>
            </div>
        </div>
        
        <!--preview de la box du css-->

        <div class="preview " data-target="b2">

            <i class="fas fa-times"></i>
        <img src="css_919826.png">
        <h3>CSS (style,web cote client)</h3>
        <div class="stars-2">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>(4.6/5)</span>
        </div>
        <div class="information">
        <div class="content">
        <p><i class="fas fa-exclamation-triangle"></i> --> Overall, CSS is a powerful and flexible language that can be used to create beautiful<br>
            and effective web pages. It can be a bit difficult to learn for beginners, but once you master the basics,<br>
             you will find that it is a relatively easy language to use.</p>
        <div class="conclusion"># Arent't you excited to learn this beatful new language?Come on then let'go 💪#</div>
        <span><br>view course ------></span>
        </div>
       
        <div class="resource">
            
                <div class="profile-1">
                    <div class="image"><img src="channels4_profile (1).jpg" alt="" id="profile"></li></div>
                <div class="info-image">
                    <ul>
                        <li><label>Name of channel:</label>Elzero Web School</li>
                        <li><label>language of course:</label>Arabic</li>
                        <button class="youtube"><a href="https://youtu.be/X1ulCwyhCVM?list=PLDoPjvoNmBAzjsz06gkzlSrlev53MGIKe">view</a></button>
                    </ul>
                </div>
                </div>

               <div class="profile-2">
                <div class="image"><img src="channels4_profile (2).jpg" alt="" id="profile"></li></div>
                <div class="info-image">
                    <ul>
                        <li><label>Name of channel:</label>Dave Gray</li>
                        <li><label>language of course:</label>English</li>
                        <button class="youtube"><a href="https://youtu.be/0W6qz0-aDaM?list=PL0Zuz27SZ-6Mx9fd9elt80G1bPcySmWit">view</a></button>
                    </ul>
                </div>
               </div>
        </div>
        </div>
    </div>

        <!--preview de la box du java script-->

        <div class="preview " data-target="b3">

            <i class="fas fa-times"></i>
        <img src="java-script_1199124.png">
        <h3> Java Script(web cote client)</h3>
        <div class="stars-3">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>(4.8/5)</span>
        </div>
        <div class="information">
        <div class="content">
        <p><i class="fas fa-exclamation-triangle"></i>--> #JavaScript (often abbreviated as JS) is a high-level, 
            interpreted programming language that along with HTML and CSS,
             forms the core technologies for building the World Wide Web.
              JavaScript enables dynamic and interactive web pages.</p>
        <div class="conclusion"># Arent't you excited to learn this beatful new language?Come on then let'go 💪#</div>
        <span><br>view course ------></span>
        </div>
       
        <div class="resource">
            
                <div class="profile-1">
                    <div class="image"><img src="channels4_profile (1).jpg" alt="" id="profile"></li></div>
                <div class="info-image">
                    <ul>
                        <li><label>Name of channel:</label>Elzero Web School</li>
                        <li><label>language of course:</label>Arabic</li>
                        <button class="youtube"><a href="https://youtu.be/X1ulCwyhCVM?list=PLDoPjvoNmBAzjsz06gkzlSrlev53MGIKe">view</a></button>
                    </ul>
                </div>
                </div>

               <div class="profile-2">
                <div class="image"><img src="unnamed (1).jpg" alt="" id="profile"></li></div>
                <div class="info-image">
                    <ul>
                        <li><label>Name of channel:</label>CoderLipi</li>
                        <li><label>language of course:</label>English</li>
                        <button class="youtube"><a href="https://youtu.be/zBPeGR48_vE?list=PLqkLaKB2GJhWXV9rcarwvn06ISlL_9mPQ">view</a></button>
                    </ul>
                </div>
               </div>
        </div>
        </div>
    </div>

        <!--preview de la box du c#-->

        <div class="preview " data-target="b4">

            <i class="fas fa-times"></i>
        <img src="c-sharp_6132221.png">
        <h3> C#( ASP.NET)</h3>
        <div class="stars-4">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>(4.0/5)</span>
        </div>
        <div class="information">
        <div class="content">
        <p><i class="fas fa-exclamation-triangle"></i>--> C# (pronounced "C-Sharp") is a general-purpose,
            high-level programming language developed by Microsoft.
             It's known for its versatility, object-oriented approach,
             and integration with the .NET Framework.
        <div class="conclusion"># Arent't you excited to learn this beatful new language?Come on then let'go 💪#</div>
        <span><br>view course ------></span>
        </div>
       
        <div class="resource">
            
                <div class="profile-1">
                    <div class="image"><img src="channels4_profile (3).jpg" alt="" id="profile"></li></div>
                <div class="info-image">
                    <ul>
                        <li><label>Name of channel:</label> تكنو U</li>
                        <li><label>language of course:</label>Arabic</li>
                        <button class="youtube"><a href="https://youtu.be/5d1gBI65o60?list=PLhiFu-f80eo8dnOxALGCclPan-QdUa0Ob">view</a></button>
                    </ul>
                </div>
                </div>

               <div class="profile-2">
                <div class="image"><img src="unnamed (2).jpg" alt="" id="profile"></li></div>
                <div class="info-image">
                    <ul>
                        <li><label>Name of channel:</label>kudvenkat</li>
                        <li><label>language of course:</label>English</li>
                        <button class="youtube"><a href="https://youtu.be/4IgC2Q5-yDE?list=PL6n9fhu94yhVkdrusLaQsfERmL_Jh4XmU">view</a></button>
                    </ul>
                </div>
               </div>
        </div>
        </div>
    </div>

        
        <!--preview de la box du php-->

        <div class="preview " data-target="b5">

            <i class="fas fa-times"></i>
        <img src="php-document_5813918.png">
        <h3>php (web cote serveur)</h3>
        <div class="stars-5">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>(4.5/5)</span>
        </div>
        <div class="information">
        <div class="content">
        <p><i class="fas fa-exclamation-triangle"></i>--> PHP (Hypertext Preprocessor) is a widely-used open-source scripting language specifically designed for web development.<br>
            It allows you to create dynamic and interactive web pages.</p>
        <div class="conclusion"># Arent't you excited to learn this beatful new language?Come on then let'go 💪#</div>
        <span><br>view course ------></span>
        </div>
       
        <div class="resource">
            
                <div class="profile-1">
                    <div class="image"><img src="channels4_profile (4).jpg" alt="" id="profile"></li></div>
                <div class="info-image">
                    <ul>
                        <li><label>Name of channel:</label>راكوان للبرمجة - CodeRK</li>
                        <li><label>language of course:</label>Arabic</li>
                        <button class="youtube"><a href="https://youtu.be/yDt8oy4-M9I?list=PLSiLeKadTQ7mfep8d_FXWLnoARZyXJ5ob">view</a></button>
                    </ul>
                </div>
                </div>

               <div class="profile-2">
                <div class="image"><img src="unnamed (3).jpg" alt="" id="profile"></li></div>
                <div class="info-image">
                    <ul>
                        <li><label>Name of channel:</label>Program With Gio</li>
                        <li><label>language of course:</label>English</li>
                        <button class="youtube"><a href="https://youtu.be/sVbEyFZKgqk?list=PLr3d3QYzkw2xabQRUpcZ_IBk9W50M9pe-">view</a></button>
                    </ul>
                </div>
               </div>
        </div>
        </div>
    </div>
       
        <!--preview de la box du java-->

        <div class="preview " data-target="b6">

            <i class="fas fa-times"></i>
        <img src="java_5968282.png ">
        <h3>Java(programming language)</h3>
        <div class="stars-6">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>(4.7/5)</span>
        </div>
        <div class="information">
        <div class="content">
        <p><i class="fas fa-exclamation-triangle"></i> --> Java, a high-level, class-based, object-oriented programming language,
            is widely used across various domains. Here's a breakdown of its key characteristics:</p>
        <div class="conclusion"># Arent't you excited to learn this beatful new language?Come on then let'go 💪#</div>
        <span><br>view course ------></span>
        </div>
       
        <div class="resource">
            
                <div class="profile-1">
                    <div class="image"><img src="unnamed (4).jpg" alt="" id="profile"></li></div>
                <div class="info-image">
                    <ul>
                        <li><label>Name of channel:</label>محمد الدسوقى </li>
                        <li><label>language of course:</label>Arabic</li>
                        <button class="youtube"><a href="https://youtu.be/FbviMTJ_vP8?list=PL1DUmTEdeA6K7rdxKiWJq6JIxTvHalY8f">view</a></button>
                    </ul>
                </div>
                </div>

               <div class="profile-2">
                <div class="image"><img src="unnamed (5).jpg " alt="" id="profile"></li></div>
                <div class="info-image">
                    <ul>
                        <li><label>Name of channel:</label>Bro Code</li>
                        <li><label>language of course:</label>English</li>
                        <button class="youtube"><a href="https://youtu.be/xk4_1vDrzzo">view</a></button>
                    </ul>
                </div>
               </div>
        </div>
        </div>
    </div>
        <!--preview de la box du react.js-->

        <div class="preview " data-target="b7">

            <i class="fas fa-times"></i>
        <img src="react_8719430.png ">
        <h3>React.js(Front End Framework)</h3>
        <div class="stars-7">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>(4.8/5)</span>
        </div>
        <div class="information">
        <div class="content">
        <p><i class="fas fa-exclamation-triangle"></i> -->  React.js, also known as React or ReactJS, is a free and open-source JavaScript<br>
            library for building user interfaces (UI) specifically for single-page applications (SPAs)</p>
        <div class="conclusion"># Arent't you excited to learn this beatful new language?Come on then let'go 💪#</div>
        <span><br>view course ------></span>
        </div>
       
        <div class="resource">
            
                <div class="profile-1">
                    <div class="image"><img src="unnamed (6).jpg" alt="" id="profile"></li></div>
                <div class="info-image">
                    <ul>
                        <li><label>Name of channel:</label>Unique Coderz Academy</li>
                        <li><label>language of course:</label>Arabic</li>
                        <button class="youtube"><a href="https://youtu.be/LgB3j2y1b-4?list=PLtFbQRDJ11kEjXWZmwkOV-vfXmrEEsuEW">view</a></button>
                    </ul>
                </div>
                </div>

               <div class="profile-2">
                <div class="image"><img src="unnamed (5).jpg " alt="" id="profile"></li></div>
                <div class="info-image">
                    <ul>
                        <li><label>Name of channel:</label>Bro Code</li>
                        <li><label>language of course:</label>English</li>
                        <button class="youtube"><a href="https://youtu.be/CgkZ7MvWUAA">view</a></button>
                    </ul>
                </div>
               </div>
        </div>
        </div>
    </div>

        <!--preview de la box du  Flutter-->

        <div class="preview " data-target="b8">

            <i class="fas fa-times"></i>
        <img src="icons8-flutter-240.png ">
        <h3>Flutter --> mobile app(android,ios)</h3>
        <div class="stars-8">
            <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <span class="special-2">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                </span>
        </div>
        <div class="information">
        <div class="content">
        <p><i class="fas fa-exclamation-triangle"></i> --> Flutter is an open-source UI software development kit created by Google.
            It allows you to build beautiful, native-compiled applications for mobile, web, desktop, and
            embedded devices from a single codebase. Here's a breakdown of Flutter's key features:</p>
        <div class="conclusion"># Arent't you excited to learn this beatful new language?Come on then let'go 💪#</div>
        <span><br>view course ------></span>
        </div>
       
        <div class="resource">
            
                <div class="profile-1">
                    <div class="image"><img src="channels4_profile (6).jpg" alt="" id="profile"></li></div>
                <div class="info-image">
                    <ul>
                        <li><label>Name of channel:</label>Wael abo hamza</li>
                        <li><label>language of course:</label>Arabic</li>
                        <button class="youtube"><a href="https://youtu.be/6bSP4vazmyw?list=PL93xoMrxRJIvtIXjAiX15wcyNv-LOWZa9">view</a></button>
                    </ul>
                </div>
                </div>

               <div class="profile-2">
                <div class="image"><img src="unnamed (7).jpg " alt="" id="profile"></li></div>
                <div class="info-image">
                    <ul>
                        <li><label>Name of channel:</label>freeCodeCamp.org</li>
                        <li><label>language of course:</label>English</li>
                        <button class="youtube"><a href="https://youtu.be/VPvVD8t02U8">view</a></button>
                    </ul>
                </div>
               </div>
        </div>
        </div>
    </div>

        <!--preview de la box du python -->

        <div class="preview " data-target="b9">

            <i class="fas fa-times"></i>
        <img src="icons8-python-240.png ">
        <h3>python</h3>
        <div class="stars-9">
            <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <span class="special-3">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                </span>
        </div>
        <div class="information">
        <div class="content">
        <p><i class="fas fa-exclamation-triangle"></i> --> Python is a high-level, general-purpose programming language.<br>
            It is known for its clear syntax, readability, and versatility.</p>
        <div class="conclusion"># Arent't you excited to learn this beatful new language?Come on then let'go 💪#</div>
        <span><br>view course ------></span>
        </div>
       
        <div class="resource">
            
                <div class="profile-1">
                    <div class="image"><img src="unnamed (8).jpg" alt="" id="profile"></li></div>
                <div class="info-image">
                    <ul>
                        <li><label>Name of channel:</label>Codezilla</li>
                        <li><label>language of course:</label>Arabic</li>
                        <button class="youtube"><a href="https://youtu.be/h3VCQjyaLws?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ">view</a></button>
                    </ul>
                </div>
                </div>

               <div class="profile-2">
                <div class="image"><img src="unnamed (7).jpg " alt="" id="profile"></li></div>
                <div class="info-image">
                    <ul>
                        <li><label>Name of channel:</label>freeCodeCamp.org</li>
                        <li><label>language of course:</label>English</li>
                        <button class="youtube"><a href="https://youtu.be/8DvywoWv6fI">view</a></button>
                    </ul>
                </div>
               </div>
        </div>
        </div>
    </div>

          <!--preview de la box du c++ -->

          <div class="preview " data-target="b10">

            <i class="fas fa-times"></i>
        <img src="icons8-c-240.png ">
        <h3>c++</h3>
        <div class="stars-10">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <span class="special-4">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            </span>
        </div>
        <div class="information">
        <div class="content">
        <p><i class="fas fa-exclamation-triangle"></i> --> C++ is a powerful and versatile programming language known for its balance<br>
            between high-level abstraction and low-level control.</p>
        <div class="conclusion"># Arent't you excited to learn this beatful new language?Come on then let'go 💪#</div>
        <span><br>view course ------></span>
        </div>
       
        <div class="resource">
            
                <div class="profile-1">
                    <div class="image"><img src="channels4_profile (1).jpg" alt="" id="profile"></li></div>
                <div class="info-image">
                    <ul>
                        <li><label>Name of channel:</label>Elzero Web School</li>
                        <li><label>language of course:</label>Arabic</li>
                        <button class="youtube"><a href="https://youtu.be/XDuWyYxksXU?list=PLDoPjvoNmBAwy-rS6WKudwVeb_x63EzgS">view</a></button>
                    </ul>
                </div>
                </div>

               <div class="profile-2">
                <div class="image"><img src="unnamed (7).jpg " alt="" id="profile"></li></div>
                <div class="info-image">
                    <ul>
                        <li><label>Name of channel:</label>Bro Code</li>
                        <li><label>language of course:</label>English</li>
                        <button class="youtube"><a href="https://youtu.be/-TkoO8Z07hI">view</a></button>
                    </ul>
                </div>
               </div>
        </div>
        </div>
    </div>

        <!--preview de la box du laravell -->

        <div class="preview " data-target="b11">

            <i class="fas fa-times"></i>
        <img src="laravell.png ">
        <h3>Laravell (Framework To Php language)</h3>
        <div class="stars-11">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <div class="information">
        <div class="content">
        <p><i class="fas fa-exclamation-triangle"></i>-->Laravel is a free, open-source PHP web framework designed <br>
            for the rapid development of modern web applications.</p>
        <div class="conclusion"># Arent't you excited to learn this beatful new language?Come on then let'go 💪#</div>
        <span><br>view course ------></span>
        </div>
       
        <div class="resource">
            
                <div class="profile-1">
                    <div class="image"><img src="unnamed (8).jpg" alt="" id="profile"></li></div>
                <div class="info-image">
                    <ul>
                        <li><label>Name of channel:</label>Codezilla Academy</li>
                        <li><label>language of course:</label>Arabic</li>
                        <button class="youtube"><a href="https://youtu.be/Q4z6U23cTVc">view</a></button>
                    </ul>
                </div>
                </div>

               <div class="profile-2">
                <div class="image"><img src="unnamed (9).jpg " alt="" id="profile"></li></div>
                <div class="info-image">
                    <ul>
                        <li><label>Name of channel:</label>ProgrammingKnowledge</li>
                        <li><label>language of course:</label>English</li>
                        <button class="youtube"><a href="https://youtu.be/OB8jBvu8N34?list=PLS1QulWo1RIbRHq1qqw3Jc7e8qlB6cWfi">view</a></button>
                    </ul>
                </div>
               </div>
        </div>
        </div>
    </div>


        <!--preview de la box du network -->



        <div class="preview " data-target="b12">

            <i class="fas fa-times"></i>
        <img src="icons8-thin-client-96.png ">
        <h3>Network (basics)</h3>
        <div class="stars-12">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <span class="special-5">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            </span>
        </div>
        <div class="information">
        <div class="content">
        <p><i class="fas fa-exclamation-triangle"></i>-->A network is a collection of interconnected computing devices
            that can communicate and share resources with each other.<br>
            These devices can be physically connected using cables or wirelessly connected through radio waves or other signals.</p>
        <div class="conclusion"># Arent't you excited to learn this beatful new language?Come on then let'go 💪#</div>
        <span><br>view course ------></span>
        </div>
       
        <div class="resource">
            
                <div class="profile-1">
                    <div class="image"><img src="channels4_profile (8).jpg" alt="" id="profile"></li></div>
                <div class="info-image">
                    <ul>
                        <li><label>Name of channel:</label>IT Dose</li>
                        <li><label>language of course:</label>Arabic</li>
                        <button class="youtube"><a href="https://youtu.be/q6tUCEUqxTQ?list=PL8s4OGp0649_e_Wbz5MlBgW5rBW-9hD0c">view</a></button>
                    </ul>
                </div>
                </div>

               <div class="profile-2">
                <div class="image"><img src="channels4_profile (7).jpg" alt="" id="profile"></li></div>
                <div class="info-image">
                    <ul>
                        <li><label>Name of channel:</label>Neso Academy</li>
                        <li><label>language of course:</label>English</li>
                        <button class="youtube"><a href="https://youtu.be/VwN91x5i25g?list=PLBlnK6fEyqRgMCUAG0XRw78UA8qnv6jEx">view</a></button>
                    </ul>
                </div>
               </div>
        </div>
        </div>
    </div>


        
    <!--fin du preview-->

   
    






























    <script src="courseout.js" defer></script>
</body>


</html>