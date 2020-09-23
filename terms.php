<?php
  $conn = mysqli_connect("localhost", "root", "", "updated_ecom_store");
  $results = mysqli_query($conn, "SELECT * FROM customers");
  $customers = mysqli_fetch_all($results, MYSQLI_ASSOC);
?>
<?php
    session_start();
    if(!isset($_SESSION["customer_email"])) {
        header("location:login.php");
      }
      ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Mobicash| Terms</title>
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark navbar-cyan">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index2.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>

      <!-- SEARCH FORM -->
      <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
              <!-- Messages Dropdown Menu -->
              <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="far fa-comments"></i>
                  <span class="badge badge-danger navbar-badge">1</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                      <img src="dist/img/gift.png" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                      <div class="media-body">
                        <h4 class="dropdown-item-title text-primary">
                          Support <i class="ion ion-checkmark-circled"></i>
                          <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                        </h4>
                        <p class="text-sm">Your account is now active</p>
                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                      </div>
                    </div>
                    <!-- Message End -->
                  </a>
                  <div class="dropdown-divider"></div>

              </li>
              <!-- Notifications Dropdown Menu -->
              <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="far fa-bell"></i>
                  <span class="badge badge-warning navbar-badge">1</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  <span class="dropdown-item dropdown-header">1 Notifications</span>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> 1 new messages
                    <span class="float-right text-muted text-sm">3 mins</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link"data-slide="true" href="#" role="button">
                  <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index2.php" class="brand-link">
        <img src="dist/img/gift.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><span style="color:#ff0000;">S</span><span style="color:#ff4000;">k</span><span style="color:#ff7f00;">y</span><span style="color:#ffbf00;">-</span><span style="color:#ffff00;">s</span><span style="color:#80ff00;">
                t</span><span style="color:#00ff00;">o</span><span style="color:#00ff80;">r</span><span style="color:#00ffff;">e</span></span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/gift.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info"><span style="color:#ff0000;">S</span><span style="color:#ff4000;">k</span><span style="color:#ff7f00;">y</span><span style="color:#ffbf00;">-</span><span style="color:#ffff00;">s</span><span style="color:#80ff00;">
            t</span><span style="color:#00ff00;">o</span><span style="color:#00ff80;">r</span><span style="color:#00ffff;">e</span></div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="./index.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dashboard v1</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../../index2.php" class="nav-link active">
                    <i class="far fa-circle nav-icon text-warning"></i>
                    <p>Dashboard</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/updated_ecom_store/index.php" class="nav-link">
                    <i class="far fa-circle nav-icon text-success"></i>
                    <p>Shop</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="pages/examples/profile.php" class="nav-link">
                <i class="nav-icon fas fa-th text-info"></i>
                <p>
                  Profile
                  <span class="right badge badge-danger">New</span>
                </p>
              </a>
            </li>
            <li class="nav-header text-center"><i class="ion ion-ios-settings-strong"></i></li>
            <li class="nav-item">
              <a href="logout.php" class="nav-link">
                <i class="nav-icon far fa-circle text-danger"></i>
                <p class="text">Logout</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="support.php" class="nav-link">
                <i class="nav-icon far fa-circle text-warning"></i>
                <p>Support</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="terms.php" class="nav-link">
                <i class="nav-icon far fa-circle text-info"></i>
                <p>Terms</p>
              </a>
            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper ">
        <div class="container-fluid ">

    <div class="card text-sm mt-2 ">
        <div class="card-header text-center text-info">
	<h4 class="card-title ">General Terms and Conditions of Use of the Marketplace
for Buyers and Sellers</h4>
</div>
<div class="card-body">
<h1>Contents</h1>

<p>1. Introduction</p>
<p>2. Registration and account</p>
<p>3. Terms and conditions of sale</p>
<p>4. Returns and refunds</p>
<p>5. Payments</p>
<p>6. Rules about your content</p>
<p>7. Our rights to use your content</p>
<p>8. Use of website and mobile applications</p>
<p>9. Copyright and trademarks</p>
<p>10.Data privacy</p>
<p>11.Due diligence and audit rights</p>
<p>12. Sky-store’s role as a marketplace</p>
<p>13. Limitations and exclusions of liability</p>
<p>14. Indemnification</p>
<p>15.Breaches of these general terms and conditions</p>
<p>16.Entire agreement</p>
<p>17. Hierarchy</p>
<p>18.Variation</p>
<p>19.Severability</p>
<p>20.Assignment</p>
<p>21.Third party rights</p>
<p>22. Law and jurisdiction</p>
<p>23.Our company details</p>
<h4>1. Introduction</h4>
<p>
	1.1. Ecart Services Kenya Limited (“Sky-store” or “we”) operates an e-commerce
