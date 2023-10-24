<div class="contact-area section-padding" >
    <div class="container">
       <div class="row">
          <div class="col-md-8 offset-md-2" data-scroll-index="5">
             <div class="section-title text-center">
                <h2>Get In touch</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididuntut labore et dolore magna aliqua. Ut enim ad minim.</p>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-md-12">
             <div class="contact-form m-t">
                <form action="#">
                   <div class="row">
                      <div class="col-md-6">
                         <p>
                            <input type="text" required name="name" placeholder="Enter Your Name">
                         </p>
                      </div>
                      <div class="col-md-6">
                         <p>
                            <input type="email" required name="mail" placeholder="Enter Your Email">
                         </p>
                      </div>
                   </div>
                   <div class="row">
                      <div class="col-md-6">
                         <p>
                            <input type="tel"  name="phone" placeholder="Enter Your Phone">
                         </p>
                      </div>
                      <div class="col-md-6">
                         <p>
                            <input type="text" required name="subject" placeholder="Your Subject">
                         </p>
                      </div>
                   </div>
                   <div class="row">
                      <div class="col-md-12">
                         <p>
                            <textarea cols="30" rows="10" name="discription" placeholder="Write Your Message"></textarea>
                         </p>
                      </div>
                   </div>
                   <div class="row text-center">
                      <div class="col-md-12">
                         <p>
                            <input type="submit" name="submit" value="Send Message">
                         </p>
                      </div>
                   </div>
                   <div class="main-content">
                     @if (!empty($message))
                         <div class="alert alert-warning alert-dismissible fade show" role="alert">
                             <strong>{{ $message }}</strong>
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 <input type="hidden" value="{{ $message }}" name="message" id="msg">
                             </button>
                         </div>
                     @endif
                </form>
             </div>
          </div>
       </div>
    </div>
 </div>