<style>
  .default-btn {
    display: inline-block;
    padding: 10px 20px;
    font-size: 0.875rem;
    font-weight: bold;
    text-transform: uppercase;
    border-radius: 5px;
    transition: all 0.3s ease-in-out;
    margin-right: 15px; /* Space between buttons */
}

/* Donate Button */
.donate-btn {
    color: white;
    border: 2px solid white;
    background: transparent;
}

.donate-btn:hover {
    background: white;
    color: red;
}

/* Get Involved Button */
.involved-btn {
    color: red;
    border: 2px solid white;
    background: white;
}

.involved-btn:hover {
    background: #ffcccc; /* Light red */
    color: red;
}

/* Search Form */
.search-form {
    display: flex;
    align-items: center;
    border: 2px solid white;
    border-radius: 5px;
    padding: 5px;
    background: transparent;
}

.search-input {
    border: none;
    background: transparent;
    color: white;
    padding: 5px;
    width: 150px;
    outline: none;
}

.search-input::placeholder {
    color: rgba(255, 255, 255, 0.7);
}

.search-btn {
    background: transparent;
    border: none;
    color: white;
    cursor: pointer;
    font-size: 1rem;
    padding: 5px;
}

.search-btn:hover {
    color: red;
}

/* Ensure elements stay aligned */
.top-content-wrap {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.d-flex {
    display: flex;
    gap: 15px; /* Ensures space between elements */
}

</style>


<header id="header" class="header-section">
    <div class="top-header">
        <div class="container">
            <div class="top-content-wrap row align-items-center justify-content-end">
                <div class="col-sm-4" style="padding-left:1%">
                    <div class="site-branding">
                        <a href="#"><img src="{{ asset('website/img/logo.png') }}" alt="Brand"></a>
                    </div>
                </div>
               <div class="col-sm-8 d-flex align-items-center justify-content-end" style="padding-right:1%">
    <a href="#" class="default-btn donate-btn">Donate</a>
    <a href="#" class="default-btn involved-btn">Get Involved</a>
    <div class="search-container">
        <button id="search-icon" class="search-btn">🔍</button>
        <form id="search-form" class="search-form" style="display: none;">
            <input type="text" placeholder="Search..." class="search-input">
        </form>
    </div>
</div>
            </div>
        </div>
    </div>
    <div class="bottom-header">
        <div class="container">
            <div class="bottom-content-wrap row">
                <div class="col-sm-4">
                    
                </div>
               <div class="col-sm-8 text-right">
                   <ul id="mainmenu" class="nav navbar-nav nav-menu">
                        <li class="active"> <a href="index.html">Home</a>
                            <ul>
                               <li><a href="index.html">Home Default</a></li>
                               <li><a href="index-2.html">Home Modern</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="causes.html">Causes</a></li>
                        <li><a href="event.html">Event</a></li>
                        <li><a href="#">Pages</a> 
                            <ul>
                               <li><a href="gallery.html">Gallery</a></li>
                               <li><a href="team.html">Volunteers</a></li>
                               <li><a href="404.html">404 Not Found</a></li>
                            </ul>
                        </li>
                        <li><a href="blog-grid.html">Blog</a> 
                            <ul>
                               <li><a href="blog-grid.html">Blog Grid</a></li>
                               <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                               <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                               <li><a href="blog-single.html">Blog Single</a></li>
                            </ul>
                        </li>
                        <li> <a href="contact.html">Contact</a></li>
                    </ul>
                    
               </div>
            </div>
        </div>
    </div>
</header>