platform consisting of a website and mobile application (“marketplace”),
together with supporting logistics and payment infrastructure, for the sale and
purchase of consumer products in Kenya (“territory”).
</p>
<p>1.2. These general terms and conditions shall apply to buyers and sellers on the
marketplace and shall govern your use of the marketplace and related services.</p>
<p>
	1.3. By using our marketplace, you accept these general terms and conditions in
full. If you disagree with these general terms and conditions or any part of
these general terms and conditions, you must not use our marketplace.
</p>
<p>1.4. If you use our marketplace in the course of a business or other organizational
project, then by so doing you:</p>
<p class="indent">
	1.4.1. confirm that you have obtained the necessary authority to agree to
these general terms and conditions;
</p>
<p class="indent">
	1.4.2. bind both yourself and the person, company or other legal entity that
operates that business or organizational project, to these general
terms and conditions; and
</p>
<p class="indent">
	1.4.3. agree that "you" in these general terms and conditions shall reference
both the individual user and the relevant person, company or legal
entity unless the context requires otherwise.
</p>
<h4>2. Registration and account</h4>
<p>2.1. You may not register with our marketplace if you are under 18 years of age (by
using our marketplace or agreeing to these general terms and conditions, you
warrant and represent to us that you are at least 18 years of age).</p>
<p>2.2. You may register for an account with our marketplace by completing and
submitting the registration form on our marketplace.</p>
<p>2.3. You represent and warrant that all information provided in the registration form
is complete and accurate.</p>
<p>2.4. If you register for an account with our marketplace, you will be asked to provide
an email address/user ID and password and you agree to:<p>
<p class="indent">2.4.1. keep your password confidential;</p>
<p class="indent">2.4.2. notify us in writing immediately (using our contact details provided at
section 23) if you become aware of any disclosure of your password;
and</p>
<p class="indent">
	2.4.3. be responsible for any activity on our marketplace arising out of any
failure to keep your password confidential, and that you may be held
liable for any losses arising out of such a failure.
</p>
<p>2.5. Your account shall be used exclusively by you and you shall not transfer your
account to any third party. If you authorize any third party to manage your
account on your behalf this shall be at your own risk.</p>
<p>2.6. We may suspend or cancel your account, and/or edit your account details, at
any time in our sole discretion and without notice or explanation, providing
that if we cancel any products or services you have paid for but not received,
and you have not breached these general terms and conditions, we will refund
you in respect of the same.</p>
<p>2.7. You may cancel your account on our marketplace by contacting us as provided
at section 23.</p>
<h4>3. Terms and conditions of sale </h4>
<p>3.1. You acknowledge and agree that:</p>
<p class="indent">3.1.1. the marketplace provides an online location for sellers to sell and
buyers to purchase products;</p>
<p class="indent">
	3.1.2. we shall accept binding sales, on behalf of sellers, but Mobicashis not a
party to the transaction between the seller and the buyer; and
</p>
<p class="indent">
	3.1.3. a contract for the sale and purchase of a product or products will come
into force between the buyer and seller, and accordingly you commit
to buying or selling the relevant product or products, upon the buyer’s
confirmation of purchase via the marketplace.
</p>
<p>3.2. Subject to these general terms and conditions, the seller’s terms of business
shall govern the contract for sale and purchase between the buyer and the
seller. Notwithstanding this, the following provisions will be incorporated into
the contract of sale and purchase between the buyer and the seller:</p>
<p class="indent">
	3.2.1. the price for a product will be as stated in the relevant product listing;
</p>
<p class="indent">
	3.2.2. the price for the product must include all taxes and comply with
applicable laws in force from time to time;
</p>
<p class="indent">
	3.2.3. delivery charges, packaging charges, handling charges, administrative
charges, insurance costs, other ancillary costs and charges, will only
be payable by the buyer if this is expressly and clearly stated in the
product listing;
</p>
<p class="indent">
	3.2.4. products must be of satisfactory quality, fit and safe for any purpose
