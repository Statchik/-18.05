@extends('layouts.app')
@section('filials')
<form action = "/edit/<?php echo $users[0]->id; ?>" method = "post">
    <table>
       <tr>
          <td>Name</td>
          <td>
             <input type = 'text' name = 'stud_name'
                value = '<?php echo$users[0]->name; ?>'/>
          </td>
       </tr>
       <tr>
          <td colspan = '2'>
             <input type = 'submit' value = "Update student" />
          </td>
       </tr>
    </table>

 </form>
@endsection
