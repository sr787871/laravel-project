@include('header')
        <section class="as_breadcrum_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1>Contact</h1> 

                        <ul class="breadcrumb"> 
                            <li><a href="#">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div>
        @if (session('Success')) <h6 class="alert alert-success">{{ session('Success') }}</h6> @endif
        </div>
        <div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif    
        </div>
        <section class="as_contact_section as_padderTop80" style="padding-left: 400px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                    <div class="">
                            <h4 class="as_subheading" style="padding-left:250px">Have A Question?</h4>
                            <form action="{{route('appointment')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" name="pname" id="" class="form-control" value="{{ old('pname') }}" >
                                    @error('pname')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="text" name="email" id="" class="form-control" value="{{ old('email') }}" >
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Phone No.</label>
                                    <input type="tel" name="telephone" id="" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" name="date" id="" class="form-control" >
                                </div><div class="form-group">
                                    <label>Time</label>
                                    <input type="time" name="time" id="" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea name="message" id="" class="form-control"></textarea>
                                </div>
                                <button type="submit" class="as_btn">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@include('footer')