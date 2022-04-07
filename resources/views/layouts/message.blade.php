@if(Session('success'))
    <div class="example-alert">
        <div class="alert alert-success alert-icon alert-dismissible">
            <em class="icon ni ni-check-circle"></em>{{ Session('success') }}<button class="close" data-dismiss="alert"></button>
        </div>
    </div>
    <br>
@endif
@if(Session('error'))
    <div class="example-alert">
        <div class="alert alert-danger alert-icon alert-dismissible">
            <em class="icon ni ni-cross-circle"></em>{{ Session('error') }}<button class="close" data-dismiss="alert"></button>
        </div>
    </div>
    <br>
@endif
@if($errors->any())
    <div class="example-alert">
        <div class="alert alert-danger alert-icon alert-dismissible">
            <em class="icon ni ni-cross-circle"></em>{{ $errors->first() }}<button class="close" data-dismiss="alert"></button>
        </div>
    </div>
    <br>
@endif
