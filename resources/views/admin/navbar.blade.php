
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Falcon | Dashboard &amp; WebApp Template</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <script src="../assets/js/config.navbar-vertical.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="../assets/lib/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet">
    <link href="../assets/css/theme.min.css" rel="stylesheet">
  </head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">

      <div class="container" data-layout="container">
        <nav class="navbar navbar-vertical navbar-expand-xl navbar-light" style="display:none;">
          <script>
            var navbarStyle = localStorage.getItem("navbarStyle");
            if (navbarStyle) {
              document.querySelector('.navbar-vertical').className += ' navbar-' + navbarStyle;
            }
          </script>
          <div class="d-flex align-items-center">
            <div class="toggle-icon-wrapper">
              <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-toggle="tooltip" data-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            </div><a class="navbar-brand" href="../index.html">
              <div class="d-flex align-items-center py-3"><img class="mr-2" src="../assets/img/illustrations/falcon.png" alt="" width="40" /><span class="text-sans-serif">falcon</span></div>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            <div class="navbar-vertical-content perfect-scrollbar scrollbar">
              <ul class="navbar-nav flex-column">
                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#home" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="home">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-pie"></span></span><span class="nav-link-text">Home</span></div>
                  </a>
                  <ul class="nav collapse show" id="home" data-parent="#navbarVerticalCollapse">
                    <li class="nav-item"><a class="nav-link" href="../index.html">Dashboard</a></li>
                    <li class="nav-item active"><a class="nav-link" href="../home/dashboard-alt.html">Dashboard alt</a></li>
                    <li class="nav-item"><a class="nav-link" href="../home/feed.html">Feed</a></li>
                    <li class="nav-item"><a class="nav-link" href="../home/landing.html">Landing</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#pages" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="pages">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-copy"></span></span><span class="nav-link-text">Pages</span></div>
                  </a>
                  <ul class="nav collapse" id="pages" data-parent="#navbarVerticalCollapse">
                    <li class="nav-item"><a class="nav-link" href="../pages/activity.html">Activity</a></li>
                    <li class="nav-item"><a class="nav-link" href="../pages/associations.html">Associations</a></li>
                    <li class="nav-item"><a class="nav-link" href="../pages/billing.html">Billing</a></li>
                    <li class="nav-item"><a class="nav-link" href="../pages/customer-details.html">Customer details</a></li>
                    <li class="nav-item"><a class="nav-link" href="../pages/event-detail.html">Event detail</a></li>
                    <li class="nav-item"><a class="nav-link" href="../pages/event-create.html">Event create</a></li>
                    <li class="nav-item"><a class="nav-link" href="../pages/events.html">Events</a></li>
                    <li class="nav-item"><a class="nav-link" href="../pages/faq.html">Faq</a></li>
                    <li class="nav-item"><a class="nav-link" href="../pages/invoice.html">Invoice</a></li>
                    <li class="nav-item"><a class="nav-link" href="../pages/invite-people.html">Invite people</a></li>
                    <li class="nav-item"><a class="nav-link" href="../pages/notifications.html">Notifications</a></li>
                    <li class="nav-item"><a class="nav-link" href="../pages/people.html">People</a></li>
                    <li class="nav-item"><a class="nav-link" href="../pages/pricing.html">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link" href="../pages/pricing-alt.html">Pricing alt</a></li>
                    <li class="nav-item"><a class="nav-link" href="../pages/profile.html">Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="../pages/settings.html">Settings</a></li>
                    <li class="nav-item"><a class="nav-link" href="../pages/starter.html">Starter</a></li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#pages-errors" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="pages-errors">Errors</a>
                      <ul class="nav collapse" id="pages-errors" data-parent="#pages">
                        <li class="nav-item"><a class="nav-link" href="../pages/errors/404.html">404</a></li>
                        <li class="nav-item"><a class="nav-link" href="../pages/errors/500.html">500</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="../chat.html">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-comments"></span></span><span class="nav-link-text"> Chat</span></div>
                  </a></li>
                <li class="nav-item"><a class="nav-link" href="../kanban.html">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fab fa-trello"></span></span><span class="nav-link-text"> Kanban</span></div>
                  </a></li>
                <li class="nav-item"><a class="nav-link" href="../calendar.html">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-alt"></span></span><span class="nav-link-text"> Calendar</span><span class="badge badge-pill ml-2 badge-soft-success">New</span></div>
                  </a></li>
                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#email" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="email">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-envelope-open"></span></span><span class="nav-link-text">Email</span></div>
                  </a>
                  <ul class="nav collapse" id="email" data-parent="#navbarVerticalCollapse">
                    <li class="nav-item"><a class="nav-link" href="../email/inbox.html">Inbox</a></li>
                    <li class="nav-item"><a class="nav-link" href="../email/email-detail.html">Email detail</a></li>
                    <li class="nav-item"><a class="nav-link" href="../email/compose.html">Compose</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#authentication" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="authentication">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-unlock-alt"></span></span><span class="nav-link-text">Authentication</span></div>
                  </a>
                  <ul class="nav collapse" id="authentication" data-parent="#navbarVerticalCollapse">
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#authentication-basic" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="authentication-basic">Basic</a>
                      <ul class="nav collapse" id="authentication-basic" data-parent="#authentication">
                        <li class="nav-item"><a class="nav-link" href="../authentication/basic/login.html">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="../authentication/basic/logout.html">Logout</a></li>
                        <li class="nav-item"><a class="nav-link" href="../authentication/basic/register.html">Register</a></li>
                        <li class="nav-item"><a class="nav-link" href="../authentication/basic/forgot-password.html">Forgot password</a></li>
                        <li class="nav-item"><a class="nav-link" href="../authentication/basic/reset-password.html">Reset password</a></li>
                        <li class="nav-item"><a class="nav-link" href="../authentication/basic/confirm-mail.html">Confirm mail</a></li>
                        <li class="nav-item"><a class="nav-link" href="../authentication/basic/lock-screen.html">Lock screen</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#authentication-card" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="authentication-card">Card</a>
                      <ul class="nav collapse" id="authentication-card" data-parent="#authentication">
                        <li class="nav-item"><a class="nav-link" href="../authentication/card/login.html">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="../authentication/card/logout.html">Logout</a></li>
                        <li class="nav-item"><a class="nav-link" href="../authentication/card/register.html">Register</a></li>
                        <li class="nav-item"><a class="nav-link" href="../authentication/card/forgot-password.html">Forgot password</a></li>
                        <li class="nav-item"><a class="nav-link" href="../authentication/card/reset-password.html">Reset password</a></li>
                        <li class="nav-item"><a class="nav-link" href="../authentication/card/confirm-mail.html">Confirm mail</a></li>
                        <li class="nav-item"><a class="nav-link" href="../authentication/card/lock-screen.html">Lock screen</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#authentication-split" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="authentication-split">Split</a>
                      <ul class="nav collapse" id="authentication-split" data-parent="#authentication">
                        <li class="nav-item"><a class="nav-link" href="../authentication/split/login.html">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="../authentication/split/logout.html">Logout</a></li>
                        <li class="nav-item"><a class="nav-link" href="../authentication/split/register.html">Register</a></li>
                        <li class="nav-item"><a class="nav-link" href="../authentication/split/forgot-password.html">Forgot password</a></li>
                        <li class="nav-item"><a class="nav-link" href="../authentication/split/reset-password.html">Reset password</a></li>
                        <li class="nav-item"><a class="nav-link" href="../authentication/split/confirm-mail.html">Confirm mail</a></li>
                        <li class="nav-item"><a class="nav-link" href="../authentication/split/lock-screen.html">Lock screen</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../authentication/wizard.html">Wizard</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!" data-toggle="modal" data-target="#authentication-modal">In Modal</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#e-commerce" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="e-commerce">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-cart-plus"></span></span><span class="nav-link-text">E commerce</span></div>
                  </a>
                  <ul class="nav collapse" id="e-commerce" data-parent="#navbarVerticalCollapse">
                    <li class="nav-item"><a class="nav-link" href="../e-commerce/product-list.html">Product list</a></li>
                    <li class="nav-item"><a class="nav-link" href="../e-commerce/product-grid.html">Product grid</a></li>
                    <li class="nav-item"><a class="nav-link" href="../e-commerce/product-details.html">Product details</a></li>
                    <li class="nav-item"><a class="nav-link" href="../e-commerce/orders.html">Orders</a></li>
                    <li class="nav-item"><a class="nav-link" href="../e-commerce/order-details.html">Order details</a></li>
                    <li class="nav-item"><a class="nav-link" href="../e-commerce/customers.html">Customers</a></li>
                    <li class="nav-item"><a class="nav-link" href="../e-commerce/shopping-cart.html">Shopping cart</a></li>
                    <li class="nav-item"><a class="nav-link" href="../e-commerce/checkout.html">Checkout</a></li>
                  </ul>
                </li>
              </ul>
              <div class="navbar-vertical-divider">
                <hr class="navbar-vertical-hr my-2" />
              </div>
              <ul class="navbar-nav flex-column">
                <li class="nav-item"><a class="nav-link" href="../widgets.html">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-poll"></span></span><span class="nav-link-text"> Widgets</span></div>
                  </a></li>
                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#components" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="components">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-puzzle-piece"></span></span><span class="nav-link-text">Components</span></div>
                  </a>
                  <ul class="nav collapse" id="components" data-parent="#navbarVerticalCollapse">
                    <li class="nav-item"><a class="nav-link" href="../components/accordion.html">Accordion</a></li>
                    <li class="nav-item"><a class="nav-link" href="../components/alerts.html">Alerts</a></li>
                    <li class="nav-item"><a class="nav-link" href="../components/avatar.html">Avatar</a></li>
                    <li class="nav-item"><a class="nav-link" href="../components/background.html">Background</a></li>
                    <li class="nav-item"><a class="nav-link" href="../components/badges.html">Badges</a></li>
                    <li class="nav-item"><a class="nav-link" href="../components/breadcrumb.html">Breadcrumb</a></li>
                    <li class="nav-item"><a class="nav-link" href="../components/bulk-select.html">Bulk select</a></li>
                    <li class="nav-item"><a class="nav-link" href="../components/buttons.html">Buttons</a></li>
                    <li class="nav-item"><a class="nav-link" href="../components/cards.html">Cards</a></li>
                    <li class="nav-item"><a class="nav-link" href="../components/carousel.html">Carousel</a></li>
                    <li class="nav-item"><a class="nav-link" href="../components/collapse.html">Collapse</a></li>
                    <li class="nav-item"><a class="nav-link" href="../components/countup.html">Countup</a></li>
                    <li class="nav-item"><a class="nav-link" href="../components/dropdowns.html">Dropdowns</a></li>
                    <li class="nav-item"><a class="nav-link" href="../components/fancyscroll.html">Fancyscroll</a></li>
                    <li class="nav-item"><a class="nav-link" href="../components/fancytab.html">Fancytab</a></li>
                    <li class="nav-item"><a class="nav-link" href="../components/forms.html">Forms</a></li>
                    <li class="nav-item"><a class="nav-link" href="../components/hoverbox.html">Hoverbox</a></li>
                    <li class="nav-item"><a class="nav-link" href="../components/list-group.html">List group</a></li>
                    <li class="nav-item"><a class="nav-link" href="../components/modals.html">Modals</a></li>
                    <li class="nav-item"><a class="nav-link" href="../components/media-object.html">Media object</a></li>
                    <li class="nav-item"><a class="nav-link" href="../components/navs.html">Navs</a></li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#components-navbar" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="components-navbar">Navbar</a>
                      <ul class="nav collapse" id="components-navbar" data-parent="#components">
                        <li class="nav-item"><a class="nav-link" href="../components/navbar/default.html">Default</a></li>
                        <li class="nav-item"><a class="nav-link" href="../components/navbar/vertical.html">Vertical</a></li>
                        <li class="nav-item"><a class="nav-link" href="../components/navbar/top.html">Top</a></li>
                        <li class="nav-item"><a class="nav-link" href="../components/navbar/combo.html">Combo</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../components/cookie-notice.html">Cookie notice</a></li>
                    <li class="nav-item"><a class="nav-link" href="../components/page-headers.html">Page headers</a></li>
                    <li class="nav-item"><a class="nav-link" href="../components/pagination.html">Pagination</a></li>
                    <li class="nav-item"><a class="nav-link" href="../components/popovers.html">Popovers</a></li>
                    <li class="nav-item"><a class="nav-link" href="../components/progress.html">Progress</a></li>
                    <li class="nav-item"><a class="nav-link" href="../components/scrollspy.html">Scrollspy</a></li>
                    <li class="nav-item"><a class="nav-link" href="../components/sidepanel.html">Sidepanel</a></li>
                    <li class="nav-item"><a class="nav-link" href="../components/spinners.html">Spinners</a></li>
                    <li class="nav-item"><a class="nav-link" href="../components/tables.html">Tables</a></li>
                    <li class="nav-item"><a class="nav-link" href="../components/tabs.html">Tabs</a></li>
                    <li class="nav-item"><a class="nav-link" href="../components/toasts.html">Toasts</a></li>
                    <li class="nav-item"><a class="nav-link" href="../components/tooltips.html">Tooltips</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#utilities" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="utilities">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-fire"></span></span><span class="nav-link-text">Utilities</span></div>
                  </a>
                  <ul class="nav collapse" id="utilities" data-parent="#navbarVerticalCollapse">
                    <li class="nav-item"><a class="nav-link" href="../utilities/borders.html">Borders</a></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/clearfix.html">Clearfix</a></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/close-icon.html">Close icon</a></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/colors.html">Colors</a></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/display.html">Display</a></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/embed.html">Embed</a></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/figures.html">Figures</a></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/flex.html">Flex</a></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/grid.html">Grid</a></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/sizing.html">Sizing</a></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/spacing.html">Spacing</a></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/stretched-link.html">Stretched link</a></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/typography.html">Typography</a></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/vertical-align.html">Vertical align</a></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/visibility.html">Visibility</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#plugins" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="plugins">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-plug"></span></span><span class="nav-link-text">Plugins</span></div>
                  </a>
                  <ul class="nav collapse" id="plugins" data-parent="#navbarVerticalCollapse">
                    <li class="nav-item"><a class="nav-link" href="../plugins/bootstrap-wizard.html">Bootstrap wizard</a></li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#plugins-charts" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="plugins-charts">Charts</a>
                      <ul class="nav collapse" id="plugins-charts" data-parent="#plugins">
                        <li class="nav-item"><a class="nav-link" href="../plugins/charts/chart-js.html">Chart js</a></li>
                        <li class="nav-item"><a class="nav-link" href="../plugins/charts/echarts.html">Echarts</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../plugins/countdown.html">Countdown</a></li>
                    <li class="nav-item"><a class="nav-link" href="../plugins/data-table.html">Data table</a></li>
                    <li class="nav-item"><a class="nav-link" href="../plugins/date-picker.html">Date picker</a></li>
                    <li class="nav-item"><a class="nav-link" href="../plugins/draggable.html">Draggable</a></li>
                    <li class="nav-item"><a class="nav-link" href="../plugins/dropzone.html">Dropzone</a></li>
                    <li class="nav-item"><a class="nav-link" href="../plugins/emojionearea.html">Emojionearea</a></li>
                    <li class="nav-item"><a class="nav-link" href="../plugins/fancybox.html">Fancybox</a></li>
                    <li class="nav-item"><a class="nav-link" href="../plugins/fontawesome.html">Fontawesome</a></li>
                    <li class="nav-item"><a class="nav-link" href="../plugins/fullcalendar.html">Fullcalendar</a></li>
                    <li class="nav-item"><a class="nav-link" href="../plugins/inline-player.html">Inline player</a></li>
                    <li class="nav-item"><a class="nav-link" href="../plugins/jquery-validation.html">Jquery validation</a></li>
                    <li class="nav-item"><a class="nav-link" href="../plugins/lightbox.html">Lightbox</a></li>
                    <li class="nav-item"><a class="nav-link" href="../plugins/lottie.html">Lottie</a></li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#plugins-map" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="plugins-map">Map</a>
                      <ul class="nav collapse" id="plugins-map" data-parent="#plugins">
                        <li class="nav-item"><a class="nav-link" href="../plugins/map/google-map.html">Google map</a></li>
                        <li class="nav-item"><a class="nav-link" href="../plugins/map/leaflet-map.html">Leaflet map</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../plugins/toastr.html">Toastr</a></li>
                    <li class="nav-item"><a class="nav-link" href="../plugins/owl-carousel.html">Owl carousel</a></li>
                    <li class="nav-item"><a class="nav-link" href="../plugins/perfect-scrollbar.html">Perfect scrollbar</a></li>
                    <li class="nav-item"><a class="nav-link" href="../plugins/progressbar.html">Progressbar</a></li>
                    <li class="nav-item"><a class="nav-link" href="../plugins/raty.html">Raty</a></li>
                    <li class="nav-item"><a class="nav-link" href="../plugins/select2.html">Select2</a></li>
                    <li class="nav-item"><a class="nav-link" href="../plugins/tinymce.html">Tinymce</a></li>
                    <li class="nav-item"><a class="nav-link" href="../plugins/typed-text.html">Typed text</a></li>
                  </ul>
                </li>
              </ul>
              <div class="navbar-vertical-divider">
                <hr class="navbar-vertical-hr my-2" />
              </div>
              <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#documentation" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="documentation">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-book"></span></span><span class="nav-link-text">Documentation</span></div>
                  </a>
                  <ul class="nav collapse" id="documentation" data-parent="#navbarVerticalCollapse">
                    <li class="nav-item"><a class="nav-link" href="../documentation/getting-started.html">Getting started</a></li>
                    <li class="nav-item"><a class="nav-link" href="../documentation/file-structure.html">File structure</a></li>
                    <li class="nav-item"><a class="nav-link" href="../documentation/customization.html">Customization</a></li>
                    <li class="nav-item"><a class="nav-link" href="../documentation/dark-mode.html">Dark mode</a></li>
                    <li class="nav-item"><a class="nav-link" href="../documentation/fluid-layout.html">Fluid layout</a></li>
                    <li class="nav-item"><a class="nav-link" href="../documentation/gulp.html">Gulp</a></li>
                    <li class="nav-item"><a class="nav-link" href="../documentation/RTL.html">RTL</a></li>
                    <li class="nav-item"><a class="nav-link" href="../documentation/plugins.html">Plugins</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="../changelog.html">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-code-branch"></span></span><span class="nav-link-text"> Changelog</span><span class="badge badge-pill ml-2 badge-soft-primary">v2.7.3</span></div>
                  </a></li>
              </ul>
              <div class="settings px-3 px-xl-0">
                <div class="navbar-vertical-divider px-0">
                  <hr class="navbar-vertical-hr my-3" />
                </div><a class="btn btn-sm btn-block btn-purchase mb-3" href="https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/"> Purchase</a>
              </div>
            </div>
          </div>
        </nav>
        <nav class="navbar navbar-light navbar-glass navbar-top sticky-kit navbar-expand-lg" style="display:none;">
          <button class="btn navbar-toggler-humburger-icon navbar-toggler mr-1 mr-sm-3" type="button" data-toggle="collapse" data-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
          <a class="navbar-brand mr-1 mr-sm-3" href="../index.html">
            <div class="d-flex align-items-center"><img class="mr-2" src="../assets/img/illustrations/falcon.png" alt="" width="40" /><span class="text-sans-serif">falcon</span></div>
          </a>
          <div class="collapse navbar-collapse" id="navbarStandard">
            <ul class="navbar-nav">
              <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link dropdown-toggle" id="navbarDropdownHome" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                <div class="dropdown-menu dropdown-menu-card" aria-labelledby="navbarDropdownHome">
                  <div class="bg-white rounded-soft py-2"><a class="dropdown-item" href="../index.html">Dashboard</a><a class="dropdown-item" href="../home/dashboard-alt.html">Dashboard alt</a><a class="dropdown-item" href="../home/feed.html">Feed</a><a class="dropdown-item" href="../home/landing.html">Landing</a></div>
                </div>
              </li>
              <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link dropdown-toggle" id="navbarDropdownPages" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                <div class="dropdown-menu dropdown-menu-card" aria-labelledby="navbarDropdownPages">
                  <div class="card navbar-card-pages shadow-none">
                    <div class="card-body scrollbar perfect-scrollbar max-h-dropdown"><img class="position-absolute b-0 r-0" src="../assets/img/illustrations/authentication-corner.png" width="130" alt="" />
                      <div class="row">
                        <div class="col-6 col-md-4">
                          <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/activity.html">Activity</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/associations.html">Associations</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/billing.html">Billing</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/customer-details.html">Customer details</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/event-detail.html">Event detail</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/event-create.html">Event create</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/events.html">Events</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/faq.html">Faq</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/invoice.html">Invoice</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/invite-people.html">Invite people</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/notifications.html">Notifications</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/people.html">People</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/pricing.html">Pricing</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/pricing-alt.html">Pricing alt</a></div>
                        </div>
                        <div class="col-6 col-md-4">
                          <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/profile.html">Profile</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/settings.html">Settings</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/starter.html">Starter</a><a class="nav-link py-1 text-700 font-weight-medium" href="../calendar.html">Calendar</a><a class="nav-link py-1 text-700 font-weight-medium" href="../chat.html">Chat</a><a class="nav-link py-1 text-700 font-weight-medium" href="../kanban.html">Kanban</a><a class="nav-link py-1 text-700 font-weight-medium" href="../widgets.html">Widgets</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/errors/404.html">404</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/errors/500.html">500</a>
                            <div class="nav-link py-1 text-900 font-weight-bold mt-3">Emails</div><a class="nav-link py-1 text-700 font-weight-medium" href="../email/inbox.html">Inbox</a><a class="nav-link py-1 text-700 font-weight-medium" href="../email/email-detail.html">Email detail</a><a class="nav-link py-1 text-700 font-weight-medium" href="../email/compose.html">Compose</a>
                          </div>
                        </div>
                        <div class="col-6 col-md-4">
                          <div class="nav flex-column">
                            <div class="nav-link py-1 text-900 font-weight-bold">E-commerce</div><a class="nav-link py-1 text-700 font-weight-medium" href="../e-commerce/product-list.html">Product list</a><a class="nav-link py-1 text-700 font-weight-medium" href="../e-commerce/product-grid.html">Product grid</a><a class="nav-link py-1 text-700 font-weight-medium" href="../e-commerce/product-details.html">Product details</a><a class="nav-link py-1 text-700 font-weight-medium" href="../e-commerce/orders.html">Orders</a><a class="nav-link py-1 text-700 font-weight-medium" href="../e-commerce/order-details.html">Order details</a><a class="nav-link py-1 text-700 font-weight-medium" href="../e-commerce/customers.html">Customers</a><a class="nav-link py-1 text-700 font-weight-medium" href="../e-commerce/shopping-cart.html">Shopping cart</a><a class="nav-link py-1 text-700 font-weight-medium" href="../e-commerce/checkout.html">Checkout</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link dropdown-toggle" id="navbarDropdownDocumentation" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Documentation</a>
                <div class="dropdown-menu dropdown-menu-card" aria-labelledby="navbarDropdownDocumentation">
                  <div class="bg-white rounded-soft py-2"><a class="dropdown-item" href="../documentation/getting-started.html">Getting started</a><a class="dropdown-item" href="../documentation/file-structure.html">File structure</a><a class="dropdown-item" href="../documentation/customization.html">Customization</a><a class="dropdown-item" href="../documentation/dark-mode.html">Dark mode</a><a class="dropdown-item" href="../documentation/fluid-layout.html">Fluid layout</a><a class="dropdown-item" href="../documentation/gulp.html">Gulp</a><a class="dropdown-item" href="../documentation/RTL.html">RTL</a><a class="dropdown-item" href="../documentation/plugins.html">Plugins</a></div>
                </div>
              </li>
              <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link dropdown-toggle" id="navbarDropdownComponents" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Components</a>
                <div class="dropdown-menu dropdown-menu-card" aria-labelledby="navbarDropdownComponents">
                  <div class="card shadow-none navbar-card-components">
                    <div class="card-body scrollbar perfect-scrollbar max-h-dropdown">
                      <div class="row">
                        <div class="col-6 col-xl-3">
                          <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="../components/accordion.html">Accordion</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/alerts.html">Alerts</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/avatar.html">Avatar</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/background.html">Background</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/badges.html">Badges</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/breadcrumb.html">Breadcrumb</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/bulk-select.html">Bulk select</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/buttons.html">Buttons</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/cards.html">Cards</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/carousel.html">Carousel</a></div>
                        </div>
                        <div class="col-6 col-xl-3">
                          <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="../components/collapse.html">Collapse</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/countup.html">Countup</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/dropdowns.html">Dropdowns</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/fancyscroll.html">Fancyscroll</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/fancytab.html">Fancytab</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/forms.html">Forms</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/hoverbox.html">Hoverbox</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/list-group.html">List group</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/modals.html">Modals</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/media-object.html">Media object</a></div>
                        </div>
                        <div class="col-6 col-xl-3">
                          <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="../components/navs.html">Navs</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/navbar/default.html">Navbar default</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/navbar/vertical.html">Navbar vertical</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/navbar/top.html">Navbar top</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/navbar/combo.html">Navbar combo</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/cookie-notice.html">Cookie notice</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/page-headers.html">Page headers</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/pagination.html">Pagination</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/popovers.html">Popovers</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/progress.html">Progress</a></div>
                        </div>
                        <div class="col-6 col-xl-3">
                          <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="../components/scrollspy.html">Scrollspy</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/sidepanel.html">Sidepanel</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/spinners.html">Spinners</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/tables.html">Tables</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/tabs.html">Tabs</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/toasts.html">Toasts</a><a class="nav-link py-1 text-700 font-weight-medium" href="../components/tooltips.html">Tooltips</a></div>
                        </div>
                      </div>
                      <div class="nav-link py-1 text-900 font-weight-bold mt-3">Plugins</div>
                      <div class="row">
                        <div class="col-6 col-xl-3">
                          <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/bootstrap-wizard.html">Bootstrap wizard</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/charts/chart-js.html">Chart js</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/charts/echarts.html">Echarts</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/countdown.html">Countdown</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/data-table.html">Data table</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/date-picker.html">Date picker</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/draggable.html">Draggable</a></div>
                        </div>
                        <div class="col-6 col-xl-3">
                          <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/dropzone.html">Dropzone</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/emojionearea.html">Emojionearea</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/fancybox.html">Fancybox</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/fontawesome.html">Fontawesome</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/fullcalendar.html">Fullcalendar</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/inline-player.html">Inline player</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/jquery-validation.html">Jquery validation</a></div>
                        </div>
                        <div class="col-6 col-xl-3">
                          <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/lightbox.html">Lightbox</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/lottie.html">Lottie</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/map/google-map.html">Google map</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/map/leaflet-map.html">Leaflet map</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/toastr.html">Toastr</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/owl-carousel.html">Owl carousel</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/perfect-scrollbar.html">Perfect scrollbar</a></div>
                        </div>
                        <div class="col-6 col-xl-3">
                          <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/progressbar.html">Progressbar</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/raty.html">Raty</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/select2.html">Select2</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/tinymce.html">Tinymce</a><a class="nav-link py-1 text-700 font-weight-medium" href="../plugins/typed-text.html">Typed text</a></div>
                        </div>
                      </div>
                      <div class="nav-link py-1 text-900 font-weight-bold mt-3">Utilities</div>
                      <div class="row">
                        <div class="col-6 col-xl-3">
                          <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="../utilities/borders.html">Borders</a><a class="nav-link py-1 text-700 font-weight-medium" href="../utilities/clearfix.html">Clearfix</a><a class="nav-link py-1 text-700 font-weight-medium" href="../utilities/close-icon.html">Close icon</a><a class="nav-link py-1 text-700 font-weight-medium" href="../utilities/colors.html">Colors</a></div>
                        </div>
                        <div class="col-6 col-xl-3">
                          <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="../utilities/display.html">Display</a><a class="nav-link py-1 text-700 font-weight-medium" href="../utilities/embed.html">Embed</a><a class="nav-link py-1 text-700 font-weight-medium" href="../utilities/figures.html">Figures</a><a class="nav-link py-1 text-700 font-weight-medium" href="../utilities/flex.html">Flex</a></div>
                        </div>
                        <div class="col-6 col-xl-3">
                          <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="../utilities/grid.html">Grid</a><a class="nav-link py-1 text-700 font-weight-medium" href="../utilities/sizing.html">Sizing</a><a class="nav-link py-1 text-700 font-weight-medium" href="../utilities/spacing.html">Spacing</a><a class="nav-link py-1 text-700 font-weight-medium" href="../utilities/stretched-link.html">Stretched link</a></div>
                        </div>
                        <div class="col-6 col-xl-3">
                          <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="../utilities/typography.html">Typography</a><a class="nav-link py-1 text-700 font-weight-medium" href="../utilities/vertical-align.html">Vertical align</a><a class="nav-link py-1 text-700 font-weight-medium" href="../utilities/visibility.html">Visibility</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link dropdown-toggle" id="navbarDropdownAuthentication" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Authentication</a>
                <div class="dropdown-menu dropdown-menu-card" aria-labelledby="navbarDropdownAuthentication">
                  <div class="card shadow-none navbar-card-auth">
                    <div class="card-body scrollbar perfect-scrollbar max-h-dropdown"><img class="position-absolute b-0 r-0" src="../assets/img/illustrations/authentication-corner.png" width="130" alt="" />
                      <div class="row">
                        <div class="col-6 col-xxl-3">
                          <div class="nav-link py-1 text-900 font-weight-bold">Basic</div>
                          <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/basic/login.html">Login</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/basic/logout.html">Logout</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/basic/register.html">Register</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/basic/forgot-password.html">Forgot password</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/basic/reset-password.html">Reset password</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/basic/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/basic/lock-screen.html">Lock screen</a></div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <div class="nav-link py-1 text-900 font-weight-bold">Split</div><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/split/login.html">Login</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/split/logout.html">Logout</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/split/register.html">Register</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/split/forgot-password.html">Forgot password</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/split/reset-password.html">Reset password</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/split/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/split/lock-screen.html">Lock screen</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <div class="nav-link py-1 text-900 font-weight-bold mt-3 mt-xxl-0">Card</div><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/card/login.html">Login</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/card/logout.html">Logout</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/card/register.html">Register</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/card/forgot-password.html">Forgot password</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/card/reset-password.html">Reset password</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/card/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/card/lock-screen.html">Lock screen</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <div class="nav-link py-1 text-900 font-weight-bold mt-3 mt-xxl-0">Special</div><a class="nav-link py-1 text-700 font-weight-medium" href="../authentication/wizard.html">Wizard</a><a class="nav-link py-1" href="#!" data-toggle="modal" data-target="#authentication-modal">In Modal</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <ul class="navbar-nav navbar-nav-icons ml-auto flex-row align-items-center">
            <li class="nav-item d-none d-md-block">
              <a class="nav-link px-3 py-0" href="https://prium.github.io/falcon/v3.0.0-alpha7/" target="_blank"><img src="../assets/img/logos/bootstrap-5.png" alt="" height="35" /></a>
            </li>
            <li class="nav-item">
              <a class="nav-link settings-popover" href="#settings-modal" data-toggle="modal"><span class="ripple"></span><span class="fa-spin position-absolute a-0 d-flex flex-center"><span class="icon-spin position-absolute a-0 d-flex flex-center"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z" fill="#2A7BE4"></path></svg></span></span></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block ml-1">
              <a class="nav-link px-0" href="../changelog.html" data-toggle="tooltip" data-placement="bottom" title="Changelog"><span class="fas fa-code-branch fs-4" data-fa-transform="shrink-8"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill icon-indicator" href="../e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart fs-4" data-fa-transform="shrink-7"></span><span class="notification-indicator-number">1</span></a>
            </li>
            <li class="nav-item dropdown dropdown-on-hover">
              <a class="nav-link notification-indicator notification-indicator-primary px-0 icon-indicator" id="navbarDropdownNotification" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-bell fs-4" data-fa-transform="shrink-6"></span></a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-card" aria-labelledby="navbarDropdownNotification">
                <div class="card card-notification shadow-none" style="max-width: 20rem">
                  <div class="card-header">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-auto">
                        <h6 class="card-header-title mb-0">Notifications</h6>
                      </div>
                      <div class="col-auto"><a class="card-link font-weight-normal" href="#">Mark all as read</a></div>
                    </div>
                  </div>
                  <div class="list-group list-group-flush font-weight-normal fs--1">
                    <div class="list-group-title border-bottom">NEW</div>
                    <div class="list-group-item">
                      <a class="notification notification-flush bg-200" href="#!">
                        <div class="notification-avatar">
                          <div class="avatar avatar-2xl mr-3">
                            <img class="rounded-circle" src="../assets/img/team/1-thumb.png" alt="" />
                          </div>
                        </div>
                        <div class="notification-body">
                          <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                          <span class="notification-time"><span class="mr-1" role="img" aria-label="Emoji">💬</span>Just now</span>
                        </div>
                      </a>
                    </div>
                    <div class="list-group-item">
                      <a class="notification notification-flush bg-200" href="#!">
                        <div class="notification-avatar">
                          <div class="avatar avatar-2xl mr-3">
                            <div class="avatar-name rounded-circle"><span>AB</span></div>
                          </div>
                        </div>
                        <div class="notification-body">
                          <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                          <span class="notification-time"><span class="mr-1 fab fa-gratipay text-danger"></span>9hr</span>
                        </div>
                      </a>
                    </div>
                    <div class="list-group-title">EARLIER</div>
                    <div class="list-group-item">
                      <a class="notification notification-flush" href="#!">
                        <div class="notification-avatar">
                          <div class="avatar avatar-2xl mr-3">
                            <img class="rounded-circle" src="../assets/img/icons/weather-sm.jpg" alt="" />
                          </div>
                        </div>
                        <div class="notification-body">
                          <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                          <span class="notification-time"><span class="mr-1" role="img" aria-label="Emoji">🌤️</span>1d</span>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="card-footer text-center border-top"><a class="card-link d-block" href="../pages/notifications.html">View all</a></div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link pr-0" id="navbarDropdownUser" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-xl">
                  <img class="rounded-circle" src="../assets/img/team/3-thumb.png" alt="" />
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="navbarDropdownUser">
                <div class="bg-white rounded-soft py-2">
                  <a class="dropdown-item font-weight-bold text-warning" href="#!"><span class="fas fa-crown mr-1"></span><span>Go Pro</span></a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#!">Set status</a>
                  <a class="dropdown-item" href="../pages/profile.html">Profile &amp; account</a>
                  <a class="dropdown-item" href="#!">Feedback</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../pages/settings.html">Settings</a>
                  <a class="dropdown-item" href="../authentication/basic/logout.html">Logout</a>
                </div>
              </div>
            </li>
          </ul>
        </nav>
        <div class="content">
          <nav class="navbar navbar-light navbar-glass navbar-top sticky-kit navbar-expand" style="display:none;">
            <button class="btn navbar-toggler-humburger-icon navbar-toggler mr-1 mr-sm-3" type="button" data-toggle="collapse" data-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand mr-1 mr-sm-3" href="../index.html">
              <div class="d-flex align-items-center"><img class="mr-2" src="../assets/img/illustrations/falcon.png" alt="" width="40" /><span class="text-sans-serif">falcon</span></div>
            </a>
            <ul class="navbar-nav align-items-center d-none d-lg-block">
              <li class="nav-item">
                <form class="form-inline search-box"><input class="form-control rounded-pill search-input" type="search" placeholder="Search..." aria-label="Search" /><span class="position-absolute fas fa-search text-400 search-box-icon"></span></form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-icons ml-auto flex-row align-items-center">
              <li class="nav-item d-none d-md-block">
                <a class="nav-link px-3 py-0" href="https://prium.github.io/falcon/v3.0.0-alpha7/" target="_blank"><img src="../assets/img/logos/bootstrap-5.png" alt="" height="35" /></a>
              </li>
              <li class="nav-item">
                <a class="nav-link settings-popover" href="#settings-modal" data-toggle="modal"><span class="ripple"></span><span class="fa-spin position-absolute a-0 d-flex flex-center"><span class="icon-spin position-absolute a-0 d-flex flex-center"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z" fill="#2A7BE4"></path></svg></span></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill icon-indicator" href="../e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart fs-4" data-fa-transform="shrink-7"></span><span class="notification-indicator-number">1</span></a>
              </li>
              <li class="nav-item dropdown dropdown-on-hover">
                <a class="nav-link notification-indicator notification-indicator-primary px-0 icon-indicator" id="navbarDropdownNotification" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-bell fs-4" data-fa-transform="shrink-6"></span></a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-card" aria-labelledby="navbarDropdownNotification">
                  <div class="card card-notification shadow-none" style="max-width: 20rem">
                    <div class="card-header">
                      <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                          <h6 class="card-header-title mb-0">Notifications</h6>
                        </div>
                        <div class="col-auto"><a class="card-link font-weight-normal" href="#">Mark all as read</a></div>
                      </div>
                    </div>
                    <div class="list-group list-group-flush font-weight-normal fs--1">
                      <div class="list-group-title border-bottom">NEW</div>
                      <div class="list-group-item">
                        <a class="notification notification-flush bg-200" href="#!">
                          <div class="notification-avatar">
                            <div class="avatar avatar-2xl mr-3">
                              <img class="rounded-circle" src="../assets/img/team/1-thumb.png" alt="" />
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                            <span class="notification-time"><span class="mr-1" role="img" aria-label="Emoji">💬</span>Just now</span>
                          </div>
                        </a>
                      </div>
                      <div class="list-group-item">
                        <a class="notification notification-flush bg-200" href="#!">
                          <div class="notification-avatar">
                            <div class="avatar avatar-2xl mr-3">
                              <div class="avatar-name rounded-circle"><span>AB</span></div>
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                            <span class="notification-time"><span class="mr-1 fab fa-gratipay text-danger"></span>9hr</span>
                          </div>
                        </a>
                      </div>
                      <div class="list-group-title">EARLIER</div>
                      <div class="list-group-item">
                        <a class="notification notification-flush" href="#!">
                          <div class="notification-avatar">
                            <div class="avatar avatar-2xl mr-3">
                              <img class="rounded-circle" src="../assets/img/icons/weather-sm.jpg" alt="" />
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                            <span class="notification-time"><span class="mr-1" role="img" aria-label="Emoji">🌤️</span>1d</span>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="card-footer text-center border-top"><a class="card-link d-block" href="../pages/notifications.html">View all</a></div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link pr-0" id="navbarDropdownUser" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-xl">
                    <img class="rounded-circle" src="../assets/img/team/3-thumb.png" alt="" />
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="navbarDropdownUser">
                  <div class="bg-white rounded-soft py-2">
                    <a class="dropdown-item font-weight-bold text-warning" href="#!"><span class="fas fa-crown mr-1"></span><span>Go Pro</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#!">Set status</a>
                    <a class="dropdown-item" href="../pages/profile.html">Profile &amp; account</a>
                    <a class="dropdown-item" href="#!">Feedback</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../pages/settings.html">Settings</a>
                    <a class="dropdown-item" href="../authentication/basic/logout.html">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </nav>
          <nav class="navbar navbar-light navbar-glass navbar-top sticky-kit navbar-expand-lg navbar-top-combo" data-move-target="#navbarVerticalNav" style="display:none;">
            <button class="btn navbar-toggler-humburger-icon navbar-toggler mr-1 mr-sm-3" type="button" data-toggle="collapse" data-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand mr-1 mr-sm-3" href="../index.html">
              <div class="d-flex align-items-center"><img class="mr-2" src="../assets/img/illustrations/falcon.png" alt="" width="40" /><span class="text-sans-serif">falcon</span></div>
            </a>
            <div class="collapse navbar-collapse" id="navbarStandard">
              <ul class="navbar-nav">
                <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link dropdown-toggle" id="navbarDropdownHome" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                  <div class="dropdown-menu dropdown-menu-card" aria-labelledby="navbarDropdownHome">
                    <div class="bg-white rounded-soft py-2"><a class="dropdown-item" href="../index.html">Dashboard</a><a class="dropdown-item" href="../home/dashboard-alt.html">Dashboard alt</a><a class="dropdown-item" href="../home/feed.html">Feed</a><a class="dropdown-item" href="../home/landing.html">Landing</a></div>
                  </div>
                </li>
                <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link dropdown-toggle" id="navbarDropdownPages" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                  <div class="dropdown-menu dropdown-menu-card" aria-labelledby="navbarDropdownPages">
                    <div class="card navbar-card-pages shadow-none">
                      <div class="card-body scrollbar perfect-scrollbar max-h-dropdown"><img class="position-absolute b-0 r-0" src="../assets/img/illustrations/authentication-corner.png" width="130" alt="" />
                        <div class="row">
                          <div class="col-6 col-md-4">
                            <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/activity.html">Activity</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/associations.html">Associations</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/billing.html">Billing</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/customer-details.html">Customer details</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/event-detail.html">Event detail</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/event-create.html">Event create</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/events.html">Events</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/faq.html">Faq</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/invoice.html">Invoice</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/invite-people.html">Invite people</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/notifications.html">Notifications</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/people.html">People</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/pricing.html">Pricing</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/pricing-alt.html">Pricing alt</a></div>
                          </div>
                          <div class="col-6 col-md-4">
                            <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/profile.html">Profile</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/settings.html">Settings</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/starter.html">Starter</a><a class="nav-link py-1 text-700 font-weight-medium" href="../calendar.html">Calendar</a><a class="nav-link py-1 text-700 font-weight-medium" href="../chat.html">Chat</a><a class="nav-link py-1 text-700 font-weight-medium" href="../kanban.html">Kanban</a><a class="nav-link py-1 text-700 font-weight-medium" href="../widgets.html">Widgets</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/errors/404.html">404</a><a class="nav-link py-1 text-700 font-weight-medium" href="../pages/errors/500.html">500</a>
                              <div class="nav-link py-1 text-900 font-weight-bold mt-3">Emails</div><a class="nav-link py-1 text-700 font-weight-medium" href="../email/inbox.html">Inbox</a><a class="nav-link py-1 text-700 font-weight-medium" href="../email/email-detail.html">Email detail</a><a class="nav-link py-1 text-700 font-weight-medium" href="../email/compose.html">Compose</a>
                            </div>
                          </div>
                          <div class="col-6 col-md-4">
                            <div class="nav flex-column">
                              <div class="nav-link py-1 text-900 font-weight-bold">E-commerce</div><a class="nav-link py-1 text-700 font-weight-medium" href="../e-commerce/product-list.html">Product list</a><a class="nav-link py-1 text-700 font-weight-medium" href="../e-commerce/product-grid.html">Product grid</a><a class="nav-link py-1 text-700 font-weight-medium" href="../e-commerce/product-details.html">Product details</a><a class="nav-link py-1 text-700 font-weight-medium" href="../e-commerce/orders.html">Orders</a><a class="nav-link py-1 text-700 font-weight-medium" href="../e-commerce/order-details.html">Order details</a><a class="nav-link py-1 text-700 font-weight-medium" href="../e-commerce/customers.html">Customers</a><a class="nav-link py-1 text-700 font-weight-medium" href="../e-commerce/shopping-cart.html">Shopping cart</a><a class="nav-link py-1 text-700 font-weight-medium" href="../e-commerce/checkout.html">Checkout</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link dropdown-toggle" id="navbarDropdownDocumentation" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Documentation</a>
                  <div class="dropdown-menu dropdown-menu-card" aria-labelledby="navbarDropdownDocumentation">
                    <div class="bg-white rounded-soft py-2"><a class="dropdown-item" href="../documentation/getting-started.html">Getting started</a><a class="dropdown-item" href="../documentation/file-structure.html">File structure</a><a class="dropdown-item" href="../documentation/customization.html">Customization</a><a class="dropdown-item" href="../documentation/dark-mode.html">Dark mode</a><a class="dropdown-item" href="../documentation/fluid-layout.html">Fluid layout</a><a class="dropdown-item" href="../documentation/gulp.html">Gulp</a><a class="dropdown-item" href="../documentation/RTL.html">RTL</a><a class="dropdown-item" href="../documentation/plugins.html">Plugins</a></div>
                  </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="../widgets.html">Widgets</a></li>
              </ul>
            </div>
            <ul class="navbar-nav navbar-nav-icons ml-auto flex-row align-items-center">
              <li class="nav-item d-none d-md-block">
                <a class="nav-link px-3 py-0" href="https://prium.github.io/falcon/v3.0.0-alpha7/" target="_blank"><img src="../assets/img/logos/bootstrap-5.png" alt="" height="35" /></a>
              </li>
              <li class="nav-item">
                <a class="nav-link settings-popover" href="#settings-modal" data-toggle="modal"><span class="ripple"></span><span class="fa-spin position-absolute a-0 d-flex flex-center"><span class="icon-spin position-absolute a-0 d-flex flex-center"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z" fill="#2A7BE4"></path></svg></span></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill icon-indicator" href="../e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart fs-4" data-fa-transform="shrink-7"></span><span class="notification-indicator-number">1</span></a>
              </li>
              <li class="nav-item dropdown dropdown-on-hover">
                <a class="nav-link notification-indicator notification-indicator-primary px-0 icon-indicator" id="navbarDropdownNotification" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-bell fs-4" data-fa-transform="shrink-6"></span></a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-card" aria-labelledby="navbarDropdownNotification">
                  <div class="card card-notification shadow-none" style="max-width: 20rem">
                    <div class="card-header">
                      <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                          <h6 class="card-header-title mb-0">Notifications</h6>
                        </div>
                        <div class="col-auto"><a class="card-link font-weight-normal" href="#">Mark all as read</a></div>
                      </div>
                    </div>
                    <div class="list-group list-group-flush font-weight-normal fs--1">
                      <div class="list-group-title border-bottom">NEW</div>
                      <div class="list-group-item">
                        <a class="notification notification-flush bg-200" href="#!">
                          <div class="notification-avatar">
                            <div class="avatar avatar-2xl mr-3">
                              <img class="rounded-circle" src="../assets/img/team/1-thumb.png" alt="" />
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                            <span class="notification-time"><span class="mr-1" role="img" aria-label="Emoji">💬</span>Just now</span>
                          </div>
                        </a>
                      </div>
                      <div class="list-group-item">
                        <a class="notification notification-flush bg-200" href="#!">
                          <div class="notification-avatar">
                            <div class="avatar avatar-2xl mr-3">
                              <div class="avatar-name rounded-circle"><span>AB</span></div>
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                            <span class="notification-time"><span class="mr-1 fab fa-gratipay text-danger"></span>9hr</span>
                          </div>
                        </a>
                      </div>
                      <div class="list-group-title">EARLIER</div>
                      <div class="list-group-item">
                        <a class="notification notification-flush" href="#!">
                          <div class="notification-avatar">
                            <div class="avatar avatar-2xl mr-3">
                              <img class="rounded-circle" src="../assets/img/icons/weather-sm.jpg" alt="" />
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                            <span class="notification-time"><span class="mr-1" role="img" aria-label="Emoji">🌤️</span>1d</span>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="card-footer text-center border-top"><a class="card-link d-block" href="../pages/notifications.html">View all</a></div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link pr-0" id="navbarDropdownUser" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-xl">
                    <img class="rounded-circle" src="../assets/img/team/3-thumb.png" alt="" />
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="navbarDropdownUser">
                  <div class="bg-white rounded-soft py-2">
                    <a class="dropdown-item font-weight-bold text-warning" href="#!"><span class="fas fa-crown mr-1"></span><span>Go Pro</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#!">Set status</a>
                    <a class="dropdown-item" href="../pages/profile.html">Profile &amp; account</a>
                    <a class="dropdown-item" href="#!">Feedback</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../pages/settings.html">Settings</a>
                    <a class="dropdown-item" href="../authentication/basic/logout.html">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </nav>
          <script>
            var navbarPosition = localStorage.getItem('navbarPosition');
            var navbarVertical = document.querySelector('.navbar-vertical');
            var navbarTopVertical = document.querySelector('.content .navbar-top');
            var navbarTop = document.querySelector('[data-layout] .navbar-top');
            var navbarTopCombo = document.querySelector('.content .navbar-top-combo');

            if (navbarPosition === 'top') {
              navbarTop.removeAttribute('style');
              navbarTopVertical.parentNode.removeChild(navbarTopVertical);
              navbarVertical.parentNode.removeChild(navbarVertical);
              navbarTopCombo.parentNode.removeChild(navbarTopCombo);
            } else if (navbarPosition === 'combo') {
              navbarVertical.removeAttribute('style');
              navbarTopCombo.removeAttribute('style');
              navbarTop.parentNode.removeChild(navbarTop);
              navbarTopVertical.parentNode.removeChild(navbarTopVertical);
            } else {
              navbarVertical.removeAttribute('style');
              navbarTopVertical.removeAttribute('style');
              navbarTop.parentNode.removeChild(navbarTop);
              navbarTopCombo.parentNode.removeChild(navbarTopCombo);
            }
          </script>
          <div class="row no-gutters">
            <div class="col-md-6 col-xxl-3 mb-3 pr-md-2">
              <div class="card h-md-100">
                <div class="card-header pb-0">
                  <h6 class="mb-0 mt-2 d-flex align-items-center">Weekly Sales<span class="ml-1 text-400" data-toggle="tooltip" data-placement="top" title="Calculated according to last week's sales"><span class="far fa-question-circle" data-fa-transform="shrink-1"></span></span></h6>
                </div>
                <div class="card-body d-flex align-items-end">
                  <div class="row flex-grow-1">
                    <div class="col">
                      <div class="fs-4 font-weight-normal text-sans-serif text-700 line-height-1 mb-1">$47K</div><span class="badge badge-pill fs--2 badge-soft-success">+3.5%</span>
                    </div>
                    <div class="col-auto pl-0">
                      <div class="echart-bar-weekly-sales h-100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xxl-3 mb-3 pl-md-2 pr-xxl-2">
              <div class="card h-md-100">
                <div class="card-header pb-0">
                  <h6 class="mb-0 mt-2">Total Order</h6>
                </div>
                <div class="card-body pt-0">
                  <div class="row h-100">
                    <div class="col align-self-end">
                      <div class="fs-4 font-weight-normal text-sans-serif text-700 line-height-1 mb-1">58.4K</div><span class="badge badge-pill fs--2 bg-200 text-primary"><span class="fas fa-caret-up mr-1"></span>13.6%</span>
                    </div>
                    <div class="col-auto pl-0">
                      <div class="echart-line-total-order h-100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xxl-3 mb-3 pr-md-2 pl-xxl-2">
              <div class="card h-md-100">
                <div class="card-body">
                  <div class="row h-100 justify-content-between no-gutters">
                    <div class="col-5 col-sm-6 col-xxl pr-2">
                      <h6 class="mt-1">Market Share</h6>
                      <div class="fs--2 mt-3">
                        <div class="d-flex flex-between-center mb-1">
                          <div class="d-flex align-items-center"><span class="dot bg-primary"></span><span class="font-weight-semi-bold">Samsung</span></div>
                          <div class="d-xxl-none">33%</div>
                        </div>
                        <div class="d-flex flex-between-center mb-1">
                          <div class="d-flex align-items-center"><span class="dot bg-info"></span><span class="font-weight-semi-bold">Huawei</span></div>
                          <div class="d-xxl-none"> 29%</div>
                        </div>
                        <div class="d-flex flex-between-center mb-1">
                          <div class="d-flex align-items-center"><span class="dot bg-300"></span><span class="font-weight-semi-bold">Apple</span></div>
                          <div class="d-xxl-none"> 20%</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <div class="echart-doughnut"></div>
                      <div class="absolute-centered font-weight-medium text-dark fs-2">26M</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xxl-3 mb-3 pl-md-2">
              <div class="card h-md-100">
                <div class="card-header d-flex flex-between-center pb-0">
                  <h6 class="mb-0">Weather</h6>
                  <div class="dropdown text-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none" type="button" id="dropdown-weather-update" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                    <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown-weather-update">
                      <div class="bg-white py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body pt-2">
                  <div class="row no-gutters h-100 align-items-center">
                    <div class="col">
                      <div class="media align-items-center"><img class="mr-3" src="../assets/img/icons/weather-icon.png" alt="" height="60" />
                        <div class="media-body">
                          <h6 class="mb-2">New York City</h6>
                          <div class="fs--2 font-weight-semi-bold">
                            <div class="text-warning">Sunny</div>Precipitation: 50%
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto text-center pl-2">
                      <div class="fs-4 font-weight-normal text-sans-serif text-primary mb-1 line-height-1">31&deg;</div>
                      <div class="fs--1 text-800">32&deg; / 25&deg;</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row no-gutters">
            <div class="col-lg-6 pr-lg-2 mb-3">
              <div class="card h-lg-100 overflow-hidden">
                <div class="card-header bg-light">
                  <div class="row align-items-center">
                    <div class="col">
                      <h6 class="mb-0">Running Projects</h6>
                    </div>
                    <div class="col-auto text-center pr-card"><select class="custom-select custom-select-sm">
                        <option>Working Time</option>
                        <option>Estimated Time</option>
                        <option>Billable Time</option>
                      </select></div>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="row no-gutters align-items-center py-2 position-relative border-bottom border-200">
                    <div class="col pl-card py-1 position-static">
                      <div class="media align-items-center">
                        <div class="avatar avatar-xl mr-3">
                          <div class="avatar-name rounded-circle bg-soft-primary text-dark"><span class="fs-0 text-primary">F</span></div>
                        </div>
                        <div class="media-body">
                          <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link" href="#!">Falcon</a><span class="badge badge-pill ml-2 bg-200 text-primary">38%</span></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col py-1">
                      <div class="row flex-end-center no-gutters">
                        <div class="col-auto pr-2">
                          <div class="fs--1 font-weight-semi-bold">12:50:00</div>
                        </div>
                        <div class="col-5 pr-card pl-2">
                          <div class="progress mr-2" style="height: 5px;">
                            <div class="progress-bar rounded-capsule" role="progressbar" style="width: 38%" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row no-gutters align-items-center py-2 position-relative border-bottom border-200">
                    <div class="col pl-card py-1 position-static">
                      <div class="media align-items-center">
                        <div class="avatar avatar-xl mr-3">
                          <div class="avatar-name rounded-circle bg-soft-success text-dark"><span class="fs-0 text-success">R</span></div>
                        </div>
                        <div class="media-body">
                          <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link" href="#!">Reign</a><span class="badge badge-pill ml-2 bg-200 text-primary">79%</span></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col py-1">
                      <div class="row flex-end-center no-gutters">
                        <div class="col-auto pr-2">
                          <div class="fs--1 font-weight-semi-bold">25:20:00</div>
                        </div>
                        <div class="col-5 pr-card pl-2">
                          <div class="progress mr-2" style="height: 5px;">
                            <div class="progress-bar rounded-capsule" role="progressbar" style="width: 79%" aria-valuenow="79" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row no-gutters align-items-center py-2 position-relative border-bottom border-200">
                    <div class="col pl-card py-1 position-static">
                      <div class="media align-items-center">
                        <div class="avatar avatar-xl mr-3">
                          <div class="avatar-name rounded-circle bg-soft-info text-dark"><span class="fs-0 text-info">B</span></div>
                        </div>
                        <div class="media-body">
                          <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link" href="#!">Boots4</a><span class="badge badge-pill ml-2 bg-200 text-primary">90%</span></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col py-1">
                      <div class="row flex-end-center no-gutters">
                        <div class="col-auto pr-2">
                          <div class="fs--1 font-weight-semi-bold">58:20:00</div>
                        </div>
                        <div class="col-5 pr-card pl-2">
                          <div class="progress mr-2" style="height: 5px;">
                            <div class="progress-bar rounded-capsule" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row no-gutters align-items-center py-2 position-relative border-bottom border-200">
                    <div class="col pl-card py-1 position-static">
                      <div class="media align-items-center">
                        <div class="avatar avatar-xl mr-3">
                          <div class="avatar-name rounded-circle bg-soft-warning text-dark"><span class="fs-0 text-warning">R</span></div>
                        </div>
                        <div class="media-body">
                          <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link" href="#!">Raven</a><span class="badge badge-pill ml-2 bg-200 text-primary">40%</span></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col py-1">
                      <div class="row flex-end-center no-gutters">
                        <div class="col-auto pr-2">
                          <div class="fs--1 font-weight-semi-bold">21:20:00</div>
                        </div>
                        <div class="col-5 pr-card pl-2">
                          <div class="progress mr-2" style="height: 5px;">
                            <div class="progress-bar rounded-capsule" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row no-gutters align-items-center py-2 position-relative">
                    <div class="col pl-card py-1 position-static">
                      <div class="media align-items-center">
                        <div class="avatar avatar-xl mr-3">
                          <div class="avatar-name rounded-circle bg-soft-danger text-dark"><span class="fs-0 text-danger">S</span></div>
                        </div>
                        <div class="media-body">
                          <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link" href="#!">Slick</a><span class="badge badge-pill ml-2 bg-200 text-primary">70%</span></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col py-1">
                      <div class="row flex-end-center no-gutters">
                        <div class="col-auto pr-2">
                          <div class="fs--1 font-weight-semi-bold">31:20:00</div>
                        </div>
                        <div class="col-5 pr-card pl-2">
                          <div class="progress mr-2" style="height: 5px;">
                            <div class="progress-bar rounded-capsule" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer bg-light p-0"><a class="btn btn-sm btn-link btn-block py-2" href="#!">Show all projects<span class="fas fa-chevron-right ml-1 fs--2"></span></a></div>
              </div>
            </div>
            <div class="col-lg-6 pl-lg-2 mb-3">
              <div class="card h-lg-100">
                <div class="card-header">
                  <div class="row flex-between-center">
                    <div class="col-auto">
                      <h6 class="mb-0">Total Sales</h6>
                    </div>
                    <div class="col-auto d-flex"><select class="custom-select custom-select-sm select-month mr-2">
                        <option value="0">January</option>
                        <option value="1">February</option>
                        <option value="2">March</option>
                        <option value="3">April</option>
                        <option value="4">May</option>
                        <option value="5">Jun</option>
                        <option value="6">July</option>
                        <option value="7">August</option>
                        <option value="8">September</option>
                        <option value="9">October</option>
                        <option value="10">November</option>
                        <option value="11">December</option>
                      </select>
                      <div class="dropdown text-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none" type="button" id="dropdown-total-saldes" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown-total-saldes">
                          <div class="bg-white py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body h-100 pr-0">
                  <div class="echart-line-total-sales h-100" data-echart-responsive="true"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row no-gutters">
            <div class="col-lg-6 col-xl-7 col-xxl-8 mb-3 pr-lg-2 mb-3">
              <div class="card h-lg-100">
                <div class="card-body d-flex align-items-center">
                  <div class="w-100">
                    <h6 class="mb-3 text-800">Using Storage <strong class="text-dark">1775.06 MB </strong>of 2 GB</h6>
                    <div class="progress mb-3 rounded-soft" style="height: 10px;">
                      <div class="progress-bar bg-card-gradient border-right border-white border-2x" role="progressbar" style="width: 43.72%" aria-valuenow="43.72" aria-valuemin="0" aria-valuemax="100"></div>
                      <div class="progress-bar bg-info border-right border-white border-2x" role="progressbar" style="width: 18.76%" aria-valuenow="18.76" aria-valuemin="0" aria-valuemax="100"></div>
                      <div class="progress-bar bg-success border-right border-white border-2x" role="progressbar" style="width: 9.38%" aria-valuenow="9.38" aria-valuemin="0" aria-valuemax="100"></div>
                      <div class="progress-bar bg-200" role="progressbar" style="width: 28.14%" aria-valuenow="28.14" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="row fs--1 font-weight-semi-bold text-500">
                      <div class="col-auto d-flex align-items-center pr-2"><span class="dot bg-primary"></span><span>Regular</span><span class="d-none d-md-inline-block d-lg-none d-xxl-inline-block ml-1">(895MB)</span></div>
                      <div class="col-auto d-flex align-items-center px-2"><span class="dot bg-info"></span><span>System</span><span class="d-none d-md-inline-block d-lg-none d-xxl-inline-block ml-1">(379MB)</span></div>
                      <div class="col-auto d-flex align-items-center px-2"><span class="dot bg-success"></span><span>Shared</span><span class="d-none d-md-inline-block d-lg-none d-xxl-inline-block ml-1">(192MB)</span></div>
                      <div class="col-auto d-flex align-items-center pl-2"><span class="dot bg-200"></span><span>Free</span><span class="d-none d-md-inline-block d-lg-none d-xxl-inline-block ml-1">(576MB)</span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-xl-5 col-xxl-4 mb-3 pl-lg-2">
              <div class="card h-lg-100">
                <div class="bg-holder bg-card" style="background-image:url(../assets/img/illustrations/corner-1.png);"></div>
                <!--/.bg-holder-->
                <div class="card-body position-relative">
                  <h5 class="text-warning">Running out of your space?</h5>
                  <p class="fs--1 mb-0">Your storage will be running out soon. Get more<br /> space and powerful productivity features.</p><a class="btn btn-link fs--1 text-warning mt-4 mt-lg-3 pl-0" href="#!">Upgrade storage<span class="fas fa-chevron-right ml-1" data-fa-transform="shrink-4 down-1"></span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="row no-gutters">
            <div class="col-lg-7 col-xl-8 pr-lg-2 mb-3">
              <div class="card h-lg-100 overflow-hidden">
                <div class="card-body p-0">
                  <table class="table table-dashboard mb-0 table-borderless fs--1">
                    <thead class="bg-light">
                      <tr class="text-900">
                        <th>Best Selling Products</th>
                        <th class="text-right">Revenue ($3189)</th>
                        <th class="pr-card text-right" style="width: 8rem">Revenue (%)</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="border-bottom border-200">
                        <td>
                          <div class="media align-items-center position-relative"><img class="rounded border border-200" src="../assets/img/products/12.png" width="60" alt="" />
                            <div class="media-body ml-3">
                              <h6 class="mb-1 font-weight-semi-bold"><a class="text-dark stretched-link" href="#!">Raven Pro</a></h6>
                              <p class="font-weight-semi-bold mb-0 text-500">Landing</p>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle text-right font-weight-semi-bold">$1311</td>
                        <td class="align-middle pr-card">
                          <div class="d-flex flex-between-center">
                            <div class="progress w-100 mr-3 rounded-soft bg-200" style="height: 5px; max-width: 54px">
                              <div class="progress-bar rounded-capsule" role="progressbar" style="width: 41%;" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="font-weight-semi-bold">41%</div>
                          </div>
                        </td>
                      </tr>
                      <tr class="border-bottom border-200">
                        <td>
                          <div class="media align-items-center position-relative"><img class="rounded border border-200" src="../assets/img/products/10.png" width="60" alt="" />
                            <div class="media-body ml-3">
                              <h6 class="mb-1 font-weight-semi-bold"><a class="text-dark stretched-link" href="#!">Boots4</a></h6>
                              <p class="font-weight-semi-bold mb-0 text-500">Portfolio</p>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle text-right font-weight-semi-bold">$860</td>
                        <td class="align-middle pr-card">
                          <div class="d-flex flex-between-center">
                            <div class="progress w-100 mr-3 rounded-soft bg-200" style="height: 5px; max-width: 54px">
                              <div class="progress-bar rounded-capsule" role="progressbar" style="width: 27%;" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="font-weight-semi-bold">27%</div>
                          </div>
                        </td>
                      </tr>
                      <tr class="border-bottom border-200">
                        <td>
                          <div class="media align-items-center position-relative"><img class="rounded border border-200" src="../assets/img/products/11.png" width="60" alt="" />
                            <div class="media-body ml-3">
                              <h6 class="mb-1 font-weight-semi-bold"><a class="text-dark stretched-link" href="#!">Falcon</a></h6>
                              <p class="font-weight-semi-bold mb-0 text-500">Admin</p>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle text-right font-weight-semi-bold">$539</td>
                        <td class="align-middle pr-card">
                          <div class="d-flex flex-between-center">
                            <div class="progress w-100 mr-3 rounded-soft bg-200" style="height: 5px; max-width: 54px">
                              <div class="progress-bar rounded-capsule" role="progressbar" style="width: 17%;" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="font-weight-semi-bold">17%</div>
                          </div>
                        </td>
                      </tr>
                      <tr class="border-bottom border-200">
                        <td>
                          <div class="media align-items-center position-relative"><img class="rounded border border-200" src="../assets/img/products/14.png" width="60" alt="" />
                            <div class="media-body ml-3">
                              <h6 class="mb-1 font-weight-semi-bold"><a class="text-dark stretched-link" href="#!">Slick</a></h6>
                              <p class="font-weight-semi-bold mb-0 text-500">Builder</p>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle text-right font-weight-semi-bold">$245</td>
                        <td class="align-middle pr-card">
                          <div class="d-flex flex-between-center">
                            <div class="progress w-100 mr-3 rounded-soft bg-200" style="height: 5px; max-width: 54px">
                              <div class="progress-bar rounded-capsule" role="progressbar" style="width: 8%;" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="font-weight-semi-bold">8%</div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="media align-items-center position-relative"><img class="rounded border border-200" src="../assets/img/products/13.png" width="60" alt="" />
                            <div class="media-body ml-3">
                              <h6 class="mb-1 font-weight-semi-bold"><a class="text-dark stretched-link" href="#!">Reign Pro</a></h6>
                              <p class="font-weight-semi-bold mb-0 text-500">Agency</p>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle text-right font-weight-semi-bold">$234</td>
                        <td class="align-middle pr-card">
                          <div class="d-flex flex-between-center">
                            <div class="progress w-100 mr-3 rounded-soft bg-200" style="height: 5px; max-width: 54px">
                              <div class="progress-bar rounded-capsule" role="progressbar" style="width: 7%;" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="font-weight-semi-bold">7%</div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="card-footer bg-light py-2">
                  <div class="row flex-between-center">
                    <div class="col-auto"><select class="custom-select custom-select-sm">
                        <option>Last 7 days</option>
                        <option>Last Month</option>
                        <option>Last Year</option>
                      </select></div>
                    <div class="col-auto"><a class="btn btn-sm btn-falcon-default" href="#!">View All</a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-xl-4 pl-lg-2 mb-3">
              <div class="card h-lg-100">
                <div class="card-header d-flex flex-between-center bg-light py-2">
                  <h6 class="mb-0">Shared Files</h6><a class="btn btn-sm btn-link pr-0 fs--1" href="#!">View All</a>
                </div>
                <div class="card-body pb-0">
                  <div class="media mb-3 hover-actions-trigger align-items-center">
                    <div class="file-thumbnail"><img class="border h-100 w-100 fit-cover rounded-soft" src="../assets/img/products/5-thumb.png" alt="" /></div>
                    <div class="media-body ml-3">
                      <h6 class="mb-1"><a class="stretched-link text-900 font-weight-semi-bold" href="#!">apple-smart-watch.png</a></h6>
                      <div class="fs--1"><span class="font-weight-semi-bold">Antony</span><span class="font-weight-medium text-600 ml-2">Just Now</span></div>
                      <div class="hover-actions r-0 absolute-vertical-center"><a class="btn btn-light border-300 btn-sm mr-1 text-600 bg-white" data-toggle="tooltip" data-placement="top" title="Download" href="../assets/img/icons/cloud-download.svg" download="download"><img src="../assets/img/icons/cloud-download.svg" alt="" width="15" /></a><button class="btn btn-light border-300 btn-sm mr-1 text-600 bg-white" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><img src="../assets/img/icons/edit-alt.svg" alt="" width="15" /></button></div>
                    </div>
                  </div>
                  <hr class="border-200" />
                  <div class="media mb-3 hover-actions-trigger align-items-center">
                    <div class="file-thumbnail"><img class="border h-100 w-100 fit-cover rounded-soft" src="../assets/img/products/3-thumb.png" alt="" /></div>
                    <div class="media-body ml-3">
                      <h6 class="mb-1"><a class="stretched-link text-900 font-weight-semi-bold" href="#!">iphone.jpg</a></h6>
                      <div class="fs--1"><span class="font-weight-semi-bold">Antony</span><span class="font-weight-medium text-600 ml-2">Yesterday at 1:30 PM</span></div>
                      <div class="hover-actions r-0 absolute-vertical-center"><a class="btn btn-light border-300 btn-sm mr-1 text-600 bg-white" data-toggle="tooltip" data-placement="top" title="Download" href="../assets/img/icons/cloud-download.svg" download="download"><img src="../assets/img/icons/cloud-download.svg" alt="" width="15" /></a><button class="btn btn-light border-300 btn-sm mr-1 text-600 bg-white" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><img src="../assets/img/icons/edit-alt.svg" alt="" width="15" /></button></div>
                    </div>
                  </div>
                  <hr class="border-200" />
                  <div class="media mb-3 hover-actions-trigger align-items-center">
                    <div class="file-thumbnail"><img class="img-fluid" src="../assets/img/icons/zip.png" alt="" /></div>
                    <div class="media-body ml-3">
                      <h6 class="mb-1"><a class="stretched-link text-900 font-weight-semi-bold" href="#!">Falcon v1.8.2</a></h6>
                      <div class="fs--1"><span class="font-weight-semi-bold">Jane</span><span class="font-weight-medium text-600 ml-2">27 Sep at 10:30 AM</span></div>
                      <div class="hover-actions r-0 absolute-vertical-center"><a class="btn btn-light border-300 btn-sm mr-1 text-600 bg-white" data-toggle="tooltip" data-placement="top" title="Download" href="../assets/img/icons/cloud-download.svg" download="download"><img src="../assets/img/icons/cloud-download.svg" alt="" width="15" /></a><button class="btn btn-light border-300 btn-sm mr-1 text-600 bg-white" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><img src="../assets/img/icons/edit-alt.svg" alt="" width="15" /></button></div>
                    </div>
                  </div>
                  <hr class="border-200" />
                  <div class="media mb-3 hover-actions-trigger align-items-center">
                    <div class="file-thumbnail"><img class="border h-100 w-100 fit-cover rounded-soft" src="../assets/img/products/2-thumb.png" alt="" /></div>
                    <div class="media-body ml-3">
                      <h6 class="mb-1"><a class="stretched-link text-900 font-weight-semi-bold" href="#!">iMac.jpg</a></h6>
                      <div class="fs--1"><span class="font-weight-semi-bold">Rowen</span><span class="font-weight-medium text-600 ml-2">23 Sep at 6:10 PM</span></div>
                      <div class="hover-actions r-0 absolute-vertical-center"><a class="btn btn-light border-300 btn-sm mr-1 text-600 bg-white" data-toggle="tooltip" data-placement="top" title="Download" href="../assets/img/icons/cloud-download.svg" download="download"><img src="../assets/img/icons/cloud-download.svg" alt="" width="15" /></a><button class="btn btn-light border-300 btn-sm mr-1 text-600 bg-white" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><img src="../assets/img/icons/edit-alt.svg" alt="" width="15" /></button></div>
                    </div>
                  </div>
                  <hr class="border-200" />
                  <div class="media mb-3 hover-actions-trigger align-items-center">
                    <div class="file-thumbnail"><img class="img-fluid" src="../assets/img/icons/docs.png" alt="" /></div>
                    <div class="media-body ml-3">
                      <h6 class="mb-1"><a class="stretched-link text-900 font-weight-semi-bold" href="#!">functions.php</a></h6>
                      <div class="fs--1"><span class="font-weight-semi-bold">John</span><span class="font-weight-medium text-600 ml-2">1 Oct at 4:30 PM</span></div>
                      <div class="hover-actions r-0 absolute-vertical-center"><a class="btn btn-light border-300 btn-sm mr-1 text-600 bg-white" data-toggle="tooltip" data-placement="top" title="Download" href="../assets/img/icons/cloud-download.svg" download="download"><img src="../assets/img/icons/cloud-download.svg" alt="" width="15" /></a><button class="btn btn-light border-300 btn-sm mr-1 text-600 bg-white" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><img src="../assets/img/icons/edit-alt.svg" alt="" width="15" /></button></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row no-gutters">
            <div class="col-sm-6 col-xxl-3 pr-sm-2 mb-3 mb-xxl-0">
              <div class="card">
                <div class="card-header d-flex flex-between-center bg-light py-2">
                  <h6 class="mb-0">Active Users</h6>
                  <div class="dropdown text-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none" type="button" id="dropdown-active-user" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                    <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown-active-user">
                      <div class="bg-white py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body py-2">
                  <div class="media align-items-center mb-3">
                    <div class="avatar avatar-2xl status-online">
                      <img class="rounded-circle" src="../assets/img/team/1-thumb.png" alt="" />
                    </div>
                    <div class="media-body ml-3">
                      <h6 class="mb-0 font-weight-semi-bold"><a class="text-900" href="../pages/profile.html">Emma Watson</a></h6>
                      <p class="text-500 fs--2 mb-0">Admin</p>
                    </div>
                  </div>
                  <div class="media align-items-center mb-3">
                    <div class="avatar avatar-2xl status-online">
                      <img class="rounded-circle" src="../assets/img/team/2-thumb.png" alt="" />
                    </div>
                    <div class="media-body ml-3">
                      <h6 class="mb-0 font-weight-semi-bold"><a class="text-900" href="../pages/profile.html">Antony Hopkins</a></h6>
                      <p class="text-500 fs--2 mb-0">Moderator</p>
                    </div>
                  </div>
                  <div class="media align-items-center mb-3">
                    <div class="avatar avatar-2xl status-away">
                      <img class="rounded-circle" src="../assets/img/team/3-thumb.png" alt="" />
                    </div>
                    <div class="media-body ml-3">
                      <h6 class="mb-0 font-weight-semi-bold"><a class="text-900" href="../pages/profile.html">Anna Karinina</a></h6>
                      <p class="text-500 fs--2 mb-0">Editor</p>
                    </div>
                  </div>
                  <div class="media align-items-center mb-3">
                    <div class="avatar avatar-2xl status-offline">
                      <img class="rounded-circle" src="../assets/img/team/4-thumb.png" alt="" />
                    </div>
                    <div class="media-body ml-3">
                      <h6 class="mb-0 font-weight-semi-bold"><a class="text-900" href="../pages/profile.html">John Lee</a></h6>
                      <p class="text-500 fs--2 mb-0">Admin</p>
                    </div>
                  </div>
                  <div class="media align-items-center mb-3">
                    <div class="avatar avatar-2xl status-offline">
                      <img class="rounded-circle" src="../assets/img/team/5-thumb.png" alt="" />
                    </div>
                    <div class="media-body ml-3">
                      <h6 class="mb-0 font-weight-semi-bold"><a class="text-900" href="../pages/profile.html">Rowen Atkinson</a></h6>
                      <p class="text-500 fs--2 mb-0">Editor</p>
                    </div>
                  </div>
                </div>
                <div class="card-footer bg-light p-0"><a class="btn btn-sm btn-link btn-block py-2" href="../pages/people.html">All active users<span class="fas fa-chevron-right ml-1 fs--2"></span></a></div>
              </div>
            </div>
            <div class="col-sm-6 col-xxl-3 pl-sm-2 order-xxl-1 mb-3 mb-xxl-0">
              <div class="card h-100">
                <div class="card-header bg-light d-flex flex-between-center py-2">
                  <h6 class="mb-0">Bandwidth Saved</h6>
                  <div class="dropdown text-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none" type="button" id="dropdown-bandwidth-saved" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                    <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown-bandwidth-saved">
                      <div class="bg-white py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body d-flex flex-center">
                  <div>
                    <div class="progress-circle progress-circle-dashboard" data-options='{"color":"url(#gradient)","progress":93,"strokeWidth":5,"trailWidth":5}'></div>
                    <div class="text-center mt-4">
                      <h6 class="fs-0 mb-1"><span class="fas fa-check text-success mr-1" data-fa-transform="shrink-2"></span>35.75 GB saved</h6>
                      <p class="fs--1 mb-0">38.44 GB total bandwidth</p>
                    </div>
                  </div>
                </div>
                <div class="card-footer bg-light py-2">
                  <div class="row flex-between-center">
                    <div class="col-auto"><select class="custom-select custom-select-sm">
                        <option>Last 6 Months</option>
                        <option>Last Year</option>
                        <option>Last 2 Year</option>
                      </select></div>
                    <div class="col-auto"><a class="fs--1" href="#!">Help</a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-6 px-xxl-2">
              <div class="card h-100">
                <div class="card-header bg-light py-2">
                  <div class="row flex-between-center">
                    <div class="col-auto">
                      <h6 class="mb-0">Top Products</h6>
                    </div>
                    <div class="col-auto d-flex"><a class="btn btn-link btn-sm mr-2" href="#!">View Details</a>
                      <div class="dropdown text-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none" type="button" id="dropdown-running-projects" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown-running-projects">
                          <div class="bg-white py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body h-100">
                  <div class="echart-bar-top-products h-100" data-echart-responsive="true"></div>
                </div>
              </div>
            </div>
          </div>
          <footer>
            <div class="row no-gutters justify-content-between fs--1 mt-4 mb-3">
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">Thank you for creating with Falcon <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2019 &copy; <a href="https://themewagon.com">Themewagon</a></p>
              </div>
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">v2.7.3</p>
              </div>
            </div>
          </footer>
        </div>
        <div class="modal fade modal-fixed-right modal-theme overflow-hidden" id="settings-modal" tabindex="-1" role="dialog" aria-labelledby="settings-modal-label" aria-hidden="true" data-options='{"autoShow":true,"autoShowDelay":3000,"showOnce":true}'>
          <div class="modal-dialog modal-dialog-vertical" role="document">
            <div class="modal-content border-0 vh-100 scrollbar perfect-scrollbar">
              <div class="modal-header modal-header-settings">
                <div class="z-index-1 py-1 flex-grow-1">
                  <h5 class="text-white" id="settings-modal-label"> <span class="fas fa-palette mr-2 fs-0"></span>Settings</h5>
                  <p class="mb-0 fs--1 text-white opacity-75"> Set your own customized style</p>
                </div><button class="close z-index-1" type="button" data-dismiss="modal" aria-label="Close"><span class="font-weight-light" aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body px-card">
                <h5 class="fs-0">Color Scheme</h5>
                <p class="fs--1">Choose the perfect color mode for your app. </p>
                <div class="btn-group btn-group-toggle btn-block" data-toggle="buttons">
                  <div class="btn btn-theme-default custom-control custom-radio custom-radio-success active"><label class="cursor-pointer hover-overlay" for="theme-mode-default"><img class="w-100" src="../assets/img/generic/falcon-mode-default.jpg" alt="" /></label><label class="cursor-pointer mb-0 d-flex justify-content-center pl-3" for="theme-mode-default"><input class="custom-control-input" id="theme-mode-default" type="radio" name="colorScheme" data-mode="DEFAULT" checked="checked" value="theme-mode-default" data-page-url="../index.html" /><span class="custom-control-label">Light</span></label></div>
                  <div class="btn btn-theme-dark custom-control custom-radio custom-radio-success"><label class="cursor-pointer hover-overlay" for="theme-mode-dark"><img class="w-100" src="../assets/img/generic/falcon-mode-dark.jpg" alt="" /></label><label class="cursor-pointer mb-0 d-flex justify-content-center pl-3" for="theme-mode-dark"><input class="custom-control-input" id="theme-mode-dark" type="radio" name="colorScheme" data-mode="DEFAULT" value="theme-mode-dark" data-page-url="../documentation/dark-mode.html" /><span class="custom-control-label">Dark</span></label></div>
                </div>
                <hr />
                <div class="d-flex justify-content-between">
                  <div class="media flex-grow-1"><img class="mr-2" src="../assets/img/icons/left-arrow-from-left.svg" width="20" alt="" />
                    <div class="media-body">
                      <h5 class="fs-0">RTL Mode</h5>
                      <p class="fs--1 mb-0">Switch your language direction </p>
                    </div>
                  </div>
                  <div class="custom-control custom-switch"><input class="custom-control-input" id="mode-rtl" type="checkbox" data-mode="DEFAULT" /><label class="custom-control-label" for="mode-rtl"> </label></div>
                </div>
                <hr />
                <div class="d-flex justify-content-between">
                  <div class="media flex-grow-1"><img class="mr-2" src="../assets/img/icons/arrows-h.svg" width="20" alt="" />
                    <div class="media-body">
                      <h5 class="fs-0">Fluid Layout</h5>
                      <p class="fs--1 mb-0">Toggle container layout system </p>
                    </div>
                  </div>
                  <div class="custom-control custom-switch"><input class="custom-control-input" id="mode-fluid" type="checkbox" /><label class="custom-control-label" for="mode-fluid"> </label></div>
                </div>
                <hr />
                <div class="media"><img class="mr-2" src="../assets/img/icons/paragraph.svg" width="20" alt="" />
                  <div class="media-body">
                    <h5 class="fs-0 d-flex align-items-center">Navigation Position <span class="badge badge-pill badge-soft-success fs--2 ml-2">Updated</span></h5>
                    <p class="fs--1 mb-2">Select a suitable navigation system for your web application </p>
                    <div class="custom-control custom-radio custom-control-inline"><input class="custom-control-input" id="option-navbar-vertical" type="radio" name="navbar" value="vertical" checked="checked" /><label class="custom-control-label" for="option-navbar-vertical">Vertical</label></div>
                    <div class="custom-control custom-radio custom-control-inline"><input class="custom-control-input" id="option-navbar-top" type="radio" name="navbar" value="top" /><label class="custom-control-label" for="option-navbar-top">Top</label></div>
                    <div class="custom-control custom-radio custom-control-inline mr-0"><input class="custom-control-input" id="option-navbar-combo" type="radio" name="navbar" value="combo" /><label class="custom-control-label" for="option-navbar-combo">Combo</label></div>
                  </div>
                </div>
                <hr />
                <h5 class="fs-0 d-flex align-items-center">Vertical Navbar Style</h5>
                <p class="fs--1">Switch between styles for your vertical navbar </p>
                <div class="btn-group-toggle btn-block btn-group-navbar-style" data-toggle="buttons">
                  <div class="btn-group btn-block">
                    <div class="btn p-0 text-left custom-control custom-radio custom-radio-success mr-2"><label class="cursor-pointer w-100" for="navbar-style-transparent"><img class="w-100" src="../assets/img/generic/default.png" alt="" /></label><label class="cursor-pointer d-flex mb-0 pl-3 ml-2" for="navbar-style-transparent"><input class="custom-control-input" id="navbar-style-transparent" type="radio" name="navbarVertical" value="transparent" /><span class="custom-control-label"> Transparent</span></label></div>
                    <div class="btn p-0 text-left custom-control custom-radio custom-radio-success mr-2"><label class="cursor-pointer w-100" for="navbar-style-inverted"><img class="w-100" src="../assets/img/generic/inverted.png" alt="" /></label><label class="cursor-pointer d-flex mb-0 pl-3 ml-2" for="navbar-style-inverted"><input class="custom-control-input" id="navbar-style-inverted" type="radio" name="navbarVertical" value="inverted" /><span class="custom-control-label"> Inverted</span></label></div>
                  </div>
                  <div class="btn-group btn-block mt-3">
                    <div class="btn p-0 text-left custom-control custom-radio custom-radio-success mr-2"><label class="cursor-pointer w-100" for="navbar-style-card"><img class="w-100" src="../assets/img/generic/card.png" alt="" /></label><label class="cursor-pointer d-flex mb-0 pl-3 ml-2" for="navbar-style-card"><input class="custom-control-input" id="navbar-style-card" type="radio" name="navbarVertical" value="card" /><span class="custom-control-label"> Card</span></label></div>
                    <div class="btn p-0 text-left custom-control custom-radio custom-radio-success mr-2"><label class="cursor-pointer w-100" for="navbar-style-vibrant"><img class="w-100" src="../assets/img/generic/vibrant.png" alt="" /></label><label class="cursor-pointer d-flex mb-0 pl-3 ml-2" for="navbar-style-vibrant"><input class="custom-control-input" id="navbar-style-vibrant" type="radio" name="navbarVertical" value="vibrant" /><span class="custom-control-label"> Vibrant</span></label></div>
                  </div>
                </div>
                <hr />
                <div class="text-center mt-5"><img class="mb-4" src="../assets/img/illustrations/settings.png" alt="" width="120" />
                  <h5>Like What You See?</h5>
                  <p class="fs--1">Get Falcon now and create beautiful dashboards with hundreds of widgets.</p><a class="btn btn-primary" href="https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/">Purchase</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="authentication-modal" tabindex="-1" role="dialog" aria-labelledby="authentication-modal-label" aria-hidden="true">
          <div class="modal-dialog mt-6" role="document">
            <div class="modal-content border-0">
              <div class="modal-header px-5 text-white position-relative modal-shape-header">
                <div class="position-relative z-index-1">
                  <div>
                    <h4 class="mb-0 text-white" id="authentication-modal-label">Register</h4>
                    <p class="fs--1 mb-0">Please create your free Falcon account</p>
                  </div>
                </div><button class="close text-white position-absolute t-0 r-0 mt-1 mr-1" data-dismiss="modal" aria-label="Close"><span class="font-weight-light" aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body py-4 px-5">
                <form>
                  <div class="form-group"><label for="modal-auth-name">Name</label><input class="form-control" type="text" id="modal-auth-name" /></div>
                  <div class="form-group"><label for="modal-auth-email">Email address</label><input class="form-control" type="email" id="modal-auth-email" /></div>
                  <div class="form-row">
                    <div class="form-group col-6"><label for="modal-auth-password">Password</label><input class="form-control" type="password" id="modal-auth-password" /></div>
                    <div class="form-group col-6"><label for="modal-auth-confirm-password">Confirm Password</label><input class="form-control" type="password" id="modal-auth-confirm-password" /></div>
                  </div>
                  <div class="custom-control custom-checkbox"><input class="custom-control-input" type="checkbox" id="modal-auth-register-checkbox" /><label class="custom-control-label" for="modal-auth-register-checkbox">I accept the <a href="#!">terms </a>and <a href="#!">privacy policy</a></label></div>
                  <div class="form-group"><button class="btn btn-primary btn-block mt-3" type="submit" name="submit">Register</button></div>
                </form>
                <div class="w-100 position-relative mt-5">
                  <hr class="text-300" />
                  <div class="position-absolute absolute-centered t-0 px-3 bg-white text-sans-serif fs--1 text-500 text-nowrap">or register with</div>
                </div>
                <div class="form-group mb-0">
                  <div class="row no-gutters">
                    <div class="col-sm-6 pr-sm-1"><a class="btn btn-outline-google-plus btn-sm btn-block mt-2" href="#"><span class="fab fa-google-plus-g mr-2" data-fa-transform="grow-8"></span> google</a></div>
                    <div class="col-sm-6 pl-sm-1"><a class="btn btn-outline-facebook btn-sm btn-block mt-2" href="#"><span class="fab fa-facebook-square mr-2" data-fa-transform="grow-8"></span> facebook</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <script>
      var isFluid = JSON.parse(localStorage.getItem('isFluid'));
      if (isFluid) {
        var container = document.querySelector('[data-layout]');
        container.classList.remove('container');
        container.classList.add('container-fluid');
      }
    </script>

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/lib/@fortawesome/all.min.js"></script>
    <script src="../assets/lib/stickyfilljs/stickyfill.min.js"></script>
    <script src="../assets/lib/sticky-kit/sticky-kit.min.js"></script>
    <script src="../assets/lib/is_js/is.min.js"></script>
    <script src="../assets/lib/lodash/lodash.min.js"></script>
    <script src="../assets/lib/perfect-scrollbar/perfect-scrollbar.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <script src="../assets/lib/echarts/echarts.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.6.15/browser-polyfill.min.js"></script>
    <script src="../assets/lib/progressbar.js/progressbar.min.js"></script>
    <script src="../assets/js/theme.min.js"></script>
  </body>

</html>