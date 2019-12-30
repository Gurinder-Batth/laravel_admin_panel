<option value="{{$value}}" @if(request()->input($field) == $value) selected @endif>{{$name}}</option>
