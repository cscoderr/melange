<div class="model">
    <!-- Login modal -->
    <div id="login-modal">
         <!-- Login Form -->
        <div class="row">
            <div class="text-left" style="margin-bottom: 20px;">
                <h3>{{ $jobDetails->job_title }}</h3>
                <b><span class="icon flaticon-map-locator"></span>{{ $jobDetails->location }}</li></b>
            </div>
            <br>
            <br>
            <div>
                <p><b>Language: </b>{{ ucwords($jobDetails->language) }}</p>
                <p><b>Hours: </b>{{ ucwords($jobDetails->hour) }}</p>
                <p><b>Salary: </b>{{ ucwords($jobDetails->salary_range) }}</p>
                <p><b>Closes: </b>{{ ucwords($jobDetails->deadline) }}</p>
                <p><b>Contract Type: </b>{{ ucwords($jobDetails->contract_type) }}</p>
                <p><b>Recruiter Type: </b>{{ ucwords($jobDetails->recruiter_type) }}</p>
                <br>
                <p class="card-text">{{ $jobDetails->job_description }}</p>
                <br>
                <a href="{{ url('/courier/register') }}" class="btn btn-primary pull-right">Apply Now</a>
            </div>
        </div>
        <!--End Login Form -->
    </div>
    <!-- End Login Module -->

    <script type="text/javascript">
        // Open modal in AJAX callback
        jQuery('.call-modal.signup').on('click', function(event) {
          event.preventDefault();
          this.blur();
          jQuery.get(this.href, function(html) {
            jQuery(html).appendTo('body').modal({
                fadeDuration: 300,
                fadeDelay: 0.15
            });
          });
        });
    </script>
</div>