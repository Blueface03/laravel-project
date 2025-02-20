@include('back.layout.stylesheet')
@include('back.layout.navbar')

<!-- Contact-->
<form id="contactForm" method="POST" action="{{ route('send.message') }}">
    @csrf
    <div class="row align-items-stretch mb-5">
        <div class="col-md-6">
            <div class="form-group">
                <!-- Name input-->
                <input class="form-control" id="name" type="text" name="name" placeholder="Your Name *" required />
            </div>
            <div class="form-group">
                <!-- Email address input-->
                <input class="form-control" id="email" type="email" name="email" placeholder="Your Email *" required />
            </div>
            <div class="form-group mb-md-0">
                <!-- Phone number input-->
                <input class="form-control" id="phone" type="tel" name="phone" placeholder="Your Phone *" required />
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group form-group-textarea mb-md-0">
                <!-- Message input-->
                <textarea class="form-control" id="message" name="message" placeholder="Your Message *" required></textarea>
            </div>
        </div>
    </div>
    <!-- Submit Button-->
    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Send Message</button></div>
</form>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


@include('back.layout.footer')
@include('back.layout.scripts')
@yield('content')