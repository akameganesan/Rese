




 <form method='post' action='/test15'>
                @csrf
                <div class="day__size2">
                    <input type="date" name="day">
                </div>
                <div class="day__size1">
                    <input type="time" name="time">
                </div>

 <button class="contact__btn7" type="submit">予約する</button>


@if(empty($time))
@else
{{$time}}
@endif
