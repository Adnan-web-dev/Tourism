@extends('frontend.master_layout')
@section('main')

<section class="travel" id="travel">

    <div class="heading">
        <span>Complaint Section</span>
    </div>

    <div class="box-container">
        
        <div class="card " style="background-color: #222; color:#29d9d5;">
            <div class="card-header">
                <h3>Complaint Form</h3>
            </div>
            <div class="card-body" >
                <form action="{{ route('complaint.store') }}" method="POST" >
                    @csrf
                    <div class="form-group mb-3"  >
                        <label for="">Name</label>
                        <input type="text" class="form-control"  style="background-color: #222; color:#fff;   border: 0.2rem solid #29d9d5;" placeholder="Enter Name" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Subject</label>
                        <input type="text" class="form-control" style="background-color: #222; color:#fff;   border: 0.2rem solid #29d9d5;" name="subject" placeholder="Enter title" >
                    </div>                    
                    <div class="form-group mb-3">
                        <label for="">Message</label>
                        <textarea class="form-control" style="background-color: #222; color:#fff;   border: 0.2rem solid #29d9d5;" rows="3"name="complaint"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        
        
    </div>
    
    


</section>

@endsection
