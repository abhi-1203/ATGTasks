
@if (session()->has('success'))
  
  <div class="alert alert-dismissable alert-success">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!  {!! session()->get('success') !!}</strong> 
  </div>

@endif

@if (session()->has('not_success'))
  
  <div class="alert alert-dismissable alert-danger">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Sorry! {!! session()->get('not_success') !!}</strong> 
  </div>

@endif
​
​