specified in, and conform in all material respects to, the product listing
and any other description of the products supplied or made available
by the seller to the buyer; and
</p>
<p class="indent">3.2.5. the seller warrants that the seller has good title to, and is the sole
legal and beneficial owner of, the products, and that the products are
not subject to any third party rights or restrictions including in respect
of third party intellectual property rights and/or any criminal,
insolvency or tax investigation or proceedings.</p>
<h4>4. Returns and refunds</h4>
<p>4.1. Returns of products by buyers and acceptance of returned products by sellers
shall be managed by us in accordance with the returns page on the
marketplace, as may be amended from time to time. Acceptance of returns
shall be in our discretion, subject to compliance with applicable laws of the
territory.</p>
<p>4.2. Refunds in respect of returned products shall be managed in accordance with
the refunds page on the marketplace, as may be amended from time to time.
Our rules on refunds shall be exercised in our discretion, subject to applicable
laws of the territory. We may offer refunds, in our discretion:</p>
<p class="indent">
	4.2.1. in respect of the product price;
</p>
<p class="indent">
	4.2.2. local and/or international shipping fees (as stated on the refunds
page); and
</p>
<p class="indent">
	4.2.3. by way of store credits, wallet refunds, vouchers, mobile money
transfer, bank transfers or such other method as we may determine
from time to time.
</p>
<p>4.3. Returned products shall be accepted and refunds issued by Sky-store, for and on
behalf of the seller.</p>
<p>4.4. Changes to our returns page or refunds page shall be effective in respect of all
purchases made from the date of publication of the change on our website.
</p>
<h4>5. Payments</h4>
<p>5.1. You must make payments due under these general terms and conditions in
accordance with the Payments Information and Guidelines on the marketplace.
6. Rules about your content</p>
<p>6.1. In these general terms and conditions, "your content" means:</p>
<p class="indent">
	6.1.1. all works and materials (including without limitation text, graphics,
images, audio material, video material, audio-visual material, scripts,
software and files) that you submit to us or our marketplace for
storage or publication, processing by, or onward transmission; and
</p>
<p class="indent">
	6.1.2. all communications on the marketplace, including product reviews,
feedback and comments.
</p>
<p>6.2. Your content, and the use of your content by us in accordance with these
general terms and conditions, must be accurate, complete and truthful.</p>
<p>6.3. Your content must be appropriate, civil and tasteful, and accord with generally
accepted standards of etiquette and behaviour on the internet, and must not:</p>
<p class="indent">
	6.3.1. be offensive, obscene, indecent, pornographic, lewd, suggestive or
sexually explicit;
</p>
<p class="indent">6.3.2. depict violence in an explicit, graphic or gratuitous manner; or</p>
<p class="indent">6.3.3. be blasphemous, in breach of racial or religious hatred or
discrimination legislation;</p>
<p class="indent">
	6.3.4. be deceptive, fraudulent, threatening, abusive, harassing, anti-social,
menacing, hateful, discriminatory or inflammatory;
</p>
<p class="indent">
	6.3.5. cause annoyance, inconvenience or needless anxiety to any person;
or
</p>
<p class="indent">
	6.3.6. constitute spam.
</p>
<p>6.4. Your content must not be illegal or unlawful, infringe any person's legal rights,
or be capable of giving rise to legal action against any person (in each case in
any jurisdiction and under any applicable law). Your content must not infringe
or breach:</p>
<p class="indent">
	6.4.1. any copyright, moral right, database right, trademark right, design
right, right in passing off or other intellectual property right;
</p>
<p class="indent">
	6.4.2. any right of confidence, right of privacy or right under data protection
legislation;
</p>
<p class="indent">
	6.4.3. any contractual obligation owed to any person; or
</p>
<p class="indent">
	6.4.4. any court order.
