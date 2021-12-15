@extends('layouts.main')
@section('content')
<section id="services" class="services">
  
  <div class="container mt-5" data-aos="fade-up">

    <div class="section-title">
      <h2>Scale Your Supplies</h2>
      <p>Kasper <span style="font-size: 20px;">Marketplace for Suppliers</span></p>
      <br><h6 class="fst-italic">Kasper is a B2B e-commerce marketplace where suppliers and contractors can digitally connect to
        communicate and transact with each other. Kasper helps suppliers of all sizes increase their sales
        potential and improve the visibility of their brands. </h6>
    </div>

    <div class="row">
      <div class="col-lg-3 col-md-6 align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"><i class="bx bxl-dribbble"></i></div>
          <h4>Sales Management</h4>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-file"></i></div>
          <h4>Instant <br>Messaging</h4>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-tachometer"></i></div>
          <h4>Free <br>Registration</h4>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-tachometer"></i></div>
          <h4>Increased Contacts</h4>
        </div>
      </div>


    </div>

  </div>
</section>
<section id="features" class="features">
  <div class="container aos-init aos-animate" data-aos="fade-up">

    <div class="row" data-aos="zoom-in">
      <div class="image col-lg-6 aos-init aos-animate"  ><img src="assets/img/procurement-3.png" height="500px" width="580px" data-aos="fade-right">  </div>
      <div class="col-lg-6 aos-init aos-animate " data-aos="fade-left" data-aos-delay="100">
        <div class="icon-box mt-5 mt-lg-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="150">
          <i class="bx bx-receipt"></i>
          <h4>Get Started</h4>
          <p>If you are a supplier in the construction sector or you are a user who's discovered a vendor who has not been listed on Kasper marketplace, let us know using the form below or contact us on 'hello@kaspersolutions.ae' </p>
        </div>
        <div class="icon-box mt-5 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="150">
          <i class="bx bx-cube-alt"></i>
          <h4>Receive access</h4>
          <p>Once you send the information to us, our team will meet with you to gather some information with regards to your business activities. Post verification you will be given access to the platform. </p>
        </div>
        <div class="icon-box mt-5 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="150">
          <i class="bx bx-images"></i>
          <h4>Trade and Transact</h4>
          <p>Start receiving tenders and responding to tenders from a variety of high profile construction companies building and operating in the region. (Registration is free of cost for a limited time only, HURRY!) </p>
        </div>
        
      </div>
    </div>

  </div>
</section>
<div class="container " id="accordionExample">
  <div class="accordion-item " data-aos="fade-right">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="background-color: rgb(0, 0, 0); color: rgb(255, 255, 255);"  >
        Why Kasper Solutions?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body" style="background-color: white; color: rgb(184, 137, 8);" >
        <strong>
          Kasper is a powerful, cost-effective, and
          secure cloud-based
          procurement platform.</strong>
          We designed this solution to help companies manage vendors, control costs, and
          streamline purchasing processes. With Kasper you can negotiate with suppliers,
          track vendor performance, and collaborate within your procurement department to
          enhance your procurement cycle.
      </div>
    </div>
  </div>
  <div class="accordion-item" data-aos="fade-left">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="background-color: rgb(20,20,20); color: rgb(255, 255, 255);" >
        How is Kasper Helpful?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body" style="background-color: white; color: rgb(184, 137, 8);" > 
        <strong>
          Kasper’s technology </strong>was designed to
          revolutionize the
          technological landscape of
          corporate purchasing. Companies of all sizes in a wide variety of industry
          verticals
          can manage their spend with ease and efficiency. We ensure our users can control
          their external and internal procurement processes and objectives.
      </div>
    </div>
  </div>
  <div class="accordion-item" data-aos="fade-right">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="background-color: rgb(40,40,40); color: rgb(255, 255, 255);" >
        What About Information Security?  
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body" style="background-color: white; color: rgb(184, 137, 8);" >
        <strong>
          The security </strong> of your data is important to us.
          We use SSL to
          encrypt your confidential
          data. That means all the information exchanged between you, your suppliers and
          Kasper is fully protected.
      </div>
    </div>
  </div>
  <div class="accordion-item" data-aos="fade-left">
    <h2 class="accordion-header" id="headingfour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour" style="background-color: rgb(60,60,60); color: rgb(255, 255, 255);" >
        Can a supplier see the offers I receive from other suppliers?  
      </button>
    </h2>
    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
      <div class="accordion-body" style="background-color: white; color: rgb(184, 137, 8);" >
        <strong>
          No. 
        </strong>
          Each supplier can see only the
          information that pertains
          to its business with your
          organization. The sourcing events created on Kasper are kept confidential
          between
          you and individual supplier participating
      </div>
    </div>
  </div>  <div class="accordion-item" data-aos="fade-right"> 
    <h2 class="accordion-header" id="headingfive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive" style="background-color: rgb(80,80,80); color: rgb(255, 255, 255);"  >
        Why are Kasper's packages so inexpensive? 
      </button>
    </h2>
    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
      <div class="accordion-body" style="background-color: white; color: rgb(184, 137, 8);" >
        <strong> First, we use the latest technology,</strong>
          which enables us to develop a powerful cloud-based solution efficiently.
          Efficiency saves time and money. We extend our savings to our users.
          Second, we only invest to ensure every feature added is simple to use,
          we eliminate a bunch of useless bells & whistles usually found in complicated
          and expensive procurement softwares. We focus. You save.
      </div>
    </div>
  </div>
</div>
<br><br>
@endsection