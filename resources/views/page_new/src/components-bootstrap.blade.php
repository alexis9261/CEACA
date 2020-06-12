<!doctype html>
<html lang="en">
  <head>
    @include("page_new.src.partials.head")
  </head>
  <body>

    <!-- MODALS
    ================================================== -->
    @include("page_new.src.partials.navbar")


    <!-- NAVBAR
    ================================================= -->
    <!-- @@include("partials/navbar.html", {
      "togglable": false,
      "type": "light",
      "page": "components-bootstrap.html",
      "button": {
        "url": "https://themes.getbootstrap.com/product/incline-landing-page-set/",
        "text": "Purchase now"
      }
    }) -->

    <!-- BREADCRUMB
    ================================================== -->
    <nav class="breadcrumb">
      <div class="container">
        <div class="row align-items-center">
          <div class="col">
            
            <!-- Heading -->
            <h5 class="breadcrumb-heading">
              Bootstrap components
            </h5>

          </div>
          <div class="col-auto">

            <!-- Breadcrumb -->
            <span class="breadcrumb-item">
              <a href="index.html">Home</a>
            </span>
            <span class="breadcrumb-item active">
              Bootstrap components
            </span>
          
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </nav>
    
    <!-- CONTENT
    ================================================== -->
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            
            <!-- Title -->
            <h6 class="title">
              Navigation
            </h6>

            <!-- List -->
            <ul class="sidenav list-unstyled mb-5 mb-md-0">
              <li class="text-xs text-uppercase mb-2">
                <a href="#alert">Alerts</a>
              </li>
              <li class="text-xs text-uppercase mb-2">
                <a href="#badge">Badge</a>
              </li>
              <li class="text-xs text-uppercase mb-2">
                <a href="#blockquote">Blockquote</a>
              </li>
              <li class="text-xs text-uppercase mb-2">
                <a href="#breadcrumb">Breadcrumb</a>
              </li>
              <li class="text-xs text-uppercase mb-2">
                <a href="#button">Buttons</a>
              </li>
              <li class="text-xs text-uppercase mb-2">
                <a href="#card">Card</a>
              </li>
              <li class="text-xs text-uppercase mb-2">
                <a href="#dropdown">Dropdowns</a>
              </li>
              <li class="text-xs text-uppercase mb-2">
                <a href="#form">Forms</a>
              </li>
              <li class="text-xs text-uppercase mb-2">
                <a href="#list-group">List group</a>
              </li>
              <li class="text-xs text-uppercase mb-2">
                <a href="#modal">Modal</a>
              </li>
              <li class="text-xs text-uppercase mb-2">
                <a href="#navbar">Navbar</a>
              </li>
              <li class="text-xs text-uppercase mb-2">
                <a href="#nav">Navs</a>
              </li>
              <li class="text-xs text-uppercase mb-2">
                <a href="#pagination">Pagination</a>
              </li>
              <li class="text-xs text-uppercase">
                <a href="#progress-bar">Progress</a>
              </li>
            </ul>

          </div>
          <div class="col-md-10">

            <p class="lead mb-5">
              Incline is built with Bootstrap 4, so you are free to use any of the original components that go with it.
            </p>

            <!-- ALERT -->
            <div class="pb-5 mb-5 border-bottom" id="alert">
              
              <!-- Heading -->
              <h3 class="mb-4">
                Alerts
              </h3>

              <!-- Content -->
              <div class="alert alert-primary mb-3">
                Primary alert
              </div>
              <div class="alert alert-success mb-3">
                Success alert
              </div>
              <div class="alert alert-danger mb-3">
                Danger alert
              </div>
              <div class="alert alert-warning mb-3">
                Warning alert
              </div>
              <div class="alert alert-info mb-3">
                Info alert
              </div>

            </div>

            <!-- BADGE -->
            <div class="pb-5 mb-5 border-bottom" id="badge">
              
              <!-- Heading -->
              <h3 class="mb-4">
                Badge
              </h3>

              <!-- Content -->
              <h1>
                Example heading <span class="badge badge-primary">New</span>
              </h1>
              <h2>
                Example heading <span class="badge badge-danger">New</span>
              </h2>
              <h3>
                Example heading <span class="badge badge-success">New</span>
              </h3>
              <h4>
                Example heading <span class="badge badge-info">New</span>
              </h4>
              <h5>
                Example heading <span class="badge badge-secondary">New</span>
              </h5>
              <h6>
                Example heading <span class="badge badge-secondary">New</span>
              </h6>

            </div>

            <!-- BLOCKQUOTE -->
            <div class="pb-5 mb-5 border-bottom" id="blockquote">
              
              <!-- Heading -->
              <h3 class="mb-4">
                Blockquote
              </h3>

              <!-- Subheading -->
              <p class="text-muted mb-5">
                The blockquote component has been extended with a footer image to add an author's photo.
              </p>

              <!-- Content -->
              <blockquote class="blockquote mb-4">
                <p>
                  I cannot find any other courier company that can match iLand's prices and customer service!
                </p>
                <footer class="text-muted">
                  <div class="avatar">
                    <img src="assets/img/16.jpg" alt="..." class="img-cover rounded-circle">
                  </div> John Doe, New York
                </footer>
              </blockquote>

              <!-- Code -->
              <code class="code html bg-dark">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;blockquote&nbsp;class=&quot;blockquote&nbsp;mb-4&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I&nbsp;cannot&nbsp;find&nbsp;any&nbsp;other&nbsp;courier&nbsp;company&nbsp;that&nbsp;can&nbsp;match&nbsp;iLand's&nbsp;prices&nbsp;and&nbsp;customer&nbsp;service!<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/p&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;footer&nbsp;class=&quot;text-muted&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;avatar&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img&nbsp;src=&quot;assets/img/16.jpg&quot;&nbsp;alt=&quot;...&quot;&nbsp;class=&quot;img-cover&nbsp;rounded-circle&quot;&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;&nbsp;John&nbsp;Doe,&nbsp;New&nbsp;York<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/footer&gt;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/blockquote&gt;
              </code>

            </div>

            <!-- BREADCRUMB -->
            <div class="pb-5 mb-5 border-bottom" id="breadcrumb">
              
              <!-- Heading -->
              <h3 class="mb-4">
                Breadcrumb
              </h3>

              <!-- Content -->
              <p class="text-muted mb-5">
                The breadcrumb component has been modified to fit the area right under the navbar.
              </p>

              <!-- Content -->
              <nav class="breadcrumb mt-0 mb-4">
                <div class="container">
                  <div class="row align-items-center">
                    <div class="col">
                      
                      <!-- Heading -->
                      <h5 class="breadcrumb-heading">
                        About
                      </h5>

                    </div>
                    <div class="col-auto">

                      <!-- Breadcrumb -->
                      <span class="breadcrumb-item">
                        <a href="index.html">Home</a>
                      </span>
                      <span class="breadcrumb-item active">
                        About
                      </span>
                    
                    </div>
                  </div> <!-- / .row -->
                </div> <!-- / .container -->
              </nav>

              <!-- Code -->
              <code class="code html bg-dark">
                &lt;nav class=&quot;breadcrumb&quot;&gt;<br />&nbsp;&nbsp;&lt;div class=&quot;container&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;row align-items-center&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;col&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;!-- Heading --&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h5 class=&quot;breadcrumb-heading&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h5&gt;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;col-auto&quot;&gt;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;!-- Breadcrumb --&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span class=&quot;breadcrumb-item&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href=&quot;index.html&quot;&gt;Home&lt;/a&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/span&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span class=&quot;breadcrumb-item active&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/span&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt; &lt;!-- / .row --&gt;<br />&nbsp;&nbsp;&lt;/div&gt; &lt;!-- / .container --&gt;<br />&lt;/nav&gt;
              </code>

            </div>

            <!-- BUTTON -->
            <div class="pb-5 mb-5 border-bottom" id="button">
              
              <!-- Heading -->
              <h3 class="mb-4">
                Buttons
              </h3>

              <!-- Subheading -->
              <p class="text-muted">
                Outline and link buttons have been used throughout the theme.
              </p>

              <!-- Options -->
              <ul class="mb-5">
                <li>
                  <code>.btn-circle</code> - additional class to make the button circle. Works best with icons.
                </li>
              </ul>

              <!-- Content -->
              <p>

                <!-- Button: Circle -->
                <a href="#" class="btn btn-lg btn-circle btn-outline-primary mb-2">
                  <i class="fas fa-pause"></i>
                </a>

                <!-- Button: Large -->
                <a href="#" class="btn btn-lg btn-outline-primary mb-2">
                  Button large
                </a>
                
                <!-- Button -->
                <a href="#" class="btn btn-outline-primary mb-2">
                  Button normal
                </a>
                
                <!-- Button -->
                <a href="#" class="btn btn-sm btn-outline-primary mb-2">
                  Button small
                </a>

                <a href="#" class="btn btn-link mb-2">
                  Button link
                </a>
              </p>

            </div>

            <!-- CARD -->
            <div class="pb-5 mb-5 border-bottom" id="card">
              
              <!-- Heading -->
              <h3 class="mb-4">
                Card
              </h3>

              <!-- Content -->
              <div class="row mb-4">
                <div class="col-md-6">
                  
                  <!-- Card -->
                  <div class="card border-0 mb-3 mb-md-0">
                    
                    <!-- Image -->
                    <img src="assets/img/12.jpg" alt="..." class="card-img">

                    <!-- Body -->
                    <div class="card-body">
                      
                      <!-- Title -->
                      <h4 class="card-title">
                        Card title
                      </h4>

                      <!-- Text -->
                      <p class="card-text text-muted">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum blanditiis cumque dolore vel velit temporibus eligendi aspernatur minus.
                      </p>

                      <!-- Button -->
                      <a href="#" class="btn btn-outline-primary">
                        Primary button
                      </a>

                    </div>

                  </div>

                </div>
                <div class="col-md-6">
                  
                  <!-- Card -->
                  <div class="card border-0">
                    
                    <!-- Image -->
                    <img src="assets/img/13.jpg" alt="..." class="card-img">

                    <!-- Body -->
                    <div class="card-body">
                      
                      <!-- Title -->
                      <h4 class="card-title">
                        Card title
                      </h4>

                      <!-- Text -->
                      <p class="card-text text-muted">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum blanditiis cumque dolore vel velit temporibus eligendi aspernatur minus.
                      </p>

                      <!-- Button -->
                      <a href="#" class="btn btn-outline-primary">
                        Primary button
                      </a>

                    </div>

                  </div>

                </div>
              </div> <!-- / .row -->

              <!-- Heading -->
              <h4 class="mb-4">
                Card: Small
              </h4>

              <!-- Subheading -->
              <p class="text-muted mb-5">
                Reduces card vertical and horizontal spacings.
              </p>

              <!-- Content -->
              <div class="row mb-4">
                <div class="col-md-4">
                  
                  <!-- Card -->
                  <div class="card card-sm border-0 mb-3 mb-md-0">
                    
                    <!-- Image -->
                    <img src="assets/img/16.jpg" alt="..." class="card-img-top">

                    <!-- Body -->
                    <div class="card-body">
                      
                      <!-- Title -->
                      <h5 class="card-title">
                        Richard Roe, <small class="text-muted">Creative Director</small>
                      </h5>

                      <!-- Text -->
                      <ul class="card-text list-inline list-unstyled">
                        <li class="list-inline-item">
                          <a href="#">
                            <i class="fab fa-github"></i>
                          </a>
                        </li>
                        <li class="list-inline-item ml-3">
                          <a href="#">
                            <i class="fab fa-twitter"></i>
                          </a>
                        </li>
                        <li class="list-inline-item ml-3">
                          <a href="#">
                            <i class="fab fa-instagram"></i>
                          </a>
                        </li>
                      </ul>

                    </div>

                  </div> <!-- / .card -->

                </div>
                <div class="col-md-4">
                  
                  <!-- Card -->
                  <div class="card card-sm border-0 mb-3 mb-md-0">
                    
                    <!-- Image -->
                    <img src="assets/img/17.jpg" alt="..." class="card-img-top">

                    <!-- Body -->
                    <div class="card-body">
                      
                      <!-- Title -->
                      <h5 class="card-title">
                        Ann Doe, <small class="text-muted">Designer</small>
                      </h5>

                      <!-- Text -->
                      <ul class="card-text list-inline list-unstyled">
                        <li class="list-inline-item">
                          <a href="#">
                            <i class="fab fa-github"></i>
                          </a>
                        </li>
                        <li class="list-inline-item ml-3">
                          <a href="#">
                            <i class="fab fa-twitter"></i>
                          </a>
                        </li>
                        <li class="list-inline-item ml-3">
                          <a href="#">
                            <i class="fab fa-instagram"></i>
                          </a>
                        </li>
                      </ul>

                    </div>

                  </div> <!-- / .card -->

                </div>
                <div class="col-md-4">
                  
                  <!-- Card -->
                  <div class="card card-sm border-0 mb-3 mb-md-0">
                    
                    <!-- Image -->
                    <img src="assets/img/18.jpg" alt="..." class="card-img-top">

                    <!-- Body -->
                    <div class="card-body">
                      
                      <!-- Title -->
                      <h5 class="card-title">
                        Jane Doe, <small class="text-muted">Copywriter</small>
                      </h5>

                      <!-- Text -->
                      <ul class="card-text list-inline list-unstyled">
                        <li class="list-inline-item">
                          <a href="#">
                            <i class="fab fa-github"></i>
                          </a>
                        </li>
                        <li class="list-inline-item ml-3">
                          <a href="#">
                            <i class="fab fa-twitter"></i>
                          </a>
                        </li>
                        <li class="list-inline-item ml-3">
                          <a href="#">
                            <i class="fab fa-instagram"></i>
                          </a>
                        </li>
                      </ul>

                    </div>

                  </div> <!-- / .card -->

                </div>
              </div> <!-- / .row -->

              <!-- Code -->
              <code class="code html bg-dark mb-5">
                &lt;div class=&quot;card card-sm&quot;&gt;<br>&nbsp;&nbsp;<br>&nbsp;&nbsp;&lt;!-- Body --&gt;<br>&nbsp;&nbsp;&lt;div class=&quot;card-body&quot;&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;...<br>&nbsp;&nbsp;&lt;/div&gt;<br><br>&lt;/div&gt;
              </code>

              <!-- Heading -->
              <h4 class="mb-4">
                Card: Large
              </h4>

              <!-- Subheading -->
              <p class="text-muted mb-5">
                Increases card vertical and horizontal spacings.
              </p>

              <!-- Content -->
              <div class="row mb-4">
                <div class="col-lg-6">
                  
                  <!-- Card -->
                  <div class="card card-lg mb-3 mb-lg-0">
                    
                    <!-- Body -->
                    <div class="card-body text-center">

                      <!-- Title -->
                      <h4 class="card-title">
                        Bronze plan
                      </h4>

                      <!-- Price -->
                      <h3 class="card-title font-weight-normal text-primary">
                        $49.99 <small>/ mo</small>
                      </h3>

                      <!-- Text -->
                      <ul class="card-text list-iconed">
                        <li class="list-iconed-item">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit
                        </li>
                        <li class="list-iconed-item">
                          Aliquam quis perferendis, quas fugiat. Iste quisquam sit
                        </li>
                        <li class="list-iconed-item">
                          Cum ab error sit totam nemo
                        </li>
                      </ul>

                      <!-- Button -->
                      <a href="#" class="btn btn-outline-primary">
                        Get it now
                      </a>

                    </div>
                    
                  </div> <!-- / .card -->

                </div>
                <div class="col-lg-6">
                  
                  <!-- Card -->
                  <div class="card card-lg mb-3 mb-lg-0">
                    
                    <!-- Body -->
                    <div class="card-body text-center">

                      <!-- Title -->
                      <h4 class="card-title">
                        Silver plan
                      </h4>

                      <!-- Price -->
                      <h3 class="card-title font-weight-normal text-primary">
                        $79.99 <small>/ mo</small>
                      </h3>

                      <!-- Text -->
                      <ul class="card-text list-iconed">
                        <li class="list-iconed-item">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit
                        </li>
                        <li class="list-iconed-item">
                          Aliquam quis perferendis, quas fugiat. Iste quisquam sit
                        </li>
                        <li class="list-iconed-item">
                          Cum ab error sit totam nemo
                        </li>
                      </ul>

                      <!-- Button -->
                      <a href="#" class="btn btn-outline-primary">
                        Get it now
                      </a>

                    </div>
                    
                  </div> <!-- / .card -->

                </div>
              </div> <!-- / .row -->

              <!-- Code -->
              <code class="code html bg-dark mb-5">
                &lt;div class=&quot;card card-lg&quot;&gt;<br>&nbsp;&nbsp;<br>&nbsp;&nbsp;&lt;!-- Body --&gt;<br>&nbsp;&nbsp;&lt;div class=&quot;card-body&quot;&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;...<br>&nbsp;&nbsp;&lt;/div&gt;<br><br>&lt;/div&gt;
              </code>

              <!-- Heading -->
              <h4 class="mb-4">
                Card: Tall
              </h4>

              <!-- Subheading -->
              <p class="text-muted mb-5">
                Adds increased padding at the top of the card.  Add <code>.card-standout</code> to increase zoom it in.
              </p>

              <!-- Content -->
              <div class="row no-gutters mb-5">
                <div class="col-md-4">
                  
                  <!-- Card -->
                  <div class="card card-tall border-0 mb-3 md-md-0">
                    
                    <!-- Image -->
                    <div class="bg-cover" style="background-image: url(assets/img/21.jpg)"></div>

                    <!-- Overlay -->
                    <div class="bg-overlay"></div>

                    <!-- Body -->
                    <div class="card-body">

                      <!-- Icon -->
                      <div class="card-icon text-primary">
                        <span class="icon icon-businessman"></span>
                      </div>
                    
                      <!-- Title -->
                      <h4 class="card-title text-white">
                        Business courier service
                      </h4>

                      <!-- Text -->
                      <p class="card-text text-white text-muted mb-0">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit a amet dicta eum quae reiciendis.
                      </p>

                    </div>

                  </div> <!-- / .card -->

                </div>
                <div class="col-md-4">
                  
                  <!-- Card -->
                  <div class="card card-tall card-standout shadow border-0 mb-3 md-md-0">
                    
                    <!-- Image -->
                    <div class="bg-cover" style="background-image: url(assets/img/22.jpg)"></div>

                    <!-- Overlay -->
                    <div class="bg-overlay"></div>

                    <!-- Body -->
                    <div class="card-body">

                      <!-- Icon -->
                      <div class="card-icon text-primary">
                        <span class="icon icon-case"></span>
                      </div>
                    
                      <!-- Title -->
                      <h4 class="card-title text-white">
                        Legal courier service
                      </h4>

                      <!-- Text -->
                      <p class="card-text text-white text-muted mb-0">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit a amet dicta eum quae reiciendis.
                      </p>

                    </div>

                  </div> <!-- / .card -->

                </div>
                <div class="col-md-4">
                  
                  <!-- Card -->
                  <div class="card card-tall border-0 mb-3 md-md-0">
                    
                    <!-- Image -->
                    <div class="bg-cover" style="background-image: url(assets/img/23.jpg)"></div>

                    <!-- Overlay -->
                    <div class="bg-overlay"></div>

                    <!-- Body -->
                    <div class="card-body">

                      <!-- Icon -->
                      <div class="card-icon text-primary">
                        <span class="icon icon-truck"></span>
                      </div>
                    
                      <!-- Title -->
                      <h4 class="card-title text-white">
                        Personal courier service
                      </h4>

                      <!-- Text -->
                      <p class="card-text text-white text-muted mb-0">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit a amet dicta eum quae reiciendis.
                      </p>

                    </div>

                  </div> <!-- / .card -->

                </div>
              </div> <!-- / .row -->

              <!-- Code -->
              <code class="code html bg-dark mb-5">
                &lt;div class=&quot;card card-tall&quot;&gt;<br>&nbsp;&nbsp;<br>&nbsp;&nbsp;&lt;!-- Body --&gt;<br>&nbsp;&nbsp;&lt;div class=&quot;card-body&quot;&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;...<br>&nbsp;&nbsp;&lt;/div&gt;<br><br>&lt;/div&gt;
              </code>

              <!-- Heading -->
              <h4 class="mb-4">
                Card: Stretch
              </h4>

              <!-- Subheading -->
              <p class="text-muted mb-5">
                Stretches the card to the height of its parent container and centers its body vertically.
              </p>

              <!-- Content -->
              <div class="form-row">
                <div class="col-md-6 mb-2">
                  
                  <!-- Image -->
                  <div class="square">
                    
                    <!-- Cover -->
                    <div class="bg-cover" style="background-image: url(assets/img/28.jpg);"></div>

                  </div>
                  
                </div>
                <div class="col-md-6 mb-2">
                  
                  <!-- Card -->
                  <div class="card card-stretch text-white text-center bg-primary">

                    <!-- Body -->
                    <div class="card-body">

                      <!-- Icon -->
                      <div class="card-icon">
                        <span class="icon icon-camera"></span>
                      </div>

                      <!-- Content -->
                      <p class="card-text">
                        High-quality photos and detailed property description are available for you to make the right choice.
                      </p>

                    </div>

                  </div> <!-- / .card -->

                </div>
              </div> <!-- / .form-row -->

              <!-- Code -->
              <code class="code html bg-dark">
                &lt;div class=&quot;card card-stretch&quot;&gt;<br>&nbsp;&nbsp;<br>&nbsp;&nbsp;&lt;!-- Body --&gt;<br>&nbsp;&nbsp;&lt;div class=&quot;card-body&quot;&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;...<br>&nbsp;&nbsp;&lt;/div&gt;<br><br>&lt;/div&gt;
              </code>

            </div>

            <!-- DROPDOWN -->
            <div class="pb-5 mb-5 border-bottom" id="dropdown">
              
              <!-- Heading -->
              <h3 class="mb-4">
                Dropdowns
              </h3>

              <!-- Content -->
              <div class="dropdown">
                <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown button
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>

            </div>

            <!-- FORM -->
            <div class="pb-5 mb-5 border-bottom" id="form">
              
              <!-- Heading -->
              <h3 class="mb-4">
                Forms
              </h3>

              <!-- Content -->
              <form class="mb-5">
                <div class="form-group">
                  <input type="text" class="form-control form-control-sm" placeholder=".form-control-sm">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder=".form-control">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" placeholder=".form-control-lg">
                </div>
              </form>

              <!-- Content -->
              <p class="text-muted mb-5">
                The form component has been extended to add animated icons. Please focus to see the animation if your browser supports it. Feel free to replace the icon with any of the custom icons (see the <a href="components-theme.html#icons" target="_blank">Theme components</a> page for the list of custom icons).
              </p>

              <!-- Content -->
              <form class="mb-4">
                <div class="form-row">
                  <div class="input-group col-md-4 mb-2 mb-md-0">
                    <input type="email" class="form-control order-1" placeholder="Email address">
                    <div class="input-group-append order-0">
                      <div class="input-group-text">
                        <svg class="icon icon-envelope input-group-icon icon-offset" viewBox="0 0 106 106" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <path transform="translate(3 3)" d="M0 30 V 10 H 100 V 90 H 0 V 30 L 50 60 L 100 30"></path>
                        </svg>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-auto">
                    <button type="submit" class="btn btn-outline-primary">
                      Sign up
                    </button>
                  </div>
                </div>
              </form>

              <!-- Code -->
              <code class="code html bg-dark">
                &lt;form&gt;<br />&nbsp;&nbsp;&lt;div class=&quot;form-row&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;input-group col-md-4 mb-2 mb-md-0&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;input type=&quot;email&quot; class=&quot;form-control order-1&quot; placeholder=&quot;Email address&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;input-group-append order-0&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;input-group-text&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;svg class=&quot;icon icon-envelope input-group-icon icon-offset&quot; viewBox=&quot;0 0 106 106&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; xmlns:xlink=&quot;http://www.w3.org/1999/xlink&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;path transform=&quot;translate(3 3)&quot; d=&quot;M0 30 V 10 H 100 V 90 H 0 V 30 L 50 60 L 100 30&quot;&gt;&lt;/path&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/svg&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;col-md-auto&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;button type=&quot;submit&quot; class=&quot;btn btn-outline-primary&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sign up<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/button&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br />&nbsp;&nbsp;&lt;/div&gt;<br />&lt;/form&gt;
              </code>

            </div>

            <!-- LIST GROUP -->
            <div class="pb-5 mb-5 border-bottom" id="list-group">
              
              <!-- Heading -->
              <h3 class="mb-4">
                List group
              </h3>

              <!-- Content -->
              <ul class="list-group">
                <li class="list-group-item active">
                  Cras justo odio
                </li>
                <li class="list-group-item">
                  Dapibus ac facilisis in
                </li>
                <li class="list-group-item">
                  Morbi leo risus
                </li>
                <li class="list-group-item">
                  Porta ac consectetur ac
                </li>
                <li class="list-group-item">
                  Vestibulum at eros
                </li>
              </ul>

            </div>

            <!-- MODAL -->
            <div class="pb-5 mb-5 border-bottom" id="modal">
              
              <!-- Heading -->
              <h3 class="mb-4">
                Modal
              </h3>

              <!-- Subheadig -->
              <p class="text-muted">
                The modal component has been extended to support video content. The local video file will start ones the modal is opened, and pause ones it is closed.
              </p>

              <!-- Content -->
              <p class="mb-4">
                <a href="#modal-video" data-toggle="modal" class="btn btn-circle btn-outline-primary mr-3">
                  <i class="fas fa-play"></i>
                </a> Play video
              </p>

              <!-- Code -->
              <code class="code html bg-dark">
                &lt;div class=&quot;modal fade&quot; id=&quot;modal-video&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;modal-video-header&quot; aria-hidden=&quot;true&quot;&gt;<br />&nbsp;&nbsp;&lt;div class=&quot;modal-dialog modal-dialog-centered modal-dialog-video modal-lg&quot; role=&quot;document&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;modal-content&quot;&gt;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;!-- Header --&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;modal-header&quot;&gt;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;!-- Title --&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h4 class=&quot;modal-title&quot; id=&quot;modal-video-header&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Video demonstration<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h4&gt;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;!-- Close --&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span aria-hidden=&quot;true&quot;&gt;&amp;times;&lt;/span&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/button&gt;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;modal-body&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;!-- Video --&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;video src=&quot;assets/video/elevator.mp4&quot; class=&quot;img-fluid&quot; controls&gt;&lt;/video&gt;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt; &lt;!-- / .modal-content --&gt;<br />&nbsp;&nbsp;&lt;/div&gt; &lt;!-- / .modal-dialog --&gt;<br />&lt;/div&gt; &lt;!-- / .modal --&gt;
              </code>

            </div>

            <!-- NAVBAR -->
            <div class="pb-5 mb-5 border-bottom" id="navbar">
              
              <!-- Heading -->
              <h3 class="mb-4">
                Navbar
              </h3>

              <!-- Subheading -->
              <p class="text-muted mb-5">
                The navbar component has been extended to enable switching between dark and light states as you scroll or collapse it. Add <code>.navbar-togglable</code> to enable this feature.
              </p>

              <!-- Code -->
              <code class="code html bg-dark">
                &lt;nav class=&quot;navbar navbar-expand-lg navbar-light  fixed-top&quot;&gt;<br />&nbsp;&nbsp;&lt;div class=&quot;container&quot;&gt;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;!-- Brand --&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;a class=&quot;navbar-brand&quot; href=&quot;#&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;svg class=&quot;navbar-brand-svg&quot; viewBox=&quot;0 0 235 80&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; xmlns:xlink=&quot;http://www.w3.org/1999/xlink&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;path d=&quot;M0 0 L 20 10 L 0 20 Z&quot; class=&quot;text-primary&quot; fill=&quot;currentColor&quot;&gt;&lt;/path&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;path d=&quot;M0 30 L 20 40 L 0 50 Z M20 45 L 0 55 L 20 65 Z M0 60 L 20 70 L 0 80 Z&quot; fill=&quot;currentColor&quot;&gt;&lt;/path&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;text x=&quot;40&quot; y=&quot;70&quot; font-size=&quot;60&quot; font-weight=&quot;bold&quot; letter-spacing=&quot;-.025em&quot; fill=&quot;currentColor&quot;&gt;incline.&lt;/text&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/svg&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;!-- Toggler --&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;button class=&quot;navbar-toggler&quot; type=&quot;button&quot; data-toggle=&quot;collapse&quot; data-target=&quot;#navbarCollapse&quot; aria-controls=&quot;navbarCollapse&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Toggle navigation&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;/button&gt;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;!-- Collapse --&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;collapse navbar-collapse&quot; id=&quot;navbarCollapse&quot;&gt;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;!-- Social --&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;ul class=&quot;navbar-nav mr-auto&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li class=&quot;nav-item-divider&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span class=&quot;nav-link&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&gt;&lt;/span&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/span&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li class=&quot;nav-item&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href=&quot;#&quot; class=&quot;nav-link&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;i class=&quot;fab fa-github&quot;&gt;&lt;/i&gt; <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span class=&quot;d-lg-none ml-2&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Github<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/span&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li class=&quot;nav-item&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href=&quot;#&quot; class=&quot;nav-link&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;i class=&quot;fab fa-twitter&quot;&gt;&lt;/i&gt; <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span class=&quot;d-lg-none ml-2&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Twitter<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/span&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li class=&quot;nav-item&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href=&quot;#&quot; class=&quot;nav-link&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;i class=&quot;fab fa-instagram&quot;&gt;&lt;/i&gt; <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span class=&quot;d-lg-none ml-2&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Instagram<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/span&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/ul&gt;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;!-- Links --&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;ul class=&quot;navbar-nav ml-auto&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li class=&quot;nav-item dropdown&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a class=&quot;nav-link dropdown-toggle&quot; href=&quot;#&quot; id=&quot;navbarLandings&quot; role=&quot;button&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Landings<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;navbarLandings&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a class=&quot;dropdown-item &quot; href=&quot;app.html&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;App<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a class=&quot;dropdown-item &quot; href=&quot;index.html&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Service<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a class=&quot;dropdown-item &quot; href=&quot;product.html&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Product<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li class=&quot;nav-item dropdown&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a class=&quot;nav-link dropdown-toggle&quot; href=&quot;#&quot; id=&quot;navbarPages&quot; role=&quot;button&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pages<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;navbarPages&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a class=&quot;dropdown-item &quot; href=&quot;about.html&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a class=&quot;dropdown-item &quot; href=&quot;checkout.html&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Checkout<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a class=&quot;dropdown-item &quot; href=&quot;contact.html&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a class=&quot;dropdown-item &quot; href=&quot;faq.html&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FAQ<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a class=&quot;dropdown-item &quot; href=&quot;pricing.html&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pricing<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a class=&quot;dropdown-item &quot; href=&quot;sign-in.html&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sign In<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a class=&quot;dropdown-item &quot; href=&quot;sign-up.html&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sign Up<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a class=&quot;dropdown-item &quot; href=&quot;404.html&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;404<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li class=&quot;nav-item dropdown&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a class=&quot;nav-link dropdown-toggle&quot; href=&quot;#&quot; id=&quot;navbarComponents&quot; role=&quot;button&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Components<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;navbarComponents&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a class=&quot;dropdown-item &quot; href=&quot;components-theme.html&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Theme<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a class=&quot;dropdown-item  active &quot; href=&quot;components-bootstrap.html&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bootstrap<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li class=&quot;nav-item &quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href=&quot;documentation.html&quot; class=&quot;nav-link&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Documentation<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li class=&quot;nav-item-divider&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span class=&quot;nav-link&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&gt;&lt;/span&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/span&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li class=&quot;nav-item&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href=&quot;#&quot; class=&quot;nav-link&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Purchase now<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/ul&gt;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt; &lt;!-- / .navbar-collapse --&gt;<br /><br />&nbsp;&nbsp;&lt;/div&gt; &lt;!-- / .container --&gt;&nbsp;&nbsp;&nbsp;&nbsp;<br />&lt;/nav&gt;<br />
              </code>


            </div>

            <!-- NAV -->
            <div class="pb-5 mb-5 border-bottom" id="nav">
              
              <!-- Heading -->
              <h3 class="mb-4">
                Navs
              </h3>

              <!-- Content -->
              
              <ul class="nav nav-tabs mb-5">
                <li class="nav-item">
                  <a class="nav-link active" href="#">
                    Active
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    Link
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    Link
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#">
                    Disabled
                  </a>
                </li>
              </ul>
              
              <ul class="nav nav-pills">
                <li class="nav-item">
                  <a class="nav-link active" href="#">
                    Active
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    Link
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    Link
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#">
                    Disabled
                  </a>
                </li>
              </ul>

            </div>

            <!-- PAGINATION -->
            <div class="pb-5 mb-5 border-bottom" id="pagination">
              
              <!-- Heading -->
              <h3 class="mb-4">
                Pagination
              </h3>

              <!-- Content -->
              <div class="table-responsive">
                <nav aria-label="Page navigation example">
                  <ul class="pagination pagination-lg">
                    <li class="page-item">
                      <a class="page-link" href="#">Previous</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">Next</a>
                    </li>
                  </ul>
                </nav>
                
                <nav aria-label="Page navigation example">
                  <ul class="pagination">
                    <li class="page-item">
                      <a class="page-link" href="#">Previous</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">Next</a>
                    </li>
                  </ul>
                </nav>
                
                <nav aria-label="Page navigation example">
                  <ul class="pagination pagination-sm">
                    <li class="page-item">
                      <a class="page-link" href="#">Previous</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">Next</a>
                    </li>
                  </ul>
                </nav>
              </div>

            </div>

            <!-- PROGRESS BAR -->
            <div id="progress-bar">
              
              <!-- Heading -->
              <h3 class="mb-4">
                Progress
              </h3>

              <!-- Content -->
              <div class="progress mb-3">
                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="progress mb-3">
                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="progress mb-3">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="progress mb-3">
                <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="progress">
                <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

            </div>
            
            
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- FOOTER
    ================================================== -->
    @include("page_new.src.partials.footer")

    <!-- JAVASCRIPT
    ================================================== -->
    @include("page_new.src.partials.scripts")

  </body>
</html>