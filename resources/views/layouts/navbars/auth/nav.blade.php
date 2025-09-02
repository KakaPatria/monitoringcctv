<style>
    /* Custom Navbar Styling */
    .custom-navbar {
        background-color: #4CAF50;
        height: 70px;
        position: fixed;
        width: 100%;
        top: 0;
        left: 0;
        right: 0;
        z-index: 999;
        padding: 0 20px;
    }

    .custom-navbar .navbar-brand-img {
        height: 40px;
        /* Adjust the logo height */
        width: auto;
        /* Maintain aspect ratio */
    }

    .custom-navbar .navbar-toggler {
        border-color: transparent;
        /* Optional: Remove border from toggle button */
    }

    .custom-navbar .navbar-nav {
        margin-left: auto;
        /* Align the logout button and other items to the right */
    }

    .custom-navbar .nav-link {
        color: #fff;
        /* Set text color to white */
        font-weight: bold;
    }

    .custom-navbar .nav-item i {
        color: black;
        /* Set the logout text color to white */
        cursor: pointer;
        /* Change cursor to pointer on hover */
    }

    /* Optional: Hover effect for navbar items */
    .custom-navbar .nav-item:hover {
        background-color: #45a049;
        /* Slightly darker green when hovering */
    }

    /* Hide fixed desktop nav on small screens because mobile-topbar is used */
    @media (max-width: 991.98px) {
        .custom-navbar {
            display: none !important;
        }
    }
</style>


