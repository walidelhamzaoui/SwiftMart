<style>

input[type=email]{
/* padding: 10px; */
background-color: rgb(243, 241, 239);
border:1px solid rgb(75, 71, 71);


}
.textarea{
    background-color: rgb(243, 241, 239);
    border:1px solid rgb(75, 71, 71);
}
.textarea:focus{
    box-shadow: none;
outline: none;
background-color: rgb(243, 241, 239);

/* border: 1px solid black */
border:1px solid rgb(75, 71, 71);
}
input[type=email]:focus{
box-shadow: none;
outline: none;
/* border: 1px solid black */
border:1px solid rgb(75, 71, 71);
background-color: rgb(243, 241, 239);

}
input[type=text]{
box-shadow: none;
outline: none;
/* border: 1px solid black */
border:1px solid rgb(75, 71, 71);
background-color: rgb(243, 241, 239);

}
input[type=text]:focus{
box-shadow: none;
outline: none;
/* border: 1px solid black */
border:1px solid rgb(75, 71, 71);
background-color: rgb(243, 241, 239);

}
label{
font-size: 15px;text-transform:capitalize
}
</style>
<div class="mb-4" id="">
<div class="container d-flex justify-content-lg-center align-items-lg-center  justify-content-md-center align-items-md-center  " >
<div class="row p-2  " >
<form class="form-group lh-lg  p-lg-1 p-3 " style="border-radius:20px; border:0px solid black;box-shadow:1px 1px 5px 2px rgba(0, 0, 0, 0.18)">
<div class=" gap-3 ">
<div class="text-center" style="">
<h1>Contact Us</h1></div>
<div class=" d-flex flex-column justify-content-lg-center align-items-lg-center">
    <div class="form-group  col-lg-10 col-12  ">
<label for="">Name</label>
<input type="text" class="form-control p-2 " name="full-name"></div>
<div class="form-group col-lg-10 col-12">
<label for="">email</label>

<input type="email" class="form-control p-2" name="email">
</div></div>
<div class="form-group col-lg-10 col-12 ms-lg-4">
<label for="" class="ms-lg-4 ">subject</label>
<textarea class="form-control textarea ms-lg-4" rows="3" cols="70"></textarea>
</div>
<div class="form-group col-12  mb-2 text-center  mt-2">
<button  class="btn btn-dark mt-2  text-center w-25 fs-5">Send</button>
</div>
</div>
</form>
</div>
</div>
</div>

