<x-header />

<section>
    <div class="div2">   
    



<table >
   
<tr>
  <th> ROLL NO. </th>
  <th> NMAE </th>
  <th> Email </th>
  <th> MOBILE NUMBER </th>
  <th> GENDER </th>
  <th> PLATFORM </th>
  <th> HOBBIES </th>
  <th> IMAGE </th>
  <th> UPDATE </th>
  <th> DELETE </th>
</tr>

       @foreach($members as $member)
      
        <tr>
        <td>{{$member->id}}</td>
        <td>{{$member->name}}</td>
        <td>{{$member->email}}</td>
        <td>{{$member->mobile}}</td>
        <td>{{$member->gender}}</td>
        <td>{{$member->platform}}</td>
        <td>{{$member->hobbies}}</td>
        <td>  <img src="images/{{$member->image}}" style="width:80px;height:43px;"> </td>
        <td><a href={{"update/".$member->id }}> UPDATE</a></a></td>
        <td> <a href={{"delete/".$member->id}}> DELETE</a></td> 
        {{-- <td> <a href={{"delete/".$member->id}}> <button><h5>DELETE<h5></button></a></td>      --}}
        </tr>
        @endforeach
      </table>



</div>
</section>
<x-footer />