    <x-header />

    <section style="background-color: #eaf2f8;">
       
    <div class="div">
    <form action="/" method="post" enctype="multipart/form-data">
        @csrf
    <label for="id">ROLL NO.</label>
    <input type="int" name="id" id="id" placeholder="Enter your ROll No."><br>
    <label for="name">NMAE</label>
    <input type="text" name="name" id="name" placeholder="Enter your name"><br>
    <label for="email">Email</label>
    <input type="text" name="email" id="email" placeholder="Enter your email"><br>
    @if ($errors->has('email'))

    <span>{{ $errors->first('email') }}</span><br>

    @endif
    <label for="mobile" > Mobile no. </label>
    <input onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" type="text" maxlength="10" minlength="10" name="mobile" id="mobile" size="10" placeholder="Enter your mobile number"/><br><br>
    <label for="gender" >Gender:</label>
       <input type="radio" value="Male" name="gender" id="gender" > Male
        <input type="radio" value="Female" name="gender" id="gender" > Female   
        <input type="radio" value="Other" name="gender" id="gender" > Other  <br><br>
        <label for="platform" id="platform" >Platform selection </label>
         <select name="platform" id="platform" >
             <option></option>
             <option  value="c">c</option>
             <option  value="c++">c++</option>
             <option  value="html">html</option>
             <option  value="css">css</option>
             <option  value="php">php</option>
         </select><br><br>

         <label>Your hobbies:</label>
         <input type="checkbox" id="h[]" name="h[]" value="Hiking">
         <label for="">Hiking</label>
         <input type="checkbox" id="h[]" name="h[]" value="Camping">
         <label for="">Camping</label>
         <input type="checkbox" id="h[]" name="h[]" value="Archery">
         <label for="">Archery</label>
         <input type="checkbox" id="h[]" name="h[]" value="Running">
         <label for="">Running</label><br><br> 
         
         Select an image
         <input type="file" name="image" id="image" >

        <input type="submit" name="submit" value="submit" ><br><br><br>

    
    </form>
</div>


    </section>

   <x-footer />

