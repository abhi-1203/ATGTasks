
 
  <div class="alert alert-dismissable alert-success">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> 
  </div>



@if (session()->has('not_success'))
  
  <div class="alert alert-dismissable alert-danger">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Sorry! {!! session()->get('not_success') !!}</strong> 
  </div>

@endif
​
​