</p>
<p>6.5. You must not use our marketplace to link to any website or web page consisting
of or containing material that would, were it posted on our marketplace, breach
the provisions of these general terms and conditions.</p>
<p>6.6. You must not submit to our marketplace any material that is or has ever been
the subject of any threatened or actual legal proceedings or other similar
complaint.</p>
<p>6.7. The review function on the marketplace may be used to facilitate buyer reviews
on products. You shall not use the review function or any other form of
communication to provide inaccurate, inauthentic or fake reviews.</p>
<p>6.8. You must not interfere with a transaction by: (i) contacting another user to buy
or sell an item listed on the marketplace outside of the marketplace; or (ii)
communicating with a user involved in an active or completed transaction to
warn them away from a particular buyer, seller or item; or (iii) contacting
another user with the intent to collect any payments.</p>
<p>6.9. You acknowledge that all users of the marketplace are solely responsible for
interactions with other users and you shall exercise caution and good judgment
in your communication with users. You shall not send them personal
information including credit card details.</p>
<p>6.10. We may periodically review your content and we reserve the right to remove
any content in our discretion for any reason whatsoever.</p>
<p>6.11. If you learn of any unlawful material or activity on our marketplace, or any
material or activity that breaches these general terms and conditions, you may
inform us by contacting us as provided at section 23.</p>
<h4>7. Our rights to use your content</h4>
<p>7.1. You grant to us a worldwide, irrevocable, non-exclusive, royalty-free license to
use, reproduce, store, adapt, publish, translate and distribute your content
across our marketing channels and any existing or future media.</p>
<p>7.2. You grant to us the right to sub-license the rights licensed under section 7.1.</p>
<p>7.3. You grant to us the right to bring an action for infringement of the rights
licensed under section 7.1.</p>
<p>7.4. You hereby waive all your moral rights in your content to the maximum extent
permitted by applicable law; and you warrant and represent that all other
moral rights in your content have been waived to the maximum extent
permitted by applicable law.</p>
<p>7.5. Without prejudice to our other rights under these general terms and conditions,
if you breach our rules on content in any way, or if we reasonably suspect that
you have breached our rules on content, we may delete, unpublish or edit any
or all of your content.</p>
<h4>8. Use of website and mobile applications</h4>
<p>8.1. In this section 8 words “marketplace” and "website” shall be used
interchangeably to refer to Sky-store’s websites and mobile applications.</p>
<p>8.2. You may:</p>
<p class="indent">
	8.2.1. view pages from our website in a web browser;
</p>
<p class="indent">
	8.2.2. download pages from our website for caching in a web browser;
</p>
<p class="indent">
	8.2.3. print pages from our website for your own personal and noncommercial use, providing that such printing is not systematic or
excessive;
</p>
<p class="indent">
	8.2.4. stream audio and video files from our website using the media player
on our website; and
</p>
<p class="indent">
	8.2.5. use our marketplace services by means of a web browser,
subject to the other provisions of these general terms and conditions.
</p>
<p>8.3. Except as expressly permitted by section 8.2 or the other provisions of these
general terms and conditions, you must not download any material from our
website or save any such material to your computer.</p>
<p>8.4. You may only use our website for your own personal and business purposes in
respect of selling or purchasing products on the marketplace.</p>
<p>8.5. Except as expressly permitted by these general terms and conditions, you must
not edit or otherwise modify any material on our website.</p>
<p>8.6. Unless you own or control the relevant rights in the material, you must not:</p>
<p class="indent">
	8.6.1. republish material from our website (including republication on
another website);
</p>
<p class="indent">
	8.6.2. sell, rent or sub-license material from our website;
</p>
<p class="indent">8.6.3. show any material from our website in public;</p>
<p class="indent">8.6.4. exploit material from our website for a commercial purpose; or</p>
<p class="indent">8.6.5. redistribute material from our website.</p>
<p>8.7. Notwithstanding section 8.6, you may forward links to products on our website
and redistribute our newsletter and promotional materials in print and
electronic form to any person.</p>
<p>8.8. We reserve the right to suspend or restrict access to our website, to areas of
our website and/or to functionality upon our website. We may, for example,
suspend access to the website during server maintenance or when we update
the website. You must not circumvent or bypass, or attempt to circumvent or
bypass, any access restriction measures on the website.</p>
<p>8.9. You must not:</p>
<p class="indent">
	8.9.1. use our website in any way or take any action that causes, or may
cause, damage to the website or impairment of the performance,
availability, accessibility, integrity or security of the website;
</p>
<p class="indent">
	8.9.2. use our website in any way that is unethical, unlawful, illegal,
