{{--@extends('dashboard.layouts.app')--}}
{{--@section('content')--}}
    <div class="page">
        <!-- Sidemenu -->
        <div class="sticky">
            <div class="main-menu main-sidebar main-sidebar-sticky side-menu">
                <div class="main-sidebar-header main-container-1 active">
                    <div class="sidemenu-logo">
                        <a class="main-logo" href="index.html">
                            <img src="{{asset('/build/assets/img/brand/logo-light.png')}}" class="header-brand-img desktop-logo" alt="logo">
                            <img src="{{asset('/build/assets/img/brand/icon-light.png')}}" class="header-brand-img icon-logo" alt="logo">
                            <img src="{{asset('/build/assets/img/brand/logo.png')}}" class="header-brand-img desktop-logo theme-logo" alt="logo">
                            <img src="{{asset('/build/assets/img/brand/icon.png')}}" class="header-brand-img icon-logo theme-logo" alt="logo">
                        </a>
                    </div>
                    <div class="main-sidebar-body main-body-1">
                        <div class="slide-left disabled" id="slide-left"><i class="fe fe-chevron-left"></i></div>
                        <ul class="menu-nav nav">
                            <li class="nav-header"><span class="nav-label">Dashboard</span></li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">
                                    <span class="shape1"></span>
                                    <span class="shape2"></span>
                                    <i class="ti-home sidemenu-icon menu-icon "></i>
                                    <span class="sidemenu-label">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link with-sub" href="javascript:void(0)">
                                    <span class="shape1"></span>
                                    <span class="shape2"></span>
                                    <i  class="ti-wallet sidemenu-icon menu-icon "></i>
                                    <span class="sidemenu-label">Crypto
										<span class="sidemenu-label2">Currencies</span>
									</span>
                                    <i class="angle fe fe-chevron-right"></i>
                                </a>
                                <ul class="nav-sub">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Crypto Currencies</a></li>
                                    <li class="nav-sub-item"> <a class="nav-sub-link" href="crypto-dashbaord.html">Dashboard</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="crypto-market.html">Marketcap</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="crypto-currency-exchange.html">Currency exchange</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="crypto-buy-sell.html">Buy & Sell</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="crypto-wallet.html">Wallet</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="crypto-transcations.html">Transcations</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link with-sub" href="javascript:void(0)">
                                    <span class="shape1"></span>
                                    <span class="shape2"></span>
                                    <i class="ti-shopping-cart-full sidemenu-icon menu-icon "></i>
                                    <span class="sidemenu-label">ECommerce</span>
                                    <i class="angle fe fe-chevron-right"></i>
                                </a>
                                <ul class="nav-sub">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">E-Commerce</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="ecommerce-dashboard.html">Dashboard</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="ecommerce-products.html">Products</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="ecommerce-product-details.html">Product Details</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="ecommerce-cart.html">Cart</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="ecommerce-wishlist.html">Wishlist</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="ecommerce-checkout.html">Checkout</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="ecommerce-orders.html">Orders</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="ecommerce-add-product.html">Add Product</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="ecommerce-account.html">Account</a></li>
                                </ul>
                            </li>
                            <li class="nav-header"><span class="nav-label">Landing</span></li>
                            <li class="nav-item">
                                <a class="nav-link" href="landing.html">
                                    <span class="shape1"></span>
                                    <span class="shape2"></span>
                                    <i class="ti-layout sidemenu-icon menu-icon "></i>
                                    <span class="sidemenu-label">LandingPage</span>
                                </a>
                            </li>
                            <li class="nav-header"><span class="nav-label">Applications</span></li>
                            <li class="nav-item">
                                <a class="nav-link with-sub" href="javascript:void(0)">
                                    <span class="shape1"></span>
                                    <span class="shape2"></span>
                                    <i class="ti-write sidemenu-icon menu-icon "></i>
                                    <span class="sidemenu-label">Apps</span>
                                    <i class="angle fe fe-chevron-right"></i>
                                </a>
                                <ul class="nav-sub">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Apps</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="widgets.html">Widgets</a></li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link sub-with-sub" href="javascript:void(0)">
                                            <span class="sidemenu-label">Mail</span>
                                            <i class="angle fe fe-chevron-right"></i>
                                        </a>
                                        <ul class="sub-nav-sub">
                                            <li class="nav-sub-item"><a class="nav-sub-link" href="mail-inbox.html">Mail-Inbox</a></li>
                                            <li class="nav-sub-item"><a class="nav-sub-link" href="viewmail.html">View-Mail</a></li>
                                            <li class="nav-sub-item"><a class="nav-sub-link" href="mail-compose.html">Mail-Compose</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link sub-with-sub" href="javascript:void(0)">
                                            <span class="sidemenu-label">Maps</span>
                                            <i class="angle fe fe-chevron-right"></i>
                                        </a>
                                        <ul class="sub-nav-sub">
                                            <li class="nav-sub-item"><a class="nav-sub-link" href="map-mapel.html">Mapel Maps</a></li>
                                            <li class="nav-sub-item"><a class="nav-sub-link" href="map-vector.html">Vector Maps</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link sub-with-sub" href="javascript:void(0)">
                                            <span class="sidemenu-label">Tables</span>
                                            <i class="angle fe fe-chevron-right"></i>
                                        </a>
                                        <ul class="sub-nav-sub">
                                            <li class="nav-sub-item"><a class="nav-sub-link" href="table-basic.html">Basic Tables</a></li>
                                            <li class="nav-sub-item"><a class="nav-sub-link" href="table-data.html">Data Tables</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link sub-with-sub" href="javascript:void(0)">
                                            <span class="sidemenu-label">Blog</span>
                                            <i class="angle fe fe-chevron-right"></i>
                                        </a>
                                        <ul class="sub-nav-sub">
                                            <li class="nav-sub-item"><a class="nav-sub-link" href="blog.html">Blog Page</a></li>
                                            <li class="nav-sub-item"><a class="nav-sub-link" href="blog-details.html">Blog Details</a></li>
                                            <li class="nav-sub-item"><a class="nav-sub-link" href="blog-post.html">Blog Post</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link sub-with-sub" href="javascript:void(0)">
                                            <span class="sidemenu-label">File Manager</span>
                                            <i class="angle fe fe-chevron-right"></i>
                                        </a>
                                        <ul class="sub-nav-sub">
                                            <li class="nav-sub-item"><a class="nav-sub-link" href="file-manager.html">File Manager</a></li>
                                            <li class="nav-sub-item"><a class="nav-sub-link" href="file-manager-list.html">File Manager List</a></li>
                                            <li class="nav-sub-item"><a class="nav-sub-link" href="file-details.html">File Details</a></li>
                                            <li class="nav-sub-item"><a class="nav-sub-link" href="file-attached-tags.html">File Attachments</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link sub-with-sub" href="javascript:void(0)">
                                            <span class="sidemenu-label">Icons</span>
                                            <i class="angle fe fe-chevron-right"></i>
                                        </a>
                                        <ul class="sub-nav-sub">
                                            <li class="nav-sub-item"><a class="nav-sub-link" href="icons.html">Font Awesome</a></li>
                                            <li class="nav-sub-item"><a class="nav-sub-link" href="icons2.html">Material Design Icons</a></li>
                                            <li class="nav-sub-item"><a class="nav-sub-link" href="icons3.html">Simple Line Icons</a></li>
                                            <li class="nav-sub-item"><a class="nav-sub-link" href="icons4.html">Feather Icons</a></li>
                                            <li class="nav-sub-item"><a class="nav-sub-link" href="icons5.html">Ionic Icons</a></li>
                                            <li class="nav-sub-item"><a class="nav-sub-link" href="icons6.html">Flag Icons</a></li>
                                            <li class="nav-sub-item"><a class="nav-sub-link" href="icons7.html">Pe7 Icons</a></li>
                                            <li class="nav-sub-item"><a class="nav-sub-link" href="icons8.html">Themify Icons</a></li>
                                            <li class="nav-sub-item"><a class="nav-sub-link" href="icons9.html">Typicons Icons</a></li>
                                            <li class="nav-sub-item"><a class="nav-sub-link" href="icons10.html">Weather Icons</a></li>
                                            <li class="nav-sub-item"><a class="nav-sub-link" href="icons11.html">Material Icons</a></li>
                                            <li class="nav-sub-item"><a class="nav-sub-link" href="icons12.html">Bootstrap Icons</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-header"><span class="nav-label">Components</span></li>
                            <li class="nav-item">
                                <a class="nav-link with-sub" href="javascript:void(0)">
                                    <span class="shape1"></span>
                                    <span class="shape2"></span>
                                    <i class="ti-package sidemenu-icon menu-icon "></i>
                                    <span class="sidemenu-label">Elements</span>
                                    <i class="angle fe fe-chevron-right"></i>
                                </a>
                                <ul class="nav-sub">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Elements</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="accordion.html">Accordion</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="alerts.html">Alerts</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="avatar.html">Avatar</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="breadcrumbs.html">Breadcrumbs</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="buttons.html">Buttons</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="badge.html">Badge</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="dropdown.html">Dropdown</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="thumbnails.html">Thumbnails</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="list-group.html">List Group</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="navigation.html">Navigation</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="pagination.html">Pagination</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="popover.html">Popover</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="progress.html">Progress</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="spinners.html">Spinners</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="media-object.html">Media Object</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="typography.html">Typography</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="tooltip.html">Tooltip</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="toast.html">Toast</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="tags.html">Tags</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="tabs.html">Tabs</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link with-sub" href="javascript:void(0)">
                                    <span class="shape1"></span>
                                    <span class="shape2"></span>
                                    <i class="ti-briefcase sidemenu-icon menu-icon "></i>
                                    <span class="sidemenu-label">AdvancedUI</span>
                                    <i class="angle fe fe-chevron-right"></i>
                                </a>
                                <ul class="nav-sub">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Advanced UI</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="carousel.html">Carousel</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="collapse.html">Collapse</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="chat.html">Chat</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="cards.html">Cards</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="calendar.html">Calendar</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="contacts.html">Contacts</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="modals.html">Modals</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="timeline.html">Timeline</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="darggablecard.html">Darggable-Cards</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="sweet-alert.html">Sweet Alert</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="rating.html">Ratings</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="search.html">Search</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="userlist.html">Userlist</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="notifications.html">Notification</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="tree-view.html">Tree-view</a></li>
                                </ul>
                            </li>
                            <li class="nav-header"><span class="nav-label">Other Pages</span></li>
                            <li class="nav-item">
                                <a class="nav-link with-sub" href="javascript:void(0)">
                                    <span class="shape1"></span>
                                    <span class="shape2"></span>
                                    <i class="ti-palette sidemenu-icon menu-icon "></i>
                                    <span class="sidemenu-label ">Pages</span>
                                    <i class="angle fe fe-chevron-right"></i>
                                </a>
                                <ul class="nav-sub">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Pages</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="profile.html">Profile</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="aboutus.html">About Us</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="settings.html">Settings</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="invoice.html">Invoice</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="pricing.html">Pricing</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="gallery.html">Gallery</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="notifications-list.html">Notifications List</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="faq.html">Faqs</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="success-message.html">Success Message</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="danger-message.html">Danger Message</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="warning-message.html">Warning Message</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="empty.html">Empty Page</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="switcher.html">Switcher Page</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link with-sub" href="javascript:void(0)">
                                    <span class="shape1"></span>
                                    <span class="shape2"></span>
                                    <i class="ti-shield sidemenu-icon menu-icon "></i>
                                    <span class="sidemenu-label">Utilities</span>
                                    <i class="angle fe fe-chevron-right"></i>
                                </a>
                                <ul class="nav-sub">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Utilities</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="background.html">Background</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="border.html">Border</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="display.html">Display</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="flex.html">Flex</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="height.html">Height</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="margin.html">Margin</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="padding.html">Padding</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="position.html">Position</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="width.html">Width</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="extras.html">Extras</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link with-sub" href="javascript:void(0)">
                                    <span class="shape1"></span>
                                    <span class="shape2"></span>
                                    <i class="ti-menu sidemenu-icon menu-icon "></i>
                                    <span class="sidemenu-label">Submenu</span>
                                    <i class="angle fe fe-chevron-right"></i>
                                </a>
                                <ul class="nav-sub">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Submenu</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="javascript:void(0)">Submenu-01</a></li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link sub-with-sub" href="javascript:void(0)">
                                            <span class="sidemenu-label">Submenu-02</span>
                                            <i class="angle fe fe-chevron-right"></i>
                                        </a>
                                        <ul class="sub-nav-sub">
                                            <li class="nav-sub-item"><a class="nav-sub-link" href="javascript:void(0)">Level-01</a></li>
                                            <li class="nav-sub-item">
                                                <a class="nav-sub-link sub-with-sub" href="javascript:void(0)">
                                                    <span class="sidemenu-label">Level-02</span>
                                                    <i class="angle fe fe-chevron-right"></i>
                                                </a>
                                                <ul class="sub-nav-sub">
                                                    <li class="nav-sub-item"><a class="nav-sub-link" href="javascript:void(0)">Level-11</a></li>
                                                    <li class="nav-sub-item"><a class="nav-sub-link" href="javascript:void(0)">Level-12</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link with-sub" href="javascript:void(0)">
                                    <span class="shape1"></span>
                                    <span class="shape2"></span>
                                    <i class="ti-lock sidemenu-icon menu-icon"></i>
                                    <span class="sidemenu-label">Authentication</span>
                                    <i class="angle fe fe-chevron-right"></i>
                                </a>
                                <ul class="nav-sub">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Authentication</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="signin.html">Sign In</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="signup.html">Sign Up</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="forgot.html">Forgot Password</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="reset.html">Reset Password</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="lockscreen.html">Lockscreen</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="underconstruction.html">UnderConstruction</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="404.html">404 Error</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="500.html">500 Error</a></li>
                                </ul>
                            </li>
                            <li class="nav-header"><span class="nav-label">Forms &amp; Charts</span></li>
                            <li class="nav-item">
                                <a class="nav-link with-sub" href="javascript:void(0)">
                                    <span class="shape1"></span>
                                    <span class="shape2"></span>
                                    <i class="ti-receipt sidemenu-icon menu-icon "></i>
                                    <span class="sidemenu-label">Forms</span>
                                    <span class="badge bg-info side-badge">7</span>
                                </a>
                                <ul class="nav-sub">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Forms</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="form-elements.html">Form Elements</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="form-advanced.html">Advanced Forms</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="form-layouts.html">Form Layouts</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="form-validation.html">Form Validation</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="form-wizards.html">Form Wizards</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="form-editor.html">WYSIWYG Editor</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="form-element-sizes.html">Form Element-sizes</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link with-sub" href="javascript:void(0)">
                                    <span class="shape1"></span>
                                    <span class="shape2"></span>
                                    <i class="ti-bar-chart-alt sidemenu-icon menu-icon "></i>
                                    <span class="sidemenu-label">Charts</span>
                                    <span class="badge bg-danger side-badge">5</span>
                                </a>
                                <ul class="nav-sub">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Charts</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="chart-morris.html">Morris Charts</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="chart-flot.html">Flot Charts</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="chart-chartjs.html">ChartJS</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="chart-spark-peity.html">Sparkline &amp; Peity</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="chart-echart.html">Echart</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="slide-right" id="slide-right"><i class="fe fe-chevron-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Sidemenu -->

        <!-- Main Content-->

        <!-- End Main Content-->



    </div>
{{--@endsection--}}
