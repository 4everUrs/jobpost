<div>
    <div class="job-listing-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <!-- Left content -->
                
                <!-- Right content -->
                <div>
                    <!-- Featured_job_start -->
                    <section class="featured-job-area">
                        <div class="container">
                            <!-- Count of Job list Start -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="count-job mb-35">
                                        <span>39, 782 Jobs found</span>
                                        <!-- Select job items start -->
                                        <div class="select-job-items">
                                            <span>Sort by</span>
                                            <select name="select">
                                                <option value="">None</option>
                                                <option value="">job list</option>
                                                <option value="">job list</option>
                                                <option value="">job list</option>
                                            </select>
                                        </div>
                                        <!--  Select job items End-->
                                    </div>
                                </div>
                            </div>
                            <!-- Count of Job list End -->
                            <!-- single-job-content -->
                            @foreach($jobs as $job)
                                <div class="single-job-items mb-30">
                                    <div class="job-items">
                                        <div class="company-img">
                                            <a href="#"><img src="assets/img/icon/job-list1.png" alt=""></a>
                                        </div>
                                        <div class="job-tittle job-tittle2">
                                            <a href="#">
                                                <h4>{{$job->name}}</h4>
                                            </a>
                                            <ul>
                                                <li> Position: {{$job->position}}</li>
                                                <li><i class="fas fa-map-marker-alt"></i>Work Location: {{$job->location}}</li>
                                                <li>Salary ₱ {{$job->salary}}</li>
                                                <li>Job Details: {{$job->details}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="items-link items-link2 f-right">
                                        <a href="{{route('apply',$job->id)}}" class="btn btn-success">Apply Now</a>
                                        <span>7 hours ago</span>
                                    </div>
                                    
                                </div>
                            @endforeach

                        </div>
                    </section>
                    <!-- Featured_job_end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Job List Area End -->
   <!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="test" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>