fraudulent or harmful, or in connection with any unlawful, illegal,
fraudulent or harmful purpose or activity;
</p>
<p class="indent">8.9.3. hack or otherwise tamper with our website;</p>
<p class="indent">8.9.4. probe, scan or test the vulnerability of our website without our
permission;</p>
<p class="indent">8.9.5. circumvent any authentication or security systems or processes on or
relating to our website;</p>
<p class="indent">8.9.6. use our website to copy, store, host, transmit, send, use, publish or
distribute any material which consists of (or is linked to) any spyware,
computer virus, Trojan horse, worm, keystroke logger, rootkit or other
malicious computer software;</p>

<p class="indent">
	8.9.7. impose an unreasonably large load on our website resources (including
bandwidth, storage capacity and processing capacity);
</p>
<p class="indent">
	8.9.8. decrypt or decipher any communications sent by or to our website
without our permission;
</p>
<p class="indent">
	8.9.9. conduct any systematic or automated data collection activities
(including without limitation scraping, data mining, data extraction
and data harvesting) on or in relation to our website without our
express written consent;
</p>
<p class="indent">
	8.9.10. access or otherwise interact with our website using any robot, spider
or other automated means, except for the purpose of search engine
indexing;
</p>

<p class="indent">
	8.9.12. violate the directives set out in the robots.txt file for our website;
</p>
<p class="indent">
	8.9.13. use data collected from our website for any direct marketing activity
(including without limitation email marketing, SMS marketing,
telemarketing and direct mailing); or
</p>
<p class="indent">8.9.14. do anything that interferes with the normal use of our website.</p>
<h4>9. Copyright and trademarks</h4>
<p>9.1. Subject to the express provisions of these general terms and conditions:</p>
<p class="indent">9.1.1. we, together with our licensors, own and control all the copyright and
other intellectual property rights in our website and the material on
our website; and</p>
<p class="indent">9.1.2. all the copyright and other intellectual property rights in our website
and the material on our website are reserved.</p>
<p>9.2. Sky-store’s logos and our other registered and unregistered trademarks are
trademarks belonging to us; we give no permission for the use of these
trademarks, and such use may constitute an infringement of our rights.</p>
<p>9.3. The third party registered and unregistered trademarks or service marks on
our website are the property of their respective owners and we do not endorse
and are not affiliated with any of the holders of any such rights and as such we
cannot grant any license to exercise such rights.</p>
<h4>10. Data privacy</h4>
<p>10.1. Buyers agree to processing of their personal data in accordance with the terms
of Sky-store’s Privacy and Cookie Notice.</p>
<p>10.2. Mobicashshall process all personal data obtained through the marketplace and
related services in accordance with the terms of our Privacy and Cookie Notice
and Privacy Policy.</p>
<p>10.3. Sellers shall be directly responsible to buyers for any misuse of their personal
data and Mobicashshall bear no liability to buyers in respect of any misuse by
sellers of their personal data.</p>
<h4>11. Due diligence and audit rights</h4>
<p>11.1. We operate an anti-money laundering compliance program and reserve the
right to perform due diligence checks on all users of the marketplace.</p>
<p>11.2. You agree to provide to us all such information, documentation and access to
your business premises as we may require:</p>
<p class="indent">
	11.2.1. in order to verify your adherence to, and performance of, your
obligations under this Agreement;
</p>
<p class="indent">
	11.2.2. for the purpose of disclosures pursuant to a valid order by a court or
other governmental body; or
</p>
<p class="indent">
	11.2.3. as otherwise required by law or applicable regulation.
</p>
<h4>12. Sky-store’s role as a marketplace</h4>
<p>12.1. You acknowledge that:</p>
<p class="indent">12.1.1. we do not confirm the identity of all marketplace users, check their
credit worthiness or bona fides, or otherwise vet them;</p>
<p class="indent">12.1.2. we do not check, audit or monitor all information contained in listings;</p>
<p class="indent">12.1.3. we are not party to any contract for the sale or purchase of products
advertised on the marketplace;</p>
<p class="indent">12.1.4. we are not involved in any transaction between a buyer and a seller in
any way, save that we facilitate a marketplace for buyers and sellers
and process payments on behalf of sellers;</p>
<p class="indent">
	12.1.5. we are not the agents for any buyer or seller, and accordingly we will not be liable to any person in relation to the offer for
sale, sale or purchase of any products advertised on our marketplace;
furthermore we are not responsible for the enforcement of any contractual
obligations arising out of a contract for the sale or purchase of any products
and we will have no obligation to mediate between the parties to any such
contract.
</p>
<p>12.2. We do not warrant or represent:</p>

