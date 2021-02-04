@extends('component/navbar')

<style>

My Resume
--------------------------------------------------------------*/
.resume .resume-title {
  font-size: 26px;
  font-weight: 700;
  margin-top: 20px;
  margin-bottom: 20px;
  color: #3b434a;
}

.resume .resume-item {
  padding: 0 0 20px 20px;
  margin-top: -2px;
  border-left: 2px solid #82909c;
  position: relative;
}

.resume .resume-item h4 {
  line-height: 18px;
  font-size: 16px;
  font-weight: 700;
  text-transform: uppercase;
  color: #ffb727;
  margin-bottom: 10px;
}

.resume .resume-item h5 {
  font-size: 16px;
  background: #eef0f2;
  padding: 5px 15px;
  display: inline-block;
  font-weight: 600;
  margin-bottom: 10px;
}

.resume .resume-item ul {
  padding-left: 20px;
}

.resume .resume-item ul li {
  padding-bottom: 10px;
}

.resume .resume-item:last-child {
  padding-bottom: 0;
}

.resume .resume-item::before {
  content: "";
  position: absolute;
  width: 16px;
  height: 16px;
  border-radius: 50px;
  left: -9px;
  top: 0;
  background: #fff;
  border: 2px solid #82909c;
}

</style>


@section('content')












<section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <span></span>
        <h2  class="mt-4">My Resume</h2>
       
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="resume-title">Sumary</h3>
          <div class="resume-item pb-0">
            <h4>AutomationCube</h4>
            <p><em>
        Develop, upgrade, and maintain debt notification software. <br></em>

         <em>Work on the Authentication System <br></em>
     
          <em>Create an Admin System <br> </em>
  
         <em> Work on the  Loan Features <br></em>

	
</em></p>
           
          </div>

          <h3 class="resume-title">Venture Garden </h3>
          <div class="resume-item">
            <h4>Role :  Junior Web  Developer</h4>
          </div>
          <div class="resume-item">
            <p><em>Built a web application for suya delivery,
               <em> Enhanced design and developed a responsive website for food delivery</em><br>
               <em> Integrated an online payment system into a web application for quick payment</em><br>
            <em>Integrated an authenticated system</em><br>
                Fixed bugs on existing websites and implemented enhancements that significantly improved web functionality and speed. Built and design responsive layout for web applications
                </em></p>
          </div>

          <h3 class="resume-title">HNG INTERNSHIP </h3>
          <div class="resume-item">
            <h4>Back-end Developer HNG 6.0     </h4>
          </div>
          <div class="resume-item">
            <p><em>I Worked alongside over 4,000 several remote counterparts to build several projeccts in a 3 months long internship.
                </em></p>
          </div>
        </div>
        <div class="col-lg-6">
          <h3 class="resume-title">Education</h3>
          <div class="resume-item">
            <h4>Osun State University, Osogbo. </h4>
            <em>Computer Science</em>
            <p>
            </p>
          </div>
          
        </div>
      </div>

    </div>
  </section><!-- End My Resume Section -->


    
@endsection