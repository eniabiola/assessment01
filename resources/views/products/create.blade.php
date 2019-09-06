<link rel="stylesheet" type="text/css" href="{{ asset('css/tachyons.min.css') }}">
<header class="sans-serif">
  <div class="cover bg-left bg-center-l" style="background-image: url(http://mrmrs.github.io/photos/u/011.jpg)">
    <div class="bg-black-80 pb5 pb6-m pb7-l">
      <nav class="dt w-100 mw8 center"> 
        <div class="dtc w2 v-mid pa3">
          <a href="/" class="dib w2 h2 pa1 ba b--white-90 grow-large border-box">
            <svg class="link white-90 hover-white" data-icon="skull" viewBox="0 0 32 32" style="fill:currentcolor"><title>skull icon</title><path d="M16 0 C6 0 2 4 2 14 L2 22 L6 24 L6 30 L26 30 L26 24 L30 22 L30 14 C30 4 26 0 16 0 M9 12 A4.5 4.5 0 0 1 9 21 A4.5 4.5 0 0 1 9 12 M23 12 A4.5 4.5 0 0 1 23 21 A4.5 4.5 0 0 1 23 12"></path></svg>
          </a>
        </div>
        <div class="dtc v-mid tr pa3">
          <a class="f6 fw4 hover-white no-underline white-70 dn dib-ns pv2 ph3" href="/" >How it Works</a> 
          <a class="f6 fw4 hover-white no-underline white-70 dn dib-ns pv2 ph3" href="/" >Pricing</a> 
          <a class="f6 fw4 hover-white no-underline white-70 dn dib-l pv2 ph3" href="/" >About</a> 
          <a class="f6 fw4 hover-white no-underline white-70 dn dib-l pv2 ph3" href="/" >Careers</a> 
          <a class="f6 fw4 hover-white no-underline white-70 dib ml2 pv2 ph3 ba" href="/" >Sign Up</a> 
        </div>
      </nav> 
      <div class="tc-l mt4 mt5-m mt6-l ph3">
        <h1 class="f2 f1-l fw2 white-90 mb0 lh-title">This is your super impressive headline</h1>
        <h2 class="fw1 f3 white-80 mt3 mb4">Now a subheadline where explain your wonderful new startup even more</h2>
        <a class="f6 no-underline grow dib v-mid bg-blue white ba b--blue ph3 pv2 mb3" href="/">Call to Action</a>
        <span class="dib v-mid ph3 white-70 mb3">or</span>
        <a class="f6 no-underline grow dib v-mid white ba b--white ph3 pv2 mb3" href="">Secondary call to action</a>
      </div>
    </div>
  </div> 
</header>
<script src="{{ asset('js/jquery.js') }} "></script>  

<main class="pa4 black-80">
  <div class="alert alert-danger print-error-msg" style="display:none">
        <ul></ul>
    </div>

	<form class="measure center">
	@csrf
    <fieldset id="sign_up" class="ba b--transparent ph0 mh0">
      <legend class="f4 fw6 ph0 mh0">Create Product</legend>
		<div class="mt3">
			<label id="name" class="db fw6 lh-copy f6">Name of product</label>
			<input type="text" name="name" id="name" class="pa2 input-reset ba bg-transparent hover-bg-black hover-white w-100" type="email" name="email-address" >
		</div>
		<div class="mv3">
			<label id="description" class="db fw6 lh-copy f6">Product Details</label>
			<textarea id="description" name="description"></textarea>
		</div>
		<div class="mv3">
			<label id="price" class="db fw6 lh-copy f6">Price in Numbers</label>
			<input type="number" id="price" name="price" class="pa2 input-reset ba bg-transparent hover-bg-black hover-white w-100" type="email" name="email-address" >
		</div>
		<div class="mv3">
			<label id="category" class="db fw6 lh-copy f6">Product Category</label>
			<input type="text" id="category" name="category" class="pa2 input-reset ba bg-transparent hover-bg-black hover-white w-100" type="email" name="email-address" >
		</div>
		<div class="mv3">
			<label id="image" class="db fw6 lh-copy f6">Product Image</label>
			<input type="file" id="image" name="image" class="pa2 input-reset ba bg-transparent hover-bg-black hover-white w-50" type="email" name="email-address" >
		</div>
		<div class="mv3">
			<label id="colour" class="db fw6 lh-copy f6">Product Colour</label>
			<input type="text" id="colour" name="colour" class="pa2 input-reset ba bg-transparent hover-bg-black hover-white w-50" type="email" name="email-address" >
      	</div>
    </fieldset>
    <div class="">
            <button class="btn btn-success btn-submit">Submit</button>
        
      {{-- <input class="b ph3 pv2 input-reset ba b--black bg-transparent grow pointer f6 dib" type="submit" value="Add Product"> --}}
    </div>
  </form>