<p class="indent">12.2.1. the completeness or accuracy of the information published on our
marketplace;</p>
<p class="indent">12.2.2. that the material on the marketplace is up to date;</p>
<p class="indent">12.2.3. that the marketplace will operate without fault; or</p>
<p class="indent">12.2.4. that the marketplace or any service on the marketplace will remain
available.</p>
<p>12.3. We reserve the right to discontinue or alter any or all of our marketplace
services, and to stop publishing our marketplace, at any time in our sole
discretion without notice or explanation; and you will not be entitled to any
compensation or other payment upon the discontinuance or alteration of any
marketplace services, or if we stop publishing the marketplace.</p>
<p>12.4. We do not guarantee any commercial results concerning the use of the
marketplace.</p>
<p>12.5. To the maximum extent permitted by applicable law and subject to section
13.1 below, we exclude all representations and warranties relating to the
subject matter of these general terms and conditions, our marketplace and the
use of our marketplace.</p>
<h4>13. Limitations and exclusions of liability</h4>
<p>13.1. Nothing in these general terms and conditions will:</p>
<p class="indent">13.1.1. limit any liabilities in any way that is not permitted under applicable
law; or</p>
<p class="indent">13.1.2. exclude any liabilities or statutory rights that may not be excluded
under applicable law.</p>
<p>13.2. The limitations and exclusions of liability set out in this section 13 and
elsewhere in these general terms and conditions:</p>
<p class="indent">13.2.1. are subject to section 13.1; and</p>
<p class="indent">13.2.2. govern all liabilities arising under these general terms and conditions
or relating to the subject matter of these general terms and conditions,
including liabilities arising in contract, in tort (including negligence)
and for breach of statutory duty, except to the extent expressly
provided otherwise in these general terms and conditions.</p>
<p>13.3. In respect of the services offered to you free of charge we will not be liable to
you for any loss or damage of any nature whatsoever.</p>
<p>13.4. Our aggregate liability to you in respect of any contract to provide services to
you under these general terms and conditions shall not exceed the total
amount paid and payable to us under the contract. Each separate transaction
on the marketplace shall constitute a separate contract for the purpose of this
section 13.4.</p>
<p>13.5. Notwithstanding section 13.4 above, we will not be liable to you for any loss or
damage of any nature, including in respect of:</p>
<p class="indent">
	13.5.1. any losses occasioned by any interruption or dysfunction to the
website;
</p>
<p class="indent">
	13.5.2. any losses arising out of any event or events beyond our reasonable
control;
</p>
<p class="indent">
	13.5.3. any business losses, including (without limitation) loss of or damage
to profits, income, revenue, use, production, anticipated savings,
business, contracts, commercial opportunities or goodwill;
</p>
<p class="indent">
	13.5.4. any loss or corruption of any data, database or software; or
</p>
<p class="indent">
	13.5.5. any special, indirect or consequential loss or damage.
</p>
<p>13.6. We accept that we have an interest in limiting the personal liability of our
officers and employees and, having regard to that interest, you acknowledge
that we are a limited liability entity; you agree that you will not bring any claim
personally against our officers or employees in respect of any losses you suffer
in connection with the marketplace or these general terms and conditions (this
will not limit or exclude the liability of the limited liability entity itself for the
acts and omissions of our officers and employees).</p>
<p>13.7. Our marketplace includes hyperlinks to other websites owned and operated by
third parties; such hyperlinks are not recommendations. We have no control
over third party websites and their contents, and we accept no responsibility
for them or for any loss or damage that may arise from your use of them.</p>
<h4>14. Indemnification</h4>
<p>14.1. You hereby indemnify us, and undertake to keep us indemnified, against:</p>
<p class="inner">
	14.1.1. any and all losses, damages, costs, liabilities and expenses (including
without limitation legal expenses and any amounts paid by us to any
third party in settlement of a claim or dispute) incurred or suffered by
us and arising directly or indirectly out of your use of our marketplace
or any breach by you of any provision of these general terms and
conditions or the Mobicashcodes, policies or guidelines; and
</p>
<p class="inner">
	14.1.2. any VAT liability or other tax liability that we may incur in relation to
