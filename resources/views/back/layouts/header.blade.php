<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="{{asset('backend/dist/')}}/https://fonts.gstatic.com">
    <link href="{{asset('backend/dist/')}}/https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('backend/dist/')}}/assets/css/bootstrap.css">

    <link rel="stylesheet" href="{{asset('backend/dist/')}}/assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="{{asset('backend/dist/')}}/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="{{asset('backend/dist/')}}/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('backend/dist/')}}/assets/css/app.css">
    <link rel="shortcut icon" href="{{asset('backend/dist/')}}/assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
<div id="app">
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                <div class="d-flex justify-content-between">
                    <div class="logo">
                        <a href="{{asset('backend/dist/')}}/index.html"><img src="assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                    </div>
                    <div class="toggler">
                        <a href="{{asset('backend/dist/')}}/#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-title">Menu</li>

                    <li class="sidebar-item active ">
                        <a href="{{asset('backend/dist/')}}/index.html" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="{{asset('backend/dist/')}}/#" class='sidebar-link'>
                            <i class="bi bi-stack"></i>
                            <span>Components</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/component-alert.html">Alert</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/component-badge.html">Badge</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/component-breadcrumb.html">Breadcrumb</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/component-button.html">Button</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/component-card.html">Card</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/component-carousel.html">Carousel</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/component-dropdown.html">Dropdown</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/component-list-group.html">List Group</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/component-modal.html">Modal</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/component-navs.html">Navs</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/component-pagination.html">Pagination</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/component-progress.html">Progress</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/component-spinner.html">Spinner</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/component-tooltip.html">Tooltip</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="{{asset('backend/dist/')}}/#" class='sidebar-link'>
                            <i class="bi bi-collection-fill"></i>
                            <span>Extra Components</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/extra-component-avatar.html">Avatar</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/extra-component-sweetalert.html">Sweet Alert</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/extra-component-toastify.html">Toastify</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/extra-component-rating.html">Rating</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/extra-component-divider.html">Divider</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="{{asset('backend/dist/')}}/#" class='sidebar-link'>
                            <i class="bi bi-grid-1x2-fill"></i>
                            <span>Layouts</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/layout-default.html">Default Layout</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/layout-vertical-1-column.html">1 Column</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/layout-vertical-navbar.html">Vertical with Navbar</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/layout-horizontal.html">Horizontal Menu</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-title">Forms &amp; Tables</li>

                    <li class="sidebar-item  has-sub">
                        <a href="{{asset('backend/dist/')}}/#" class='sidebar-link'>
                            <i class="bi bi-hexagon-fill"></i>
                            <span>Form Elements</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/form-element-input.html">Input</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/form-element-input-group.html">Input Group</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/form-element-select.html">Select</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/form-element-radio.html">Radio</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/form-element-checkbox.html">Checkbox</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/form-element-textarea.html">Textarea</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item  ">
                        <a href="{{asset('backend/dist/')}}/form-layout.html" class='sidebar-link'>
                            <i class="bi bi-file-earmark-medical-fill"></i>
                            <span>Form Layout</span>
                        </a>
                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="{{asset('backend/dist/')}}/#" class='sidebar-link'>
                            <i class="bi bi-pen-fill"></i>
                            <span>Form Editor</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/form-editor-quill.html">Quill</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/form-editor-ckeditor.html">CKEditor</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/form-editor-summernote.html">Summernote</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/form-editor-tinymce.html">TinyMCE</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item  ">
                        <a href="{{asset('backend/dist/')}}/table.html" class='sidebar-link'>
                            <i class="bi bi-grid-1x2-fill"></i>
                            <span>Table</span>
                        </a>
                    </li>

                    <li class="sidebar-item  ">
                        <a href="{{asset('backend/dist/')}}/table-datatable.html" class='sidebar-link'>
                            <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                            <span>Datatable</span>
                        </a>
                    </li>

                    <li class="sidebar-title">Extra UI</li>

                    <li class="sidebar-item  has-sub">
                        <a href="{{asset('backend/dist/')}}/#" class='sidebar-link'>
                            <i class="bi bi-pentagon-fill"></i>
                            <span>Widgets</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/ui-widgets-chatbox.html">Chatbox</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/ui-widgets-pricing.html">Pricing</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/ui-widgets-todolist.html">To-do List</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="{{asset('backend/dist/')}}/#" class='sidebar-link'>
                            <i class="bi bi-egg-fill"></i>
                            <span>Icons</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/ui-icons-bootstrap-icons.html">Bootstrap Icons </a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/ui-icons-fontawesome.html">Fontawesome</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/ui-icons-dripicons.html">Dripicons</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="{{asset('backend/dist/')}}/#" class='sidebar-link'>
                            <i class="bi bi-bar-chart-fill"></i>
                            <span>Charts</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/ui-chart-chartjs.html">ChartJS</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/ui-chart-apexcharts.html">Apexcharts</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item  ">
                        <a href="{{asset('backend/dist/')}}/ui-file-uploader.html" class='sidebar-link'>
                            <i class="bi bi-cloud-arrow-up-fill"></i>
                            <span>File Uploader</span>
                        </a>
                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="{{asset('backend/dist/')}}/#" class='sidebar-link'>
                            <i class="bi bi-map-fill"></i>
                            <span>Maps</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/ui-map-google-map.html">Google Map</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/ui-map-jsvectormap.html">JS Vector Map</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-title">Pages</li>

                    <li class="sidebar-item  ">
                        <a href="{{asset('backend/dist/')}}/application-email.html" class='sidebar-link'>
                            <i class="bi bi-envelope-fill"></i>
                            <span>Email Application</span>
                        </a>
                    </li>

                    <li class="sidebar-item  ">
                        <a href="{{asset('backend/dist/')}}/application-chat.html" class='sidebar-link'>
                            <i class="bi bi-chat-dots-fill"></i>
                            <span>Chat Application</span>
                        </a>
                    </li>

                    <li class="sidebar-item  ">
                        <a href="{{asset('backend/dist/')}}/application-gallery.html" class='sidebar-link'>
                            <i class="bi bi-image-fill"></i>
                            <span>Photo Gallery</span>
                        </a>
                    </li>

                    <li class="sidebar-item  ">
                        <a href="{{asset('backend/dist/')}}/application-checkout.html" class='sidebar-link'>
                            <i class="bi bi-basket-fill"></i>
                            <span>Checkout Page</span>
                        </a>
                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="{{asset('backend/dist/')}}/#" class='sidebar-link'>
                            <i class="bi bi-person-badge-fill"></i>
                            <span>Authentication</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/auth-login.html">Login</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/auth-register.html">Register</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/auth-forgot-password.html">Forgot Password</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="{{asset('backend/dist/')}}/#" class='sidebar-link'>
                            <i class="bi bi-x-octagon-fill"></i>
                            <span>Errors</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/error-403.html">403</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/error-404.html">404</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{asset('backend/dist/')}}/error-500.html">500</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-title">Raise Support</li>

                    <li class="sidebar-item  ">
                        <a href="{{asset('backend/dist/')}}/https://zuramai.github.io/mazer/docs" class='sidebar-link'>
                            <i class="bi bi-life-preserver"></i>
                            <span>Documentation</span>
                        </a>
                    </li>

                    <li class="sidebar-item  ">
                        <a href="{{asset('backend/dist/')}}/https://github.com/zuramai/mazer/blob/main/CONTRIBUTING.md" class='sidebar-link'>
                            <i class="bi bi-puzzle"></i>
                            <span>Contribute</span>
                        </a>
                    </li>

                    <li class="sidebar-item  ">
                        <a href="{{asset('backend/dist/')}}/https://github.com/zuramai/mazer#donate" class='sidebar-link'>
                            <i class="bi bi-cash"></i>
                            <span>Donate</span>
                        </a>
                    </li>

                </ul>
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>
    <div id="main">
        <header class="mb-3">
            <a href="{{asset('backend/dist/')}}/#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Profile Statistics</h3>
        </div>
