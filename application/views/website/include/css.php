<style>
        /* Toggle Styles */
#wrapper {
    padding-left: 0;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#wrapper.toggled {
    padding-left: 250px;
}

#sidebar-wrapper {
    z-index: 1000;
    position: fixed;
    left: 250px;
    width: 0;
    height: 100%;
    margin-left: -250px;
    overflow-y: auto;
    background: #fff;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#wrapper.toggled #sidebar-wrapper {
    width: 250px;
}

#page-content-wrapper {
    width: 100%;
    /* position: absolute; */
    padding: 15px;
    background-color: darkviolet;
}

#wrapper.toggled #page-content-wrapper {
    position: absolute;
    margin-right: -250px;
}

/* Sidebar Styles */

.sidebar-nav {
    position: absolute;
    top: 0;
    width: 250px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.sidebar-nav li {
    text-indent: 20px;
    line-height: 40px;
    text-align: left;
}

.sidebar-nav li a {
    display: block;
    text-decoration: none;
    color: #000000;
    font-family: Markazi_Text;
}

.sidebar-nav li a:hover {
    text-decoration: none;
    color: #fff;
    /* background: rgba(255,255,255,0.2); */
}

.sidebar-nav li a:active,
.sidebar-nav li a:focus {
    text-decoration: none;
}

.sidebar-nav > .sidebar-brand {
    height: 65px;
    font-size: 18px;
    line-height: 60px;
}

.sidebar-nav > .sidebar-brand a {
    color: #000000;
}

.sidebar-nav > .sidebar-brand a:hover {
    color: #000000;
    background: none;
}

@media(min-width:768px) {
    /* #wrapper {
        padding-left: 200px;
    } */

    #wrapper.toggled {
        padding-left: 0;
    }

    #sidebar-wrapper {
        width: 263px;
        background: skyblue;
    }

    #wrapper.toggled #sidebar-wrapper {
        width: 0;
    }

    #page-content-wrapper {
        padding: 20px;
        position: relative;
    }

    #wrapper.toggled #page-content-wrapper {
        position: relative;
        margin-right: 0;
    }
}
#menu-toggle {
    font-family: Philosopher;
    text-decoration: none;
    color: #fff;
    font-size: 30px;
    border: none;
}
#menu-toggle:hover {
    color: #000000;
}
#dropdown-container {
    text-indent: 20px;
    line-height: 40px;
    text-align: left;
}
.sidebar-nav a, .dropdown-btn {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 15px;
    color: #000000;
    display: block;
    background: none;
    width:100%;
    cursor: pointer;
    font-family: Markazi_Text;
    border: none;
  }
  .sidebar-nav a:hover, .dropdown-btn:hover {
    text-decoration: none;
    color: #000000;
    /* background: rgba(255,255,255,0.2); */
  }

  @media screen and (max-height: 400px) {
    .sidebar-nav {padding-top: 15px;}
    .sidebar-nav a {font-size: 12px;}
  }
    </style>