any sale, supply or purchase made through our marketplace, where
that liability arises out of your failure to pay, withhold, declare or
register to pay any VAT or other tax properly due in any jurisdiction.
</p>
<h4>15. Breaches of these general terms and conditions</h4>
<p>15.1. If we permit the registration of an account on our marketplace it will remain
open indefinitely, subject to these general terms and conditions.</p>
<p>15.2. If you breach these general terms and conditions, or if we reasonably suspect
that you have breached these general terms and conditions or any Sky-store
codes, policies or guidelines in any way we may:</p>
<p class="indent">15.2.1. temporarily suspend your access to our marketplace;</p>
<p class="indent">15.2.2. permanently prohibit you from accessing our marketplace;</p>
<p class="indent">15.2.3. block computers using your IP address from accessing our
marketplace;</p>
<p class="indent">15.2.4. contact any or all of your internet service providers and request that
they block your access to our marketplace;</p>
<p class="indent">15.2.5. suspend or delete your account on our marketplace; and/or</p>
<p class="indent">15.2.6. commence legal action against you, whether for breach of contract or
otherwise.</p>
<p>15.3. Where we suspend, prohibit or block your access to our marketplace or a part
of our marketplace you must not take any action to circumvent such
suspension or prohibition or blocking (including without limitation creating
and/or using a different account).</p>
<h4>16. Entire agreement</h4>
<p>16.1. These general terms and conditions and the Mobicashcodes, policies and
guidelines (and in respect of sellers the seller terms and conditions) shall
constitute the entire agreement between you and us in relation to your use of
our marketplace and shall supersede all previous agreements between you and
us in relation to your use of our marketplace.</p>
<h4>17. Hierarchy</h4>
<p>17.1. Should these general terms and conditions, the seller terms and conditions,
and the Mobicashcodes, policies and guidelines be in conflict, these terms and
conditions, the seller terms and conditions and the Mobicashcodes, policies and
guidelines shall prevail in the order here stated.</p>
<h4>18. Variation</h4>
<p>18.1. We may revise these general terms and conditions, the seller terms and
conditions, and the Mobicashcodes, policies and guidelines from time to time.</p>
<p>18.2. The revised general terms and conditions shall apply from the date of
publication on the marketplace.</p>
<h4>19. Severability</h4>
<p>19.1. If a provision of these general terms and conditions is determined by any court
or other competent authority to be unlawful and/or unenforceable, the other
provisions will continue in effect.</p>
<p>19.2. If any unlawful and/or unenforceable provision of these general terms and
conditions would be lawful or enforceable if part of it were deleted, that part
will be deemed to be deleted, and the rest of the provision will continue in
effect.</p>
<h4>20. Assignment</h4>
<p>20.1. You hereby agree that we may assign, transfer, sub-contract or otherwise deal
with our rights and/or obligations under these general terms and conditions.</p>
<p>20.2. You may not without our prior written consent assign, transfer, sub-contract or
otherwise deal with any of your rights and/or obligations under these general
terms and conditions.</p>
<h4>21. Third party rights</h4>
<p>21.1. A contract under these general terms and conditions is for our benefit and your
benefit, and is not intended to benefit or be enforceable by any third party.</p>
<p>21.2. The exercise of the parties' rights under a contract under these general terms
and conditions is not subject to the consent of any third party.</p>
<h4>22. Law and jurisdiction</h4>
<p>22.1. These general terms and conditions shall be governed by and construed in
accordance with the laws of the territory.</p>
<p>22.2. Any disputes relating to these general terms and conditions shall be subject to
the exclusive jurisdiction of the courts of the territory.</p>


</div>

</div>
</div>
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2019-<?php echo date("Y");?> <a href="http://connect-academy.com/">Sky-store</a>.</strong>
      All rights reserved.

    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
    <script src="dist/js/utils.js"></script>
<script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- overlayScrollbars -->

  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>

  <!-- OPTIONAL SCRIPTS -->
  <script src="dist/js/demo.js"></script>

<script type="text/javascript">
    jQuery(function() {
      menudiv = jQuery(".elementor-column-wrap");
      jQuery(window).on("click", function(event) {
        if (menudiv.has(event.target).length == 0 && !menudiv.is(event.target)) {
          menudiv.hide();
          //or  menudiv.removeClass("in or something else");
        }
      });
    });
</script>
</body>

</html>
