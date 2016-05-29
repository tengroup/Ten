<h3><span>大家在说</span></h3>
<ul class="three">
	@foreach($users as $k)
    <li>
        <div class="userPic"><img src="{{$k->m_img}}" /></div>
        <div class="content">
            <div class="userName"><a href="javascript:;">{{$k->u_name}}</a>:</div>
            <div class="msgInfo">{!!$k->m_content!!}</div>
            <div class="times"><span>{{$k->m_time}}</span>
            </div>
        </div>
    </li> 
     @endforeach
</ul>
