




<!-- @
@end
if(){} -->
<!-- @if($name=='Faith')
<h1>wellcome to the cse class {{$name}}</h1>
@endif -->
<!-- @for($counter=1;$counter<10;$counter++)
<h1> {{$counter}}</h1>
@endfor -->

@foreach($listofstudent as $student )
<h2>{{$student}}</h2>
@endforeach


<h1>student registration form</h1>
<form action="">
    <input type="text" name="lastname" placeholder="enter your last name"><br><br>
    <input type="text" name="firstname" placeholder="enter your firstname"><br><br>
    <input type="text" name="email" placeholder="enter your email"><br><br>
    <input type="text" name="password" placeholder="enter your password"><br><br>
    <input type="text">
    <button type=""submit>login</button>
</form>