<div>
    <div class="job-listing-area pt-120 pb-120">
        <div class="container">
            <div class="">
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
                                        <!-- Select job items start -->
                                        <div class="select-job-items">
                                            <span>Sort by</span>
                                            <select name="select">
                                                <option value="">None</option>
                                                <option value="">job list</option>
                                            </select>
                                        </div>
                                        <!--  Select job items End-->
                                    </div>
                                </div>
                            </div>
                            <!-- Count of Job list End -->
                            <!-- single-job-content -->
                            <div class="card">
                                <div class="card-body">
                                    <table class="table table-stripped">
                                        <thead class="bg-info">
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Position</th>
                                            <th class="text-center">Location</th>
                                            <th class="text-center"> Daily Salary</th>
                                            <th class="text-center">Job Details</th>
                                            <th class="text-center">Action</th>
                                        </thead>
                                        <tbody>
                                            @foreach($jobs as $job)
                                            <tr>
                                                <div class="single-job-items mb-30">
                                                    <div class="job-items">
                                                        <td class="text-center"><div class="company-img">
                                                                <a href="#"><img src="assets/img/icon/job-list1.png" alt=""></a>
                                                            </div>
                                                        <div class="job-tittle job-tittle2">
                                                            <a href="#">
                                                                <h4>{{$job->name}}</h4>
                                                            </a></td>
                                                            <ul>
                                                                <td class="text-center"><li>{{$job->position}}</li></td>
                                                                <td class="text-center"><li><i class="fas fa-map-marker-alt"></i> {{$job->location}}</li></td>
                                                                <td class="text-center"><li>@money($job->salary)</li></td>
                                                                <td class="text-center"><li>{{$job->details}}</li></td>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <td class="text-center"><div class="items-link items-link2 f-right">
                                                        <a href="{{route('apply',$job->id)}}" class="btn btn-success">Apply Now</a>
                                                        <span>{{Carbon\Carbon::parse($job->created_at)->toFormattedDateString()}}</span>
                                                    </div></td>
                                                    
                                                </div>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