</main>


<script type="text/javascript">


    $(document).ready(function() {
        $(".btn-submit").click(function(e){
            e.preventDefault();


            var _token = $("input[name='_token']").val();
            var name = $("input[name='name']").val();
            var description = $("textarea[name='description']").val();
            var price = $("input[name='price']").val();
            var category_id = $("input[name='category']").val();
            // var image = $("textarea[name='image']").val();
            var color = $("input[name='color']").val();
            var toked = "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjRhMTVhMGM0NzQ2ZmJlNmQxZjFjMDY2NjNhZGYzNWViNWM4MzcwM2E3ZjA0ODAwOWI3ZDliNjM4ZGRhMDBmODE0MzdkZTkzNmIxMzMxYWYzIn0.eyJhdWQiOiIyIiwianRpIjoiNGExNWEwYzQ3NDZmYmU2ZDFmMWMwNjY2M2FkZjM1ZWI1YzgzNzAzYTdmMDQ4MDA5YjdkOWI2MzhkZGEwMGY4MTQzN2RlOTM2YjEzMzFhZjMiLCJpYXQiOjE1Njc3NjIxNDksIm5iZiI6MTU2Nzc2MjE0OSwiZXhwIjoxNTk5Mzg0NTQ4LCJzdWIiOiIyIiwic2NvcGVzIjpbXX0.O949kZPaRBs2leoOBR0oT0bxLTWT6qJ66uJa5-sSQ7dbueAvzgvtob1h7-KE8ahIHSRKWF60NsDfu1vyMAf2GhQLb_6zP3l0Jb5P9Dq8a0cxQRrECExxKZzdlNfaw3H2SkWQi3qKy0zDC-qh1F92EWyu7q_qF6_zV8kNUAspDW5SuBtjU-pviX7mwnz9ulhvC_kTXsJEfU0CBCK1jbO8n8DWB28XA3FOjCn2trh6pAe3WU3f-ECcj8_mrzMOD6TDW9MmcOa9Sjg_QK7GX5aXtJ4W-QtcAGIWjmYxh-pJ1ihs3IbVwB1_-QsFaXjGSSgSZxA_9C62HCN1RcMph3L84bjHsaPwSsQi5hqQsopwTaYTnbpjTvuUbqeP8UNvzzQBGStnMx97rGybP3BVZs46zbR2kf0jwmrkDqH6vWCPTMoahYVM45TDp-UaM06HUhncmLAJ-ryWrtBtuvcyAosq8tRKd6QxawrTESHbUDAeVJ_VBZjXxOUOnzTL1obdG0Qdu64x-Utu0x-bwcltdn-jcgzFMwodRtEBmZGgfzOKdwlF29eEJVXg8mpXzAWs19hrGxi1vXrOQ8CN8ThLTsQXKlWrPHlHqyaTt6ye2YRqyvOum9iJn0kBBLBvr4KYr8MEUhEA4mysJgobSkefFi5FERBjM_ua1kExbtdg6D2UQw8";


            $.ajax({
                url: "/api/products",
                headers: {
                  Authorization: `Bearer ${toked}`
                },
                type:'POST',
                data: {_token:_token, name:name, description:description, price:price, category_id:category_id, color:color},
                success: function(data) {
                    if($.isEmptyObject(data.error)){
                        alert(data.success);
                    }else{
                        printErrorMsg(data.error);
                    }
                }
            });


        }); 


        function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }
    });
</script>