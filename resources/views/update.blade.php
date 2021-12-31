<x-header />

<section>
    <div class="div">
<form action="/update" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $data->id }}">
{{-- <label for="id">Enter an Roll no. that you wont to UPDATE.</label>   
<input type="int" name="id" id="id" placeholder="Enter id"><br> --}} 
<label for="id">Enter a name that you wont to update.</label>
<input type="text" name="name" id="name" placeholder="{{$data->name}}"><br>
<label for="email">Email</label>
    <input type="text" name="email" id="email" placeholder="{{$data->email}}"><br>
<label for="mobile" > Mobile no. </label>
    <input onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" type="text" maxlength="10" minlength="10" name="mobile" id="mobile" size="10" placeholder="{{$data->mobile}}"/><br><br>
    <label for="gender" >Gender:</label>
       <input type="radio" value="Male" name="gender" id="gender" {{ $data->gender == "Male" ? "checked" : ""}}> Male
        <input type="radio" value="Female" name="gender" id="gender"  {{ $data->gender == "Female" ? "checked" : ""}} > Female   
        <input type="radio" value="Other" name="gender" id="gender" {{ $data->gender == "Other" ? "checked" : ""}} > Other  <br><br>
        <label for="platform" id="platform" >Platform selection </label>
         <select name="platform" id="platform" >
             <option></option>
             <option  value="c" {{ $data->platform == "c" ? "selected" : ""}} >c</option>
             <option  value="c++" {{ $data->platform == "c++" ? "selected" : ""}} >c++</option>
             <option  value="html" {{ $data->platform == "html" ? "selected" : ""}}>html</option>
             <option  value="css" {{ $data->platform == "css" ? "selected" : ""}}>css</option>
             <option  value="php" {{ $data->platform == "php" ? "selected" : ""}}>php</option>
         </select><br><br>
         {{-- {{die($hobbies)}}; --}}
         <label>Your hobbies:</label>
         <input type="checkbox" id="h[]" name="h[]" value="Hiking" {{ in_array('Hiking',$hobbies) ? "checked" : "" }} >
         <label for="">Hiking</label>
         <input type="checkbox" id="h[]" name="h[]" value="Camping" {{ in_array('Camping',$hobbies) ? "checked" : "" }} >
         <label for="">Camping</label>
         <input type="checkbox" id="h[]" name="h[]" value="Archery" {{ in_array('Archery',$hobbies) ? "checked" : "" }} >
         <label for="">Archery</label>
         <input type="checkbox" id="h[]" name="h[]" value="Running" {{ in_array('Running',$hobbies) ? "checked" : "" }} >
         <label for="">Running</label><br><br> 
         <label> Uploaded image </label><br>
         <img src="/images/{{$data->image}}" style="width:100px;height:63px;"> <br>
         Select an image if you want to upload a new image
         <input type="file" name="image" id="image" >
         
 <input type="submit" name="submit" value="Update" ><br><br><br>
</form>
   </div>

</section>

<x-footer />